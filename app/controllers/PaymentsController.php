<?php

class PaymentsController extends BaseController {

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
        $type=Input::get("type");
        $ceated_at=Input::get("created_at");
        $enddate_at=Input::get("enddate_at");
      if($type!=null){
      $payments=$this->payment->where('type','=',$type)->get();
      }else if($created_at!=null){
        $payments=$this->payment->where('created_at','=',"%".$created_at."%")->get();

      }else if($enddate_at!=null){
        $payments=$this->payment->where('enddate_at','=',"%".$enddate_at."%")->get();

      }else{
 $payments = $this->payment->all();
     
      }

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

      $start_date = strtotime($this->payment->created_at); 

      $enddate = $start_date+(24*60*60*30*$count); 

      $enddate_at = date("Y-m-d H:i:s",$enddate);

      $this->payment->enddate_at = $enddate_at;
      $this->payment->save();
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
    'account' => "zaoke@tiancikeji.com",
    'partner'=>'2088011990203030',//商户账号
    'key'=>'bs1pij9z950fl968mu8vd8zpeqgazbdt', //商户密钥
    'call_back_url'=>'http://localhost/payments/callback',
   'notify_url' => 'http://localhost/payments/callback' //支付返回地址
    );


    $pay = AlipayPayment::create('alipay',$config);
    $payForm = $pay->setOrderid('0001') //订单ID
                ->setProduct(['price'=>0.01]) //商品价钱
                ->setCustomer(['name'=>'文文','mobile'=>1380000000]) //购买人名称，手机
                ->render(); //生成表单
    // dd($payForm);
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
