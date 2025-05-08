<?php

namespace App\Http\Controllers;

use App\Mail\Appointment as AppointmentAlias;
use App\Mail\AppointmentNotification;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function start()
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
            'g-recaptcha-response' => ['required']
        ]);

        session([
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'email' => $request->email,
            'birth' => $request->birth,
            'phone' => $request->phone,
            'nationality' => $request->nationality,
            'address' => $request->address,
        ]);

        $appointment = Appointment::create([
            'lastname' => session('lastname'),
            'firstname' => session('firstname'),
            'email' => session('email'),
            'birth' => session('birth'),
            'phone' => session('phone'),
            'nationality' => session('nationality'),
            'address' => session('address'),
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

        if ($this->isValid($_POST['g-recaptcha-response'])) {
            $appointment->save();
        } else {
            return redirect('/prendre-rendez-vous/7')->with('message', 'Le reCaptcha n\'est pas valide');
        }

        Mail::to($request->email)
            ->send(new AppointmentAlias());
        Mail::to('administrateur@chezmoi.com')
            ->send(new AppointmentNotification());

        session()->forget('lastname');
        session()->forget('firstname');
        session()->forget('email');
        session()->forget('birth');
        session()->forget('phone');
        session()->forget('nationality');
        session()->forget('address');
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

    function isValid($code, $ip = null)
    {
        if (empty($code)) {
            return false; // Si aucun code n'est entré, on ne cherche pas plus loin
        }
        $params = [
            'secret' => "6LcgIzErAAAAAMJzI0oz2areHg0DVrask0u5Dznx",
            'response' => $code
        ];
        if ($ip) {
            $params['remoteip'] = $ip;
        }
        $url = "https://www.google.com/recaptcha/api/siteverify?" . http_build_query($params);
        if (function_exists('curl_version')) {
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_TIMEOUT, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // Evite les problèmes, si le ser
            $response = curl_exec($curl);
        } else {
            // Si curl n'est pas dispo, un bon vieux file_get_contents
            $response = file_get_contents($url);
        }

        if (empty($response) || is_null($response)) {
            return false;
        }

        $json = json_decode($response);
        return $json->success;
    }

    public function stop()
    {
        return view('app.appointment-stop');
    }

    public function index()
    {
        $appointments = Appointment::all();

        return view('admin.appointment-index', [
            'appointments' => $appointments,
        ]);
    }

    public function show(int $id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('admin.appointment-show', [
            'appointment' => $appointment,
        ]);
    }

    public function destroy(int $id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();
        return redirect()->route('appointment.index');
    }
}
