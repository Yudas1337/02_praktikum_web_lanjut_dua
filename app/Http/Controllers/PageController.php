<?php

namespace App\Http\Controllers;


class PageController extends Controller
{
    public function index()
    {
        return "Selamat Datang";
    }

    public function about()
    {
        return "Nama: Yudas Malabi <br> Nim: 2041720054";
    }

    public function articles($id)
    {
        return "Halaman Artikel dengan Id $id";
    }
}
