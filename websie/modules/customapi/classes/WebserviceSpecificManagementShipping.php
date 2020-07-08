<?php


class WebserviceSpecificManagementShipping implements WebserviceSpecificManagementInterface
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

    
    
    protected function getPackageShippingCostFromModule(Carrier $carrier, $shipping_cost, $products)
    {
        if (!$carrier->shipping_external) {
            return $shipping_cost;
        }

        /** @var CarrierModule $module */
        $module = Module::getInstanceByName($carrier->external_module_name);

        if (!Validate::isLoadedObject($module)) {
            return false;
        }

        if (property_exists($module, 'id_carrier')) {
            $module->id_carrier = $carrier->id;
        }

        if (!$carrier->need_range) {
            return $module->getOrderShippingCostExternal($this);
        }

        if (method_exists($module, 'getPackageShippingCost')) {
            $shipping_cost = $module->getPackageShippingCost($this, $shipping_cost, $products);
        } else {
            $shipping_cost = $module->getOrderShippingCost($this, $shipping_cost);
        }

        return $shipping_cost;
    }

    function getPackageShippingCost($id_carrier = null, $id_zone = null, $product_list = null, $use_tax = true)
    {
        $carrier = new Carrier($id_carrier);
    
        // Start with shipping cost at 0
        $shipping_cost = 0;
       

        $shipping_method = $carrier->getShippingMethod();

        // Get shipping cost using correct method
        if ($carrier->range_behavior) {

            if (($shipping_method == Carrier::SHIPPING_METHOD_WEIGHT && !Carrier::checkDeliveryPriceByWeight($carrier->id, $this->getTotalWeightProducts($product_list), (int) $id_zone))
                || (
                    $shipping_method == Carrier::SHIPPING_METHOD_PRICE && !Carrier::checkDeliveryPriceByPrice($carrier->id, $this->getTotalProducts($product_list), $id_zone)
                )) {
                $shipping_cost += 0;
            } else {
                if ($shipping_method == Carrier::SHIPPING_METHOD_WEIGHT) {
                    $shipping_cost += $carrier->getDeliveryPriceByWeight($this->getTotalWeightProducts($product_list), $id_zone);
                } else { // by price
                    $shipping_cost += $carrier->getDeliveryPriceByPrice($this->getTotalProducts($product_list), $id_zone);
                }
            }
        } else {
            if ($shipping_method == Carrier::SHIPPING_METHOD_WEIGHT) {
                $shipping_cost += $carrier->getDeliveryPriceByWeight($this->getTotalWeightProducts($product_list), $id_zone);
            } else {
                $shipping_cost += $carrier->getDeliveryPriceByPrice($this->getTotalProducts($product_list), $id_zone);
            }
        }

        //handling charges
        $configuration = Configuration::getMultiple(array(
            'PS_SHIPPING_FREE_PRICE',
            'PS_SHIPPING_HANDLING',
            'PS_SHIPPING_METHOD',
            'PS_SHIPPING_FREE_WEIGHT',
        ));

        if (isset($configuration['PS_SHIPPING_HANDLING']) && $carrier->shipping_handling) {
            $shipping_cost += (float) $configuration['PS_SHIPPING_HANDLING'];
        }

        // Additional Shipping Cost per product
        foreach ($product_list as $product) {
            if (!$product->is_virtual) {
                $shipping_cost += $product->additional_shipping_cost*$product->quantity;
            }
        }

        // $shipping_cost = Tools::convertPrice($shipping_cost, Currency::getCurrencyInstance((int) $this->id_currency));

        //get external shipping cost from module
        //$shipping_cost = $this->getPackageShippingCostFromModule($carrier, $shipping_cost, $products);

        // if (Configuration::get('PS_ATCP_SHIPWRAP')) {
        //     if (!$use_tax) {
        //         // With PS_ATCP_SHIPWRAP, we deduce the pre-tax price from the post-tax
        //         // price. This is on purpose and required in Germany.
        //         $shipping_cost /= (1 + $this->getAverageProductsTaxRate());
        //     }
        // } else {
        //     // Apply tax
        //     if ($use_tax && isset($carrier_tax)) {
        //         $shipping_cost *= 1 + ($carrier_tax / 100);
        //     }
        // }

        $shipping_cost = (float) Tools::ps_round((float) $shipping_cost, 2);

        return $shipping_cost;
    }

    function getTotalProducts($products) {
        $price = 0;
        foreach($products as $product) {
            $price = $price + $product->price * $product->quantity;
        }
        return $price;
    }

    function getTotalPriceProducts($products) {
        $price = 0;
        foreach($products as $product) {
            $price = $price + $product->price * $product->quantity;
        }
        return $price;
    }

    function getTotalWeightProducts($products) {
        $weight = 0;
        foreach($products as $product) {
            $weight = $weight + $product->weight * $product->quantity;
        }
        return $weight;
    }


    public function manage()

    {

        $objects_products = array();

        $objects_products['empty'] = new Carrier();

        $matches = json_decode($this->wsObject->urlFragments['products']);
        $quantity = json_decode($this->wsObject->urlFragments['quantity']);
        $id_lang = $this->wsObject->urlFragments['id_lang'] ?? 1;

        $products = array();

        for($i = 0; $i < count($matches); $i++) {
            $product = new Product($matches[$i]);
            $product->quantity = $quantity[$i];
            $products[] = $product;
        }
        
        $carriers_list = Carrier::getCarriers($id_lang);

        foreach ($carriers_list as $list) {
            $carrier = new Carrier($list['id_carrier']);
            $carrier->shipping_external = $this->getPackageShippingCost($list['id_carrier'], $this->wsObject->urlFragments['zone'], $products);
            $objects_products[] = $carrier;
        }

        $this->_resourceConfiguration = $objects_products['empty']->getWebserviceParameters();

        $this->wsObject->setFieldsToDisplay();

        $this->output .= $this->objOutput->getContent($objects_products, null, $this->wsObject->fieldsToDisplay, $this->wsObject->depth, WebserviceOutputBuilder::VIEW_LIST, false);
    }
}