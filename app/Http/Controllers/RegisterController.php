<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;


class RegisterController extends Controller
{
    public function create()
{
    return view('register.create');
}

public function store(Request $request)
{
    $data = $request->validate([
        'nama' => 'required|string',
        'kelas' => 'required|string',
    ]);

    Register::create($data);

    return redirect()->route('register.create')->with('success', 'Data berhasil disimpan!');
}
}
