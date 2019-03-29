    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

	{{-- Bootstrap CSS --}}
    {{-- {!! Html::style('assets/css/bootstrap.min.css') !!} --}}
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    
    {{-- Custom CSS --}}
    {{-- @stack('styles') --}}
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
