<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if(session('message'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <span class="font-medium">{{ session('message') }}</span>
            </div>
        @endif
        <div class="p-3 w-full flex justify-between items-center mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            {{ Breadcrumbs::render('dashboardGalleryIndex') }}
            <form wire:submit.prevent="saveImage()">
                @csrf
                <input wire:model="image" type="file" class="text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Сохранить</button>
                @error('photo') <span class="error">{{ $message }}</span> @enderror
            </form>
        </div>
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="relative overflow-x-auto flex fex-wrap justify-center gap-8">
                    @forelse($images as $image)
                        <div>
                            <img class="w-48 h-48 object-cover block" src="{{ asset('/uploads/image_uploads/'. $image->image) }}" alt="">
                            <button type="button" wire:click="deleteImage({{ $image->id }})" class="text-red-500 block opacity-50">{{ __('Удалить') }}</button>
                        </div>
                    @empty
                        {{ __('Изображений нет') }}
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
