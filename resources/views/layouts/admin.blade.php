@include('admin.includes.header')
<div id="app">
    @include('admin.includes.sidebar')
    <div class="app-content">
        @include('admin.includes.navbar')
        <div class="main-content">
            <div class="wrap-content container" id="container">
                <!-- start: YOUR CONTENT HERE -->
                @yield('content')
                <!-- end: YOUR CONTENT HERE -->
            </div>
        </div>
    </div>

    @include('admin.includes.footer')

</div>
@include('admin.includes.script')