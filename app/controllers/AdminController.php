<?php
class AdminController extends BaseController {
 
  protected $layout = "layouts.admin";

	public function main()
	{

    $this->layout->content = View::make('admin.main');
	}

}
