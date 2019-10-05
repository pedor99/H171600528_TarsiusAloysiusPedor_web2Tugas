<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use\App\KategoriGaleri;

class GaleriController extends Controller
{
    public function index(){
    //Eloquent => ORM (Object Relational Mapping)
    $listGaleri=Galeri::all(); //select*from berita

    //blade
    return view('galeri.index', compact('listGaleri'));
    //return view(view: 'galeri.index')->with('data',$listGaleri);
	}

	public function show($id){
		//Eloquent
		//$Galeri=Galeri::where('id',$id)->first();//select*from galeri whereid=$id limit 1
		$Galeri=Galeri::find($id);
		return view('Galeri.show', compact('Galeri'));
	}

	public function create(){
		$KategoriGaleri=KategoriGaleri::pluck('nama','id');
		return view('galeri.create', compact('KategoriGaleri'));
	}

	public function store(Request $request){
		$input= $request->all();

		Galeri::create($input);

		return redirect(route('galeri.index'));
	}
}
