<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Редактирование вопроса') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-3 w-full flex justify-between items-center mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                {{ Breadcrumbs::render('dashboardQuestionStore') }}
                {{--                <a href="{{ route('admin.question.list') }}" class="text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Назад</a>--}}
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form class="w-full" action="{{ route('admin.question.update', $question->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="w-full grid grid-cols-2 gap-12 mb-6">
                            <div class="w-full">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Введите название вопроса</label>
                                <input type="text" name="name" id="email" value="{{ $question->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Кто такой доктор Чудаков?" required>
                                @error('name')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="w-full">
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Статус вопроса</label>
                                <select name="status" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @if($question->status == 1)
                                        <option value="1">{{ __('Отображается') }}</option>
                                        <option value="0">{{ __('Скрыт') }}</option>
                                    @elseif($question->status == 0)
                                        <option value="0">{{ __('Скрыт') }}</option>
                                        <option value="1">{{ __('Отображается') }}</option>
                                    @endif
                                </select>
                                @error('status')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full mb-6">
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Описание вопроса') }}</label>
                            <textarea style="color: #1a202c !important" id="ckeMessage" name="text" rows="5" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-900 text-gray-900 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Начните вводить описание вопроса...">
                                {{ $question->text }}
                            </textarea>
                            @error('text')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('Обновить') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#ckeMessage' ), {
                toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                    ]
                }
            } )
            .catch( error => {
                console.log( error );
            } );

    </script>
</x-app-layout>
