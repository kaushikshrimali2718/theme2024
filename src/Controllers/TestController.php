<?php

namespace Aheenam\Test\Controllers;

use Illuminate\Routing\Controller;

class TestController extends Controller
{

    /**
     * @param $name
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($name)
    {
        return view('test::index', [
            'name' => $name
        ]);
    }

}