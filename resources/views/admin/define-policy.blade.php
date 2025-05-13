<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-neutral-800 leading-tight">
            {{ __('Les rendez-vous') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xs sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4 sm:p-8">
                    <form method="post" action="{{ route('appointment.edit-policy') }}">
                        @csrf
                        <div class="mb-4 flex flex-col gap-2">
                            <x-input-label for="privacy_policy">Politique de confidentialité</x-input-label>
                            <x-forms.tinymce-editor id="privacy_policy" name="privacy_policy">
                                {{ $privacy_policy }}
                            </x-forms.tinymce-editor>
                        </div>
                        <div class="mb-4 flex flex-col gap-2">
                            <x-input-label for="terms_of_use">Mentions légales</x-input-label>
                            <x-forms.tinymce-editor id="terms_of_use" name="terms_of_use">
                                {{ $terms_of_use }}
                            </x-forms.tinymce-editor>
                        </div>
                        <div class="mb-4 flex flex-col gap-2">
                            <x-input-label for="cookies_consent">Cookies</x-input-label>
                            <x-forms.tinymce-editor id="cookies_consent" name="cookies_consent">
                                {{ $cookies_consent }}
                            </x-forms.tinymce-editor>
                        </div>
                        <x-primary-button>Envoyer</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
