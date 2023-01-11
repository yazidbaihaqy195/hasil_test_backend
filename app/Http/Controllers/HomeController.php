<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data_table;

class HomeController extends Controller
{
    function HomeIndex(){
        return view('Home');
    }
    function DataInsert (Request $request){

        $name = $request->input ('name');
        $job_id = $request->input ('jobs_id');
        $phone = $request->input ('phone');
        $email = $request->input ('email');
        $year = $request->input ('year');
        $skills = $request->input ('skilss');

        $isInsertSuccress = Data_table::insert(['name'=>$name,
                                                'job_id'=>$job_id,
                                                'phone'=>$phone,
                                                'email'=>$email,
                                                'year'=>$year,
                                                'skills'=>$skills]);

    if ($isInsertSuccress) echo '<h1>Berhasil</h1>';
    else echo '<h1>Insert Failed</h1>';
    }
}