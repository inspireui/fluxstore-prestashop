<?php
/**
 * 2007-2018 PrestaShop
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
 * @author PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 **/

class Addons
{
    protected static $is_addons_up = true;

    public static function addonsRequest($request, $params = array())
    {
        if (!self::$is_addons_up) {
            return false;
        }

        $post_query_data = array(
            'version' => '1.7.3.0',
            'iso_lang' => Tools::strtolower(isset($params['iso_lang']) ? $params['iso_lang'] : Context::getContext()->language->iso_code),
            'iso_code' => Tools::strtolower(isset($params['iso_country']) ? $params['iso_country'] : Country::getIsoById(Configuration::get('PS_COUNTRY_DEFAULT'))),
            'shop_url' => isset($params['shop_url']) ? $params['shop_url'] : Tools::getShopDomain(),
            'mail' => isset($params['email']) ? $params['email'] : Configuration::get('PS_SHOP_EMAIL'),
            'format' => isset($params['format']) ? $params['format'] : 'xml',
        );
        if (isset($params['source'])) {
            $post_query_data['source'] = $params['source'];
        }

        $post_data = http_build_query($post_query_data);

        $protocols = array('https');
        $end_point = 'api.addons.prestashop.com';

        switch ($request) {
            case 'categories':
            case 'native':
            case 'partner':
            case 'service':
            case 'must-have':
            case 'must-have-themes':
                $protocols[] = 'http';
                $post_data .= sprintf(
                    '&method=listing&action=%s',
                    $request
                );
                break;
            case 'native_all':
                $protocols[] = 'http';
                $post_data .= '&method=listing&action=native&iso_code=all';
                break;
            case 'customer':
                $post_data .= '&method=listing&action=customer&username='.urlencode(trim(Context::getContext()->cookie->username_addons))
                           .'&password='.urlencode(trim(Context::getContext()->cookie->password_addons));
                break;
            case 'customer_themes':
                $post_data .= '&method=listing&action=customer-themes&username='.urlencode(trim(Context::getContext()->cookie->username_addons))
                           .'&password='.urlencode(trim(Context::getContext()->cookie->password_addons));
                break;
            case 'check_customer':
                $post_data .= '&method=check_customer&username='.urlencode($params['username_addons']).'&password='.urlencode($params['password_addons']);
                break;
            case 'check_module':
                $post_data .= '&method=check&module_name='.urlencode($params['module_name']).'&module_key='.urlencode($params['module_key']);
                break;
            case 'module':
                $post_data .= '&method=module&id_module='.urlencode($params['id_module']);
                if (isset($params['username_addons']) && isset($params['password_addons'])) {
                    $post_data .= '&username='.urlencode($params['username_addons']).'&password='.urlencode($params['password_addons']);
                } else {
                    $protocols[] = 'http';
                }
                break;
            case 'hosted_module':
                $post_data .= '&method=module&id_module='.urlencode((int)$params['id_module']).'&username='.urlencode($params['hosted_email'])
                           .'&password='.urlencode($params['password_addons'])
                           .'&shop_url='.urlencode(isset($params['shop_url']) ? $params['shop_url'] : Tools::getShopDomain())
                           .'&mail='.urlencode(isset($params['email']) ? $params['email'] : Configuration::get('PS_SHOP_EMAIL'));
                $protocols[] = 'https';
                break;
            case 'install-modules':
                $protocols[] = 'http';
                $post_data .= '&method=listing&action=install-modules';
                $post_data .= defined('_PS_HOST_MODE_') ? '-od' : '';
                break;
            default:
                return false;
        }

        $context = stream_context_create(array(
            'http' => array(
                'method'  => 'POST',
                'content' => $post_data,
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'timeout' => 5,
            )
        ));

        foreach ($protocols as $protocol) {
            if ($content = Tools::file_get_contents($protocol.'://'.$end_point, false, $context)) {
                return $content;
            }
        }

        self::$is_addons_up = false;

        return false;
    }
}
