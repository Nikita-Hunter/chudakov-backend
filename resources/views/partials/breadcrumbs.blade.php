@unless ($breadcrumbs->isEmpty())
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!is_null($breadcrumb->url) && !$loop->last)
                <li class="inline-flex items-center cursor-pointer"><a class="cursor-pointer inline-flex items-center text-sm font-semibold text-blue-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="cursor-pointer inline-flex items-center text-sm font-semibold text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    {{ $breadcrumb->title }}
                </li>
            @endif
        @endforeach
    </ol>
@endunless
