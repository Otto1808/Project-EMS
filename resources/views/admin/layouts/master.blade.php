@include('admin.layouts.navbar')

@include('admin.layouts.sidebar')
<div id="layoutSidenav_content">
    <main class="p-5">
        @yield('content')
    </main>
@include('admin.layouts.footer')
