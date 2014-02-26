<?php 

class AdminUsersController extends BaseController {

  protected $user;

  protected $layout = "layouts.admin";

  public function __construct(User $user)
  {
    $this->user = $user;
  }  

  public function index(){
    // Event::listen('illuminate.query',function($sql){
    // dd($sql);
    // });
    $id = Input::get("id");
    $name = Input::get("name");
    $created_at_begin = Input::get("created_at_begin");
    $created_at_end = Input::get("created_at_end");
    $teacher_id = Input::get("teacher_id");
    $payment = Input::get("payment");
    if($id!=null){
      $users = $this->user->where('id','=',$id)->get();
    }else if($name!=null){
      $users=$this->user->where('name','=',$name)->get(); 
    }else if(!empty($created_at_begin) and !empty($created_at_end)){
      $users = DB::table("users")->whereBetween('created_at', array($created_at_begin,$created_at_end ))->get();
    }else if(!empty($payment)){

      $userpayments = Payment::all();
      $user_ids = array();
      foreach($userpayments as $userpayment){
        $user_ids[]= $userpayment->user_id;
      } 

      if($payment == 1){

       if(count($user_ids)>0){
          $users = User::whereIn("id",$user_ids)->get();
        }else{
          $users = array();
        }

      }else{

       if(count($user_ids)>0){
          $users = User::whereNotIn("id",$user_ids)->get();
        }else{
          $users = array();
        }

      }
    } 
    else if(!empty($teacher_id) and $teacher_id !="all"){

      $userteachers = Userteacher::where("teacher_id","=",$teacher_id)->get(); 
      $user_ids = array();
      foreach($userteachers as $userteacher){
          $user_ids[]= $userteacher->user_id;
      }
      if(count($user_ids)>0){
        $users = User::whereIn("id",$user_ids)->get();
      }else{
        $users = array();
      }
    }else{
      $users = $this->user->all();
    }
    return View::make('admin.users.index',compact('users'));
  } 

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return View::make('admin.users.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    $input = Input::all();
    $validation = Validator::make($input, User::$rules);

    if ($validation->passes())
    {
      $this->user->create($input);

      return Redirect::route('admin.users.index');
    }

    return Redirect::route('admin.users.create')
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
    $user = $this->user->findOrFail($id);
    return View::make('admin.users.show', compact('user'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $user = $this->user->find($id);

    if (is_null($user))
    {
      return Redirect::route('admin.users.index');
    }

    return View::make('admin.users.edit', compact('user'));
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
    $validation = Validator::make($input, User::$rules);

    if ($validation->passes())
    {
      $user = $this->user->find($id);
      $user->update($input);

      return Redirect::route('admin.users.show', $id);
    }

    return Redirect::route('admin.users.edit', $id)
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
    $this->user->find($id)->delete();

    return Redirect::route('admin.users.index');
  }

}

