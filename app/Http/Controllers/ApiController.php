<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;
use Carbon\Carbon;



class ApiController extends Controller
{
    //class ApiController extends Controller


    //Get all Messages
    public function getAllMessages($id) {
        $messages = Messages::get()->toJson(JSON_PRETTY_PRINT);
        return response($messages, 200);
      }

       //Get messages based on date created and inputed id
      public function getMessages(Request $request, $id, $created_at) {
        $createdAt = $request->query('created_at', now());
            $message = Messages::where('user_id', $id)
               ->orWhere('created_at', $created_at)
               ->pluck('user_id', 'message', 'created_at')->all();
            if (empty($message)) {
              return response()->json([
                  "message" => "no records where found"
              ]);
          }
          return response()->json($message);
          
      }


}
