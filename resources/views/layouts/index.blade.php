<title> @yield('title')</title>
@yield('content')
<h1> index</h1>


  <title>@yield('title') index</title>


        @push('js')
        <script> alert('hello from js stack');</script>
@endpush
