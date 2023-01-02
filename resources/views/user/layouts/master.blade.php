


@if (!Auth::user())
@include('user.layouts.header')
    
@else
@include('user.layouts.header-loggedin')
    
@endif



@yield('css')



@yield('content')


@include('user.layouts.footer')

@yield('js')


