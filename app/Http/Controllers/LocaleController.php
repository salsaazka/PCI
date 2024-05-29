<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    public function setlocale($lang)
    {
        if (in_array($lang, ['en', 'id'])) {
            Session::put('locale', $lang);
        }

        return redirect()->back();
    }
}
