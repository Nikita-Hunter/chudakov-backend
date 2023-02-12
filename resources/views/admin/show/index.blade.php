<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('message'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                    <span class="font-medium">{{ session('message') }}</span>
                </div>
            @endif
            <div class="p-3 w-full flex justify-between items-center mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                {{ Breadcrumbs::render('dashboardShowIndex') }}
                <a href="{{ route('admin.show.create') }}" class="text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Добавить</a>
            </div>
            @if(count($shows) > 0)
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        {{ __('Изображение') }}
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        {{ __('Название шоу') }}
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        {{ __('Описание') }}
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        {{ __('Цена') }}
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        {{ __('Кол-во людей') }}
                                    </th>
                                    <th scope="col" class="px-6 py-3">

                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($shows as $show)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <img class="w-28 h-28" src="{{ asset('/uploads/show/'.$show->banner) }}" alt="{{ $show->name }}">
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $show->name }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $show->small_text }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $show->price }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $show->people }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('admin.show.edit', $show->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ __('Редактировать') }}</a>
                                            <a href="{{ route('admin.show.destroy', $show->id) }}" class="font-medium text-red-600 dark:text-red-500 hover:underline">{{ __('Удалить') }}</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">{{ __('Нет данных') }}</tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @else
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="relative overflow-x-auto">
                            {{ __('Страница пуста') }}
                        </div>
                    </div>
                </div>
            @endif
            <div class="w-full py-4">
                {{ $shows->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
