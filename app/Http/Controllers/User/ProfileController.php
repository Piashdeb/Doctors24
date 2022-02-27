<?php

namespace App\Http\Controllers\User;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user.profile');
    }

    public function profile_setting()
    {
        return view('user.profile_setting');
    }

    public function update_profile(Request $request)
    {
        $profile = User::whereId(auth()->user()->id)->first();

        $imageName = $profile->imageName;

        if ($request->hasFile('image')) {

            $path = public_path('uploads/profile/'.$imageName);

            if (file_exists($path)) {
                unlink($path);
            }

            $extension = $request->image->extension();
            $imageName = time().'.'.$extension;

            $request->image->move(public_path('uploads/profile'), $imageName);
        }

        $profile->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'imageName' => $imageName,
            'contactNo' => $request->contactNo,
        ]);

        return back();
    }
}
