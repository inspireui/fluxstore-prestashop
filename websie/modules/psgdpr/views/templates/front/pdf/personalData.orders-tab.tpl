{**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

<h2>{l s='Orders' mod='psgdpr'}</h2>
<br>
<table id="summary-tab" width="100%">
    <tr>
        <th class="header" valign="middle">{l s='Reference' mod='psgdpr'}</th>
        <th class="header" valign="middle">{l s='Payment' mod='psgdpr'}</th>
        <th class="header" valign="middle">{l s='Order state' mod='psgdpr'}</th>
        <th class="header" valign="middle">{l s='Total paid' mod='psgdpr'}</th>
        <th class="header" valign="middle">{l s='Date' mod='psgdpr'}</th>
    </tr>

    {if count($orders) >= 1}
    {foreach from=$orders item=order}
    <tr class="separator">
        <td class="center white"><b>{$order['reference']|escape:'html':'UTF-8'}</b></td>
        <td class="center white">{$order['payment']|escape:'html':'UTF-8'}</td>
        <td class="center white">{$order['order_state']|escape:'html':'UTF-8'}</td>
        <td class="center white">{$order['total_paid_tax_incl']|escape:'html':'UTF-8'}</td>
        <td class="center white">{$order['date_add']|escape:'html':'UTF-8'}</td>
    </tr>
    <tr>
        <td colspan="3" class="center white"><b>{l s='Product(s) in the order' mod='psgdpr'} :</b></td>
        <td colspan="2" class="center white"></td>
    </tr>
    <tr>
        <td class="center white"></td>
        <td colspan="4" class="center white">
            <table id="total-tab" width="100%">
                <tr>
                    <th class="header" valign="middle"><i>{l s='Reference' mod='psgdpr'}</i></th>
                    <th class="header" valign="middle"><i>{l s='Name' mod='psgdpr'}</i></th>
                    <th class="header" valign="middle"><i>{l s='Quantity' mod='psgdpr'}</i></th>
                </tr>
                {foreach from=$order['products'] item=product}
                <tr>
                    <td class="center white">{$product['product_reference']|escape:'html':'UTF-8'}</td>
                    <td class="center white">{$product['product_name']|escape:'html':'UTF-8'}</td>
                    <td class="center white">{$product['product_quantity']|escape:'html':'UTF-8'}</td>
                </tr>
                {/foreach}
            </table>
        </td>
    </tr>
    {/foreach}
    {else}
    <tr>
        <td colspan="5" class="center white">{l s='No orders' mod='psgdpr'}</td>
    </tr>
    {/if}
</table>
