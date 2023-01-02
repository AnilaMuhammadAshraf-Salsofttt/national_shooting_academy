<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\License;
use App\Models\LicenseAttempts;
use App\Models\LicenseQuestionAnswer;
use App\Models\Product;
use App\Models\TrainerLicense;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;


class LicenseController extends Controller
{
    public function getquiz(Request $request)
    {
        $request->validate([
            'product' => 'required'
        ]);

        $product = Product::whereName($request->product)->first();
        $category = Category::find($product->category_id)->first();
        $quiz = License::with('questions.answers')->where('category_id', $category->id)->first();
        $attempts = LicenseAttempts::whereUser_id(auth()->user()->id)->whereLicense_id($quiz->id)->count();

        return response()->json(["attempts_made" => $attempts, "quizDetail" => $quiz]);
    }

    public function checkQuiz(Request $request)
    {

        $correct = 0;

        $request->validate([
            'quiz_id' => 'required',
            'questions' => 'required'
        ]);

        $licenseAttempts = new LicenseAttempts([
            'user_id' => auth()->user()->id,
            'license_id' => $request->quiz_id
        ]);
        $licenseAttempts->save();


        $quiz = License::withCount('questions')->whereId($request->quiz_id)->first();
        $questions = $request->questions;
        $totalQuestions = $quiz->questions_count;
        $passingCriteria = $quiz->passing_criteria;


        foreach ($quiz->questions as $data) {
            // $answer = $questions[$data->id]->answer_id;

            $correct_answer = LicenseQuestionAnswer::where('license_questions_id', $data->id)->whereCorrect('1')->first();
            foreach ($questions as $given) {
                if ($given["id"] == $correct_answer->license_questions_id) {
                    if ($given["answer_id"] == $correct_answer->id) {
                        $correct++;
                    }
                }
            }
        }

        if (($correct / $totalQuestions) * 100 >= $passingCriteria) {

        //   old code start
            // $token = Str::random(80);
            // $token = encrypt(auth()->id());
            // $url = url('trainer/download_certificate?token=' . $token);

            // $tiny_url = 'http://tinyurl.com/api-create.php?url=';
            // $tiny_url = file_get_contents($tiny_url.urlencode(trim($url)));
            // $trainerLicense = new TrainerLicense([
            //     'license_id' => $quiz->id,
            //     'user_id' => auth()->user()->id,
            //     'token' => $token,
            //     'certificate' => $tiny_url
            // ]);
            // $trainerLicense->save();
        //   old code end


        $token = Str::random(80);
        $token = encrypt(auth()->id());
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadHTML('<h1>Certificate</h1>');
            $pdf->download('certificate.pdf');
    // $cert =   url('storage/certificate.pdf');

$cert = "http://dev71.onlinetestingserver.com/national-shooting-academy/storage/certificate.pdf";


            $trainerLicense = new TrainerLicense([
                'license_id' => $quiz->id,
                'user_id' => auth()->user()->id,
                'token' => $token,
                'certificate' => $cert
            ]);
            $trainerLicense->save();

            return response()->json(["result" => "Passed", "url" => $trainerLicense->certificate]);
        }
        return response()->json(["result" => "Failed"]);
    }


    public function download_certificate(Request $request)
    {
        /*$file = public_path() . "/demo/demo.jpg";
        $request->validate([
            'token' => 'required'
        ]);
        $token = $request->token;
        $user = User::with('license')->whereId(auth()->user()->id)->first();
        if ($token == $user->license->token) {
            return response()->download($file);
        }*/
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Certificate</h1>');
        return $pdf->download('certificate.pdf');

        return response()->json(["message" => "invalid url"]);
    }
}
