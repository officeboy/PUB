@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Delete {{ $customer->name }} <small>Are you sure?</small></h1>
    </div>
    <form action="{{ action('CustomersController@handleDelete') }}" method="post" role="form">
        <input type="hidden" name="customer" value="{{ $customer->cust_id }}" />
        <input type="submit" class="btn btn-danger" value="Yes" />
        <a href="{{ action('CustomersController@index') }}" class="btn btn-default">No way!</a>
    </form>
@stop