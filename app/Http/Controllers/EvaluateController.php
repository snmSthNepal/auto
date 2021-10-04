<?php

namespace App\Http\Controllers;

use App\Models\EvaluateModel;
use App\Models\ShowroomModel;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class EvaluateController extends Controller
{
    protected function validator(Request $request)
    {

    }

    public function loadEvaluatePage(){
        $showroomModel = new ShowroomModel();
        $showroom = $showroomModel->getAllShowrooms();
        return view('evaluate', compact('showroom'));
    }

    public function create(Request $request){
        $validated = $request->validate([
        'company' => ['required', 'regex:(hero|honda|yamaha|tvs|suzuki)'],
        'bikeName' => ['required', 'regex:(impulse|xtrene|unicorn|dio|suzuki1|suzuki2|tvs1|tvs2|v1|v2|v3)'],//need to change to appropriate names
        'state' => ['required', 'regex:(new|likeNew|used)'],
        'model' => ['required', 'min:2000', 'numeric'],
        'email' => ['string', 'email', 'max:255'],
        'phone' => ['required', 'min:10', 'max:10'],
        'name' => ['required', 'string', 'max:100'],
        'bikeNum' => ['required', 'max:100'],//not sure for now
        'date' => ['required', 'max:255'],
        'showroomID' => ['required', 'regex:(2)'],
        'expectedPrice' => ['required'],
        'comment' => ['nullable', 'string', 'max:300']
    ]);
        $evaluateModel = new EvaluateModel();
        $evaluateModel->newEvaluation($request);
        return redirect()->route('evaluate');
    }

    public function reply(Request $request){
        $evaluateModel = new EvaluateModel();
        $evaluateModel->reply($request);
        return redirect()->route('sendEvaluateMail', $request);
    }
}

