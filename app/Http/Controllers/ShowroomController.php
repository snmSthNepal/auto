<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShowroomModel;
use Auth;

class ShowroomController extends Controller
{
    public function loadShowroomPage(){
        $showroomModel = new ShowroomModel();
        $result = $showroomModel->getUserShowroom();
        if($result->isEmpty()){
            return view('backend.addShowroom');
        }else{
            return view('backend.addShowroom', compact('result'));
        }

    }

    public function updateShowroom(Request $request){
        $showroomModel = new ShowroomModel();
        $showroomModel->updateShowroom($request);
        return back();
    }

    function loadValidationPage(){
        $showroomModel = new ShowroomModel();
        $data = $showroomModel->getAllShowrooms();
        return view('backend.validateShowroom', compact('data'));
    }

    function changeShowroomStatus(Request $request){
        $id = $request->input('id');
        $status = $request->input('status');
        $showroomModel = new ShowroomModel();
        $showroomModel -> changeStatus($id, $status);
        return back();

    }

}
