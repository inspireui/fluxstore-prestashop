<?php


class WebserviceSpecificManagementProduct implements WebserviceSpecificManagementInterface
{

    /** @var WebserviceOutputBuilder */

    protected $objOutput;

    protected $output;



    /** @var WebserviceRequest */

    protected $wsObject;



    public function setUrlSegment($segments)

    {

        $this->urlSegment = $segments;

        return $this;
    }



    public function getUrlSegment()

    {

        return $this->urlSegment;
    }

    public function getWsObject()

    {

        return $this->wsObject;
    }



    public function getObjectOutput()

    {

        return $this->objOutput;
    }



    /**

     * This must be return a string with specific values as WebserviceRequest expects.

     *

     * @return string

     */

    public function getContent()

    {

        return $this->objOutput->getObjectRender()->overrideContent($this->output);
    }



    public function setWsObject(WebserviceRequestCore $obj)

    {

        $this->wsObject = $obj;

        return $this;
    }



    /**

     * @param WebserviceOutputBuilderCore $obj

     * @return WebserviceSpecificManagementInterface

     */

    public function setObjectOutput(WebserviceOutputBuilderCore $obj)

    {

        $this->objOutput = $obj;

        return $this;
    }

    public function getProducts($id_category, $limit, $name) {
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(
            '
            SELECT DISTINCT p.`id_product`
            FROM `' . _DB_PREFIX_ . 'product` p
            LEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON pl.`id_product` = p.`id_product`
            WHERE 1 ' . (!empty($id_category) ? ' AND p.`id_category_default` IN (' . $id_category . ')' : '') . ' ' . (!empty($name) ? ' AND pl.`name` LIKE \'%' . pSQL($name) . '%\'
            OR p.`ean13` LIKE \'%' . pSQL($name) . '%\'
            OR p.`isbn` LIKE \'%' . pSQL($name) . '%\'
            OR p.`upc` LIKE \'%' . pSQL($name) . '%\'
            OR p.`reference` LIKE \'%' . pSQL($name) . '%\'
            OR p.`supplier_reference` LIKE \'%' . pSQL($name) . '%\'
            OR EXISTS(SELECT * FROM `' . _DB_PREFIX_ . 'product_supplier` sp WHERE sp.`id_product` = p.`id_product` AND `product_supplier_reference` LIKE \'%' . pSQL($name) . '%\')' : '') . '
            LIMIT '.$limit);
    }

    public function getStockQuantity($id_product) {
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(
            '
            SELECT  `quantity`
            FROM `' . _DB_PREFIX_ . 'stock_available`
            WHERE `id_product` = ' . $id_product . '
            LIMIT 1');
    }


    public function manage()

    {

        $objects_products = array();
        
        $objects_products['empty'] = new Product();
        $id_category = $this->wsObject->urlFragments['id_category'] ?? null;
        $limit = $this->wsObject->urlFragments['limit'] ?? '0,10';
        $name = $this->wsObject->urlFragments['name'] ?? null;
        $products = $this->getProducts($id_category, $limit, $name);
        foreach($products as $product) {
            $pro = new Product($product['id_product']);
            $quantity = $this->getStockQuantity($product['id_product']) ?? [];
            $pro->quantity = count($quantity) > 0 ? $quantity[0]['quantity'] : '0';
            $objects_products[] = $pro;
        }
        $this->_resourceConfiguration = $objects_products['empty']->getWebserviceParameters();

        $this->wsObject->setFieldsToDisplay();

        $this->output .= $this->objOutput->getContent($objects_products, null, $this->wsObject->fieldsToDisplay, $this->wsObject->depth, WebserviceOutputBuilder::VIEW_LIST, false);
    }
}