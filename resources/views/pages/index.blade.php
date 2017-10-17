@extends('layouts.master')


@section('content')
    <div class="section1">
        <div class="row">
            
        </div>
        <div class="row welcome">
            <h1>Welcome to Infinitude</h1>
            <div class="par">
                <p>
                    INFINITUDE is a social community for young adults in Singapore to reach out to general youth and
                    under-privileged children in South East Asia through healthcare and education.
                </p>

                <p>
                    With the tagline ‘making everlasting impact’, INFINITUDE believes that healthcare knowledge and education are two key pillars that will shape young generations to succeed in the future. With our healthcare seminars and workshops, we want to bring basic hygiene education as close as possible to the rural areas in South East Asia, especially to children and teenagers. In addition, we design our programs in a fun and engaging way to help participants get the core knowledge and apply the knowledge immediately in various practical trainings.
                </p>

                <p>
                    Find out about more programs <a href="#">here</a>
                </p>
            
            </div>
            <button class="btn btn-primary" onclick='horay()'>Click Me</button>
        </div>
    
    </div>

@endsection


@section('script')
    
    <script>
        function horay() {
            alert('Horrray!')
        }
    </script>
    
@endsection
