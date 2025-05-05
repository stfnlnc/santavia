@extends('base', ['header' => false])

@section('content')
    <section class="w-full h-fit relative bg-white overflow-hidden">
        <div class="relative max-w-screen-xl z-20 container flex flex-col items-center justify-center gap-4 mx-auto py-24">
            <div class="flex flex-row gap-4">
                <div class="shrink-0 rounded-full font-bold text-2xl w-12 h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-red-damask-600 text-white">1</div>
                <div class="shrink-0 rounded-full font-bold text-2xl w-12 h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-red-damask-600 text-white">2</div>
                <div class="shrink-0 rounded-full font-bold text-2xl w-12 h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-red-damask-600 text-white">3</div>
                <div class="shrink-0 rounded-full font-bold text-2xl w-12 h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-red-damask-600 text-white">4</div>
                <div class="shrink-0 rounded-full font-bold text-2xl w-12 h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-white text-white">5</div>
                <div class="shrink-0 rounded-full font-bold text-2xl w-12 h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-white text-white">6</div>
                <div class="shrink-0 rounded-full font-bold text-2xl w-12 h-12 flex flex-col items-center justify-center border border-red-damask-600 bg-white text-white">7</div>
            </div>
            <form action="{{ route('appointment.step-four-submit') }}" method="POST">
                @csrf
                <button type="submit" class="btn mt-12">poursuivre</button>
            </form>
        </div>
    </section>
@endsection
