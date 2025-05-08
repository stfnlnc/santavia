@extends('base', ['header' => true])

@section('content')
    <section class="w-full h-fit relative bg-white">
        <img class="absolute w-full h-full object-center object-cover top-0 left-0 z-10 opacity-10" src="{{ asset('assets/images/hero.jpg') }}" alt="">
        <div class="relative z-20 container h-[100lvh] min-h-240 flex flex-col items-center justify-center gap-4 mx-auto">
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
            <a class="btn mt-12" href="{{ route('appointment.start') }}">je prends rendez-vous</a>
        </div>
    </section>
    <section id="a-propos" class="w-full h-fit relative bg-white">
        <div class="container py-72 flex flex-col gap-12 relative h-fit">
            <h2 class="neulis font-bold">À propos <br> de Santavia</h2>
            <p class="max-w-200">
                Trouver un.e <span class="font-bold">infirmièr.e ou un ostéopathe</span> durant son voyage peut être un véritable
                casse-tête.
                C’est pourquoi, <span class="neulis font-bold text-red-damask-600">Santavia</span> facilite <span class="text-red-damask-600">l’accès aux soins*</span> pour tous les voyageurs, sur leur
                lieu de séjour.
            </p>
            <svg class="absolute w-full top-0 left-0 -translate-y-36 opacity-10 z-10" fill="#e174aa" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 568.64 486.9">
                <path d="M0,205.15l29.06-48.39c53.27,31.98,108.72,55.39,165.58,69.94C238.85,97.67,305.4,17.7,386.32,2.44c47.8-9.01,130.99,5.58,166.31,66.26,35.15,60.59,7.87,137.94-37.58,182.7-67.39,66.41-164.4,55.33-249.98,45.57-10.49-1.21-20.94-2.66-31.35-4.39-15.57,56.92-27.31,122.35-34.28,194.31h0c-31.1-3.01-53.81-31.25-49.61-62.21,7.08-52.13,16.61-100.26,28.36-143.92-61.29-15.95-120.95-41.25-178.19-75.62ZM505.23,99.63c-.45-.87-.91-1.7-1.4-2.55-20.31-34.91-75.22-45.18-107.05-39.17-58.23,10.99-109.55,76.77-146.23,180.61,82.77,8.97,172.3,24.48,224.88-27.31,28.89-28.48,47.41-77.41,29.8-111.58Z"/>
            </svg>
        </div>
        <div class="w-full h-24 bg-white absolute left-0 -bottom-12 z-5 radius-container"></div>
    </section>
    <section id="notre-mission" class="w-full h-fit bg-gradient-to-tr from-red-damask-400 to-[#e9afc8] from-70%">
        <div class="text-white container py-96 flex flex-col gap-12 relative h-fit">
            <h2 class="neulis font-bold">La mission <br>
                de santavia</h2>
            <p class="max-w-200">
                Vous permettre de <span class="font-bold">profiter pleinement de votre séjour</span> sans vous soucier de votre
                santé ou de votre handicap.
                En tout tranquillité, découvrez ou redécouvrez Lourdes, son sanctuaire et l’environnement qu’offrent les Pyrénées au fil des saisons.
            </p>
        </div>
    </section>
    <section class="w-full h-fit relative ">
        <div class="w-full h-24 bg-white absolute left-0 -top-12 z-20 radius-container"></div>
        <div class="container py-48 flex flex-col items-center gap-12 relative h-fit">
            <h2 class="neulis relative w-fit self-start font-bold">Pourquoi faire appel <br>
                à santavia ?
                <svg class="rotate-270 absolute w-96 top-1/2 left-full -translate-x-1/2 -translate-y-36 opacity-10 -z-20" fill="#e174aa" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 568.64 486.9">
                    <path d="M0,205.15l29.06-48.39c53.27,31.98,108.72,55.39,165.58,69.94C238.85,97.67,305.4,17.7,386.32,2.44c47.8-9.01,130.99,5.58,166.31,66.26,35.15,60.59,7.87,137.94-37.58,182.7-67.39,66.41-164.4,55.33-249.98,45.57-10.49-1.21-20.94-2.66-31.35-4.39-15.57,56.92-27.31,122.35-34.28,194.31h0c-31.1-3.01-53.81-31.25-49.61-62.21,7.08-52.13,16.61-100.26,28.36-143.92-61.29-15.95-120.95-41.25-178.19-75.62ZM505.23,99.63c-.45-.87-.91-1.7-1.4-2.55-20.31-34.91-75.22-45.18-107.05-39.17-58.23,10.99-109.55,76.77-146.23,180.61,82.77,8.97,172.3,24.48,224.88-27.31,28.89-28.48,47.41-77.41,29.8-111.58Z"/>
                </svg>
            </h2>
            <div class="flex flex-col lg:flex-row gap-12 neulis text-white text-4xl font-bold justify-center items-center text-center mt-12">
                <card class="bg-[#f08619] rounded-4xl p-8 w-68 h-68 flex flex-col justify-center items-center">
                    Qualité et
                    confiance
                </card>
                <card class="bg-[#f08619] rounded-4xl p-8 w-68 h-68 flex flex-col justify-center items-center">
                    Prise en
                    charge 7/7j
                </card>
                <card class="bg-[#f08619] rounded-4xl p-8 w-68 h-68 flex flex-col justify-center items-center">
                    Suivi sur
                    mesure
                </card>
            </div>
            <a class="btn mt-12" href="{{ route('appointment.start') }}">je prends rendez-vous</a>
        </div>
        <div class="w-full h-24 bg-white absolute left-0 -bottom-12 z-20 radius-container"></div>
    </section>
    <section id="nos-soins" class="w-full h-fit bg-gradient-to-tr from-[#ffef27] to-[#e9afc8] from-70%">
        <div class="text-black container py-72 flex flex-col gap-12 relative h-fit items-center">
            <h2 class="neulis font-bold">Quels types de soins ?</h2>
            <div class="flex flex-col gap-8 mt-12">
                <div class="btn-outline text-xl lg:text-4xl w-full md:w-160 py-4 lg:py-8 text-center">pansement</div>
                <div class="btn-outline text-xl lg:text-4xl w-full md:w-160 py-4 lg:py-8 text-center">prise de sang</div>
                <div class="btn-outline text-xl lg:text-4xl w-full md:w-160 py-4 lg:py-8 text-center">injection</div>
                <div class="btn-outline text-xl lg:text-4xl w-full md:w-160 py-4 lg:py-8 text-center">aide à la toilette</div>
                <div class="btn-outline text-xl lg:text-4xl w-full md:w-160 py-4 lg:py-8 text-center">perfusion</div>
                <div class="btn-outline text-xl lg:text-4xl w-full md:w-160 py-4 lg:py-8 text-center">glycémie</div>
                <div class="btn-outline text-xl lg:text-4xl w-full md:w-160 py-4 lg:py-8 text-center">séance d’ostéopathie</div>
            </div>
        </div>
    </section>
    <section class="w-full h-fit relative ">
        <div class="container py-48 flex flex-col items-center gap-12 relative h-fit">
            <a href="{{ route('appointment.start') }}" class="btn">je prends rendez-vous</a>
            <h2 class="neulis text-red-damask-600 relative w-fit text-left lg:text-center mt-24 font-bold">Voyager <br> sans contrainte,
            </h2>
            <p class="neulis text-lg lg:text-3xl text-[#e9afc8] -mt-12 font-bold">même avec des besoins de santé.</p>
            <h2 class="neulis relative w-fit self-start mt-48 font-bold">Comment <br> ça marche ?
                <svg class="rotate-270 absolute w-160 top-0 left-0 -translate-x-1/2 -translate-y-36 opacity-10 -z-20" fill="#e174aa" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 568.64 486.9">
                    <path d="M0,205.15l29.06-48.39c53.27,31.98,108.72,55.39,165.58,69.94C238.85,97.67,305.4,17.7,386.32,2.44c47.8-9.01,130.99,5.58,166.31,66.26,35.15,60.59,7.87,137.94-37.58,182.7-67.39,66.41-164.4,55.33-249.98,45.57-10.49-1.21-20.94-2.66-31.35-4.39-15.57,56.92-27.31,122.35-34.28,194.31h0c-31.1-3.01-53.81-31.25-49.61-62.21,7.08-52.13,16.61-100.26,28.36-143.92-61.29-15.95-120.95-41.25-178.19-75.62ZM505.23,99.63c-.45-.87-.91-1.7-1.4-2.55-20.31-34.91-75.22-45.18-107.05-39.17-58.23,10.99-109.55,76.77-146.23,180.61,82.77,8.97,172.3,24.48,224.88-27.31,28.89-28.48,47.41-77.41,29.8-111.58Z"/>
                </svg>
            </h2>
            <div class="text-left w-full flex flex-col gap-12 neulis text-black text-4xl font-medium justify-start items-start mt-12 border-l-4 border-red-damask-600">
                <card class="flex flex-row py-16 -ml-6 gap-4 lg:gap-12 items-center">
                    <div class="shrink-0 rounded-full w-12 h-12 flex flex-col items-center justify-center bg-red-damask-600 text-white">1</div>
                    <p class="max-w-240 neulis text-xl lg:text-4xl font-semibold">
                        Remplissez le <span class="text-red-damask-600">formulaire de demande
                        d’intervention</span> avant votre départ
                    </p>
                </card>
                <card class="flex flex-row py-16 -ml-6 gap-4 lg:gap-12 items-center">
                    <div class="shrink-0 rounded-full w-12 h-12 flex flex-col items-center justify-center bg-red-damask-600 text-white">2</div>
                    <p class="max-w-240 neulis text-xl lg:text-4xl font-semibold">
                        Un professionel vous est attribué selon votre localisation de
                        séjour et vos besoins
                    </p>
                </card>
                <card class="flex flex-row py-16 -ml-6 gap-4 lg:gap-12 items-center">
                    <div class="shrink-0 rounded-full w-12 h-12 flex flex-col items-center justify-center bg-red-damask-600 text-white">3</div>
                    <p class="max-w-240 neulis text-xl lg:text-4xl font-semibold">
                        <span class="text-red-damask-600">Vous êtes contacté</span> pour organiser la prise en charge et fixer le
                        passage du professionnel
                    </p>
                </card>
                <card class="flex flex-row py-16 -ml-6 gap-4 lg:gap-12 items-center">
                    <div class="shrink-0 rounded-full w-12 h-12 flex flex-col items-center justify-center bg-red-damask-600 text-white">4</div>
                    <p class="max-w-240 neulis text-xl lg:text-4xl font-semibold">
                        Vous <span class="text-red-damask-600">recevez vos soins</span> sur votre lieu de séjour (hôtel, airbnb,
                        gîte...)
                    </p>
                </card>
                <card class="flex flex-row py-16 -ml-6 gap-4 lg:gap-12 items-center">
                    <div class="shrink-0 rounded-full w-12 h-12 flex flex-col items-center justify-center bg-red-damask-600 text-white">5</div>
                    <p class="max-w-240 neulis text-xl lg:text-4xl font-semibold">
                        Vous <span class="text-red-damask-600">profitez</span> pleinement et sereinement
                    </p>
                </card>
            </div>
            <a class="btn mt-12" href="{{ route('appointment.start') }}">je prends rendez-vous</a>
            <div class="max-w-240 bg-red-damask-500 text-white rounded-4xl p-8 lg:p-24 flex flex-col items-center gap-12 relative mt-48">
                <div class="neulis text-4xl font-bold mt-12 lg:mt-0">Besoin d’un transport ?</div>
                <p class="text-xl">
                    Équipés d’un véhicule TPMR, nous prenons également en charge les
                    personnes à mobilité réduite et leur accompagnant, dès leur arrivée
                    sur le territoire haut-pyrénéen et ce quel que soit la destination.
                </p>
                <svg class="absolute top-0 left-0 -translate-x-1/4 -translate-y-1/4 w-20 lg:w-32 h-20 lg:h-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60.23 60.23">
                    <circle fill="#fff" stroke="#fa5417" stroke-miterlimit="10" stroke-width="2" class="cls-1" cx="30.11" cy="30.11" r="29.11"/>
                    <path fill="#fa5417" stroke="#fa5417" stroke-miterlimit="10" d="M26.2,33.96h-8.81v-8.08h8.81v-8.87h8.2v8.87h8.81v8.08h-8.81v8.87h-8.2v-8.87Z"/>
                </svg>
            </div>
        </div>
    </section>
    <section class="w-full h-fit relative bg-white">
        <div class="relative z-20 container py-48 flex flex-col items-center justify-center gap-4 mx-auto">
            <svg class="w-40 h-40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.54 33.6">
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
            <a class="btn" href="">contactez-nous</a>
            <div class="flex flex-col text-center gap-2 mt-12">
                <a href="" class="neulis">Mentions légales</a>
                <a href="" class="neulis">Politique de confidentialité</a>
                <a href="" class="neulis">Politique de cookies</a>
            </div>
        </div>
    </section>
@endsection
