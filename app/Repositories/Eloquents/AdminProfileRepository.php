<?php
namespace App\Repositories\Eloquents;

use App\Libraries\GeneralLibrary;
use App\Models\Admin;
use Illuminate\Container\Container as App;
use Illuminate\Http\Request;


class AdminProfileRepository extends AbstractRepository
{

    protected $admin;
    protected $request;
    protected $generalLibrary;

    public function __construct(Request $request, Admin $admin, GeneralLibrary $generalLibrary)
    {
        parent::__construct(new App);
        $this->admin = $admin;
        $this->request = $request;
        $this->generalLibrary = $generalLibrary;
    }

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'App\Models\Admin';
    }

}