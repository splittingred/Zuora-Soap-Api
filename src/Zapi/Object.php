<?php namespace OlivierBarbier\ZApi;

abstract class Object
{
    const TYPE_NAMESPACE = 'http://object.api.zuora.com/';

    protected $zType = 'zObject';

    protected $_data = array();

    /**
     * @param $name string
     * @param $value mixed
     */
    public function __set($name, $value)
    {
        $this->_data[$name] = $value;
    }

    public function &__get($name)
    {
        return $this->_data[$name];
    }

    public function __isset($name)
    {
        return isset($this->_data[$name]);
    }

    public function getSoapVar()
    {
        return new SoapVar(
            (array) $this->_data,
            SOAP_ENC_OBJECT,
            $this->zType,
            self::TYPE_NAMESPACE
        );
    }
}