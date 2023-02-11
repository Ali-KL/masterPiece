<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function patientHome()
    {
        return view('home');
    }


    /**
     * Show the recept dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function receptDash()
    {
        return view('recept.receptDash');
    }

    /**
     * Show the doctor dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function doctorDash()
    {
        return view('doctor.doctorDash');
    }

    /**
     * Show the pharma dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pharmaDash()
    {
        return view('pharma.pharmaDash');
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('home');
    }

}
