<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jawabanModel;

class jawabanController extends Controller
{
    public function index($pertanyaan_id){
    	$jawaban = jawabanModel::get_all();
    	$id_pertanyaan = $pertanyaan_id;
    	return view('jawaban.index', compact('jawaban'), compact('id_pertanyaan'));
    }

    public function store(Request $req, $pertanyaan_id){
    	$data = $req->all();
    	unset($data["_token"]);
    	$data_jawaban = jawabanModel::save($data);
    	if($data_jawaban){
    		return redirect('/jawaban/{$pertanyaan_id}');
    	}
    }
}
