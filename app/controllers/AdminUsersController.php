<?php 

class AdminUsersController extends BaseController {
  
    protected $user;

    protected $layout = "layouts.admin";

    public function __construct(User $user)
    {
      $this->user = $user;
    }  

    public function index(){

		  $users = $this->user->all();

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

