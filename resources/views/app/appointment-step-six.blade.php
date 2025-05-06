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
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-white text-white">7</div>
            </div>
            <form class="mt-8 flex flex-col items-center gap-8" action="{{ route('appointment.step-six-submit') }}" method="POST">
                @csrf
                <h2 class="neulis">Quels soins avez-vous besoins ?</h2>
                <div class="flex flex-col gap-4 mt-8">
                    <div class="w-80 flex border-b-2 border-black mx-auto mt-8">
                        <input value="{{ session('start_location') ?? '' }}" type="text" name="start_location" id="start_location" class="text-2xl border-none w-80 neulis placeholder:text-black placeholder:font-bold" placeholder="lieu de départ">
                    </div>
                    <div class="w-80 flex border-b-2 border-black mx-auto">
                        <input value="{{ session('end_location') ?? '' }}" type="text" name="end_location" id="end_location" class="text-2xl border-none w-80 neulis placeholder:text-black placeholder:font-bold" placeholder="lieu de d'arrivée">
                    </div>
                    <div class="w-80 flex mt-8">
                        <input {{ str_contains(session('way'), "Aller simple") ? "checked" : "" }} type="radio" name="way" id="oneway" class="peer hidden" value="Aller simple">
                        <label for="oneway" class="neulis font-bold text-2xl flex flex-row items-center gap-4 w-80 text-center after:w-6 after:h-6 after:border-2 after:border-black peer-checked:after:bg-red-damask-400">
                            Aller simple
                        </label>
                    </div>
                    <div class="w-80 flex">
                        <input {{ str_contains(session('way'), "Aller/retour") ? "checked" : "" }} type="radio" name="way" id="wayback" class="peer hidden" value="Aller/retour">
                        <label for="wayback" class="neulis font-bold text-2xl flex flex-row items-center gap-4 w-80 text-center after:w-6 after:h-6 after:border-2 after:border-black peer-checked:after:bg-red-damask-400">
                            Aller/retour
                        </label>
                    </div>
                    <label for="travel_date">
                        <input class="btn-outline mt-8 w-80"
                               type="date"
                               id="travel_date"
                               name="travel_date"
                               min="2025-01-01"
                               value="{{ session('travel_date') ?? '' }}"
                        />
                    </label>
                    <p class="w-80">Un transporteur vous appellera pour organiser votre déplacement.</p>
                </div>
                <button type="submit" class="w-80 btn mt-12">poursuivre</button>
                <a href="{{ route('appointment.step-five') }}" class="w-80 btn-outline text-center cursor-pointer">retour</a>
            </form>
        </div>
    </section>
@endsection
