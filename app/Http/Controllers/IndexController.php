<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonal;
use App\Team;
use App\Sliders;
use App\Recent;
use App\Abouts;
use App\Services;

class IndexController extends Controller
{
    public function slider(){
        $sliders=Sliders::get();
        $sliders=json_decode(json_encode($sliders));

        $about=Abouts::get();
        $about=json_decode(json_encode($about));

        $tests=Testimonal::get();
        $tests=json_decode(json_encode($tests));

        $services=Services::get();
        $services=json_decode(json_encode($services));

        $teams=Team::get();
        $teams=json_decode(json_encode($teams));

        $works=Recent::get();
        $works=json_decode(json_encode($works));

        return view('index')->with(compact('sliders','about','tests','services','teams','works'));
    }
}
