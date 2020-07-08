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

<h2>{l s='Last connections' mod='psgdpr'}</h2>
<br>
<table id="summary-tab" width="100%">
    <tr>
        <th class="header" valign="middle">{l s='Origin request' mod='psgdpr'}</th>
        <th class="header" valign="middle">{l s='Page viewed' mod='psgdpr'}</th>
        <th class="header" valign="middle">{l s='Time on the page' mod='psgdpr'}</th>
        <th class="header" valign="middle">{l s='IP address' mod='psgdpr'}</th>
        <th class="header" valign="middle">{l s='Date' mod='psgdpr'}</th>
    </tr>

    {if count($connections) >= 1}
    {foreach from=$connections item=connection}
    <tr>
        <td class="center white">{$connection['http_referer']|escape:'html':'UTF-8'}</td>
        <td class="center white">{$connection['pages']|escape:'html':'UTF-8'}</td>
        <td class="center white">{$connection['time']|escape:'html':'UTF-8'}</td>
        <td class="center white">{$connection['ipaddress']|escape:'html':'UTF-8'}</td>
        <td class="center white">{$connection['date_add']|escape:'html':'UTF-8'}</td>
    </tr>
    {/foreach}
    {else}
    <tr>
        <td colspan="5" class="center white">{l s='No connections' mod='psgdpr'}</td>
    </tr>
    {/if}
</table>
