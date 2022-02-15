<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Results;
use App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use LDAP\Result;

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
            $qtype = $request->input("qtype");
            unset($data['qtype']);
            unset($data['favorableAnswer']);
            unset($data['secondPossibility']);
            $i = 0;
            $h = 0;
            $hq = 0;
            $m = 0;
            $mq = 0;
            $s = 0;
            $sq = 0;
            $b = 0;
            $bq = 0;
            $i = 0;

            foreach ($data as $key => $value) {

                if ($qtype[$i] == 'Heart') {
                    $hq = $hq + 10;
                    if ($value ==  $favorableAnswer[$i])
                        $h = $h + 10;
                    elseif ($value ==  $secondPossibility[$i])
                        $h = $h + 5;
                }

                if ($qtype[$i] == 'Body') {
                    $bq = $bq + 10;
                    if ($value ==  $favorableAnswer[$i])
                        $b = $b + 10;
                    elseif ($value ==  $secondPossibility[$i])
                        $b = $b + 5;
                }

                if ($qtype[$i] == 'Soul') {
                    $sq = $sq + 10;
                    if ($value ==  $favorableAnswer[$i])
                        $s = $s + 10;
                    elseif ($value ==  $secondPossibility[$i])
                        $s = $s + 5;
                }

                if ($qtype[$i] == 'Mind') {
                    $sq = $sq + 10;
                    if ($value ==  $favorableAnswer[$i])
                        $s = $s + 10;
                    elseif ($value ==  $secondPossibility[$i])
                        $s = $s + 5;
                }

           

                Answers::create([
                    "user_id" => $uid,
                    "question_id" => $key,
                    "textAnsr" => $value,
                    "favAnsr" => $favorableAnswer[$i],
                    "lessFavAnsr" => $secondPossibility[$i],
                    "qtype" => $qtype[$i],
                ]);

                $i++;
            }
        }
        Results::create([
            "user_id" => $uid,
            "hTotal" => $hq,
            "mTotal" => $mq,
            "sTotal" => $sq,
            "bTotal" => $bq,
            "hearts" => $h,
            "minds"  => $m,
            "souls"  => $s,
            "bodies" => $b
        ]);

        $results = Results::inRandomOrder()->take(6)->get();

        $user = $uid();

        return redirect()->route('result')->with(['result'=>$results, 'user' => $user]);;
        // return $favorableAnswer;
    }
}
