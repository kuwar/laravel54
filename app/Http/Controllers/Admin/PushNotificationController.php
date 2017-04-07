<?php

namespace App\Http\Controllers\Admin;

use App\Repository\PushNotificationRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PushNotificationController extends Controller
{
    protected $pushNotificationRepo;

    public function __construct(PushNotificationRepository $pushNotification)
    {
        $this->pushNotificationRepo = $pushNotification;
    }

    //
    public function getAllPushNotifications()
    {
        $data['notifications'] = $this->pushNotificationRepo->getPushNotifications();

        return view('admin.push-notification.index', $data);
    }

    public function getCreatePushNotification()
    {
        return view('admin.push-notification.create');
    }

    public function postPushNotification(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        if ($this->pushNotificationRepo->insertPushNotification()) {
            Session::flash('success', \Lang::get('message.PUSH_NOTIFICATION_SEND_SUCCESS'));
        } else {
            Session::flash('error', \Lang::get('message.ERROR'));
        }

        return redirect('admin/push-notifications');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->pushNotificationRepo->deletePushNotification($id)) {
            Session::flash('success', \Lang::get('message.PUSH_NOTIFICATION_DELETE_SUCCESS'));
        } else {
            Session::flash('error', \Lang::get('message.ERROR'));
        }
        return redirect()->back();
    }
}
