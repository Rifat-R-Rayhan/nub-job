<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use PDF;

class UserAuthController extends Controller
{
    public function login(){
        return view("auth.user.login");
    }

    public function registration(){
        return view("auth.user.registration");
    }


    // *****User registration*****
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
            'image'=>'required'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = uniqid().'_'.$user->name;
            $file->move('uploads/user', $filename);
            $user->image = $filename;
        }

        $result = $user->save();
        if($result){
            return back()->with('success', 'Congrats!!! You have registered successfully.');
        }
        else{
            return back()->with('fail', 'Error!!! Something wrong.');
        }
    }
    // *****End User registration*****


    // *****Check user validation for login*****
    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            }
            else{
                return back()->with('fail', 'Data not match.');
            }
        }
        else{
            return back()->with('fail', 'Data not match.');
        }
    }
    // *****End Check user validation for login*****


    // *****User dashboard with session id*****
    public function dashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('userDashboard', compact('data'));
    }
    // *****End User dashboard*****

        
    // *****User profile*****
    public function profile(){
        $data = User::where('id', '=', Session::get('loginId'))->first();
        return view('client.pages.user_profile', compact('data'));
    }
    // *****End User profile*****


    // *****Logout*****
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
    // *****End logout*****


        // *****Generate PDF*****
        public function generatePDF(){
            $users = User::get();
            $data = [
                'title' => 'My Profile Data',
                'date' => date('m/d/Y'),
                'users' => $users
            ];


            $pdf = PDF::loadView('client.pages.myPDF', $data);

            return $pdf->download('data.pdf');
        }
        // *****End Generate PDF*****


        public function contactUs(){
            $data = User::where('id', '=', Session::get('loginId'))->first();
            return view("client.pages.contact", compact('data'));
        }

        public function jobDetail(){
            $data = User::where('id', '=', Session::get('loginId'))->first();
            return view("client.pages.job_detail", compact('data'));
        }

        public function jobPost(){
            $data = User::where('id', '=', Session::get('loginId'))->first();
            return view("client.pages.job_post", compact('data'));
        }
}