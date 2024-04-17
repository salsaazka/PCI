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

    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }

    public function signIn()
    {
         return view('auth.login');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ],
        [
            'email.exists' => "email ini tidak tersedia"
        ]);

        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
            return redirect('/general-trading/admin');
        } else {
            return redirect()->back()->with('fail', 'Gagal login, silahkan periksa dan coba lagi!');
        }
    }

    public function signUp()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate = ([
            'name' => 'required|min:3|max:50',
            'email' => 'required',
            'password' => 'required',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'address' => $request->address,
            'division' => $request->division,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/sign-in')->with('success', 'Selamat anda berhasil registrasi');
    }

    public function user()
    {
        return view('admin.create.user');
    }

    public function createUser(Request $request)
    {
        $request->validate = ([
            'name' => 'required|min:3|max:50',
            'email' => 'required',
            'password' => 'required',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'no_telp' => $request->no_telp,
            'address' => $request->address,
            'division' => $request->division,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('user.index')->with('success', 'Selamat, anda berhasil membuat akun!');
    }

    public function editUser($id)
    {
        $dataUser = User::where('id', $id)->first();
        return view('admin.edit.user',compact('dataUser'));
    }

    public function updateUser(Request $request, $id)
    {
        $request->validate = ([
            'name' => 'required|min:3|max:50',
            'email' => 'required',
        ]);
        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'no_telp' => $request->no_telp,
            'address' => $request->address,
            'division' => $request->division,
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
        return redirect('/sign-in');
    }
}
