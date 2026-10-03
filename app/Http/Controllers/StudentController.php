<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //

    // public function index(){
    //     return 'Hello Controller';
    // }

    // public function aboutus(){
    //     return 'Controller';
    // }

    public function addData(){

        $item = new Student();
        $item-> name= 'Renu';
        $item-> email= 'renu@gmail.com';
        $item-> age= 25;
        $item-> date_of_birth= '1967-02-05';
        $item-> gender= 'f';
        $item-> user_id= '100';
        $item->save();

        // DB::table('students')->insert([
        //     'name'=>'Nikhil Agarwal',
        //     'email'=>'nikhilagrawal@007@gmail.com',
        //     'age'=>'23',
        //     'date_of_birth'=>'2003-01-07',
        //     'gender'=>'m',
        //     'user_id'=>'100'

        // ]);

        return 'added Sucessfully';
    }

     public function getData(){
        $items = DB::table('students')
        // ->select('id','name','email')
        // ->where('id','=', 102)
        // ->get();
        // ->count();
        ->avg('age');
        return $items;
     }

     public function updataData(){
        DB::table('students')->where('id', 100)->update([
            'name'=> 'Gulshan',
        ]);

        return 'updated Sucessfully';
     }

}
