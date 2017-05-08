<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(\App\Expo $expo) {
        \DB::table('visited_expos')->insert(
            ['user_id' => \Auth::user()->id, 'expo_id' => $expo->id]
        );
        if ($expo->expo_type_id === 1) {
            return view('quiz', ['expo' => $expo]);
        }
        return view('pic', ['expo' => $expo]);

    }
}
