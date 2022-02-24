<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MailList;

class MailListController  extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();



     
            $email = $request->input("email");
      
                MailList::create([
                    "email" => $email,
              
                ]);

            
       

        return redirect()->route('welcome');
    }
}
