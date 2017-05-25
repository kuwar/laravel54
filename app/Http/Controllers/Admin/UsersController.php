<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquents\UserRepository;
use Illuminate\Support\Facades\Lang;

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
        if ($this->user->add()) {
            Session::flash('success', \Lang::get('message.CREATE', 'user'));
        } else {
            Session::flash('error', \Lang::get('message.ERROR'));
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
            'user' => $this->user->getById($id)
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
            'subtitle' => "Edit a user"
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
        $editUser = $this->user->edit($id);

        if ($editUser !== false) {
            Session::flash('success', Lang::get('message.UPDATE', 'user'));
        } else {
            Session::flash('warning', \Lang::get('message.ERROR'));
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
            Session::flash('success', Lang::get('message.DELETE'));
        } else {
            Session::flash('error', \Lang::get('message.ERROR'));
        }
        return redirect()->back();
    }
}
