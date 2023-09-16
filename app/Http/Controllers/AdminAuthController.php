<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class AdminAuthController extends Controller
{
    public function adminDashboard(){
        return view('adminDashboard');
    }

    public function usersTable(){
        $users = User::all();
        return view('server.pages.usersTable', compact('users'));
    }

            // *****Generate PDF*****
            public function generatePDF(){
                $users = User::get();
                $data = [
                    'title' => 'Users List',
                    'date' => date('m/d/Y'),
                    'users' => $users
                ];
    
    
                $pdf = PDF::loadView('server.pages.myPDF', $data);
    
                return $pdf->download('user_list.pdf');
            }
            // *****End Generate PDF*****
}
