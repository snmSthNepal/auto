<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Auth;

class ServiceModel extends Model
{
    public function newService($request){
    if (Auth::user()) {
	    $userID = Auth::user()->id;
    }else {
	    $userID = 0;
    }
        $name = $request->input('name');
        $bikeName = $request->input('bikeName');
        $servicingType = $request->input('servicingType');
        $warrantyType = $request->input('warrantyType');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $comment = $request->input('comment');
        $lastDate = $request->input('lastDate');
        $serviceDate = $request->input('serviceDate');
        $totalKm = $request->input('totalKm');
        $bikeNum = $request->input('bikeNum');
        $date = $request->input('date');

        DB::table('servicing')->insert([
            'userID' => $userID,
            'name' => $name,
            'bikeName' => $bikeName,
            'servicingType' => $servicingType,
            'warrantyType' => $warrantyType,
            'email' => $email,
            'phone' => $phone,
            'comment' => $comment,
            'lastDate' => $lastDate,
            'serviceDate' => $serviceDate,
            'totalKm' => $totalKm,
            'bikeNum' => $bikeNum,
            'date' => $date,
            'status' => "pending",
            'showroomID' => $request->input('showroomID')
        ]);
    }

    //get all the service detail for the superAdmin
    function getServiceDetail(){
        $serviceData = DB::table('servicing')
                        ->get();
        return $serviceData;
    }

    //get all servicing detail for the logged in user
    function getUserServiceDetail(){
        $serviceData = DB::table('servicing')
                        ->where('userID', Auth::User()->id)
                        ->get();
        return $serviceData;
    }

    //get all servicing detail for the logged in users showroom
    function getShowroomServiceDetail($showroomID){
        $serviceData = DB::table('servicing')
                        ->where('showroomID', $showroomID)
                        ->get();
        return $serviceData;
    }

    function changeStatus($request){
        $totalAmount = $request->input('totalAmount');
        $completeComment = $request->input('completeComment');
        $status = $request->input('replyStatus');
        $servicingID = $request->input('servicingID');
        //dd($totalAmount, $completeComment, $status, $servicingID);

        DB::table('servicing')
            ->where('servicingID', $servicingID)
            ->update(['status' => $status,
                    'totalAmount' => $totalAmount,
                    'completeComment' => $completeComment
            ]);
    }

    function getNumberOfBookings($bookingDate){
        $quota = DB::table('servicing')
                ->where('serviceDate', $bookingDate)
                ->get();
        $totalBookings = count($quota);
        return $totalBookings;
    }

    //get business service records
    function getBusinessServiceDetail($id){
        $serviceDate = DB::table('servicing')
                ->where('showroomID', $id)
                ->get();
        return $serviceDate;
    }



}


