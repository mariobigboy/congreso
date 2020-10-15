<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;

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
        
        $rules = [
            'foto_url' => 'required|image|mimes:jpeg,png,jpg|max:4096',
        ];
        $messages = [
            'required' => 'Debe seleccionar una imagen',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        $validator->validate();

        /*$request->validate([
            'foto_url' => 'required|image|mimes:jpeg,png,jpg|max:4096',
        ]);*/
        

        if($validator->fails()){
            return back()->withErrors($validator, 'picture');
        }


        $img_name = time().'.'.$request->foto_url->getClientOriginalExtension();
        $img_principal = Image::make($request->foto_url);
        $img_principal->save('images/avatar/'.$img_name);

        $img_principal->resize(50,50);
        $img_principal->save('images/avatar/thumbs/'.$img_name);

        $persona = Persona::where('email', auth()->user()->email)->first();
        $persona->foto_url = $img_name;
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
