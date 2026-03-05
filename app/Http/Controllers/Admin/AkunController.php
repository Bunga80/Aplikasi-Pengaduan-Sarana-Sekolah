<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AkunController extends Controller
{
    public function index()
    {
       /** @var Admin $admin */
$admin = Auth::guard('admin')->user();

        return view('admin.akun', compact('admin'));
    }

    public function updateProfile(Request $request)
    {
         /** @var Admin $admin */
    $admin = Auth::guard('admin')->user();

        $request->validate([
            'nama' => 'required|string',
            'username' => 'required|string|max:50|unique:admins,username,' . $admin->id,
        ]);

        $admin->update([
            'nama' => $request->nama,
            'username' => $request->username,
        ]);

        return back()->with('success', 'Profil berhasil diperbarui');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password_lama' => 'required',
            'password_baru' => 'required|min:6|confirmed',
        ]);

         /** @var Admin $admin */
    $admin = Auth::guard('admin')->user();

        if (!Hash::check($request->password_lama, $admin->password)) {
            return back()->withErrors([
                'password_lama' => 'Password lama tidak sesuai',
            ]);
        }

        $admin->update([
            'password' => Hash::make($request->password_baru),
        ]);

        return back()->with('success', 'Password berhasil diperbarui');
    }
}
