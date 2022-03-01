<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    //

    public function changeLang(Request $request, $lang)
    {
        session(["lang" => $lang]);
        return back();
    }
}
