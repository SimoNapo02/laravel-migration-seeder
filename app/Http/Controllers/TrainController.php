<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index(){
        //lista completa treni
        $alltrains = Train::all();
        //treni con partenza odierna
        $today = date('Y-m-d');
        $today_trains = Train::where('giorno_di_partenza', '=' , $today)->get();
        //ritorno entrambe le collection
        return view('welcome', compact('alltrains', 'today_trains'));
    }
}