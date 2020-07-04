<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pertanyaanModel;
use App\Models\jawabanModel;

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

    public function show($id){
        $pertanyaan = pertanyaanModel::find_by_id($id);
        $jawaban    = jawabanModel::find_by_id($id);
        return view('pertanyaan.show', compact('pertanyaan'), compact('jawaban'));
    }

    public function edit($id){
        $pertanyaan = pertanyaanModel::find_by_id($id);
        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update($id, Request $req){
        $pertanyaan = pertanyaanModel::update($id, $req->all());
        return redirect('/pertanyaan');
    }

    public function destroy($id){
        $delPertanyaan  = pertanyaanModel::destroy($id);
        $delJawaban     = jawabanModel::destroy($id);
        return redirect('/pertanyaan');
    }
}
