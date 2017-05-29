<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminRequest;
use App\Repositories\Eloquents\AdminProfileRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public $viewData = [];
    public $admin;

    public function __construct(AdminProfileRepository $admin)
    {
        $this->admin = $admin;

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
            'title' => "Admin",
            'subtitle' => "View profile",
            'user' => $this->admin->find(Auth::id())
        ];

        return view('admin.profile.edit', $this->viewData);
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
    public function update(AdminRequest $request, $id)
    {
        $inputs = $request->all();
        $data = [
            'name' => $inputs['name'],
            'email' => $inputs['email'],
            'updated_at' => Carbon::now()
        ];
        $editProfile = $this->admin->update($data, Auth::id(), 'id');

        if ($editProfile !== false) {
            Session::flash('success', Lang::get('message.UPDATE', ['name' => 'profile']));
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

    /**
     * Change password
     *
     * @param UserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function putChangePassword(AdminRequest $request)
    {
        $inputs = $request->all();
        $data = [
            'password' => Hash::make($inputs['password']),
            'updated_at' => Carbon::now()
        ];
        $editProfile = $this->admin->update($data, Auth::id(), 'id');

        if ($editProfile !== false) {
            Session::flash('success', Lang::get('message.UPDATE', ['name' => 'password']));
        } else {
            Session::flash('warning', Lang::get('message.ERROR'));
        }

        return redirect()->back();
    }
}
