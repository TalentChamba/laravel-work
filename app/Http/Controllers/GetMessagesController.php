<?php
   
namespace App\Http\Controllers;
 
use App\Models\User;
use App\Models\Messages;
use App\Models\Chart;
use Illuminate\Http\Request;
use Redirect,Response;
Use DB;
use Carbon\Carbon;
 
class GetMessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id, $created_at)
    {
    // Get messages
    $createdAt = $request->query('created_at', now());
    $message = Messages::where('user_id', $id)
                ->orWhere('created_at', $created_at)
                ->pluck('user_id')->all();
    for ($i=0; $i<=count($message); $i++) {
                $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
            }
            
    // Prepare the data for returning with the view
    $chart = new Chart;
            $chart->labels = (array_keys($message));
            $chart->dataset = (array_values($message));
            $chart->colours = $colours;
    return view('chart-js', compact('chart'));
        }
 
}

