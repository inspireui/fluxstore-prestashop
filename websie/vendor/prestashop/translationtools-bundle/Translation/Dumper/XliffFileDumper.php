<?php

/**
 * 2007-2016 PrestaShop.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2015 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\TranslationToolsBundle\Translation\Dumper;

use Locale;
use Symfony\Component\Translation\Dumper\XliffFileDumper as BaseXliffFileDumper;
use Symfony\Component\Translation\MessageCatalogue;
use Symfony\Component\Filesystem\Filesystem;
use PrestaShop\TranslationToolsBundle\Translation\Builder\XliffBuilder;
use PrestaShop\TranslationToolsBundle\Translation\Helper\DomainHelper;
use PrestaShop\TranslationToolsBundle\Configuration;

class XliffFileDumper extends BaseXliffFileDumper
{
    protected $relativePathTemplate = '%locale%/%domain%.%extension%';

    /**
     * Gets the relative file path using the template.
     *
     * @param string $domain The domain
     * @param string $locale The locale
     *
     * @return string The relative file path
     */
    private function getRelativePath($domain, $locale)
    {
        return strtr($this->relativePathTemplate, array(
            '%locale%' => $locale,
            '%domain%' => $domain,
            '%extension%' => $this->getExtension(),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function dump(MessageCatalogue $messages, $options = array())
    {
        if (!array_key_exists('path', $options)) {
            throw new \InvalidArgumentException('The file dumper needs a path option.');
        }

        $fs = new Filesystem();
        // save a file for each domain
        foreach ($messages->getDomains() as $domain) {
            $domainPath = DomainHelper::getExportPath($domain);
            $fullpath = sprintf('%s/%s', $options['path'], $this->getRelativePath($domainPath, $messages->getLocale()));
            $directory = dirname($fullpath);
            if (!file_exists($directory) && !@mkdir($directory, 0777, true)) {
                throw new \RuntimeException(sprintf('Unable to create directory "%s".', $directory));
            }

            $fs->dumpFile($fullpath, $this->formatCatalogue($messages, $domain, $options));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function formatCatalogue(MessageCatalogue $messages, $domain, array $options = array())
    {
        if (array_key_exists('default_locale', $options)) {
            $defaultLocale = $options['default_locale'];
        } else {
            $defaultLocale = Locale::getDefault();
        }

        $xliffBuilder = new XliffBuilder();
        $xliffBuilder->setVersion('1.2');

        foreach ($messages->all($domain) as $source => $target) {
            if (!empty($source)) {
                $metadata = $messages->getMetadata($source, $domain);

                /**
                 * Handle original file information from xliff file.
                 * This is needed if at least part of the catalogue was read from xliff files
                 */
                if (is_array($metadata['file']) && !empty($metadata['file']['original'])) {
                    $metadata['file'] = $metadata['file']['original'];
                }

                $metadata['file'] = Configuration::getRelativePath(
                    $metadata['file'],
                    !empty($options['root_dir']) ? realpath($options['root_dir']) : false
                );

                $xliffBuilder->addFile($metadata['file'], $defaultLocale, $messages->getLocale());
                $xliffBuilder->addTransUnit($metadata['file'], $source, $target, $this->getNote($metadata));
            }
        }

        return html_entity_decode($xliffBuilder->build()->saveXML());
    }

    /**
     * @param array $transMetadata
     *
     * @return string
     */
    private function getNote($transMetadata)
    {
        $notes = [];

        if (!empty($transMetadata['file'])) {

            if (isset($transMetadata['line'])) {
                $notes['line'] = 'Line: '.$transMetadata['line'];
            }

            if (isset($transMetadata['comment'])) {
                $notes['comment'] = 'Comment: '.$transMetadata['comment'];
            }
        }

        if (empty($notes) && isset($transMetadata['notes'][0]['content'])) {
            // use notes loaded from xliff file
            return $transMetadata['notes'][0]['content'];
        }

        return implode(PHP_EOL, $notes);
    }

    /**
     * {@inheritdoc}
     */
    public function getExtension()
    {
        return 'xlf';
    }
}
