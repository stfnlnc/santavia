@extends('base', ['header' => false])

@section('content')
    <section class="w-full h-fit relative bg-white overflow-hidden">
        <div class="relative max-w-screen-xl z-20 container flex flex-col items-center justify-center gap-4 mx-auto py-24">
            <div class="flex flex-row flex-wrap gap-4">
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-red-damask-600 text-white">1</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-red-damask-600 text-white">2</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-red-damask-600 text-white">3</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-white text-white">4</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-white text-white">5</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-white text-white">6</div>
                <div class="shrink-0 rounded-full font-bold text-xl lg:text-2xl w-8 lg:w-12 h-8 lg:h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-white text-white">7</div>
            </div>
            <form class="mt-8 flex flex-col items-center gap-8" action="{{ route('appointment.step-three-submit') }}" method="POST">
                @csrf
                <h2 class="neulis">Quels soins avez-vous besoins ?</h2>
                <div class="flex flex-col items-center gap-4 mt-8">
                    <div class="w-80 flex">
                        <input {{ str_contains(session('prescription'), "Oui") ? "checked" : "" }} type="radio" name="prescription" id="prescription-yes" class="peer hidden" value="Oui">
                        <label for="prescription-yes" class="w-80 text-center btn-outline peer-checked:bg-red-damask-400 peer-checked:text-white">
                            Oui
                        </label>
                    </div>
                    <div class="w-80 flex">
                        <input {{ str_contains(session('prescription'), "Non") ? "checked" : "" }} type="radio" name="prescription" id="prescription-no" class="peer hidden" value="Non">
                        <label for="prescription-no" class="w-80 text-center btn-outline peer-checked:bg-red-damask-400 peer-checked:text-white">
                            Non
                        </label>
                    </div>
                    <label for="informations" class="mt-4 neulis font-bold text-2xl flex flex-col gap-4">
                        Donnez plus d'informations sur les soins attendus :
                        <textarea class="border-2 border-black" name="informations" id="informations" cols="30" rows="10">
                             {{ session('informations') ?? "" }}
                        </textarea>
                    </label>
                </div>
                <button type="submit" class="w-80 btn mt-12">poursuivre</button>
                <a href="{{ route('appointment.step-two') }}" class="w-80 btn-outline text-center cursor-pointer">retour</a>
            </form>
        </div>
    </section>
@endsection
