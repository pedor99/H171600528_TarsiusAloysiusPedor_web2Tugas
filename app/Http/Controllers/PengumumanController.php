<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
use App\KategoriPengumuman;

class PengumumanController extends Controller
{
    public function index(){
    //Eloquent => ORM (Object Relational Mapping)
    $listPengumuman=Pengumuman::all(); //select*from berita

    //blade
    return view('pengumuman.index', compact('listPengumuman'));
    //return view(view: 'pengumuman.index')->with('data',$listPengumuman);
	}

	public function show($id){
		//Eloquent
		//$Pengumuman=Pengumuman::where('id',$id)->first();//select*from pengumuman whereid=$id limit 1
		$Pengumuman=Pengumuman::find($id);
		return view('Pengumuman.show', compact('Pengumuman'));
	}

	public function create(){
		$KategoriPengumuman=KategoriPengumuman::pluck('nama','id');
		return view('Pengumuman.create', compact('KategoriPengumuman'));
	}

	public function store(Request $request){
		$input= $request->all();

		Pengumuman::create($input);

		return redirect(route('pengumuman.index'));
	}
}

