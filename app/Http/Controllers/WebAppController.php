<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WebAppController extends Controller
{
    /**
     * Отображение Telegram Web App (витринка чая)
     */
    public function index()
    {
        $products = Product::take(10)->get();
        
        return view('webapp', compact('products'));
    }

    /**
     * API для получения списка товаров
     */
    public function api()
    {
        $products = Product::take(10)->get();
        
        return response()->json([
            'success' => true,
            'products' => $products,
        ]);
    }
}

