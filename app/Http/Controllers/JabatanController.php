<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function getJabatan(Jabatan $jabatan)
    {
        $dataJabatan = $jabatan->paginate(10);
        return view('admin.jabatan.viewJabatan', compact('dataJabatan'));
    }
}
