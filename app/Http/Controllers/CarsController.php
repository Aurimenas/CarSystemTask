<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;
use App\CarStatus;
use App\Manage;
use App\Segments;
use App\Users;
use App\Status;
use DB;

class CarsController extends Controller
{
    public function displayData(){

   
        $iter1=DB::select("SELECT cars.id, cars.number, cars.year_made, cars.model, users.name AS username, car_management.date_from as dat, car_status.status_id, segments.name, users.id as senas, car_management.segments_id as seg_id FROM car_management 
        JOIN cars ON cars.id=car_management.cars_id
        JOIN segments ON segments.id=car_management.segments_id
        JOIN users ON car_management.user_id=users.id
        JOIN car_status ON car_status.cars_id=cars.id
        WHERE car_management.date_to>=NOW()
        
        ");
   
        $iter2=DB::select("SELECT statuses.name as statuses, car_status.cars_id FROM statuses JOIN car_status ON statuses.id=car_status.status_id "); //translating status id to status name
 
        $i=0;
        foreach($iter1 as $replace){
            $replace->status_id=$iter2[$i]->statuses;
            $i++;
        };
        // ^^^
        // Replacing status id codes with status names
        //

  $seni=array();
        foreach($iter1 as $iter3){
        $senas=DB::SELECT("SELECT users.name as nam FROM users JOIN car_management ON users.id=car_management.user_id WHERE car_management.date_to='$iter3->dat' AND car_management.segments_id='$iter3->seg_id'");
        $iter3->senas=$senas;
 
        };
       // ^^^
       // Replacing dummy field 'senas' from previous iteration to real value of previous (old) segment's manager
       //

        return response()->json(['duom'=>$iter1]);
      
      }
}
