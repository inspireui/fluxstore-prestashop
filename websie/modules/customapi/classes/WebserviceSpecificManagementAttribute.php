<?php


class WebserviceSpecificManagementAttribute implements WebserviceSpecificManagementInterface
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

    public function getAttributes($id_product) {
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(
            '
            SELECT  `id_product_attribute`
            FROM `' . _DB_PREFIX_ . 'product_attribute`
            WHERE `id_product` = ' . $id_product . '
            ');
    }

    public function getStockQuantity($id_product_attribute) {
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(
            '
            SELECT  `quantity`
            FROM `' . _DB_PREFIX_ . 'stock_available`
            WHERE `id_product_attribute` = ' . $id_product_attribute . '
            LIMIT 1');
    }


    public function manage()

    {

        $objects_products = array();
        
        $objects_products['empty'] = new Combination();

        $id_product = $this->wsObject->urlFragments['id_product'];

        $combinations = $this->getAttributes($id_product);

        foreach($combinations as $combination) {
            $combination = new Combination($combination['id_product_attribute']);
            $quantity = $this->getStockQuantity($combination->id) ?? [];
            $combination->quantity = count($quantity) > 0 ? $quantity[0]['quantity'] : '0';
            $objects_products[] = $combination;
        }
        $this->_resourceConfiguration = $objects_products['empty']->getWebserviceParameters();

        $this->wsObject->setFieldsToDisplay();

        $this->output .= $this->objOutput->getContent($objects_products, null, $this->wsObject->fieldsToDisplay, $this->wsObject->depth, WebserviceOutputBuilder::VIEW_LIST, false);
    }
}