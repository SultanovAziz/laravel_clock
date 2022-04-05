<?php

namespace App\Services\Currency;

class CurrencyService
{
    protected array $currencies;
    protected array $currency;
    protected string $baseCurrency;
    protected string $defaultCurrency;


    public function __construct(string $baseCurrency, array $currencies, $defaultCurrency)
    {
        $this->currencies = $currencies;
        $this->baseCurrency = $baseCurrency;
        $this->defaultCurrency = $defaultCurrency;
    }

    public function run($tpl)
    {
        $this->currency = $this->getCurrency($this->currencies);
        echo $this->getHtml($tpl);
    }

    public function getCurrencies()
    {
        return $this->currencies;
    }

    public function getCurrency($currencies)
    {
        if(isset($_COOKIE['currency']) && array_key_exists($_COOKIE['currency'], $currencies)){
            $key = $_COOKIE['currency'];
        }else{
            $key = key($currencies);
        }
        $currency['child'] = $currencies[$key];
        $currency['code'] = $key;
        $currency['symbol'] = __('currency.'.$key);
        return $currency;
    }


    /**
     * Конвертация  валюты
     * @param $amount
     * @param null $fromCurrencyCode
     * @return float
     */
    public function convertToDefault($amount, $fromCurrencyCode = null){
        if($fromCurrencyCode == $this->baseCurrency)
            return $amount;
        else if(!$fromCurrencyCode){
            $fromCurrencyCode = $this->defaultCurrency;
        }
        $rate = $this->currencies[$this->baseCurrency][$fromCurrencyCode];
        return round($amount * $rate,2);
    }



    /**
     * Конвертирует и возвращает отформатированную строку со знаком валюты
     * @param $amount
     * @return string
     */
    public function convertAndFormatToDefault($amount, $fromCurrency = null){
        if($fromCurrency == $this->baseCurrency)
            return number_format($amount).__('currency.'.$fromCurrency);
        else if(!$fromCurrency) {
            $fromCurrency = $this->defaultCurrency;
        }
        return number_format($this->convertToDefault($amount, $fromCurrency), 0, ',', ' ').__('currency.'.$fromCurrency);
    }

    /**
     * Возврат шаблона выборки валюты
     * @param $tpl
     * @return false|string
     */
    public function getHtml($tpl)
    {
        ob_start();
        require_once $tpl;
        return ob_get_clean();
    }


}
