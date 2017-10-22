@extends('layouts.master')


@section('content')
    <div class="section1">
        <div class="row">
            
        </div>
        <div class="row welcome">
            <h1>WELCOME TO INFINITUDE</h1>
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
        </div>
        <div class="row rei">
            <div class="col-md-offset-2 col-md-2">
                <img src="icon" alt="icon">
                <h1>REACH</h1>
                <p>
                    To reach out to youth and disadvantaged children in the rural areas in South East Asian countries
                </p>
            </div>
            <div class="col-md-offset-1 col-md-2">
                <img src="icon" alt="icon">
                <h1>ENGAGE</h1>
                <p>
                    To design an engaging and interactive sessions according to the age group and specific needs in the region
                </p>
            </div>
            <div class="col-md-offset-1 col-md-2">
                <img src="icon" alt="icon">
                <h1>IMPACT</h1>
                <p>
                    To make everlasting impact by providing healthcare knowledge and education the young generation
                </p>
            </div>
        
        </div>
    </div> <!-- endsection1 -->
    <div class="section2">
        <div class="row about">
            <h1> <span>ABOUT</span> INFINITUDE</h1>
        </div>
        
        <div class="row bg-about">
            <div class="col-md-7 col-xs-12 img-about">
                <img src="/images/about us_BG.png" alt="about us" class="img-responsive">
            </div>
            <div class="col-md-4 visible-md title" id="vision-and-mission">
                <div class="vision">
                    <img src="logo" alt="logo">
                    <h3>VISION</h3>
                    <p>
                        To be a community that gives an everlasting impact in improving the quality of healthcare and education among youth and children in need in South East Asia region
                    </p>
                </div>

                <div class="mission">
                    <img src="logo" alt="logo">
                    <h3>MISSIONS</h3>
                    <div class="row-divider-mission">
                        <div class="col-md-4">
                            <p>
                                To promote health awareness and healthy lifestyle
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p>
                                To make healthcare educational materials fun and engaging
                            </p>
                            <div class="vl-1"></div> 
                        </div>
                        
                        <div class="col-md-4">
                        <p>
                            To distribute basic healthcare and education needs to rural areas
                        </p>
                            <div class="vl-2"></div> 
                        </div>
                    </div>
                </div>
            
            </div>
        </div>

    </div> <!-- endsection2 -->
    <div class="section3">
        <div class="row container-history title" id="history">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-offset-1 col-md-3 desc-history">
                        <img src="icon" alt="icon">
                        <h3>HISTORY</h3>
                        <p>The founder initiated to build up this community after conducting informal seminars with youth from secondary to tertiary students</p>
                        <div class="toolbar">
                            <span class="glyphicon glyphicon-arrow-left"></span>
                            <span class="content-container">
                                FOUNDED
                            </span>
                            <span class="glyphicon glyphicon-arrow-right"></span>
                            
                        </div>
                    </div>
                    <div class="col-md-8 img-history">
                        <img src="/images/History_BG.png" alt="history" class="img-responsive">
                    
                    </div>    
                </div>
                <div class="row interactive visible-md">
                    <div class="col-md-offset-2 col-md-10 col-xs-12">
                    {{--  circles go here  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('script')
    
    <script>
        function horay() {
            alert('Horrray!')
        }
        $('body').scrollspy({
            target: '#navbar-menu',
            offset: 100
        });

    </script>
    
@endsection
