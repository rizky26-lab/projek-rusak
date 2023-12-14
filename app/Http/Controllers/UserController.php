<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Users::all();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = Users::all();
        return view('user.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Users $users)
    {
        //
    }

    public function loginAuth(Request $request) 
    {
        $request->validate([
            'email' => 'required|email:dms',
            'password' => 'required',
        ], [
            'email.required' => 'email harus diisi!',
            'email.email' => 'Email tidak valid!',
            'password.required' => 'Password wajib diisi!',
            'email.required' => 'Password harus diisi huruf dan karakter tanpa spasi!',
        ]);

        $users = $request->only(['email', 'password']);
        if (Auth::attempt($users)) {
            return redirect()->route('home');
        } else {
            return redirect()->back()->with('failed', 'Proses login gagal harap masukkan data yang valid!');
        }
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('logout', 'Anda berhasil logout!');
    }

    public function dashboard()
    {
        $totalAdmin = Auth::users->role('admin');
        if ($totalAdmin) 
    return view('dashboard', compact('jumlahUser'));
    }

}
