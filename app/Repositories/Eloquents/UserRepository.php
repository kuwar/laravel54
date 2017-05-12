<?php
namespace App\Repositories;

use App\Libraries\GeneralLibrary;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Mail;

use App\User;

class UserRepository extends AbstractRepository
{

    protected $user;
    protected $request;
    protected $generalLibrary;

    public function __construct(Request $request, User $user, GeneralLibrary $generalLibrary)
    {
        $this->user = $user;
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
        return 'App\User';
    }

    public function add()
    {
        try {
            $input = $this->request->all();

            $this->user->create([
                'name' => $input['name'],
                'username' => $input['username'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            // Mail::to($user)->send(new Welcome($input['password'], $user));

            $userId = true;
        } catch (ModelNotFoundException $ex) {
            $userId = false;
        }
        return $userId;
    }

    public function edit($id)
    {
        try {
            $input = $this->request->all();
            $this->user->where('id', $id)
                ->update([
                    'name' => $input['name'],
                    'username' => $input['username'],
                    'email' => $input['email'],
                    'updated_at' => Carbon::now(),
                ]);

            $success = true;
        } catch (ModelNotFoundException $ex) {
            $success = false;
        }
        return $success;
    }

    public function remove($id)
    {
        try {
            $userToDelete = $this->user->findOrFail($id);
            $userToDelete->delete();

            $success = true;
        } catch (ModelNotFoundException $e) {
            $success = false;
        }
        return $success;
    }

    /*
     * ==========================================================================================================
     * API
     * ==========================================================================================================
     */

    public function login()
    {
        $message = [];
        $inputs = $this->request->all();
        try {
            $user = User::where(function ($cond) use ($inputs) {
                $cond->where('email', $inputs['email']);
                $cond->orWhere('username', $inputs['email']);
            })->firstOrFail();
            if (Hash::check($inputs['password'], $user->password)) {
                // Allow login only to staff
                if ($user->hasRole('staff')) {
                    // Checking status of users
                    if ($user->status == "active") {
                        $message['success'] = true;
                        $message['message'] = "Logged in success";

                        // Updating api token
                        $user->api_token = $this->randomUniqueString();
                        $user->save();

                        $message['details'] = $user;
                    } else {
                        $message['success'] = false;
                        $message['message'] = "Inactive! Please contact with admin for detail information";
                    }

                } else {
                    $message['success'] = false;
                    $message['message'] = "Unauthorized! You are not allowed to login";
                }
            } else {
                $message['success'] = false;
                $message['message'] = "Invalid password";
            }
        } catch (ModelNotFoundException $ex) {
            $message['success'] = false;
            $message['message'] = "Invalid email";
        } catch (\Exception $ex) {
            $message['success'] = false;
            $message['message'] = "Error! Something went wrong";
        }
        return $message;
    }

    public function randomUniqueString()
    {
        $apiToken = $this->generalLibrary->randomString();

        $user = User::where('api_token', $apiToken)->first();
        if ($user) {
            $this->randomUniqueString();
        }
        return $apiToken;
    }

    public function resetPassword()
    {
        $message = [];
        $inputs = $this->request->all();

        try {
            $user = User::where('email', $inputs['email'])->firstOrFail();
            $randPassword = str_random(6);
            $password = Hash::make($randPassword);

            $user->password = $password;
            $user->save();

            Mail::to($user)->send(new PasswordReset($randPassword, $user));

            $message['success'] = true;
            $message['message'] = "Password reset successful";
            $message['details'] = "New password is sent to your email.";

        } catch (ModelNotFoundException $ex) {
            $message['success'] = false;
            $message['message'] = "Invalid email";
        } catch (\Exception $ex) {
            $message['success'] = false;
            $message['message'] = "Error! Something went wrong";
        }
        return $message;
    }

    public function logout()
    {
        $apiToken = $this->request->header('api_token');
        try {
            $user = User::where('api_token', $apiToken)->firstOrFail();
            $user->api_token = NULL;
            $user->save();

            $message['success'] = true;
            $message['message'] = "Logout successful";

        } catch (ModelNotFoundException $ex) {
            $message['success'] = false;
            $message['message'] = "Unable to find user details";
        } catch (\Exception $ex) {
            $message['success'] = false;
            $message['message'] = "Error! Something went wrong";
        }
        return $message;
    }


}