<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index() {
        $title = "Pendaftaran";
        return view('pendaftaran.index', ['title' => $title]);
    }
    
    public function status() {
        $title = "Status";
        return view('pendaftaran.status', ['title' => $title]);
    }
}
