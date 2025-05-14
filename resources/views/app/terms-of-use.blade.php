@extends('base', ['header' => false])

@section('content')
    <section class="w-full h-fit relative bg-white overflow-hidden">
        <div class="relative max-w-screen-xl z-20 container flex flex-col items-center justify-center gap-4 mx-auto py-24 neulis">
            <div class="flex flex-col items-center justify-center">
                <h1 class="gradient-text neulis">santavia</h1>
                <h2 class="neulis mt-24 font-bold mb-16">Mentions légales</h2>
            </div>
            <div>
                {!! $terms_of_use->content !!}
            </div>
        </div>
    </section>
@endsection
