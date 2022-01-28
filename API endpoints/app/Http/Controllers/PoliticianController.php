<?php

namespace App\Http\Controllers;
use App\Models\PoliticianData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class PoliticianController extends Controller
{
    public function store(Request $request)
    {
        $data  = PoliticianData::create([
            'cand_name'  => $request->cand_name,
            'cid' =>  $request->cid,
            'cycle' => $request->cycle,
            'state' => $request->state,
            'party' => $request->party,
            'chamber' => $request->chamber,
            'first_elected' => $request->first_elected,
            'next_election'=>  $request->next_election,
            'total' => $request->total,
            'spent' =>  $request->spent,
            'cash_on_hand' => $request->cash_on_hand,
            'debt' => $request->debt,
            'origin'  => $request->origin,
            'source' => $request->source,
            ]);

        $response =  Http::get("http://www.opensecrets.org/api/?method=candSummary",
         [
            'Content-Type'=>'Application/json',
            'cid'=> 'N00007360',
            'cycle' => '2022',
            'apikey' => 'b8455caa4c602c301d82cdacd7bd9851',
            'output'=> 'json' 
    
         ],$data
        );

        $response  = $response->body();
        print_r($response);

    }    
}
