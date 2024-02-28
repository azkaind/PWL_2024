<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return "Selamat Datang";
    }

    public function about() {
        return "Nama Saya Azka Kasmito Putra dan NIM saya 2241720216";
    }

    public function articles($id) {
        return  "Halaman Artikel dengan Id " . $id;
    }
}