<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
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
        session(['type' => implode(" / ", $type)]);
        return redirect('/prendre-rendez-vous/2');
    }

    public function stepTwo()
    {
        if (session('type')) {

            return view('app.appointment-step-two');
        } else {
            return redirect('/prendre-rendez-vous/1')->with('message', 'Merci de compléter tous les champs');
        }
    }

    public function stepTwoSubmit(Request $request)
    {
        $care = [];
        !$request->pansement ?: $care[] = $request->pansement;
        !$request->prise ?: $care[] = $request->prise;
        !$request->injection ?: $care[] = $request->injection;
        !$request->toilette ?: $care[] = $request->toilette;
        !$request->perfusion ?: $care[] = $request->perfusion;
        !$request->glycemie ?: $care[] = $request->glycemie;
        !$request->osteo ?: $care[] = $request->osteo;
        !$request->autre ?: $care[] = $request->autre;
        session(['autre' => $request->autre]);
        session(['care' => implode(" / ", $care)]);
        return redirect('/prendre-rendez-vous/3');
    }

    public function stepThree()
    {
        if (session('care')) {
            return view('app.appointment-step-three');
        } else {
            return redirect('/prendre-rendez-vous/2')->with('message', 'Merci de compléter tous les champs');
        }
    }

    public function stepThreeSubmit(Request $request)
    {
        session(['prescription' => $request->prescription]);
        session(['informations' => $request->informations]);
        return redirect('/prendre-rendez-vous/4');
    }

    public function stepFour()
    {
        if (session('prescription')) {
            return view('app.appointment-step-four');
        } else {
            return redirect('/prendre-rendez-vous/3')->with('message', 'Merci de compléter tous les champs');
        }
    }

    public function stepFourSubmit(Request $request)
    {
        session(['duration' => $request->duration]);
        if ($request->duration === 'autre') {
            session(['duration_other' => $request->duration]);
            session(['duration' => $request->duration_other]);
        } else {
            session(['duration_other' => null]);
            session(['duration' => $request->duration]);
        }
        return redirect('/prendre-rendez-vous/5');
    }

    public function stepFive()
    {
        if (session('duration')) {
            return view('app.appointment-step-five');
        } else {
            return redirect('/prendre-rendez-vous/4')->with('message', 'Merci de compléter tous les champs');
        }
    }

    public function stepFiveSubmit(Request $request)
    {
        session(['start_date' => $request->start_date]);;
        if (str_contains(session('type'), 'Transporteur')) {
            return redirect('/prendre-rendez-vous/6');
        } else {
            session()->forget('start_location');
            session()->forget('end_location');
            session()->forget('way');
            session()->forget('travel_date');
            return redirect('/prendre-rendez-vous/7');
        }
    }

    public function stepSix()
    {
        if (session('start_date') && str_contains(session('type'), 'Transporteur')) {
            return view('app.appointment-step-six');
        } else if (session('start_date') && !str_contains(session('type'), 'Transporteur')) {
            return view('app.appointment-step-seven');
        } else {
            return redirect('/prendre-rendez-vous/5')->with('message', 'Merci de compléter tous les champs');
        }
    }

    public function stepSixSubmit(Request $request)
    {
        session(['start_location' => $request->start_location]);
        session(['end_location' => $request->end_location]);
        session(['way' => $request->way]);
        session(['travel_date' => $request->travel_date]);
        return redirect('/prendre-rendez-vous/7');
    }

    public function stepSeven()
    {
        if (session('type') && str_contains(session('type'), 'Transporteur') && session('travel_date') && session('way') && session('start_location') && session('end_location')) {
            return view('app.appointment-step-seven');
        } else if (session('type') && !str_contains(session('type'), 'Transporteur')) {
            return view('app.appointment-step-seven');
        } else {
            return redirect('/prendre-rendez-vous/6')->with('message', 'Merci de compléter tous les champs');
        }
    }

    public function stepSevenSubmit(Request $request)
    {
        $request->validate([
            'lastname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'birth' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'nationality' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
        ]);

        $appointment = Appointment::create([
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'birth' => $request->birth,
            'email' => $request->email,
            'phone' => $request->phone,
            'nationality' => $request->nationality,
            'address' => $request->address,
            'type' => session('type'),
            'care' => session('care'),
            'prescription' => session('prescription'),
            'informations' => session('informations') ?? 'Aucune information',
            'duration' => session('duration'),
            'start_date' => session('start_date'),
            'start_location' => session('start_location'),
            'end_location' => session('end_location'),
            'way' => session('way'),
            'travel_date' => session('travel_date'),
        ]);

        $appointment->save();

        session()->forget('type');
        session()->forget('care');
        session()->forget('prescription');
        session()->forget('informations');
        session()->forget('duration');
        session()->forget('start_date');
        session()->forget('start_location');
        session()->forget('end_location');
        session()->forget('way');
        session()->forget('travel_date');

        return redirect('/merci-pour-votre-demande');
    }

    public function stop()
    {
        return view('app.appointment-stop');
    }
}
