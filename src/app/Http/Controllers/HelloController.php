<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\HttpCache\ResponseCacheStrategy;
use App\Models\BigQuestions;
use App\Models\Question;
use App\Models\Choices;
use App\Models\Content;
use App\Models\StudyDate;
use App\Models\User;
use App\Models\Vw_sequence;
use App\Models\Vw_sequence99;
use Carbon\Carbon;


class HelloController extends Controller {
public function index()
{
    $data = ['one','two','three','for','five'];
    return view('hello.index',['data'=>$data]);
}

public function quiz()
{
    $big_questions = BigQuestions::all();
    return view('quizy.quizy',compact('big_questions'));
}

public function quizIndex($id)
{
    $questions = Question::with("choices")->where('big_question_id',$id)->get();
    return view('quizy.questions',compact('questions'));
}


public function adminIndex()
{
    $question_titles = Question::all();
    return view('quizy.admin',compact('question_titles'));
}

public function create(Request $request)
{
    Question::create([  
        "name" => $request->name,  
        "big_question_id" => $request->big_question_id,  
        "image" => $request->image,  
    ]);  

    return redirect("/admin");  
}

public function show(Request $request)  
{  
    $question_Id = Question::find($request->question_Id);  

    return view("quizy.show", ["question_Id" => $question_Id]);  
}


// 以下webapp
public function studyDate()
{

    $date = Carbon::now();
    $month = $date->format('Y-m');

    $study_date = StudyDate::sum("hour");

    $study_month = StudyDate::selectRaw('SUM(hour) as total_hour')
    ->whereBetween('date', ['2023-03-01 00:00:00', '2023-03-31 00:00:00'])
    ->first();

    $study_today = StudyDate::whereDate('date', Carbon::today())
                ->sum('hour');
    $study_today = $study_today ?: 0;


    $contents = StudyDate::select('content_name', StudyDate::raw('sum(hour) as gakushu_content'))
            ->groupBy('content_name')
            ->get();

    $languages = StudyDate::select('language_name', StudyDate::raw('sum(hour) as gakushu_language'))
    ->groupBy('language_name')
    ->get();

    for($i = 1; $i < 32; $i++):
        $day = sprintf('%002d',$i);
        $date_sum[] = StudyDate::where('date',$month . '-' .$day)->sum('hour');
    endfor;

    // $BarChart_data = Vw_sequence::selectRaw("ADDDATE('2023-03-01', Vw_sequence99.Number) as Date, IFNULL(Sum(study_dates.hour),0) as hour")
    //                 ->leftJoin('study_dates', function($join) {
    //                     $join->on(Vw_sequence::raw("ADDDATE('2023-03-01', Vw_sequence99.Number)"), '=', 'DATE(study_dates.`date`)');
    //                 })
    //                 ->whereBetween(Vw_sequence::raw("ADDDATE('2023-03-01', Vw_sequence99.Number)"), ['2023-03-01', '2023-03-30'])
    //                 ->groupBy(Vw_sequence::raw("ADDDATE('2023-03-01', Vw_sequence99.Number)"))
    //                 ->orderBy('Date')
    //                 ->get();

    

    return view('webapp.index',compact('study_month','study_date','study_today','contents','languages','date_sum'));
}


}
?>
