<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Moonstoast\Math\BigNumber;
use App\Models\ShortUrl;

class ShortUrlController extends Controller
{
    public function index(){

        return view('shorten');
    }

    public function store (Request $request) {

        $validatedData = $request->validate([
            'url' => 'required|url'
        
        ]);
    }
}
