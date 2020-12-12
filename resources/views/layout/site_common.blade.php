<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    {{-- HTMLヘッダ --}}
    @include("layouts.head")

    {{-- 本体 --}}
    <body class="">
        <div class="wrapper ">
            {{-- サイドバー --}}
            @if (!$isSideBarHidden)
                @include("layouts.sidebar")
            @endif

            {{-- コンテンツ --}}
            <div class="main-panel @yield('main_style_id')" id="main-panel">
            	{{-- ナビゲーションヘッダー --}}
            	@if (!$isSideBarHidden)
            		@include("layouts.navigation_header")
            	@endif

            	{{-- コンテンツ本体 --}}
                @yield('content')

                {{-- フッター --}}
                @yield('footer')
            </div>
        </div>

        <script>
            $(document).ready(function() {
                bootstrap.initDashboardPageCharts();
            });
        </script>
        {{-- 個別のjavaScript読み込み --}}
        @yield('javascript-footer')
    </body>
</html>