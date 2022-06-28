<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ChatRoom;
use App\Models\UserChat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function room_create(Request $request)
    {
        $receiver_id = hashids_decode($request->receiver_id);
        $check_1 = ChatRoom::where('sender_id','=',$receiver_id)
                                ->where('receiver_id','=',auth('user')->user()->id);
        $chat_roomid ='';
        if (Auth::check()) {
            if ($check_1->count() == 0) {
                $check_2 = Chatroom::where('receiver_id','=',$receiver_id)
                ->where('sender_id','=',auth('user')->user()->id);
                if ($check_2->count() > 0) {
                    $chat_roomid = $check_2->first()->hashid;
                }else{
                    $room = new Chatroom();
                    $room->receiver_id = $receiver_id;
                    $room->sender_id = auth('user')->user()->id;
                    $room->save();
                    $chat_roomid = $room->hashid;
                }
            }else{
                $chat_roomid = $check_1->first()->hashid;
            }
        }else{
            $msg = ['haserror'=>'You have to signup for chat with other users'];
            return redirect()->route('login')->with($msg);
        }
        return redirect()->route('front.chat.room',['room_id'=>$chat_roomid]);
    }

    public function chat_room(Request $request)
    {
        $chat_room = new ChatRoom();
        $user_id = auth('user')->id();
        $chat_romm_users = $chat_room::with('sender','receiver')->where('sender_id',$user_id)->orWhere('receiver_id',$user_id)->get();

        $data = array(
            'title' => 'Chat Room',
            'chat_romm_users' => $chat_romm_users,
            'room_id' => @hashids_decode($request->room_id),
            'user_id' => $user_id
        );

        return view('front.pages.user_dashboard.chat.index')->with($data);
        // dd($request->all());
    }

    public function save_msg(Request $request)
    {
        $room = Chatroom::find($request->room_id);
        $msg = new UserChat();
        if (auth('user')->user()->id == $room->sender_id) {
            $msg->sender_id = $room->sender_id;
            $msg->receiver_id = $room->receiver_id;
            $msg->chat_room_id = $request->room_id;
            $msg->message = $request->msg;
        }

        if (auth('user')->user()->id == $room->receiver_id) {
            $msg->sender_id = $room->receiver_id;
            $msg->receiver_id = $room->sender_id;
            $msg->chat_room_id = $request->room_id;
            $msg->message = $request->msg;
        }

        $msg->save();
        return response()->json(['status'=>200]);
    }
}
