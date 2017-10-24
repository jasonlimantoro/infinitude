<footer>
    <div class="container-fluid">
        <div class="row">
            <h1>Contact Us</h1>
            <form>
                <div class="form-group">
                    <label for="name" class="sr-only control-label">Name:</label>
                    <div class="col-md-offset-2 col-md-4">
                        <input type="text" class="form-control" id="name" placeholder="Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="sr-only control-label">Email address:</label>
                    <div class="col-md-4">
                        <input type="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="message" class="sr-only control-label">Message:</label>
                    <div class="col-md-offset-2 col-md-8">
                        <textarea name="message" id="message" class="form-control" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-8 col-md-3">
                        <button type="submit" class="btn btn-default btn-contact-us">Send</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="copyright">Copyright &copy; {{ date('Y') }} by INFINITUDE </p>
            </div>
        </div>
    </div>
</footer>