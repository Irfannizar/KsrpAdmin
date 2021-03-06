<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use App\Event;
use App\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

 
class AuthController extends Controller
{
    public function index()
    {
        return view('login1');
    }  
 
    public function register()
    {
        return view('register');
    }
     
    public function postLogin(Request $request)
    {
        request()->validate([
        
        ]);
 
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            
            return redirect()->intended("admin");
        }
        return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
 
    public function postRegister(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        ]);
         
        $data = $request->all();
 
        $check = $this->create($data);
       
        return Redirect::to("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
     
    public function dashboard()
    {
 
      if(Auth::check()){
        return view('dashboard');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }
 
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'budget_allocate' => $data['budget_allocate'],
        //'password' => Hash::make($data['password'])
        'password' => Hash::make($data['password'])
      ]);
    }
     
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }

    public function checkid(){
      return view('payment.id_check');
    }

    public function postCheck(Request $request)
    {
        request()->validate([
        
        ]);
 
        $credentials = $request->only('email');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            
            return redirect()->intended("admin");
        }
        return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
}
