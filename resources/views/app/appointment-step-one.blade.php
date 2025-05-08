@extends('base', ['header' => false])

@section('content')
    <section class="w-full h-fit relative bg-white overflow-hidden">
        <div class="relative max-w-screen-xl z-20 container flex flex-col items-center justify-center gap-4 mx-auto py-24">
            <div class="flex flex-row flex-wrap gap-4">
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-red-damask-600 text-white">1</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-white text-white">2</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-white text-white">3</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-white text-white">4</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-white text-white">5</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-white text-white">6</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-white text-white">7</div>
            </div>
            <form class="mt-8 flex flex-col items-center gap-8" action="{{ route('appointment.step-one-submit') }}" method="POST">
                @csrf
                <h2 class="neulis font-bold">Vous cherchez</h2>
                <div class="flex flex-col gap-4 mt-8">
                    <div class="w-80 flex">
                        <input {{ str_contains(session('type'), "Infirmier") ? "checked" : "" }} type="checkbox" name="infirmier" id="infirmier" class="peer hidden" value="Infirmier.e">
                        <label for="infirmier" class="w-80 text-center btn-outline peer-checked:bg-red-damask-400 peer-checked:text-white">
                            infirmier.e
                        </label>
                    </div>
                    <div class="w-80 flex">
                        <input {{ str_contains(session('type'), "Ostéopathe") ? "checked" : "" }} type="checkbox" name="osteo" id="osteo" class="peer hidden" value="Ostéopathe">
                        <label for="osteo" class="w-80 text-center btn-outline peer-checked:bg-red-damask-400 peer-checked:text-white">
                            ostéopathe
                        </label>
                    </div>
                    <div class="w-80 flex">
                        <input {{ str_contains(session('type'), "Transporteur") ? "checked" : "" }} type="checkbox" name="transporteur" id="transporteur" class="peer hidden" value="Transporteur">
                        <label for="transporteur" class="w-80 text-center btn-outline peer-checked:bg-red-damask-400 peer-checked:text-white">
                            transporteur
                        </label>
                    </div>
                </div>
                <button type="submit" class="w-80 btn mt-8">poursuivre</button>
            </form>
        </div>
    </section>
@endsection
