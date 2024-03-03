{{-- @if (Session::has('error'))
    <div id="toast-container" class="toast-top-right">
        <div class="toast toast-success" aria-live="polite" style="">
            <div class="toast-message">{{Session::get('error')}}</div>
        </div>
    </div>

@endif --}}
@if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i> Error!</h4> {{ Session::get('error') }}
    </div>
@endif