<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }
    public function about(){
        echo "NIM : 1941720190";
        echo "Nama : Brian Adam Bhagaskara";
    }
    public function articles($id){
        echo "Halaman Artikel".$id;
    }
}
