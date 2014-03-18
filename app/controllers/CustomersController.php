<?php
//app/controlers/CustomersController.php
class CustomersController extends BaseController{
	public function index()
	{
		//show listing of customers
		$customers = Customer::paginate(5);
		return View::make('index', compact('customers'));
	}
	public function create()
	{
		//show create customer form
		return View::make('create');
	}
	public function handleCreate()
	{
		//Create form submission
		$customer = new Customer;
		$customer->name = Input::get('name');
		$customer->attention = Input::get('attention');
		$customer->care_of = Input::get('care_of');
		$customer->address1 = Input::get('address1');
		$customer->address2 = Input::get('address2');
		$customer->city = Input::get('city');
		$customer->state = Input::get('state');
		$customer->zip = Input::get('zip');
		$customer->country = Input::get('country');
		$customer->home_phone = Input::get('home_phone');
		$customer->work_phone = Input::get('work_phone');
		$customer->cell_phone = Input::get('cell_phone');
		$customer->other_phone = Input::get('other_phone');
		$customer->email = Input::get('email');
		$customer->email_display_name = Input::get('email_display_name');
		$customer->active = Input::has('active');
		$customer->tenant = Input::has('tenant');
		$customer->owner = Input::has('owner');
		$customer->save();

		return Redirect::action('CustomersController@index');
	}
	public function edit(customer $customer)
	{
		//Show edit customer form
		return View::make('edit', compact('customer'));
	}
	public function handleEdit()
    {
        // Handle edit form submission.
        $customer = Customer::findOrFail(Input::get('id'));
		$customer->name = Input::get('name');
		$customer->attention = Input::get('attention');
		$customer->care_of = Input::get('care_of');
		$customer->address1 = Input::get('address1');
		$customer->address2 = Input::get('address2');
		$customer->city = Input::get('city');
		$customer->state = Input::get('state');
		$customer->zip = Input::get('zip');
		$customer->country = Input::get('country');
		$customer->home_phone = Input::get('home_phone');
		$customer->work_phone = Input::get('work_phone');
		$customer->cell_phone = Input::get('cell_phone');
		$customer->other_phone = Input::get('other_phone');
		$customer->email = Input::get('email');
		$customer->email_display_name = Input::get('email_display_name');
		$customer->active = Input::has('active');
		$customer->tenant = Input::has('tenant');
		$customer->owner = Input::has('owner');
		$customer->save();

		return Redirect::action('CustomersController@index');
    }
    public function delete(customer $customer)
    {
        // Show delete confirmation page.
        return View::make('delete', compact('customer'));
    }
    public function handleDelete()
    {
        // Handle the delete confirmation.
        $id = Input::get('customer');
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return Redirect::action('CustomersController@index');
    }
}