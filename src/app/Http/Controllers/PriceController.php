<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;

class PriceController extends Controller
{

    public function index()
    {
        $prices = Price::latest()
            ->paginate(50);

        return view('prices.index', [
            'prices' => $prices
        ]);
    }

}
