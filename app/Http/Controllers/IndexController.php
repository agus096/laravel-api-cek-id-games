<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function cek(Request $request) {
        //inisialisasi inputan dari form
        $game_code = $request->input('game_code');
        $user_id = $request->input('user_id');
    
        // Membuat URL API dengan parameter yang diterima dari request
        $apiUrl = "https://v1.apigames.id/merchant/[MERCHANT MU]/cek-username/{$game_code}?user_id={$user_id}&signature=[SIGNATURE MU]";

        // Menggunakan Guzzle untuk membuat permintaan GET ke API
        $client = new Client();
        $response = $client->get($apiUrl);
    
        // Mendapatkan dan mengembalikan data dari respons API
        $apiData = json_decode($response->getBody(), true);
    
        return view('index' , compact('apiData'));
    }
}
