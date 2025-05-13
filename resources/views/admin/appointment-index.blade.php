<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-neutral-800 leading-tight">
            {{ __('Les rendez-vous') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-neutral-100 overflow-hidden shadow-xs sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="w-full p-4 text-base text-center bg-neutral-300 uppercase">
                        En attente
                    </div>
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
                                Recherche
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Début des soins
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Adresse de séjour
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Statut
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Actions</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($appointments as $appointment)
                            <tr class="bg-white border-b border-neutral-200 hover:bg-neutral-50">
                                <th scope="row" class="px-6 py-4 font-medium text-neutral-900 whitespace-nowrap">
                                    {{ $appointment->lastname }} {{ $appointment->firstname }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $appointment->phone }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $appointment->type }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ date('d/m/Y', strtotime($appointment->start_date)) }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $appointment->address }}, {{ $appointment->postal_code }} {{ $appointment->city }}
                                </td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('appointment.change-status', $appointment) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <select class="rounded-lg text-sm" name="status" onchange="this.form.submit()">
                                            <option {{ $appointment->status === "En attente" ? "selected" : "" }} value="En attente">En attente</option>
                                            <option {{ $appointment->status === "Programmé" ? "selected" : "" }} value="Programmé">Programmé</option>
                                            <option {{ $appointment->status === "Terminé" ? "selected" : "" }} value="Terminé">Terminé</option>
                                        </select>
                                    </form>
                                </td>
                                <td class="px-6 py-4 space-x-2 text-right">
                                    <a href="{{ route('appointment.show', $appointment) }}" class="font-medium text-neutral-600 hover:underline">Voir</a>
                                    <form method="post" action="{{ route('appointment.destroy', $appointment) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Supprimer la demande ?')" type="submit" class="font-medium text-red-damask-600 hover:underline">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8">
                    <div class="w-full p-4 text-base text-center bg-neutral-300 uppercase">
                        Programmés
                    </div>
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
                                Recherche
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Début des soins
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Adresse de séjour
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Statut
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Actions</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($appointments_programmed as $appointment)
                            <tr class="bg-white border-b border-neutral-200 hover:bg-neutral-50">
                                <th scope="row" class="px-6 py-4 font-medium text-neutral-900 whitespace-nowrap">
                                    {{ $appointment->lastname }} {{ $appointment->firstname }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $appointment->phone }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $appointment->type }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ date('d/m/Y', strtotime($appointment->start_date)) }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $appointment->address }}, {{ $appointment->postal_code }} {{ $appointment->city }}
                                </td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('appointment.change-status', $appointment) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <select class="rounded-lg text-sm" name="status" onchange="this.form.submit()">
                                            <option {{ $appointment->status === "En attente" ? "selected" : "" }} value="En attente">En attente</option>
                                            <option {{ $appointment->status === "Programmé" ? "selected" : "" }} value="Programmé">Programmé</option>
                                            <option {{ $appointment->status === "Terminé" ? "selected" : "" }} value="Terminé">Terminé</option>
                                        </select>
                                    </form>
                                </td>
                                <td class="px-6 py-4 space-x-2 text-right">
                                    <a href="{{ route('appointment.show', $appointment) }}" class="font-medium text-neutral-600 hover:underline">Voir</a>
                                    <form method="post" action="{{ route('appointment.destroy', $appointment) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Supprimer la demande ?')" type="submit" class="font-medium text-red-damask-600 hover:underline">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8">
                    <div class="w-full p-4 text-base text-center bg-neutral-300 uppercase">
                        Terminés
                    </div>
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
                                Recherche
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Début des soins
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Adresse de séjour
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Statut
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Actions</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($appointments_finished as $appointment)
                            <tr class="bg-white border-b border-neutral-200 hover:bg-neutral-50">
                                <th scope="row" class="px-6 py-4 font-medium text-neutral-900 whitespace-nowrap">
                                    {{ $appointment->lastname }} {{ $appointment->firstname }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $appointment->phone }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $appointment->type }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ date('d/m/Y', strtotime($appointment->start_date)) }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $appointment->address }}, {{ $appointment->postal_code }} {{ $appointment->city }}
                                </td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('appointment.change-status', $appointment) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <select class="rounded-lg text-sm" name="status" onchange="this.form.submit()">
                                            <option {{ $appointment->status === "En attente" ? "selected" : "" }} value="En attente">En attente</option>
                                            <option {{ $appointment->status === "Programmé" ? "selected" : "" }} value="Programmé">Programmé</option>
                                            <option {{ $appointment->status === "Terminé" ? "selected" : "" }} value="Terminé">Terminé</option>
                                        </select>
                                    </form>
                                </td>
                                <td class="px-6 py-4 space-x-2 text-right">
                                    <a href="{{ route('appointment.show', $appointment) }}" class="font-medium text-neutral-600 hover:underline">Voir</a>
                                    <form method="post" action="{{ route('appointment.destroy', $appointment) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Supprimer la demande ?')" type="submit" class="font-medium text-red-damask-600 hover:underline">Supprimer</button>
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
