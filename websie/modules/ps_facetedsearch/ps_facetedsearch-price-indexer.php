<?php

require_once __DIR__ . '/../../config/config.inc.php';
require_once __DIR__ . '/ps_facetedsearch.php';

if (substr(Tools::encrypt('ps_facetedsearch/index'), 0, 10) != Tools::getValue('token') || !Module::isInstalled('ps_facetedsearch')) {
    die('Bad token');
}

if (!Tools::getValue('ajax')) {
    // Case of nothing to do but showing a message (1)
    if (Tools::getValue('return_message') !== false) {
        echo '1';
        die();
    }

    if (Tools::usingSecureMode()) {
        $domain = Tools::getShopDomainSsl(true);
    } else {
        $domain = Tools::getShopDomain(true);
    }
    // Return a content without waiting the end of index execution
    header('Location: ' . $domain . __PS_BASE_URI__ . 'modules/ps_facetedsearch/ps_facetedsearch-price-indexer.php?token=' . Tools::getValue('token') . '&return_message=' . (int) Tools::getValue('cursor'));
    flush();
}

Shop::setContext(Shop::CONTEXT_ALL);

$module = new Ps_Facetedsearch();
if (Tools::getValue('full')) {
    echo $module->fullPricesIndexProcess((int) Tools::getValue('cursor'), (int) Tools::getValue('ajax'), true);
} else {
    echo $module->pricesIndexProcess((int) Tools::getValue('cursor'), (int) Tools::getValue('ajax'));
}
