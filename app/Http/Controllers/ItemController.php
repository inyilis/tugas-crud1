<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemModel;

class ItemController extends Controller
{
    public function index(){
    	$items = ItemModel::get_all();
    	// dd($items);
    	return view('item.index', compact('items'));
    }

    public function create(){
    	return view('item.form');
    }

    public function store(Request $req){
    	// dd($req->all());
    	$data = $req->all();
    	unset($data["_token"]);
    	$item = ItemModel::save($data);
    	// dd($item);
    	if($item){
    		return redirect('/items');
    	}
    }
}
