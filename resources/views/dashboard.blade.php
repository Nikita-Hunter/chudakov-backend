<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Добро пожаловать') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex items-center justify-between">
                    {{ __("Ваш сайт") }}
                    <a href="{{ config('app.url') }}">{{ __('Перейти на сайт') }}</a>
                </div>
                <div class="w-full h-96 px-6 pb-6 rounded-lg overflow-hidden">
                    <img class="w-full h-full object-cover" src="{{ asset('/banner.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
