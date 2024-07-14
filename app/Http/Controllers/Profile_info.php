<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;

class Profile_info extends Controller
{
    public function create(){
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email:rfc,dns', 'unique:profiles'],
            'phone_number' => ['required', 'string', 'max:15']
        ]);
        Profile::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone_number' => request('phone_number')
        ]);
        return redirect()->route('read');
    } 
    public function read(){
        return view('read', ['profiles' => Profile::all() ]);
    }
    public function update_index(){
    return view('update.index', ['profiles' => Profile::all()]);
        
    }
    public function show_edit($id){
        $profile = Profile::find($id);
        return view('update.edit_profile', ['profile' => $profile ]);
    }
    public function update($id){
        request()->validate([
            'name' => ['required','string','max:255'],
            'phone_number' => ['required','string','max:15']
        ]);
    
        $profile = Profile::findOrFail($id);
    
        $profile->update([
            'name' => request('name'),
            'phone_number' => request('phone_number')
        ]);
        
        return redirect()->route('update');
    }
    public function delete($id){
        $profile = Profile::find($id);
        $profile->delete();
        return redirect()->route('read');
    }

}