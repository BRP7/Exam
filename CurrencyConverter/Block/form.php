<?php

class CurrencyConverter_Block_Form extends Core_Block_Template{

public function getCurrency(){
    return Mage::getModel("currencyconverter/currencyconverter")->load($this->getRequest()->getParams("id",0));
}

}

