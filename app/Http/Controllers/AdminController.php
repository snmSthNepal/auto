<?php

namespace App\Http\Controllers;
use App\Models\EvaluateModel;
use App\Models\ServiceModel;
use App\Models\ShowroomModel;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Auth;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //SuperAdmin -> Overview page
    function loadAdminPage(){
        $evaluateModel = new EvaluateModel();
        $serviceModel = new ServiceModel();

        if(Auth::User()->userType == "main"){
            $evaluateResult = $evaluateModel->getEvaluateDetail();
            $evaluateNumber = array('en' => $evaluateResult->count());
            $serviceResult = $serviceModel->getServiceDetail();
            $serviceNumber = array('sn' => $serviceResult->count());
            return view('main_dashboard', compact('evaluateResult', 'serviceResult', 'evaluateNumber', 'serviceNumber'));
        }elseif(Auth::User()->userType == "business"){
            $showroomModel = new ShowroomModel();
            $showroomID = $showroomModel->getShowroomID(Auth::User()->id); //get showroom ID of the logged in business account holder
            $evaluateResult = $evaluateModel->getBusinessEvaluateDetail($showroomID);
            $evaluateNumber = array('en' => $evaluateResult->count());
            $serviceResult = $serviceModel->getBusinessServiceDetail($showroomID);
            $serviceNumber = array('sn' => $serviceResult->count());
            return view('main_dashboard', compact('evaluateResult', 'serviceResult', 'evaluateNumber', 'serviceNumber'));
        }elseif(Auth::User()->userType == "personal"){
            return redirect()->route('dashboard');
        }
    }

    //SuperAdmin/Business -> evaluate record page
    function loadEvaluateRecord(){
        $evaluateModel = new EvaluateModel();
        if(Auth::User()->userType == "main"){
            $evaluateResult = $evaluateModel->getEvaluateDetail();
            $evaluateNumber = array('en' => $evaluateResult->count());
            return view('backend.evaluate', compact('evaluateResult', 'evaluateNumber'));
        }elseif(Auth::User()->userType == "business"){//if business
            $showroomModel = new ShowroomModel();
            $showroomID = $showroomModel->getShowroomID(Auth::User()->id); //get showroom ID of the logged in business account holder
            $evaluateResult = $evaluateModel->getBusinessEvaluateDetail($showroomID);
            $evaluateNumber = array('en' => $evaluateResult->count());
            return view('backend.evaluate', compact('evaluateResult', 'evaluateNumber'));
        }
        
    }

    //SuperAdmin/Business -> service record Page
    function loadServicingRecord(){
        $serviceModel = new ServiceModel();
        if(Auth::User()->userType == "main"){
            $serviceResult = $serviceModel->getServiceDetail();
            $serviceNumber = array('sn' => $serviceResult->count());
            return view('backend.service', compact('serviceResult', 'serviceNumber'));
        }elseif(Auth::User()->userType == "business"){//if business
            $showroomModel = new ShowroomModel();
            $showroomID = $showroomModel->getShowroomID(Auth::User()->id); //get showroom ID of the logged in business account holder
            $serviceResult = $serviceModel->getBusinessServiceDetail($showroomID);
            $serviceNumber = array('sn' => $serviceResult->count());
            return view('backend.service', compact('serviceResult', 'serviceNumber'));
        }

    }

    //Overview Page for business and personal account holders
    function loadDashboard(){
        if(Auth::User()->userType == "business"){//for business records take service record using showroomID
            return redirect()->route('businessDashboard');
        }elseif(Auth::User()->userType == "personal"){//for personal records take service record using userID
            $evaluateModel = new EvaluateModel();
            $evaluateResult = $evaluateModel->getUserEvaluateDetail();
            $evaluateNumber = array('en' => $evaluateResult->count());
            $serviceModel = new ServiceModel();
            $serviceResult = $serviceModel->getUserServiceDetail();
            $serviceNumber = array('sn' => $serviceResult->count());
            return view('backend', compact('evaluateResult', 'serviceResult', 'evaluateNumber', 'serviceNumber'));
        }else{
            dd('NOT AUTHORIZED!!');
        }
    }

    //Evaluate record page for business and personal account holders
    function loadUserEvaluate(){
        $evaluateModel = new EvaluateModel();
        $evaluateResult = $evaluateModel->getUserEvaluateDetail();
        $evaluateNumber = array('en' => $evaluateResult->count());

        return view('backend.userEvaluate', compact('evaluateResult', 'evaluateNumber'));
    }

    //Service record Page for business and personal account holders
    function loadUserService(){
        $serviceModel = new ServiceModel();
        $serviceResult = $serviceModel->getUserServiceDetail();
        $serviceNumber = array('sn' => $serviceResult->count());

        return view('backend.userService', compact('serviceResult', 'serviceNumber'));
    }

}

