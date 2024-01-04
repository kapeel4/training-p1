<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function setLang(Request $request){
      $lang = $request->lang;
      // App::setlocale($lang);
      Session::put('locale', $lang);
      $ab = Session::get('locale');
      App::setLocale($lang);
      $locale = App::getLocale();
      var_dump($lang,$ab,$locale); die();
    }

    public function switchLang(Request $request)
    {
        // session(['APP_LOCALE' => $request->lang]);
        // setLocale
        app()->setLocale('np');
        // return back();
    }

    public function indexss(Request $request)
    {
        $lang = $request->lang;
        $request->session()->put('locale', $lang);
    }
}
