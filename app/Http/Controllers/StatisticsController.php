<?php

namespace App\Http\Controllers;
use App\View;
use App\Apartment;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class StatisticsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

//Funzione per mostrare a video il numero totale delle statistiche
  public function show_views(Request $request, $id)
  {
    $user = Auth::user();

    $apartment = Apartment::findOrFail($id);
    $count_views = View::where('apartment_id', $id)-> count();
    $count_messages = Message::where('apartment_id', $id)-> count();

    return view('show_statistics', compact('user','apartment', 'count_views','count_messages'));;
  }

//Funzione per la chiamata ajax relativa alle views
  public function getMonthlyViewData($id)
    {

      $data= View::where('apartment_id', $id)
      ->get()
      ->groupBy(function($val) {
      return Carbon::parse($val->created_at)->format('M');
    });

    $months = [];
    $views = [];
    foreach ($data as $month => $view) {
      $months[] = $month;
      $views[] = $view -> count();
    }
    $monthly_view_data_array = array(
      'months' => $months,
      'views_count_data' => $views,
    );
    return response()->json($monthly_view_data_array);
  }

//Funzione per la chiamata ajax relativa ai messaggi
  public function getMonthlyMessagesData($id)
    {

      $data= Message::where('apartment_id', $id)
      ->get()
      ->groupBy(function($val) {
      return Carbon::parse($val->created_at)->format('M');
    });

    $months = [];
    $messages = [];
    foreach ($data as $month => $message) {
      $months[] = $month;
      $messages[] = $message -> count();
    }
    $monthly_view_data_array = array(
      'months' => $months,
      'messages_count_data' => $messages,
    );
    return response()->json($monthly_view_data_array);
  }


}