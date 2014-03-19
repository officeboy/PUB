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
        <table class="table table-condensed table-striped" id="accordion" style="border-collapse:collapse;">
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
                <tr data-toggle="collapse" data-target=".cust{{ $customer->id }}" class="accordian-toggle {{$customer->active ? 'active' : 'danger'}}">  
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->address1 }}</td>
                    <td>{{ Form::checkbox('active', 'active', $customer->active ? true : false, array('disabled'))}}</td>
                    <td>
                        <a href="{{ action('CustomersController@edit', $customer->id) }}" class="btn btn-default">Edit</a>
                        <a href="{{ action('CustomersController@delete', $customer->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td class="hiddenRow">
                        <div class="accordian-body collapse cust{{$customer->id}}" >
                            <address>
                    {{$customer->attention}}<br>
                    {{$customer->name}}<br>
                    {{$customer->care_of}}<br>
                    {{$customer->address1}}<br>
                    {{$customer->address2}}<br>
                    {{$customer->city}} {{$customer->state}} {{$customer->zip}}<br>
                    {{$customer->country}}
                            </address>
                      </div>
                    </td>
                    <td class="hiddenRow">
                      <div class="accordian-body collapse cust{{$customer->id}}" >
                            <address>
                    <abbr title="Home Phone">H:</abbr> {{$customer->home_phone}}<br>
                    <abbr title="Work Phone">W:</abbr> {{$customer->work_phone}}<br>
                    <abbr title="Cell Phone">C:</abbr> {{$customer->cell_phone}}<br>
                    <abbr title="Other Phone">O:</abbr> {{$customer->other_phone}}<br>
                    <a href="mailto:{{$customer->email}}">{{$customer->email}}</a>
                            </address>
                      </div>
                    </td>
                    <td class="hiddenRow"></td>
                    <td class="hiddenRow"></td>
                </tr>
@endforeach    
            </tbody>
        </table>
@endif
    {{$customers->links()}}
@stop