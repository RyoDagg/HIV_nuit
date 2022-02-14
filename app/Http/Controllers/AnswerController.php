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
            $favorableAnswer = $request->input("favorableAnswer");
            $secondPossibility = $request->input("secondPossibility");
            unset($data['favorableAnswer']);
            unset($data['secondPossibility']);
            $i = 0;
            foreach ($data as $key => $value) {

                Answers::create([
                    "user_id" => $uid,
                    "question_id" => $key,
                    "textAnsr" => $value,
                    "favAnsr" => $favorableAnswer[$i],
                    "lessFavAnsr" => $secondPossibility[$i],
                ]);
                $i++;
            }
        }

        return redirect()->route('result');
        // return $favorableAnswer;
    }
}
