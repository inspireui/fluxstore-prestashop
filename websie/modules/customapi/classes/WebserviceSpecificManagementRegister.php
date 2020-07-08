<?php

class WebserviceSpecificManagementRegister implements WebserviceSpecificManagementInterface
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

    function getModules() {
        $hook_payment = 'Payment';
        if (Db::getInstance()->getValue('SELECT `id_hook` FROM `' . _DB_PREFIX_ . 'hook` WHERE `name` = \'paymentOptions\'')) {
            $hook_payment = 'paymentOptions';
        }

        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(
            'SELECT DISTINCT m.`id_module`, h.`id_hook`, m.`name`, hm.`position`
        FROM `' . _DB_PREFIX_ . 'module` m
        LEFT JOIN `' . _DB_PREFIX_ . 'hook_module` hm ON hm.`id_module` = m.`id_module`
        LEFT JOIN `' . _DB_PREFIX_ . 'hook` h ON hm.`id_hook` = h.`id_hook`
        WHERE h.`name` = \'' . pSQL($hook_payment) . '\'
        GROUP BY hm.id_hook, hm.id_module
        ORDER BY hm.`position`, m.`name` DESC'
        );
    }

    function getModuleDisplayName($module)
    {
        // Config file
        $config_file = _PS_MODULE_DIR_ . $module . '/config.xml';
        // For "en" iso code, we keep the default config.xml name
        if (!file_exists($config_file)) {
            return 'Module ' . ucfirst($module);
        }

        // Load config.xml
        libxml_use_internal_errors(true);
        $xml_module = @simplexml_load_file($config_file);
        if (!$xml_module) {
            return 'Module ' . ucfirst($module);
        }

        // Return Display Name
        return Module::configXmlStringFormat($xml_module->displayName);
    }

    public function manage()

    {

        $objects_products = array();
        $objects_products['empty'] = new Customer();
        $customer = new Customer();
        $customer->email = $this->wsObject->urlFragments['email'];
        $customer->id_gender = $this->wsObject->urlFragments['id_gender'] ?? '1';
        $customer->firstname = $this->wsObject->urlFragments['firstname'];
        $customer->lastname = $this->wsObject->urlFragments['lastname'];
        $customer->setWsPasswd($this->wsObject->urlFragments['passwd']);
        $customer->id = null;
        $check = new Customer();
        $check->getByEmail($this->wsObject->urlFragments['email']);
        if (!$check->id) {
            $customer->add();
            $objects_products[] = $customer;
        }
        $this->_resourceConfiguration = $objects_products['empty']->getWebserviceParameters();

        $this->wsObject->setFieldsToDisplay();

        $this->output .= $this->objOutput->getContent($objects_products, null, $this->wsObject->fieldsToDisplay, $this->wsObject->depth, WebserviceOutputBuilder::VIEW_LIST, false);
    }
}