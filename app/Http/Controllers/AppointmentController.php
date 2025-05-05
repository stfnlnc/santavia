<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('app.appointment');
    }

    public function stepOne()
    {
        return view('app.appointment-step-one');
    }

    public function stepOneSubmit(Request $request)
    {
        $type = [];
        !$request->osteo ?: $type[] = $request->osteo;
        !$request->infirmier ?: $type[] = $request->infirmier;
        !$request->transporteur ?: $type[] = $request->transporteur;
        session(['type' => $type]);
        return redirect('/prendre-rendez-vous/2');
    }

    public function stepTwo()
    {
        if (session('type')) {

            return view('app.appointment-step-two');
        } else {
            return redirect('/prendre-rendez-vous/1');
        }
    }

    public function stepTwoSubmit(Request $request)
    {
        $care = [];
        !$request->pansement ?: $care[] = $request->pansement;
        !$request->prise ?: $care[] = $request->prise;
        !$request->injection ?: $care[] = $request->injection;
        session(['care' => $care]);
        return redirect('/prendre-rendez-vous/3');
    }

    public function stepThree()
    {
        if (session('care')) {
            return view('app.appointment-step-three');
        } else {
            return redirect('/prendre-rendez-vous/2');
        }
    }

    public function stepThreeSubmit()
    {
        return redirect('/prendre-rendez-vous/4');
    }

    public function stepFour()
    {
        return view('app.appointment-step-four');
    }

    public function stepFourSubmit()
    {
        return redirect('/prendre-rendez-vous/5');
    }

    public function stepFive()
    {
        return view('app.appointment-step-five');
    }

    public function stepFiveSubmit()
    {
        return redirect('/prendre-rendez-vous/6');
    }

    public function stepSix()
    {
        return view('app.appointment-step-six');
    }

    public function stepSixSubmit()
    {
        return redirect('/prendre-rendez-vous/7');
    }

    public function stepSeven()
    {
        return view('app.appointment-step-seven');
    }

    public function stepSevenSubmit()
    {
        return redirect('/merci-pour-votre-demande');
    }

    public function stop()
    {
        return view('app.appointment-stop');
    }
}
