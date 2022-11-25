@vite(['resources/css/destyle.css', 'resources/css/nekocafeTop.css', 'resources/css/nekocafePage.css'])
@if ($paginator->hasPages())
    <nav>
        <ul class="Pagination">
        <!-- 前へ移動ボタン -->
        @if ($paginator->onFirstPage())
            <li class="Pagination-Item">
            <a class="Pagination-Item-Link">
            <svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
            </svg>
            </a>
            </li>
        @else
            <li class="Pagination-Item">
                <a href="{{ $paginator->previousPageUrl() }}" class="Pagination-Item-Link">
                <svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
            </svg>
                </a>
            </li>
        @endif

        <!-- ページ番号　-->
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="Pagination-Item">
                    {{ $element }}
                </li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="Pagination-Item">
                        <a class="Pagination-Item-Link">{{ $page }}</a>
                        </li>
                    @else
                        <li class="Pagination-Item">
                            <a href="{{ $url }}" class="Pagination-Item-Link">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        <!-- 次へ移動ボタン -->
        @if ($paginator->hasMorePages())
            <li class="Pagination-Item">
                <a class="Pagination-Item-Link" href="{{ $paginator->nextPageUrl() }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
                </a>
            </li>
        @else
            <li class="Pagination-Item">
            <a class="Pagination-Item-Link">
            <svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
                </a>
            </li>
        @endif
        </ul>
    </nav>
@endif 
