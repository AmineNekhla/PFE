<?php


namespace App\Http\Controllers;

use App\Models\Vocal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
 use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{


    public function registrer(){
        return view('registrer');
    }
    public function registrerPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $existingUser = User::where('email', $request->email)->first();  
        if ($existingUser) {
            // If the email already exists, redirect back to registration with an error message
            return redirect('/')->with('error', 'L\'utilisateur avec cet e-mail existe déjà.');
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/login')->with('status', 'Enregistré avec succès');
    }
    

    public function login(){
        return view('login');
    }


    public function loginPost(Request $request){
        $user = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        // nt2kdo wch user kyn f base donnée
        if(Auth::validate($user)){
            if(Auth::attempt($user)){
                //kt3ti l session duré kbira bch tbqa wakha nkhrjo awla ndiro regener page session ktbqa
                $request->session()->regenerate();
                return redirect('/service')->with('status', 'connexion Success');
            }

        }
        return redirect('/login')->with('error', 'Error: User does not exist or incorrect email/password');
    }
     
        public function logout(){
            Auth::logout();
            return redirect('/');
        }



    public function index(){
        return view('home');
    }

     public function test(){
        return view('test');
     }


    public function store(Request $request){
        $fichier = $request->file('fichier');
        $chemin = $fichier->store('JsonFile','public');
            Vocal::create([
             'fichier' => $chemin,
         ]);
        return redirect()->route('home')->with('status', 'Ajouté avec succès');
    }
 


    public function service(){
        return view('/service');
    }


}
