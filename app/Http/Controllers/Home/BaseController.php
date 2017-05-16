<?php

namespace App\Http\Controllers\Home;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BaseController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $title;
    protected $keywords;
    protected $description;

    public function __construct()
    {
        $this->title = '';
        $this->keywords = '';
        $this->description = '';
        view()->share([
            'title' => $this->title,
            'keywords' => $this->keywords,
            'description' => $this->description,
        ]);
    }
}
