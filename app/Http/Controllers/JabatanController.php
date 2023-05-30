<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\User;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function getJabatan(Jabatan $jabatan)
    {
        // $id = auth()->user()->id;
        // $dataJabatan = $jabatan->where('user_id', $id)->get();
        $dataJabatan = $jabatan->get();

        return view('admin.jabatan.viewJabatan', compact('dataJabatan'));
    }
    public function tambah(User $user)
    {
        $fetchUser = $user->get();
        return view('admin.jabatan.tambahForm', compact('fetchUser'));
    }
    public function edit(Jabatan $jabatan, User $user)
    {
        $fetchUser = $user->get();
        return view('admin.jabatan.editForm', compact('fetchUser', 'jabatan'));
    }
    public function saveJabatan(Jabatan $jabatan, Request $jabatanRequest)
    {
        $data = $jabatanRequest->all();
        //dd($data);
        $jabatan->create($data);
        return redirect(route('jabatan.getJabatan'))->with('success', 'Data jabatan berhasil ditambahkan');
    }
    public function deleteJabatan(Jabatan $jabatan)
    {
        $jabatan->delete();
        return back()->with(['success' => 'Data berhasil dihapus']);
    }
    public function updateJabatan(Jabatan $jabatan, Request $jabatanRequest)
    {
        $data = $jabatanRequest->all();
        $jabatan->update($data);
        return redirect(route('jabatan.getJabatan'))->with('success', 'Data jabatan berhasil diubah');
    }
}
