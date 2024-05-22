<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;
class TrainController extends Controller
{
    public function index(){
        $trains = Train::all();
        //$trains= Train::select('azienda','stazione_di_partenza','stazione_di_arrivo','orario_di_partenza','numero_carrozze')->get();
        return view('home', compact('trains'));
    }
}
