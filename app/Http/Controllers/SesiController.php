<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SesiController extends Controller
{
    function index(){
        return view('Dashboard.dashboard-pengurus.Login.login');
    }

    function login(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ],[
            'username.required' => 'Username must be at least',
            'password.required' => 'Password must be at least',
        ]);

        $infologin =[
            'username' =>$request->username,
            'password' =>$request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'Pengurus'){
                return redirect('/dashboardPengurus');
            }elseif(Auth::user()->role == 'Warga'){
                return redirect('/dashboardWarga');
            }elseif(Auth::user()->role == 'Petugas'){
                return redirect('/dashboardPetugas');
            }elseif(Auth::user()->role == 'UMKM'){
                return redirect('/dashboardUMKM');
            }
        }else{
            return redirect('')->withErrors('Username dan Password Tidak Sesuai!')->withInput();
        }
    }
    function logout(){
        Auth::logout();
        return redirect('');
    }
    function register(){
        return view('Dashboard.dashboard-pengurus.Login.register');
    }
function create(Request $request){
    $request->validate([
        'name' => 'required|unique:users,name',
        'email' => 'required|unique:users,email',
        'username' => 'required|unique:users,username',
        'password' => 'required|min:6', // contoh: minimal 6 karakter
    ],[
        'name.required' => 'Name must be at least',
        'name.unique' => 'Nama sudah tersedia',
        'email.required' => 'Email must be at least',
        'email.unique' => 'Email sudah tersedia',
        'username.required' => 'Username must be at least',
        'username.unique' => 'Username sudah tersedia',
        'password.required' => 'Password must be at least',
        'password.min' => 'Password must be at least 6 characters',
    ]);

    // Buat user
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'username' => $request->username,
        'password' => Hash::make($request->password),
    ]);

    // Buat profile dengan user_id yang sesuai
    Profile::create([
        'user_id' => $user->id,
    ]);

    return redirect('/')->with('success', 'Akun Berhasil Dibuat');
    }

    /**
     * Show the form for verifying and updating user information.
     */
    public function verify()
    {
        $user = auth()->user();

        return view('Dashboard.dashboard-warga.Verify', compact('user'));
    }
    /**
     * Update user information after verification.
     */
    public function update(Request $request)
    {
        $user = auth()->user();

        // Validasi input data
        $request->validate([
            'password' => 'required|min:6',
            'username' => 'required|unique:users,username,'.$user->id,
            'email' => 'required|email|unique:users,email,'.$user->id,
        ]);

        // Update informasi akun
        $user->update([
            'password' => Hash::make($request->password),
            'username' => $request->username,
            'email' => $request->email,
        ]);

        return redirect('/dashboardWarga')->with('success', 'Informasi akun berhasil diperbarui.');
    }
}
