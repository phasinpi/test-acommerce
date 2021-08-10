<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $path = public_path() . "/data/list.json";
        $datas = json_decode(file_get_contents($path), true);
        $datas = collect($datas);
        // foreach ($datas as $data) {
        //     return $data['image_url'];
        // }
        return view('home', ['datas' => $datas]);
    }
}
