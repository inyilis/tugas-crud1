<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jawabanModel;
use App\Models\pertanyaanModel;

class jawabanController extends Controller
{
    public function index($id){
        $pertanyaan = pertanyaanModel::find_by_id($id);
        return view('jawaban.index', compact('pertanyaan'));
    }

    public function store(Request $req){
    	$data = $req->all();
    	unset($data["_token"]);
    	$data_jawaban = jawabanModel::save($data);
    	if($data_jawaban){
    		return redirect('/pertanyaan');
    	}
    }
}
