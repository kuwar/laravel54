<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\Eloquents\SiteSettingRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    public $viewData = [];
    public $settings;

    public function __construct(SiteSettingRepository $settings)
    {
        $this->settings = $settings;

        $this->viewData = [
            'title' => "",
            'subtitle' => ""
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->viewData = [
            'title' => "Settings",
            'subtitle' => "Site settings",
            'setting' => $this->settings->find(1)
        ];

        return view('admin.settings.edit', $this->viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inputs = $request->except(['_method', '_token']);

        $editSetting= $this->settings->update($inputs, 1, 'id');

        if ($editSetting !== false) {
            Session::flash('success', Lang::get('message.UPDATE', ['name' => 'site setting']));
        } else {
            Session::flash('warning', Lang::get('message.ERROR'));
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
