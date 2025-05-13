<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-neutral-800 leading-tight">
            {{ __('Les rendez-vous') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-neutral-100 overflow-hidden shadow-xs sm:rounded-lg">
                Ajouter un professionnel
                <form class="p-4 rounded-lg bg-white flex lg:flex-row flex-col gap-4" method="post" action="{{ route('professions.store') }}">
                    @csrf
                    <div class="mt-2">
                        <x-text-input value="{{ old('name') ?? '' }}" type="text" name="name" id="name" placeholder="Nom"/>
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('phone')"/>
                    <div class="mt-2">
                        <x-text-input value="{{ old('phone') ?? '' }}" type="text" name="phone" id="phone" placeholder="Téléphone"/>
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('email')"/>
                    <div class="mt-2">
                        <x-text-input value="{{ old('email') ?? '' }}" type="text" name="email" id="email" placeholder="Email"/>
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('name')"/>
                    <div class="mt-2">
                        <x-text-input value="{{ old('job') ?? '' }}" type="text" name="job" id="job" placeholder="Profession"/>
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('job')"/>
                    <x-primary-button class="mt-2 w-fit">Enregistrer</x-primary-button>
                </form>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-neutral-500">
                            <thead class="text-xs text-neutral-700 uppercase bg-neutral-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nom Prénom
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Téléphone
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Profession
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($professions as $profession)
                                <tr class="bg-white border-b border-neutral-200 hover:bg-neutral-50">
                                    <th scope="row" class="px-6 py-4 font-medium text-neutral-900 whitespace-nowrap">
                                        {{ $profession->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $profession->phone }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $profession->email }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $profession->job }}
                                    </td>
                                    <td class="px-6 py-4 space-x-2 text-right">
                                        <form method="post" action="{{ route('professions.destroy', $profession) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Supprimer le professionnel ?')" type="submit" class="font-medium text-red-damask-600 hover:underline">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
