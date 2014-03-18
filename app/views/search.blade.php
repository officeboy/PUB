@extends('layout')

@section('content')
    <div class="page-header">
        <h1>All Customers <small>Gotta bill 'em all!</small></h1>
    </div>

 {{--   <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ action('CustomersController@create')}}" class="btn btn-primary">Create Customer</a>
        </div>
    </div>
--}}
    @if ($customers->isEmpty())
        <p>We can't find any Customers like that! :(</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address1</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->address1 }}</td>
                    <td>{{ Form::checkbox('active', 'active', $customer->active ? true : false, array('disabled'))}}</td>
                    <td>
                        <a href="{{ action('CustomersController@edit', $customer->id) }}" class="btn btn-default">Edit</a>
                        <a href="{{ action('CustomersController@delete', $customer->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {{$customers->appends(array('q' => $search))->links()}}
@stop