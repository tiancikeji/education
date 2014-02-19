<?php

class PaymentsController extends BaseController {

	/**
	 * Payment Repository
	 *
	 * @var Payment
	 */
	protected $payment;

	public function __construct(Payment $payment)
	{
		$this->payment = $payment;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$payments = $this->payment->all();

		return View::make('payments.index', compact('payments'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('payments.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
    // var_dump($input);
    
    $validation = Validator::make($input, Payment::$rules);
    if ($validation->passes())
    {

      $count = 0;
      $fee = 30;
      $type = Input::get("type");
      if($type=="composition"){
        $count = Input::get("composition_count");
      }

      if($type=="exam"){
        $count = Input::get("exam_count");
      }
      $total = $count * $fee;
      $user_id = Session::get('current_user')->id;
      $this->payment = $this->payment->create(['type'=>Input::get('type'),'count'=>$count,'fee'=>$fee,'total'=>$total,'user_id'=>$user_id ]);
      return Redirect::to('/payments/'.$this->payment->id);
			// return Redirect::to('/usercenter');
    }
    
		return Redirect::route('payments.create')
			->withInput()
			->withErrors($validation)
		  ->with('message', 'There were validation errors.');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
    
    $config = array(
    'account'=>'1001',//商户账号
    'key'=>'test', //商户密钥
    'reurl'=>'http://localhost/payments/callback' //支付返回地址
    );


    $pay = AlipayPayment::create('alipay',$config);
    $payForm = $pay->setOrderid('0001') //订单ID
                ->setProduct(['price'=>100.01]) //商品价钱
                ->setCustomer(['name'=>'文文','mobile'=>1380000000]) //购买人名称，手机
                ->render(); //生成表单

		$payment = $this->payment->findOrFail($id);

		return View::make('payments.show', compact('payment','payForm'));
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
			return Redirect::route('payments.index');
		}

		return View::make('payments.edit', compact('payment'));
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

			return Redirect::route('payments.show', $id);
		}

		return Redirect::route('payments.edit', $id)
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

		return Redirect::route('payments.index');
	}

}
