<?php

namespace App\Http\Controllers;
use App\produit;
use Illuminate\Http\Request;
use DB;
class PagesController extends Controller
{
    public function panier () {
        return view('pages.panier');
            }
    public function home () {
                return view('pages.home');
            }
    public function produit () {
        $produits = DB::table('produits')
                 ->get();
                return view('pages.produit')->with('produits', $produits);
            }        
    public function user () {
                return view('pages.user');
            }
}
