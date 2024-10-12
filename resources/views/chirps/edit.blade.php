<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Edit Chirp') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('chirps.update', $chirp) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <textarea name="message"
                            class="block w-full transition-colors duration-300 bg-white border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:focus:border-indigo-300 dark:focus:ring dark:focus:ring-indigo-200 dark:focus:ring-opacity-50"
                            placeholder="{{ __('What\'s on your mind?') }}">{{ old('message', $chirp->message) }}</textarea>
                        <x-input-error :messages="$errors->get('message')" class="mt-2" />
                        <x-primary-button class="mt-4">{{ __('Chirp') }}</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
