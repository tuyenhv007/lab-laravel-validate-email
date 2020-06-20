<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function validationEmail(Request $request)
    {
        // lay du lieu email tu url
        $email = $request->email;
        $isEmail = true;

        // kiem tra validate email theo ham mac dinh thu vien PHP
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $isEmail = false;
        }
        return view('index', compact('isEmail'));
    }
}
