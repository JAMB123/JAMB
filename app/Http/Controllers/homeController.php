<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class homeController extends Controller
{
    public function index()
    {
        $cadastro = Animal::all();
        return view('sistema.index', compact('cadastro'));
    }
}