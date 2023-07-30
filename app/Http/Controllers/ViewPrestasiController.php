<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;


class ViewPrestasiController extends Controller
{
    public function index()
    {
        return view('tentang.prestasi',[
            'title' => 'Perstasi',
            'prestasis' => Prestasi::all()
        ]);
    }
    public function show(Prestasi $lomba)
    {
        return view('tentang.lomba',$lomba); 
    }
}
