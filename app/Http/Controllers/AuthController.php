<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        $dataUser =  User::all();
        return view('admin.pages.user', compact('dataUser'));
    }

    // public function signIn()
    // {
    //      return view('Auth.sign-in');
    // }

    public function auth(Request $request)
    {
        $request->validate([
            'username' => 'required|exists:users,username',
            'password' => 'required'
        ],
        [
            'username.exists' => "Username ini tidak tersedia"
        ]);

        $user = $request->only('username', 'password');
        if (Auth::attempt($user)) {
            return redirect()->route('dashboard');
        } else {
            return redirect('/')->with('fail', 'Gagal login, silahkan periksa dan coba lagi!');
        }
    }

    // public function signUp()
    // {
    //     return view('Auth.sign-up');
    // }

    public function register(Request $request)
    {
        $request->validate = ([
            'name' => 'required|min:3|max:50',
            'username' => 'required|min:3|max:50',
            'email' => 'required',
            'password' => 'required',
        ]);
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/')->with('success', 'Selamat anda berhasil registrasi');
    }

    public function user()
    {
        return view('admin.create.user');
    }

    public function createUser(Request $request)
    {
        $request->validate = ([
            'name' => 'required|min:3|max:50',
            'username' => 'required|min:3|max:50',
            'email' => 'required',
            'password' => 'required',
        ]);
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'role' => $request->role,
            'no_telp' => $request->no_telp,
            'address' => $request->address,
            'division' => $request->division,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('user.index')->with('success', 'Selamat, anda berhasil membuat akun!');
    }

    public function edit($id)
    {
        $dataUser = User::where('id', $id)->first();
        // return view(,compact('dataUser'));
    }
    public function updateUser(Request $request, $id)
    {
        $request->validate = ([
            'name' => 'required|min:3|max:50',
            'username' => 'required|min:3|max:50',
            'email' => 'required',
            'password' => 'required',
        ]);
        User::where('id', $id)->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('user.index')->with('success', 'Selamat, anda berhasil membuat akun!');
    }

    public function deleteUser($id)
    {
        //
        User::where('id', $id)->delete();
        return redirect()->route('user.index')->with('delete', 'Data buku berhasil dihapus');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
