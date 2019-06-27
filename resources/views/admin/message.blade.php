@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>    
        </button>    
        <i class="icon fa fa-check"></i> {{ Session::get('message') }}
    </div>
@endif