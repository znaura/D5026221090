<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmojiController extends Controller
{
    public function index()
    {
        $record = DB::table('chat')->first();

        $emoticons = [
            ':))' => '1.png',
            ':3'  => '2.png',
            ';)'  => '5.png',
            ':P'  => '3.png',
            ':C'  => '4.png',
        ];

        $wordArray = explode(' ', $record->pesan);

        foreach ($wordArray as &$word) {
            if (array_key_exists($word, $emoticons)) {
                $word = '<img src="' . asset('/images/' . $emoticons[$word]) . '" alt="' . $word . '" style="width:24px; height:24px;" />';
            }
        }

        $convertedText = implode(' ', $wordArray);

        return view('indexchat', ['convertedText' => $convertedText]);
    }
}
