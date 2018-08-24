@if (Session::has('info'))
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="alert alert-success alert-dismissible">
                    <button type="submit" class="close" data-dismiss="alert" aria-label="close">&times;</button>
                    {{ Session::get('info')}}
                </div>
            </div>
        </div>
    </div>
@endif