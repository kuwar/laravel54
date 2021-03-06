<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Mail\PasswordChanged;
use App\Mail\UserRegistered;
use App\Repositories\Eloquents\UserRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public $viewData = [];
    public $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;

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
            'title' => "Users",
            'subtitle' => "List of users",
            'users' => $this->user->all()
        ];

        return view('admin.users.index', $this->viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->viewData = [
            'title' => "Users",
            'subtitle' => "Create a user"
        ];

        return view('admin.users.create', $this->viewData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $inputs = $request->all();
        $newUserData = [
            'name' => $inputs['name'],
            'email' => $inputs['email'],
            'password' => Hash::make($inputs['password']),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        if ($this->user->create($newUserData)) {
            Session::flash('success', Lang::get('message.CREATE', ['name' => 'user']));
        } else {
            Session::flash('error', Lang::get('message.ERROR'));
        }
        return redirect('admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->viewData = [
            'title' => "Users",
            'subtitle' => "Show a user detail",
            'user' => $this->user->find($id)
        ];

        return view('admin.users.view', $this->viewData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->viewData = [
            'title' => "Users",
            'subtitle' => "Edit a user",
            'user' => $this->user->find($id)
        ];

        return view('admin.users.edit', $this->viewData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $inputs = $request->all();
        $data = [
            'name' => $inputs['name'],
            'email' => $inputs['email'],
            'updated_at' => Carbon::now()
        ];
        $editUser = $this->user->update($data, $id, 'id');

        if ($editUser !== false) {
            Session::flash('success', Lang::get('message.UPDATE', ['name' => 'user']));
        } else {
            Session::flash('warning', Lang::get('message.ERROR'));
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = $this->user->remove($id);

        if ($delete !== false) {
            Session::flash('success', Lang::get('message.DELETE', ['name' => 'user']));
        } else {
            Session::flash('error', Lang::get('message.ERROR'));
        }
        return redirect()->back();
    }

    /**
     * Change password
     *
     * @param UserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function putChangePassword(UserRequest $request)
    {
        $inputs = $request->all();
        $data = [
            'password' => Hash::make($inputs['password']),
            'updated_at' => Carbon::now()
        ];
        $editUser = $this->user->update($data, $inputs['id'], 'id');

        if ($editUser !== false) {
            Mail::to('kuwarsaurav21@gmail.com')
                ->queue(new PasswordChanged());
            Mail::to('kuwarsaurav21@gmail.com')
                ->queue(new UserRegistered());
            Session::flash('success', Lang::get('message.UPDATE', ['name' => 'password of user']));
        } else {
            Session::flash('warning', Lang::get('message.ERROR'));
        }

        return redirect()->back();
    }
}
