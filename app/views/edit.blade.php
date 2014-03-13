@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Edit customer <small>Go on, mark it complete!</small></h1>
    </div>

    <form action="{{ action('CustomersController@handleEdit') }}" method="post" role="form">
        <input type="hidden" name="id" value="{{ $customer->id }}">
@yield('fields')

<input type="submit" value="Save" class="btn btn-primary" />
        <a href="{{ action('CustomersController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop