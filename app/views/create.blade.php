@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Create a <small>Customer!</small></h1>
    </div>

    <form action="{{ action('CustomersController@handleCreate') }}" method="post" role="form">
        <div class="checkbox">
            <label for="active">
                <input type="checkbox" name="active" /> Active?
            </label>
        </div>
        <div class="checkbox">
            <label for="owner">
                <input type="checkbox" name="owner" /> Owner?
            </label>
        </div>
        <div class="checkbox">
            <label for="tenant">
                <input type="checkbox" name="tenant" /> Tenant?
            </label>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" />
        </div>
        <div class="form-group">
            <label for="attention">attention</label>
            <input type="text" class="form-control" name="attention" />
        </div>
        <div class="form-group">
            <label for="care_of">care_of</label>
            <input type="text" class="form-control" name="care_of" />
        </div>
        <div class="form-group">
            <label for="address1">address1</label>
            <input type="text" class="form-control" name="address1" />
        </div>
        <div class="form-group">
            <label for="address2">address2</label>
            <input type="text" class="form-control" name="address2" />
        </div>
        <div class="form-group">
            <label for="city">city</label>
            <input type="text" class="form-control" name="city" />
        </div>
        <div class="form-group">
            <label for="state">state</label>
            <input type="text" class="form-control" name="state" />
        </div>
        <div class="form-group">
            <label for="zip">zip</label>
            <input type="text" class="form-control" name="zip" />
        </div>
        <div class="form-group">
            <label for="country">country</label>
            <input type="text" class="form-control" name="country" />
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" name="email" />
        </div>
        <div class="form-group">
            <label for="email_display_name">email_display_name</label>
            <input type="text" class="form-control" name="email_display_name" />
        </div>
        <div class="form-group">
            <label for="home_phone">home_phone</label>
            <input type="text" class="form-control" name="home_phone" />
        </div>
        <div class="form-group">
            <label for="work_phone">work_phone</label>
            <input type="text" class="form-control" name="work_phone" />
        </div>
        <div class="form-group">
            <label for="cell_phone">cell_phone</label>
            <input type="text" class="form-control" name="cell_phone" />
        </div>
        <div class="form-group">
            <label for="other_phone">other_phone</label>
            <input type="text" class="form-control" name="other_phone" />
        </div>
        <input type="submit" value="Create" class="btn btn-primary" />
        <a href="{{ action('CustomersController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop