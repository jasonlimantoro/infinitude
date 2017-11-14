<footer>
    <div class="container-fluid">
        <div class="row title" id="contact-us">
            <h1>Contact Us</h1>
            <form method="POST" action="/send">
                {{ csrf_field() }}
                <div class="form-group clearfix">
                    <label for="name" class="sr-only control-label">Name:</label>
                    <div class="col-md-offset-2 col-md-4">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                    </div>
                    <label for="email" class="sr-only control-label">Email address:</label>
                    <div class="col-md-4">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label for="message" class="sr-only control-label">Message:</label>
                    <div class="col-md-offset-2 col-md-8">
                        <textarea name="message" class="form-control" id="message" placeholder="Message"></textarea>
                    </div>
                </div>

                <div class="form-group clearfix">
                    <div class="col-md-offset-8 col-md-3">
                        <button type="submit" class="btn btn-default btn-contact-us">Send</button>
                    </div>
                </div>

                @include('layouts.error')
                @include('layouts.success')
                
            </form>

        </div>
        <div class="row row-center">
            <div class="col-md-1 col-xs-3 col-center">
                <a href="mailto:{{ $mailto }}" target="_blank">
                    <img src="/images/icons/mailto.png" alt="mailto" class="img-responsive">
                </a>
            </div>

            <div class="col-md-1 col-xs-3 col-center social">
                <a href="https://www.instagram.com/infinitudecommunity" target="_blank">
                    <img src="/images/icons/instagram.png" alt="instagram" class="img-responsive">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="copyright">Copyright &copy; {{ date('Y') }} by INFINITUDE </p>
            </div>
        </div>
    </div>
</footer>