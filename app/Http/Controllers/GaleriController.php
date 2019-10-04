<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;

class GaleriController extends Controller
{
    public function index(){
    //Eloquent => ORM (Object Relational Mapping)
    $listGaleri=Galeri::all(); //select*from berita

    //blade
    return view('galeri.index', compact('listGaleri'));
    //return view(view: 'galeri.index')->with('data',$listGaleri);
	}
}
