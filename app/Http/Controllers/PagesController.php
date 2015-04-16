<?php namespace Calendar\Http\Controllers;

use Calendar\Http\Requests;
use Calendar\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('pages.timetable');
    }
}
