<nav class="navbar navbar-default">
    <div class="container-fluid container-menu">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand visible-xs">
                <img src="/images/Infinitude_menu_logo.png" class="img-responsive" alt="logo">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="row">
                
                {{--  left-to-logo  --}}
                <div class="col-sm-5 col-md-offset-2 col-md-3 left-to-logo">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home<span class="sr-only">(current)</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#vision-and-mission">Vision and Mission</a></li>
                                <li><a href="#history">History</a></li>
                                <li><a href="#organization">Organization</a></li>
                            </ul>
                        </li>
                        <li><a href="#programs">Programs</a></li>
                    </ul>
                </div>

                {{--  Logo Section  --}}
                <div class="col-sm-2 col-md-2 logo hidden-xs">
                    <a href="/" class="navbar-brand">
                        <img src="/images/Infinitude_menu_logo.png" class="img-responsive" alt="logo">
                    </a>
                </div>

                {{--  right-to-logo  --}}
                <div class="col-sm-5 col-md-4 right-to-logo">
                    <ul class="nav navbar-nav">
                        <li><a href="#be-involved">Be Involved</a></li>
                        <li><a href="#project">Project</a></li>
                        <li><a href="#contact-us">Contact Us</a></li>
                    </ul>
                </div>

            </div> <!-- .row -->
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>