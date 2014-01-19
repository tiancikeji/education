<?php

class AdminPaymentsController extends BaseController {

	/**
	 * Payment Repository
	 *
	 * @var Payment
	 */
	protected $payment;

  protected $user;

	public function __construct(Payment $payment, User $user)
	{
		$this->payment = $payment;

    $this->user =$user;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
    $user_id = Input::get("user_id");
    if(empty($user_id)){
		  $payments = $this->payment->all();
       }else{
		  $payments = $this->payment->where("user_id",'=',$user_id)->get();
    }
    $users=$this->user->all();
		return View::make('admin.payments.index', compact('payments','users'));
	}
 
 

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$payment = $this->payment->findOrFail($id);

		return View::make('admin.payments.show', compact('payment'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$payment = $this->payment->find($id);

		if (is_null($payment))
		{
			return Redirect::route('admin.payments.index');
		}

		return View::make('admin.payments.edit', compact('payment'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Payment::$rules);

		if ($validation->passes())
		{
			$payment = $this->payment->find($id);
			$payment->update($input);

			return Redirect::route('admin.payments.show', $id);
		}

		return Redirect::route('admin.payments.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->payment->find($id)->delete();

		return Redirect::route('admin.payments.index');
	}

}
