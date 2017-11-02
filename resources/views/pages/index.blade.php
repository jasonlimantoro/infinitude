@extends('layouts.master')


@section('content')
    {{--  Introduction  --}}
    @include('layouts.sections.section1')

    {{--  About Us - Vision and Mission --}}
    @include('layouts.sections.section2')

    {{--  About Us - History  --}}
    @include('layouts.sections.section3')

    {{--  About Us - Organization  --}}
    @include('layouts.sections.section4')

    {{--  Programs - Forum, Seminar Workshop  --}}
    @include('layouts.sections.section5')

@endsection


@section('script')
    
    <script>
        $('body').scrollspy({
            target: '#navbar-menu',
            offset: 100
        });
    </script>
    
@endsection
