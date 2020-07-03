<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pertanyaanModel;

class pertanyaanController extends Controller
{
    public function index(){
    	$pertanyaan = pertanyaanModel::get_all();
    	return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create(){
    	return view('pertanyaan.form');
    }

    public function store(Request $req){
    	$data = $req->all();
    	unset($data["_token"]);
    	$data_pertanyaan = pertanyaanModel::save($data);
    	if($data_pertanyaan){
    		return redirect('/pertanyaan');
    	}
    }
}
