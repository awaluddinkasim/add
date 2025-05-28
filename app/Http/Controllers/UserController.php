<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index', [
            'users' => User::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'no_telp' => 'required|numeric',
        ]);

        User::create($data);

        return back()->with('success', 'User berhasil ditambahkan');
    }

    public function edit(User $user)
    {
        return view('user.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required|numeric',
        ]);

        $user->update($data);

        return back()->with('success', 'User berhasil diubah');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('success', 'User berhasil dihapus');
    }
}
