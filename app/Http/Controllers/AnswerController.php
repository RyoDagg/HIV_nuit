<?php

namespace App\Http\Controllers;

use App\Models\Answers;


use Illuminate\Http\Request;

class AnswerController extends Controller
{
    //
    public function store(Request $request)
    {
        $data = $request->all();
        

        
        if (isset($data['uid'])) {
            $uid = $data['uid'];
            unset($data['uid']);
            unset($data['_token']);
            foreach ($data as $key => $value) {
               
                Answers::create([
                    "user_id" => $uid,
                    "question_id" => $key,
                    "textAnsr" => $value,
                ]);
            }
        }

        return redirect()->route('result');




    }
}
