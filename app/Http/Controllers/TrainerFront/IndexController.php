<?php

namespace App\Http\Controllers\TrainerFront;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\PaymentLog;
use App\Models\Plan;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('web')->except('logout');
    }

    public function index()
    {

        $data['per_month_payment']=Course::whereTrainerId(auth()->user()->id)
        ->whereMonth('created_at',\Carbon\Carbon::now()->format('m'))->count();


        $data['per_year_payment']=Course::whereTrainerId(auth()->user()->id)
        ->whereYear('created_at',\Carbon\Carbon::now()->format('Y'))->count();


        $data['course_count']=Course::select(DB::raw('count(id) as count'))->
        whereTrainerId(auth()->user()->id)->get();
      

        $data['package']= Plan::all();

        $data['user']= User::latest()->take(5)->get();


        $data['totalcourse'] = $this->totalcourse();
        $data['totalsale'] = $this->totalsale();

        $data['course']=  Course::with('features','questions','syllabus','user','quiz_attempts','registrations')
        ->whereStatus('active')->get();
        // dd($data);
        $data['product']= Product::with('multi_images','wishlist')->whereStatus('active')->get();
        return view('trainer.index',$data);
    }


    public function totalcourse()
    {

        $records = Course::
        select(DB::raw("count(id) as count, MONTH(created_at) month"))
        ->groupBy(DB::raw("year(created_at), MONTH(created_at)"))->
        whereTrainerId(auth()->user()->id)
        ->get();


        $month = Course::select(DB::raw("Count(id) as count"))
        ->orderBy("created_at")
        ->groupBy(DB::raw("month(created_at)"))
        ->get()->toArray();
        $month = array_column($month, 'count');

        $months = collect(['', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']);

        $chartData = collect([]);

        for ($i = 1; $i <= 12; $i++){
        $std = new \stdClass();
        $std->key = $months[$i];
        $std->value = $records->where('month', $i)->sum('count');
        $chartData->push($std);
        }

    return $chartData;

    }
        
    public function totalsale()
    {

        $records = PaymentLog::
        select(DB::raw("count(id) as count, MONTH(created_at) month"))
        ->groupBy(DB::raw("year(created_at), MONTH(created_at)"))->
        whereUserId(auth()->user()->id)
        ->get();


        $month = Course::select(DB::raw("Count(id) as count"))
        ->orderBy("created_at")
        ->groupBy(DB::raw("month(created_at)"))
        ->get()->toArray();
        $month = array_column($month, 'count');

        $months = collect(['', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']);

        $chartData = collect([]);

        for ($i = 1; $i <= 12; $i++){
        $std = new \stdClass();
        $std->key = $months[$i];
        $std->value = $records->where('month', $i)->sum('count');
        $chartData->push($std);
        }

    return $chartData;

    }


}
