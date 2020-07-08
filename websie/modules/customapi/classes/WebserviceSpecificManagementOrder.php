<?php


class WebserviceSpecificManagementOrder implements WebserviceSpecificManagementInterface
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

    function insertOrder($order, $products)
    {
        $order->id_cart = 'default';
        $order->total_paid = number_format((float) ($order->total_shipping + $order->total_products), 2, '.', '');
        $result = Db::getInstance()->execute(
            'INSERT INTO `' . _DB_PREFIX_ . 'orders` (id_carrier, id_lang, id_customer, id_cart, id_currency, id_address_delivery, id_address_invoice, current_state, payment, invoice_date, delivery_date, date_add, date_upd, total_shipping, total_shipping_tax_incl, total_shipping_tax_excl, total_products, reference, total_paid, total_paid_tax_incl, total_paid_tax_excl)
            VALUES (' . $order->id_carrier . ', ' . $order->id_lang . ', ' . $order->id_customer . ', ' . $order->id_cart . ', ' . $order->id_currency . ', ' . $order->id_address_delivery . ', ' . $order->id_address_invoice . ', ' . $order->current_state . ', "' . $order->payment . '", "' . $order->invoice_date . '", "' . $order->delivery_date . '", "' . $order->date_add . '", "' . $order->date_upd . '", ' . $order->total_shipping . ', ' . $order->total_shipping . ', ' . $order->total_shipping . ', ' . $order->total_products . ', "' . Order::generateReference() . '", ' . $order->total_paid . ', ' . $order->total_paid . ', ' . $order->total_paid . ')'
        );
        if ($result == true) {
            $order->id = Db::getInstance()->Insert_ID();
        }

        for ($i = 0; $i < count($products) - 1; $i++) {
            $name = ($products[$i]->name)['1'];

            Db::getInstance()->execute(
                'INSERT INTO `' . _DB_PREFIX_ . 'order_detail` (id_order, id_shop, product_id, product_name, product_weight, tax_name, product_quantity, product_price, product_attribute_id)
                VALUES (' . $order->id . ', "default", ' . $products[$i]->id . ', "' . $name . '", ' . $products[$i]->weight . ', "default", ' . $products[$i]->quantity . ', ' . $products[$i]->price . ', ' . ($products[$i]->id_supplier != '-1' ? $products[$i]->id_supplier : NULL) . ')'
            );
        }

        for ($i = 0; $i < count($products) - 1; $i++) {
            $quantity = $products[$i]->quantity;
            Db::getInstance()->execute(
                'UPDATE `' . _DB_PREFIX_ . 'stock_available` 
                    SET `quantity` = `quantity` - '. $quantity .'
                    WHERE `id_product` = ' . $products[$i]->id . ' ' . ($products[$i]->id_supplier != '-1' ? ' AND `id_product_attribute` = ' . $products[$i]->id_supplier . ' ' : '') . ' '
            );
        }

        return $order;
    }

    public function manage()

    {
        $objects_products = array();
        $objects_products['empty'] = new Order();

        $order = new Order();
        $order->id_carrier = $this->wsObject->urlFragments['id_carrier'];
        $order->id_lang = $this->wsObject->urlFragments['id_lang'];
        $order->id_customer = $this->wsObject->urlFragments['id_customer'];
        $order->id_currency = $this->wsObject->urlFragments['id_currency'];
        $order->id_address_delivery = $this->wsObject->urlFragments['id_address_delivery'];
        $order->id_address_invoice = $this->wsObject->urlFragments['id_address_invoice'];
        $order->current_state = $this->wsObject->urlFragments['current_state'];
        $order->payment = $this->wsObject->urlFragments['payment'];
        $order->invoice_date = "0000-00-00";
        $order->delivery_date = "0000-00-00";
        $order->date_add = date("Y-m-d H:i:s");
        $order->date_upd = date("Y-m-d H:i:s");
        /*
            more detail
        */
        $order->module = $this->wsObject->urlFragments['module'];
        $order->total_shipping = $this->wsObject->urlFragments['total_shipping'];
        $order->total_products = $this->wsObject->urlFragments['total_products'];
        $matches = json_decode($this->wsObject->urlFragments['products']);
        $quantity = json_decode($this->wsObject->urlFragments['quantity']);
        $attribute = json_decode($this->wsObject->urlFragments['attribute']);
        $products = array();
        $products['empty'] = new Product();

        for ($i = 0; $i < count($matches); $i++) {
            $product = new Product($matches[$i]);
            $product->quantity = $quantity[$i];
            $product->id_supplier = $attribute[$i];
            if ($attribute[$i] != '-1') {
                $combination = new Combination($attribute[$i]);
                $product->price = number_format((float) ($product->price + $combination->price), 2, '.', '');
            }
            $products[] = $product;
        }
        $objects_products[] = $this->insertOrder($order, $products);
        $this->_resourceConfiguration = $objects_products['empty']->getWebserviceParameters();
        // $this->_resourceConfiguration = $products['empty']->getWebserviceParameters();
        $this->wsObject->setFieldsToDisplay();

        $this->output .= $this->objOutput->getContent($objects_products, null, $this->wsObject->fieldsToDisplay, $this->wsObject->depth, WebserviceOutputBuilder::VIEW_LIST, false);
    }
}
