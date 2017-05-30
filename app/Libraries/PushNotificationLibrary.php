<?php
namespace App\Libraries;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Models\PushNotification;
use Illuminate\Support\Facades\DB;

class PushNotificationLibrary
{

    protected $request;

    protected $serverKey;
    protected $url;

    /**
     * Defining constructor
     */
    public function __construct(Request $request)
    {
        $this->request = $request;

        $this->serverKey = "AAAAxLubxI4:APA91bFxITNg3Fl7SDdARk3rK42xEhCtp8DtW1DE7_jNxTri-E88elD4RkB0_V80KKX_FhooNR9rK9auPs_OCsLnEMNcmpSx1hVDM-_Jf4zfHjH_00AbT9GVL0Oq08aXpXOC-ayn_t3b";
        $this->url = "https://android.googleapis.com/gcm/send";
    }

    public function getPushNotifications()
    {
        try {
            $notifications = PushNotification::all();
        } catch (ModelNotFoundException $ex) {
            $notifications = [];
        }
        return $notifications;
    }

    public function insertPushNotification()
    {
        try {
            $input = $this->request->all();

            $notificationId = PushNotification::insertGetId([
                'title' => $input['title'],
                'body' => $input['body'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $regIds = $this->userRegisterIds();
            $this->sendPushNotification($regIds, $input['title'], $input['body']);

        } catch (ModelNotFoundException $ex) {
            $notificationId = false;
        }
        return $notificationId;
    }

    /**
     * Fcm push notification
     * @param array $regIds
     * @param string $title
     * @param string $body
     *
     * @return mixed
     */
    public function sendPushNotification($regIds, $title, $body)
    {
        if (!empty($regIds)) {

            $msg = array
            (
                'body' => $body,
                'title' => $title,
                'vibrate' => 1,
                'sound' => 1
            );
            $fields = array
            (
                'registration_ids' => $regIds,
                'data' => $msg
            );

            $headers = array
            (
                'Authorization: key=' . $this->serverKey,
                'Content-Type: application/json'
            );

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this->url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
            $result = curl_exec($ch);
            curl_close($ch);

        } else {
            return 2;
        }
    }

    public function userRegisterIds()
    {
        $regIds = DB::table('fcm_registration_ids')->select('registration_id')->get();
        $registerationsIds = [];

        foreach ($regIds->toArray() as $ids) {
            $registerationsIds[] = $ids->registration_id;
        }
        return $registerationsIds;
    }

    public function deletePushNotification($id)
    {
        try {
            $push = PushNotification::findOrFail($id);
            $push->delete();
            $success = true;
        } catch (ModelNotFoundException $e) {
            $success = false;
        }
        return $success;
    }
}