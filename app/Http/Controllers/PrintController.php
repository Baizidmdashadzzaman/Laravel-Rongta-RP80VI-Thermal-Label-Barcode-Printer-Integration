<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function print(Request $request)
    {
        $product_name = $request->input('product_name');
        $price_code = $request->input('price_code');
        $barcode = $request->input('barcode');


        return view('print', [
            'barcode' => $barcode,
            'product_name' => $product_name,
            'price_code' => $price_code,
        ]);
    }


}
