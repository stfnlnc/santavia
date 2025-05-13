<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function definePolicy()
    {
        $privacy_policy = Policy::firstWhere('name', 'privacy_policy');
        $terms_of_use = Policy::firstWhere('name', 'terms_of_use');
        $cookies_consent = Policy::firstWhere('name', 'cookies_consent');

        return view('admin.define-policy', [
            'privacy_policy' => $privacy_policy->content,
            'terms_of_use' => $terms_of_use->content,
            'cookies_consent' => $cookies_consent->content,
        ]);
    }

    public function editPolicy(Request $request)
    {
        Policy::updateOrCreate(['name' => 'privacy_policy'], ['content' => $request->privacy_policy ?? ""]);
        Policy::updateOrCreate(['name' => 'terms_of_use'], ['content' => $request->terms_of_use ?? ""]);
        Policy::updateOrCreate(['name' => 'cookies_consent'], ['content' => $request->cookies_consent ?? ""]);

        return redirect()->route('appointment.define-policy');
    }

    public function privacyPolicy()
    {
        $privacy_policy = Policy::firstWhere('name', 'privacy_policy');
        return view('app.privacy-policy', compact('privacy_policy'));
    }

    public function termsOfUse()
    {
        return view('app.terms-of-use');
    }

    public function cookiesConsent()
    {
        return view('app.cookies-consent');
    }
}
