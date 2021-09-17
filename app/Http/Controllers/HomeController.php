<?php

namespace App\Http\Controllers;

use App\Helpers\ChartsHelper as Chart;
use App\Models\Article;
use App\Models\Doctor;
use App\Models\User;
use App\Models\Specialization;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /*
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $specializations = Specialization::all();
        $users = User::count();
        $doctors  = Doctor::count();
        $articels = Article::count();
        $doctors_list = Doctor::paginate();
        $specializations_count = array();
        $specializations_names = array();
        foreach ($specializations as $specialization) {
            $item = Doctor::where('specialization_id', $specialization->id)->get()->count();
            $item_name = $specialization->name;
            array_push($specializations_count, $item);
            array_push($specializations_names, $item_name);
        }
        $gender  = DB::table('Doctors')
            ->groupBy('gender')
            ->count();
        $chartjs = Chart::chart(
            "bar",
            "DoctorPerSpecialization",
            400,
            200,
            [],
            $specializations_count,
            $specializations_names,
            []
        );
        $gender_Chartjs = Chart::chart(
            "pie",
            "DoctorPerGender",
            400,
            200,
            [],
            [$gender,50 - $gender],
            ["male","female"],
            []
        );

        return view('dashboard', compact('specializations', 'users', 'doctors', 'articels', 'doctors_list', 'chartjs', 'gender_Chartjs'));
    }
}
