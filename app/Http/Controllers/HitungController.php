<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitungController extends Controller
{

    public function prima(Request $r)
    {

        $segitiga = [];
        for ($i = 0; $i <= 5; $i++) {
            for ($j = 0; $j <= $i; $j++) {
                array_push($segitiga, $i);
            }
        }



        $ganjil = [];
        $input = $r->input;

        for ($i = 0; $i <= 10; $i++) {
            if ($i % 2 == 1) {
                array_push($ganjil, $i);
            }
        }

        //prima
        $prima = [];
        for ($i = 1; $i <= 10; $i++) {
            $isPrima = true;
            for ($j = 2; $j <= $i / 2; $j++) {
                if ($i % $j == 0) {
                    $isPrima = false;
                    break;
                }
            }
            if ($isPrima) {
                array_push($prima, $i);
            }
        }
        return view('hitung', compact('prima', 'ganjil', 'segitiga'));
    }
}
