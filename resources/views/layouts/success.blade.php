@if( $flash = session('message'))
    <div class="form-group clearfix">
        <div class="col-md-offset-2 col-md-8">
            <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ $flash }}
            </div>
        </div>
    </div>
@endif
