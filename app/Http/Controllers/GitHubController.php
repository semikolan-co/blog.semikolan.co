<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Exception;
use Socialite;
use App\Models\User;

class GitHubController extends Controller
{

    public function gitRedirect()
    {
        return Socialite::driver('github')->redirect();
    }
       

    public function gitCallback()
    {
        try {
     
            $user = Socialite::driver('github')->user();
      
            $searchUser = User::where('github_id', $user->id)->orWhere('email',$user->email)->first();
      
            if($searchUser){
      
                Auth::login($searchUser);
     
                return redirect('/dash');
      
            }else{
                $gitUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'github_id'=> $user->id,
                    'password' => encrypt('gitpwd059')
                ]);
     
                Auth::login($gitUser);
      
                return redirect('/dash');
            }
     
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}