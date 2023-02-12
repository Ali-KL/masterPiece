<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
    public function receptHome()
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
        $users = User::latest()->paginate(5);
        return view('recept.receptDash', ['users' => $users])
            ->with('i', (request()->input('page', 1) - 1) * 5);    }

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
