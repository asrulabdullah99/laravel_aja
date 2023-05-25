<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kehadiran;
use Illuminate\Http\Request;

class KehadiranController extends Controller
{
    public function getKehadiran(Kehadiran $kehadiran)
    {
        $dataKehadiran = $kehadiran->paginate(10);

        return view('admin.kehadiran.viewKehadiran', compact('dataKehadiran'));
    }
    public function tambah(User $user)
    {
        $fetchUser = $user->get();
        return view('admin.kehadiran.tambahForm', compact('fetchUser'));
    }
    public function edit(Kehadiran $kehadiran, User $user)
    {
        $fetchUser = $user->get();
        return view('admin.kehadiran.editForm', compact('fetchUser', 'kehadiran'));
    }
    public function saveKehadiran(Kehadiran $kehadiran, Request $kehadiranRequest)
    {
        $data = $kehadiranRequest->all();
        //dd($data);
        $kehadiran->create($data);
        return redirect(route('kehadiran.getKehadiran'))->with('success', 'Data kehadiran berhasil ditambahkan');
    }
    public function deleteKehadiran(Kehadiran $kehadiran)
    {
        $kehadiran->delete();
        return back()->with(['success' => 'Data berhasil dihapus']);
    }
    public function updateKehadiran(Kehadiran $kehadiran, Request $kehadiranRequest)
    {
        $data = $kehadiranRequest->all();
        $kehadiran->update($data);
        return redirect(route('kehadiran.getKehadiran'))->with('success', 'Data kehadiran berhasil diubah');
    }
}
