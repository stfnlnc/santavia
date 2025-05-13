@extends('base', ['header' => false])

@section('content')
    <section class="w-full h-fit relative bg-white overflow-hidden">
        <div class="relative max-w-screen-xl z-20 container flex flex-col items-center justify-center gap-4 mx-auto py-24">
            <div class="flex flex-row flex-wrap gap-4">
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-red-damask-600 text-white">1</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-red-damask-600 text-white">2</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-red-damask-600 text-white">3</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-red-damask-600 text-white">4</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-red-damask-600 text-white">5</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-red-damask-600 text-white">6</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-red-damask-600 text-white">7</div>
            </div>
            <form class="mt-8 flex flex-col items-center gap-8" action="{{ route('appointment.step-seven-submit') }}" method="POST">
                @csrf
                <h2 class="neulis font-bold">Saisissez vos <br> coordonnées</h2>
                <p>
                    Saisissez vos coordonnées afin qu’un professionnel de santé qualifié et disponible prenne contact avec vous pour convenir d’un rendez-vous.
                </p>
                <div class="flex flex-col mt-8">
                    <div class="flex btn-outline mx-auto mt-8">
                        <input value="{{ old('lastname') ?? '' }}" type="text" name="lastname" id="lastname" class="text-2xl border-none w-80 neulis placeholder:text-black placeholder:font-bold" placeholder="nom">
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('lastname')"/>
                    <div class="flex btn-outline mx-auto mt-8">
                        <input value="{{ old('firstname') ?? '' }}" type="text" name="firstname" id="firstname" class="text-2xl border-none w-80 neulis placeholder:text-black placeholder:font-bold" placeholder="prénom">
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('firstname')"/>
                    <label class="mt-8 neulis font-bold text-xl mb-2" for="birth">Date de naissance</label>
                    <div class="flex btn-outline mx-auto">
                        <input max="{{ date('Y-m-d', time()) }}" value="{{ old('birth') ?? '' }}" type="date" name="birth" id="birth" class="text-2xl border-none w-80 neulis placeholder:text-black placeholder:font-bold" placeholder="date de naissance">
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('birth')"/>
                    <div class="flex btn-outline mx-auto mt-8">
                        <input value="{{ old('phone') ?? '' }}" type="text" name="phone" id="phone" class="text-2xl border-none w-80 neulis placeholder:text-black placeholder:font-bold" placeholder="téléphone">
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('phone')"/>
                    <div class="flex btn-outline mx-auto mt-8">
                        <input value="{{ old('email') ?? '' }}" type="email" name="email" id="email" class="text-2xl border-none w-80 neulis placeholder:text-black placeholder:font-bold" placeholder="email">
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('email')"/>
                    <div class="flex btn-outline mx-auto mt-8">
                        <input value="{{ old('address') ?? '' }}" type="text" name="address" id="address" class="text-2xl border-none w-80 neulis placeholder:text-black placeholder:font-bold" placeholder="adresse de séjour">
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('address')"/>
                    <div class="flex btn-outline mx-auto mt-8">
                        <input value="{{ old('postal_code') ?? '' }}" type="text" name="postal_code" id="postal_code" class="text-2xl border-none w-80 neulis placeholder:text-black placeholder:font-bold" placeholder="code postal">
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('postal_code')"/>
                    <div class="flex btn-outline mx-auto mt-8">
                        <input value="{{ old('city') ?? '' }}" type="text" name="city" id="city" class="text-2xl border-none w-80 neulis placeholder:text-black placeholder:font-bold" placeholder="ville">
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('city')"/>
                    <div class="flex btn-outline mx-auto mt-8">
                        <input value="{{ old('nationality') ?? '' }}" type="text" name="nationality" id="nationality" class="text-2xl border-none w-80 neulis placeholder:text-black placeholder:font-bold" placeholder="nationalité">
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('nationality')"/>
                </div>
                <div class="g-recaptcha" data-sitekey="6LcgIzErAAAAALZfpnMT2PlA86m5pfZEvw8_CTrz"></div>
                <button type="submit" class="w-80 btn mt-12">finaliser ma demande</button>
                <p class="w-80 text-xs">
                    *Les informations recueillies via ce formulaire sont nécessaires pour organiser votre prise en charge par un professionnel de santé à domicile. Elles sont traitées par Santavia en conformité avec le RGPD. Pour en savoir plus sur la gestion de vos données et vos droits, consultez
                    notre <a target="_blank" class="underline" href="{{ route('privacy-policy') }}">Politique de Confidentialité</a>.
                </p>
                @if (str_contains(session('type'), "Transporteur"))
                    <a href="{{ route('appointment.step-six') }}" class="w-80 btn-outline text-center cursor-pointer">retour</a>
                @else
                    <a href="{{ route('appointment.step-five') }}" class="w-80 btn-outline text-center cursor-pointer">retour</a>
                @endif
            </form>
        </div>
    </section>
@endsection
