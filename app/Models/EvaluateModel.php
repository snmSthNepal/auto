<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;

class EvaluateModel extends Model
{
    public function newEvaluation($request){
    if (Auth::user()) {
	    $userID = Auth::user()->id;
    }else {
	    $userID = 0;
    }
    $expectedPrice = $request->input('expectedPrice');
        DB::table('evaluate')->insert([
            'userID' => $userID,
            'name' => $request->input('name'),
            'bikeName' => $request->input('bikeName'),
            'bikeNum' => $request->input('bikeNum'),
            'state' => $request->input('state'),
            'model' => $request->input('model'),
            'email' => $request->input('email'),
            'model' => $request->input('model'),
            'phone' => $request->input('phone'),
            'expectedPrice' => $expectedPrice,
            'comment' => $request->input('comment'),
            'date' => $request->input('date'),
            'status' => "pending",
            'showroomID' => $request->input('showroomID')
        ]);
    }

    //get all evaluate detail for super admin
    function getEvaluateDetail(){
        $evaluateData = DB::table('evaluate')
                        ->get();
        return $evaluateData;
    }

    //get evaluate detail for a logged in user
    function getUserEvaluateDetail(){
        $evaluateData = DB::table('evaluate')
                ->where('userID', Auth::User()->id)
                ->get();
        return $evaluateData;
    }

    //function to reply then store and potentially send email to the user for evaluation request
    function reply($request){
        DB::table('evaluate')
            ->where('evaluateID', $request->input('evaluateID'))
            ->update([
            'replyPrice' => $request->input('replyPrice'),
            'replyComment' => $request->input('replyComment'),
            'status' => "complete"
        ]);
    }

    //get business evaluate records
    function getBusinessEvaluateDetail($id){
        $evaluateData = DB::table('evaluate')
                ->where('showroomID', $id)
                ->get();
        return $evaluateData;
    }

}
