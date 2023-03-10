<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilController extends Controller
{
    //
    public function notfound() {
        return json_response(404, false, "Not Found!");
    }

    //
    public function status() {
        return json_response(200, true, "Im ok");
    }
}
