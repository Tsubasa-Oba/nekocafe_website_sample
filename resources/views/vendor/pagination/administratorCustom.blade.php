
@if ($paginator->hasPages())
    <nav>
        <ul>
        <!-- 前へ移動ボタン -->
        @if ($paginator->onFirstPage())
            <li>
                ＜前へ
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}">
                    ＜前へ
                </a>
            </li>
        @endif

        <!-- ページ番号　-->
        @foreach ($elements as $element)
            @if (is_string($element))
                <li>
                    {{ $element }}
                </li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li>
                            {{ $page }}
                        </li>
                    @else
                        <li>
                            <a href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        <!-- 次へ移動ボタン -->
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}">
                    次へ＞
                </a>
            </li>
        @else
            <li>
                次へ＞
            </li>
        @endif
        </ul>
    </nav>
@endif 
