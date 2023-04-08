<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function fetchJabatan(Jabatan $jabatan)
    {
        $view = $jabatan->paginate(5);
        return view('jabatan', compact($view));
    }
}
