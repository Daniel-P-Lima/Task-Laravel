<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    $message = "Olá, esta é minha primeira página Blade!";
    return view('home', ['message' => $message]);
}

}
