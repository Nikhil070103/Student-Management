<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    //
    public function index(){
        return Teachers::all();
    }

    public function add(){
        $item=new Teachers();
        $item->name='Nikhil';
        $item->save();
        
        return 'Added Successfully';
    }

    public function show($id){
        $item=Teachers::findOrFail($id);
        return $item;
    }

    public function update($id){
        $item=Teachers::findOrFail($id);
        $item->name='Gulshan';
        $item->update();

        return 'Update Succesfully';
    }

    public function delete($id){
        $item=Teachers::findOrFail($id);
        $item->delete();

        return 'Deleted Succesfully';
    }
}
