<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function contact_admin(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'subject' => 'required',
            'message' => 'required',
        ]);

        return response()->json(["message" => "Message sent successfully"]);
    }

    public function sortByDate(Request $request, $from = '1970-01-01', $to = '2970-01-01')
    {
        if ($request->from) {
            $from = $request->from;
        }
        if ($request->to) {
            $to = $request->to;
        }

        $request->validate([
            'type' => 'required'
        ]);

        if ($request->type == "courses") {
            $courses = Course::with('features', 'syllabus', 'questions.answers')->whereTrainer_id(auth()->user()->id)->whereBetween('created_at', [$from, $to])->get();
            return response()->json(["courses" => $courses]);
        }
    }


    public function generalData()
    {
        $averageCoursePerMonth = 80;
        $averageCoursePerYear = 80;
        $graphYearlyData = array(["2020" => ["january" => "20", "february" => "20", "march" => "20", "april" => "20",]], ["2021" => ["january" => "20", "february" => "20", "march" => "20", "april" => "20",]]);
        $subscription = auth()->user()->subscriptions()->first();
        $aboutus = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

        return response()->json(["averageCoursePerMonth" => $averageCoursePerMonth, "averageCoursePerYear" => $averageCoursePerYear, "graphYearlyData" => $graphYearlyData, "subscription" => $subscription, "aboutus" => $aboutus]);
    }
}
