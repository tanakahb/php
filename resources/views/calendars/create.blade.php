@php
    $title = __('Create Calendar');
@endphp
@extends('layouts.my')
@section('content')
<h1>{{ $title }}</h1>
<form action="{{ url('calendars') }}" method="post">
    {{ csrf_field() }}
    {{ method_field('POST') }}
    <div class="form-group">
        <label for="available_time" class="col-md-4">{{ __('Date') }}</label>
        <div class="col-md-6">
            <input id="available_time" type="datetime-local" class="form-control" name="available_time" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-8">
            <button type="submit" name="submit" class="btn btn-success">
                {{ __('Submit') }}
            </button>
        </div>
    </div>
</form>
@endsection