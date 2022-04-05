<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facades\Currency;


class CurrencyController extends Controller
{
    //

    public function change()
    {
        $currency = !empty($_GET['curr']) ? $_GET['curr'] : null;
        if($currency)
        {
            $currencies = Currency::getCurrencies();
            if(array_key_exists($currency,$currencies))
            {
                setcookie('currency',$currency,time()+3600*24*7,'/');
            }
        }

        return redirect(url()->previous());
    }
}
