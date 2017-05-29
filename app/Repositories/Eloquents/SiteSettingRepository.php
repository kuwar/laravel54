<?php
namespace App\Repositories\Eloquents;

use App\Libraries\GeneralLibrary;
use App\Models\SiteSetting;
use Illuminate\Container\Container as App;
use Illuminate\Http\Request;


class SiteSettingRepository extends AbstractRepository
{

    protected $setting;
    protected $request;
    protected $generalLibrary;

    public function __construct(Request $request, SiteSetting $setting, GeneralLibrary $generalLibrary)
    {
        parent::__construct(new App);
        $this->setting = $setting;
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
        return 'App\Models\SiteSetting';
    }

}