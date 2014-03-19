@extends('layout')

@section('content')
    <div class="page-header">
        <h1>All Customers <small>Gotta bill 'em all!</small></h1>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ action('CustomersController@create')}}" class="btn btn-primary">Create Customer</a>
        </div>
    </div>

@if ($customers->isEmpty())
        <p>There are no Customers! :(</p>
@else
        <table class="table table-striped" id="accordion" style="border-collapse:collapse;">
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
                <tr data-toggle="collapse" data-parent="accordion" data-target="#cust{{ $customer->id }}" class="accordion-toggle">  
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->address1 }}</td>
                    <td>{{ Form::checkbox('active', 'active', $customer->active ? true : false, array('disabled'))}}</td>
                    <td>
                        <a href="{{ action('CustomersController@edit', $customer->id) }}" class="btn btn-default">Edit</a>
                        <a href="{{ action('CustomersController@delete', $customer->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" class="hiddenRow">
                        <div class="collapse" id="cust{{$customer->id}}">
        Anim pariatur cliche 
                          </div>
                    </td>
                </tr>
@endforeach    
            </tbody>
        </table>
@endif
    {{$customers->links()}}
@stop