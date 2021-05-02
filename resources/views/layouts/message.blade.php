@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if(session('exists'))
    <div class="alert alert-danger">
        {{session('exists')}}
    </div>
@endif
