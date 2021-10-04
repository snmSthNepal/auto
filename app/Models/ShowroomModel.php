<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;

class ShowroomModel extends Model
{
    use HasFactory;

    function updateShowroom($request){
        $userID = DB::table('showroom')//Check if the logged in user already has an showroom added
            ->where('userID', Auth::User()->id)
            ->get();
        $total = $request->input('totalQuota');
        $booking = $request->input('bookingQuota');

        if($userID->isEmpty()){//New Account
            DB::table('showroom')
                ->insert([
                'userID' => Auth::User()->id,
                'name' => $request->input('showroomName'),
                'address' => $request->input('address'),
                'company' => $request->input('company'),
                'totalQuota' => $request->input('totalQuota'),
                'bookingQuota' => $request->input('bookingQuota'),
                'status' => "invalid"
            ]);
        }
        else{//Account already exists
            DB::table('showroom')
                ->where('userID', Auth::User()->id)
                ->update([
                'name' => $request->input('showroomName'),
                'address' => $request->input('address'),
                'company' => $request->input('company'),
                'totalQuota' => $request->input('totalQuota'),
                'bookingQuota' => $request->input('bookingQuota')
            ]);
        }
    }

    //get all the showroom detail of the logged in user
    function getUserShowroom(){
        $result = DB::table('showroom')
                ->where('userID', Auth::User()->id)
                ->get();
        return $result;
    }

    //get all showroom detail of all users for superAdmin
    function getAllShowrooms(){
        $result = DB::table('showroom')
            ->get();
        return $result;
    }

    //get all valid showroom detail of all users for service booking
    function getValidShowrooms(){
        $result = DB::table('showroom')
            ->where('status', "valid")
            ->get();
        return $result;
    }

    //for usertype -> business
    function getBookingCapacity($showroomID){
        $result = DB::table('showroom')
                    ->select('bookingQuota')
                    ->where('id', $showroomID)
                    ->get();
        return $result;
    }
    //get showroomID of the logged in business account holder
    function getShowroomID($id){
        $result = DB::table('showroom')
                    ->select('id')
                    ->where('userID', $id)
                    ->get();
        if(empty($result[0])){
            return null;
        }
        else{
            return $result[0]->id;
        }  
    }

    function changeStatus($id, $status){
        DB::table('showroom')
            ->where('id', $id)
            ->update([
                'status' => $status
            ]);
    }
}
