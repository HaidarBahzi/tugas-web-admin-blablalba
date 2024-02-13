<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekstrakulikuler;

class EkstraController extends Controller
{
    public function index()
    {
        return view('ekstrakulikuler', [
            "title" => "Ekstrakulikuler",
            "ekstra" => Ekstrakulikuler::all()
        ]);
    }
}
