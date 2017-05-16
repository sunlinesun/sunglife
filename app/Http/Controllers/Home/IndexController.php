<?php

namespace App\Http\Controllers\Home;

class IndexController extends BaseController
{
    public function getIndex()
    {
        $this->title = 'sunglife';
        $this->keywords = 'Sun Green Life';
        $this->description = 'Life is full of sunshine, full of green';
        return view('home/index/index');
    }
}
