@extends('base', ['header' => false])

@section('content')
    <section class="w-full h-fit relative bg-white overflow-hidden">
        <div class="relative max-w-screen-xl z-20 container flex flex-col items-center justify-center gap-4 mx-auto py-24">
            <div class="flex flex-row flex-wrap gap-4">
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-red-damask-600 text-white">1</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-red-damask-600 text-white">2</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-red-damask-600 text-white">3</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-red-damask-600 text-white">4</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-white text-white">5</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-white text-white">6</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-white text-white">7</div>
            </div>
            <form class="mt-8 flex flex-col items-center gap-8" action="{{ route('appointment.step-four-submit') }}" method="POST">
                @csrf
                <h2 class="neulis font-bold">Durée des soins ?</h2>
                <div class="flex flex-col gap-4 mt-8">
                    <div class="w-80 flex">
                        <input {{ str_contains(session('duration'), "1 jour") ? "checked" : "" }} type="radio" name="duration" id="day" class="peer hidden" value="1 jour">
                        <label for="day" class="w-80 text-center btn-outline peer-checked:bg-red-damask-400 peer-checked:text-white">
                            1 jour
                        </label>
                    </div>
                    <div class="w-80 flex">
                        <input {{ str_contains(session('duration'), "3 jours") ? "checked" : "" }} type="radio" name="duration" id="days" class="peer hidden" value="3 jours">
                        <label for="days" class="w-80 text-center btn-outline peer-checked:bg-red-damask-400 peer-checked:text-white">
                            3 jours
                        </label>
                    </div>
                    <div class="w-80 flex">
                        <input {{ str_contains(session('duration'), "1 semaine") ? "checked" : "" }} type="radio" name="duration" id="week" class="peer hidden" value="1 semaine">
                        <label for="week" class="w-80 text-center btn-outline peer-checked:bg-red-damask-400 peer-checked:text-white">
                            1 semaine
                        </label>
                    </div>
                    <div class="w-80 flex">
                        <input {{ str_contains(session('duration'), "2 semaines") ? "checked" : "" }} type="radio" name="duration" id="weeks" class="peer hidden" value="2 semaines">
                        <label for="weeks" class="w-80 text-center btn-outline peer-checked:bg-red-damask-400 peer-checked:text-white">
                            2 semaines
                        </label>
                    </div>
                    <div class="w-80 flex flex-col gap-2 border-b-2 border-black mx-auto mt-8">
                        <input {{ session('duration_other') === "autre" ? "checked" : "" }} type="radio" name="duration" id="autres" class="peer hidden" value="autre">
                        <label for="autres" class="w-80 text-center btn-outline peer-checked:bg-red-damask-400 peer-checked:text-white">
                            Autre
                        </label>
                        <input value="{{ session('duration_other') === "autre" && session('duration') ? session('duration') : "" }}" type="text" name="duration_other" id="autre" class="border-none w-80 neulis placeholder:text-black placeholder:font-bold" placeholder="Autre">
                    </div>
                </div>
                <button type="submit" class="w-80 btn mt-12">poursuivre</button>
                <a href="{{ route('appointment.step-three') }}" class="w-80 btn-outline text-center cursor-pointer">retour</a>
            </form>
        </div>
    </section>
@endsection
