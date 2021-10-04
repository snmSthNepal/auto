<?php
namespace App\Http\Controllers;
use App\Models\ServiceModel;
use App\Models\ShowroomModel;
use App\Models\ServiceQuota;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Auth;
use Carbon\Carbon;
class ServiceController extends Controller
{

    public function loadServicePage(){
        $showroomModel = new ShowroomModel();
        $showroom = $showroomModel->getValidShowrooms();
        return view('service', compact('showroom'));
    }

    public function create(Request $request){
        $bookingDate = $request->input('serviceDate');
        $showroomID = $request->input('showroomID');
        $today = Carbon::now();
        $endBooking = Carbon::createFromTimeString('12:00:00')->toTimeString();
        $todayDate = $today->toDateString();
        $tomorrowDate = $today->addDays(1)->toDateString();
        $todayTime = $today->toTimeString();

        $serviceModel = new ServiceModel();
        $showroomModel =  new ShowroomModel();

        $bookingCapacity = $showroomModel->getBookingCapacity($showroomID);//get booking capacity of the requested showroom service booking
        $booked = $serviceModel->getNumberOfBookings($bookingDate);//Number of bookings for that particular date
        
        if($bookingCapacity[0]->bookingQuota>$booked){  
            if($bookingDate==$todayDate){ //check if booking is done today or not
                if($todayTime<$endBooking){ //check if the time for today has been met as before 12pm
                    //dd("Booking date is today and booking time is valid");
                    session()->flash('notification', 'Successful Booking');
                    $serviceModel->newService($request);
                    return redirect()->route('service');
                }else{
                    //dd("booking date is today but time is invalid");
                    session()->flash('sorry', 'Sorry no bookings are allowed after 11:59pm for the same day Nepal, Kathmandu Time. Although you can still book for tomorrow');
                    return redirect()->route('service');
                }
            }elseif($bookingDate>$todayDate){
                    //dd('booking date greater than today');
                    session()->flash('notification', 'Successful Booking');
                    $serviceModel->newService($request);
                    return redirect()->route('service');
            }else{ //For invalid date i.e. past
                //dd("Invalid Input");
                session()->flash('sorry', 'Invalid Booking Date!! Please Check and Try Again!!');
                return redirect()->route('service');
            }
        }else{
            session()->flash('sorry', 'Sorry Bookings Are full for the date you selected. Please Select a new date');
            return redirect()->route('service');
        }


        
    }

    public function changeStatus(Request $request){
        $serviceModel = new ServiceModel();
        $serviceModel->changeStatus($request);
        return redirect()->route('sendServiceMail', $request);
        
    }

}
