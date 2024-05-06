<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Organisasi;

class PagesController extends Controller
{
    public function index(){
        $profile = Profile::get();
        return view('welcome')->with(compact('profile'));
    }
    public function anggota(){
        $anggota = Organisasi::get();
        return view('anggota')->with(compact('anggota'));
    }
    public function foto(){
        // $profile = Profile::get();
        return view('foto');
    }
}
