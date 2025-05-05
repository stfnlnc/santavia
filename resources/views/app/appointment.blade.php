@extends('base', ['header' => false])

@section('content')
    <section class="w-full h-fit relative bg-white overflow-hidden">
        <div class="relative max-w-screen-xl z-20 container flex flex-col items-center justify-center gap-4 mx-auto py-24">
            <svg class="absolute w-full top-1/4 left-0 -translate-y-36 opacity-10 -z-20" fill="#e174aa" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 568.64 486.9">
                <path d="M0,205.15l29.06-48.39c53.27,31.98,108.72,55.39,165.58,69.94C238.85,97.67,305.4,17.7,386.32,2.44c47.8-9.01,130.99,5.58,166.31,66.26,35.15,60.59,7.87,137.94-37.58,182.7-67.39,66.41-164.4,55.33-249.98,45.57-10.49-1.21-20.94-2.66-31.35-4.39-15.57,56.92-27.31,122.35-34.28,194.31h0c-31.1-3.01-53.81-31.25-49.61-62.21,7.08-52.13,16.61-100.26,28.36-143.92-61.29-15.95-120.95-41.25-178.19-75.62ZM505.23,99.63c-.45-.87-.91-1.7-1.4-2.55-20.31-34.91-75.22-45.18-107.05-39.17-58.23,10.99-109.55,76.77-146.23,180.61,82.77,8.97,172.3,24.48,224.88-27.31,28.89-28.48,47.41-77.41,29.8-111.58Z"/>
            </svg>
            <svg class="w-22 lg:w-40 h-22 lg:h-40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.54 33.6">
                <defs>
                    <linearGradient id="monGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:rgb(255,255,0);stop-opacity:1"/>
                        <stop offset="100%" style="stop-color:rgb(255,0,0);stop-opacity:1"/>
                    </linearGradient>
                </defs>
                <path fill="url(#monGradient)" d="M1.77,33.6l-1.77-2.86c3.22-2,6.04-4.35,8.42-7.03C2.67,17.73.2,11.91,1.63,7.12,2.47,4.3,5.56.23,9.81,0c4.25-.21,7.64,3.4,8.79,7.09,1.71,5.47-1.59,10.4-4.5,14.74-.36.54-.74,1.07-1.13,1.6,2.65,2.44,5.87,4.9,9.57,7.29h0c-1.02,1.58-3.14,1.98-4.68.9-2.64-1.85-4.99-3.71-7.03-5.57-2.57,2.88-5.6,5.4-9.06,7.54ZM10.16,3.36c-.06,0-.12,0-.18,0-2.47.13-4.57,2.82-5.13,4.72-1.03,3.47,1.1,8.09,5.71,12.98.26-.36.51-.72.75-1.08,2.61-3.9,5.31-7.94,4.08-11.88-.74-2.37-2.88-4.74-5.23-4.74Z"/>
                <circle fill="url(#monGradient)" cx="10.17" cy="9.91" r="1.77"/>
            </svg>
            <h1 class="gradient-text neulis">santavia</h1>
            <p class="neulis">Votre santé en toute sérénité</p>
            <h2 class="neulis mt-24">Prenez rendez-vous</h2>
            <p class="text-center">
                Vous souhaitez obtenir un rendez-vous avec un professionnel de santé (infirmier.e, ostéopathe) ou une solution de transport ? Remplissez le formulaire afin de soumettre votre demande.
            </p>
            <a class="btn mt-12" href="{{ route('appointment.step-one') }}">démarrer</a>
        </div>
    </section>
@endsection
