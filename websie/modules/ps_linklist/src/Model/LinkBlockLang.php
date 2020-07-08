<?php
/**
 * 2007-2018 PrestaShop.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
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
 * @copyright 2007-2018 PrestaShop SA
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\Module\LinkList\Model;

use DataLangCore;

/**
 * Class LinkBlockLang.
 */
class LinkBlockLang extends DataLangCore
{
    // Don't replace domain in init() with $this->domain for translation parsing
    protected $domain = 'Modules.Linklist.Shop';

    protected $keys = array('id_link_block');

    protected $fieldsToUpdate = array('name');

    protected function init()
    {
        $this->fieldNames = array(
            'name' => array(
                md5('Products') => $this->translator->trans('Products', array(), 'Modules.Linklist.Shop', $this->locale),
                md5('Our company') => $this->translator->trans('Our company', array(), 'Modules.Linklist.Shop', $this->locale),
            ),
        );
    }
}
