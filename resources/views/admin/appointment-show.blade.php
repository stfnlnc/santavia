<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-neutral-800 leading-tight">
            {{ $appointment->lastname }} {{ $appointment->firstname }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="odd:bg-neutral-100 even:bg-white overflow-hidden shadow-xs sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-neutral-500">
                        <thead class="text-xs text-neutral-700 uppercase bg-neutral-200">
                        <tr>
                            <th scope="col" class="px-6 py-3">

                            </th>
                            <th scope="col" class="px-6 py-3">
                                Informations
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd:bg-neutral-100 even:odd:bg-neutral-100 even:bg-white border-b border-neutral-200 hover:bg-neutral-50">
                            <th scope="row" class="px-6 py-4 font-medium text-neutral-900 whitespace-nowrap">
                                Nom Prénom
                            </th>
                            <td class="px-6 py-4">
                                {{ $appointment->lastname }} {{ $appointment->firstname }}
                            </td>
                        </tr>
                        <tr class="odd:bg-neutral-100 even:bg-white border-b border-neutral-200 hover:bg-neutral-50">
                            <th scope="row" class="px-6 py-4 font-medium text-neutral-900 whitespace-nowrap">
                                Téléphone
                            </th>
                            <td class="px-6 py-4">
                                {{ $appointment->phone }}
                            </td>
                        </tr>
                        <tr class="odd:bg-neutral-100 even:bg-white border-b border-neutral-200 hover:bg-neutral-50">
                            <th scope="row" class="px-6 py-4 font-medium text-neutral-900 whitespace-nowrap">
                                Email
                            </th>
                            <td class="px-6 py-4">
                                {{ $appointment->email }}
                            </td>
                        </tr>
                        <tr class="odd:bg-neutral-100 even:bg-white border-b border-neutral-200 hover:bg-neutral-50">
                            <th scope="row" class="px-6 py-4 font-medium text-neutral-900 whitespace-nowrap">
                                Date de naissance
                            </th>
                            <td class="px-6 py-4">
                                {{ date('d/m/Y', strtotime($appointment->birth)) }}
                            </td>
                        </tr>
                        <tr class="odd:bg-neutral-100 even:bg-white border-b border-neutral-200 hover:bg-neutral-50">
                            <th scope="row" class="px-6 py-4 font-medium text-neutral-900 whitespace-nowrap">
                                Adresse
                            </th>
                            <td class="px-6 py-4">
                                {{ $appointment->address }}
                            </td>
                        </tr>
                        <tr class="odd:bg-neutral-100 even:bg-white border-b border-neutral-200 hover:bg-neutral-50">
                            <th scope="row" class="px-6 py-4 font-medium text-neutral-900 whitespace-nowrap">
                                Code postal
                            </th>
                            <td class="px-6 py-4">
                                {{ $appointment->postal_code }}
                            </td>
                        </tr>
                        <tr class="odd:bg-neutral-100 even:bg-white border-b border-neutral-200 hover:bg-neutral-50">
                            <th scope="row" class="px-6 py-4 font-medium text-neutral-900 whitespace-nowrap">
                                Ville
                            </th>
                            <td class="px-6 py-4">
                                {{ $appointment->city }}
                            </td>
                        </tr>
                        <tr class="odd:bg-neutral-100 even:bg-white border-b border-neutral-200 hover:bg-neutral-50">
                            <th scope="row" class="px-6 py-4 font-medium text-neutral-900 whitespace-nowrap">
                                Nationalité
                            </th>
                            <td class="px-6 py-4">
                                {{ $appointment->nationality }}
                            </td>
                        </tr>
                        <tr>
                            <th class="h-1 bg-red-damask-500"></th>
                            <td class="h-1 w-full bg-red-damask-500"></td>
                        </tr>
                        <tr class="odd:bg-neutral-100 even:bg-white border-b border-neutral-200 hover:bg-neutral-50">
                            <th scope="row" class="px-6 py-4 font-medium text-neutral-900 whitespace-nowrap">
                                Recherche
                            </th>
                            <td class="px-6 py-4">
                                {{ $appointment->type }}
                            </td>
                        </tr>
                        <tr class="odd:bg-neutral-100 even:bg-white border-b border-neutral-200 hover:bg-neutral-50">
                            <th scope="row" class="px-6 py-4 font-medium text-neutral-900 whitespace-nowrap">
                                Type de soins
                            </th>
                            <td class="px-6 py-4">
                                {{ $appointment->care }}
                            </td>
                        </tr>
                        <tr class="odd:bg-neutral-100 even:bg-white border-b border-neutral-200 hover:bg-neutral-50">
                            <th scope="row" class="px-6 py-4 font-medium text-neutral-900 whitespace-nowrap">
                                Ordonnance
                            </th>
                            <td class="px-6 py-4">
                                {{ $appointment->prescription }}
                            </td>
                        </tr>
                        <tr class="odd:bg-neutral-100 even:bg-white border-b border-neutral-200 hover:bg-neutral-50">
                            <th scope="row" class="px-6 py-4 font-medium text-neutral-900 whitespace-nowrap">
                                Date de début des soins
                            </th>
                            <td class="px-6 py-4">
                                {{ date('d/m/Y', strtotime($appointment->start_date)) }}
                            </td>
                        </tr>
                        <tr class="odd:bg-neutral-100 even:bg-white border-b border-neutral-200 hover:bg-neutral-50">
                            <th scope="row" class="px-6 py-4 font-medium text-neutral-900 whitespace-nowrap">
                                Informations supplémentaires
                            </th>
                            <td class="px-6 py-4">
                                {{ $appointment->informations }}
                            </td>
                        </tr>
                        @if(str_contains($appointment->type, "Transporteur"))
                            <tr>
                                <th class="h-1 bg-red-damask-500"></th>
                                <td class="h-1 w-full bg-red-damask-500"></td>
                            </tr>
                            <tr class="odd:bg-neutral-100 even:bg-white border-b border-neutral-200 hover:bg-neutral-50">
                                <th scope="row" class="px-6 py-4 font-medium text-neutral-900 whitespace-nowrap">
                                    Lieu de départ
                                </th>
                                <td class="px-6 py-4">
                                    {{ $appointment->start_location }}
                                </td>
                            </tr>
                            <tr class="odd:bg-neutral-100 even:bg-white border-b border-neutral-200 hover:bg-neutral-50">
                                <th scope="row" class="px-6 py-4 font-medium text-neutral-900 whitespace-nowrap">
                                    Lieu d'arrivée
                                </th>
                                <td class="px-6 py-4">
                                    {{ $appointment->end_location }}
                                </td>
                            </tr>
                            <tr class="odd:bg-neutral-100 even:bg-white border-b border-neutral-200 hover:bg-neutral-50">
                                <th scope="row" class="px-6 py-4 font-medium text-neutral-900 whitespace-nowrap">
                                    Trajet
                                </th>
                                <td class="px-6 py-4">
                                    {{ $appointment->way }}
                                </td>
                            </tr>
                            <tr class="odd:bg-neutral-100 even:bg-white border-b border-neutral-200 hover:bg-neutral-50">
                                <th scope="row" class="px-6 py-4 font-medium text-neutral-900 whitespace-nowrap">
                                    Date du séjour
                                </th>
                                <td class="px-6 py-4">
                                    {{ date('d/m/Y', strtotime($appointment->travel_date)) }}
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
