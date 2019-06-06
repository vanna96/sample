@if(session()->has('error'))
    <div class="alert alert-danger danger_slideup">
        {{ session()->get('error') }}
    </div>
@elseif(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif