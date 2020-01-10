<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;

class ProfilesController extends Controller
{




  public function show(User $user)
  {
      $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
      
      return view('profiles.show', compact('user', 'follows'));

  }



  public function edit(User $user)
  {

    if (auth()->user() !== null && auth()->user()->id === $user->id)
    {
      return view('profiles.edit', compact('user'));
    }
    else
    return view('profiles.show', compact('user'));
  }

  public function update($profile, Request $request)
  {


    $this->validate($request,[
      'title' => 'required',
      'description' => 'required',
      'url' => 'required',
    ]);



    Profile::find($profile)->update($request->all());



    return redirect("profile/" . $profile);
  }


}
