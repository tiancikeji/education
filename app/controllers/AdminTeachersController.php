<?php

class AdminTeachersController extends BaseController {

	/**
	 * Teacher Repository
	 *
	 * @var Teacher
	 */
	protected $teacher;
  protected $permission;
  protected $adminpermission;
	public function __construct(Teacher $teacher,Permission $permission, Adminpermission $adminpermission)
	{
    $this->teacher = $teacher;
    $this->permission = $permission;
    $this->adminpermission = $adminpermission;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$teachers = $this->teacher->all();

		return View::make('admin.teachers.index', compact('teachers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
    $permissions = $this->permission->all();
		return View::make('admin.teachers.create',compact('permissions'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::except("permission_ids");
		$validation = Validator::make($input, Teacher::$rules);
    $permission_ids = Input::get("permission_ids");
		if ($validation->passes())
		{
      $password  = Input::get('password');
			$this->teacher = $this->teacher->create(['username' => Input::get('username'),'name' => Input::get('name'),'password' => $password]);
      foreach ($permission_ids as $permission_id) {
        Adminpermission::create(['teacher_id'=>$this->teacher->id,'permission_id'=>$permission_id]);
      }
			return Redirect::route('admin.teachers.index');
		}

		return Redirect::route('admin.teachers.create')
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
		$teacher = $this->teacher->findOrFail($id);

		return View::make('admin.teachers.show', compact('teacher'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$teacher = $this->teacher->find($id);
    $adminpermissions=Adminpermission::where('teacher_id','=',$teacher->id)->get();
    $permission_ids = array();
  
    foreach($adminpermissions as $adminpermission){
        $permission_ids[] = $adminpermission->permission_id;
    }
 		if (is_null($teacher))
		{
			return Redirect::route('admin.teachers.index');
    }
    $permissions = $this->permission->all();

		return View::make('admin.teachers.edit', compact('teacher','permissions','permission_ids'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
    $inpt = Input::except("permission_ids");
		$input = array_except($inpt, '_method');
    // $input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Teacher::$rules);

  $permission_ids = Input::get("permission_ids");
     if($permission_ids!=null ){
       foreach ($permission_ids as $permission_id) {
         // Adminpermission::create(['teacher_id'=>$this->teacher->id,'permission_id'=>$permission_id]);
          Adminpermission::create(['teacher_id'=>$id,'permission_id'=>$permission_id]);
       }
     }
		if ($validation->passes())
		{
			$teacher = $this->teacher->find($id);
			$teacher->update($input);

			return Redirect::route('admin.teachers.show', $id);
		}

		return Redirect::route('admin.teachers.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}


public function update_permission(){
$permission_id=Input::get("permission_id");
$adminpermission=$this->adminpermission->find($permission_id)->delete();
}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->teacher->find($id)->delete();

		return Redirect::route('admin.teachers.index');
	}

}
