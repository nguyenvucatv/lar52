<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use File;
use Auth;
use Config;
use App\BaseHelpers;

abstract class AdminTemplateController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $modules = "";

    public function __construct()
	{	
			BaseHelpers::checkBaseModules();
			$this->modules = BaseHelpers::getAllModuleDetails();

   		    
			view()->share('modules', $this->modules);
	}
}
