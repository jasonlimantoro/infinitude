@extends('layouts.master')


@section('content')
    <h1>Hello World</h1>
    <button class="btn btn-primary" onclick='horay()'>Click Me</button>
@endsection

@section('script')
    <script>
        function horay() {
            alert('Horrray!')
        }
    </script>
    
@endsection
