<?php

namespace App\Http\Controllers;

use App\Models\Keguruan;
use Illuminate\Http\Request;

class KeguruanController extends Controller
{
    public function index()
    {
        return view('tentang.keguruan',[
            'title' => 'Keguruan',
            'personal' => Keguruan::all()
        ]
        );
    }
    public function show(Keguruan $guru)
    {
        return view('tentang.guru',$guru); 
    }
}
