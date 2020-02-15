<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use App\Http\Requests\PasswordRequest;
use App\Persona;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        //dd($req);
        $persona = Persona::where('email', auth()->user()->email)->first();

        return view('profile.edit')->with('persona', $persona);
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        auth()->user()->update($request->all());

        return back()->withStatus(__('Profile successfully updated.'));
    }

    public function updatePicture(Request $request){
        $request->validate([
            'foto_url' => 'required|image|mimes:jpeg,png,jpg|max:4096'
        ]);


        $imageName = time().'.'.$request->foto_url->getClientOriginalExtension();
        $request->foto_url->move(public_path('images/avatar/'), $imageName);

        $persona = Persona::where('email', auth()->user()->email)->first();
        $persona->foto_url = $imageName;
        $persona->save();
        return back()->with('success_upload','success');
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Password successfully updated.'));
    }
}
