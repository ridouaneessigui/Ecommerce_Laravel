<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function panier () {
        return view('pages.panier');
            }
    public function home () {
                return view('pages.home');
            }
    public function produit () {
                return view('pages.produit');
            }        
    public function user () {
                return view('pages.user');
            }
}
