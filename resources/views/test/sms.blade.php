@extends('master')
@section('style')
@endsection
@section('content')
<div class="container">
    <form method="post" action="{{ route('sms.store') }}">
        {{csrf_field()}}             
        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" phone="phone" value="{{ old('phone') }}"  placeholder="Phone Number">
        </div>
        <div class="form-group" style="float: right;">
            <button type="submit" class="btn-xs btn btn-primary">Send</button>
        </div>
    </form>
</div>
@endsection
@section('script')
@endsection