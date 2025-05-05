@extends('base', ['header' => false])

@section('content')
    <section class="w-full h-fit relative bg-white overflow-hidden">
        <div class="relative max-w-screen-xl z-20 container flex flex-col items-center justify-center gap-4 mx-auto py-24">
            <div class="flex flex-row gap-4">
                <div class="shrink-0 rounded-full font-bold text-2xl w-12 h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-red-damask-600 text-white">1</div>
                <div class="shrink-0 rounded-full font-bold text-2xl w-12 h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-red-damask-600 text-white">2</div>
                <div class="shrink-0 rounded-full font-bold text-2xl w-12 h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-white text-white">3</div>
                <div class="shrink-0 rounded-full font-bold text-2xl w-12 h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-white text-white">4</div>
                <div class="shrink-0 rounded-full font-bold text-2xl w-12 h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-white text-white">5</div>
                <div class="shrink-0 rounded-full font-bold text-2xl w-12 h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-white text-white">6</div>
                <div class="shrink-0 rounded-full font-bold text-2xl w-12 h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-white text-white">7</div>
            </div>
            <form class="mt-8 flex flex-col items-center gap-8" action="{{ route('appointment.step-two-submit') }}" method="POST">
                @csrf
                <h2 class="neulis">Quels soins avez-vous besoins ?</h2>
                <div class="flex flex-col gap-4 mt-8">
                    <div class="w-80 flex">
                        <input type="checkbox" name="pansement" id="pansement" class="peer hidden" value="Pansement">
                        <label for="pansement" class="w-80 text-center btn-outline peer-checked:bg-red-damask-400 peer-checked:text-white">
                            pansement
                        </label>
                    </div>
                    <div class="w-80 flex">
                        <input type="checkbox" name="prise" id="prise" class="peer hidden" value="Prise de sang">
                        <label for="prise" class="w-80 text-center btn-outline peer-checked:bg-red-damask-400 peer-checked:text-white">
                            prise de sang
                        </label>
                    </div>
                    <div class="w-80 flex">
                        <input type="checkbox" name="injection" id="injection" class="peer hidden" value="Injection">
                        <label for="injection" class="w-80 text-center btn-outline peer-checked:bg-red-damask-400 peer-checked:text-white">
                            injection
                        </label>
                    </div>
                    <div class="w-80 flex">
                        <input type="checkbox" name="toilette" id="toilette" class="peer hidden" value="Aide à la toilette">
                        <label for="toilette" class="w-80 text-center btn-outline peer-checked:bg-red-damask-400 peer-checked:text-white">
                            aide à la toilette
                        </label>
                    </div>
                    <div class="w-80 flex">
                        <input type="checkbox" name="perfusion" id="perfusion" class="peer hidden" value="Perfusion">
                        <label for="perfusion" class="w-80 text-center btn-outline peer-checked:bg-red-damask-400 peer-checked:text-white">
                            perfusion
                        </label>
                    </div>
                    <div class="w-80 flex">
                        <input type="checkbox" name="glycemie" id="glycemie" class="peer hidden" value="Glycémie">
                        <label for="glycemie" class="w-80 text-center btn-outline peer-checked:bg-red-damask-400 peer-checked:text-white">
                            glycémie
                        </label>
                    </div>
                    <div class="w-80 flex">
                        <input type="checkbox" name="osteo" id="osteo" class="peer hidden" value="Séance d'ostéopathie">
                        <label for="osteo" class="w-80 text-center btn-outline peer-checked:bg-red-damask-400 peer-checked:text-white">
                            séance d'ostéopathie
                        </label>
                    </div>
                    <div class="w-80 flex border-b-2 border-black mx-auto mt-8">
                        <input type="text" name="autre" id="autre" class="border-none w-80 neulis placeholder:text-black placeholder:font-bold" placeholder="Autre">
                    </div>
                </div>
                <button type="submit" class="w-80 btn mt-8">poursuivre</button>
            </form>
        </div>
    </section>
@endsection
