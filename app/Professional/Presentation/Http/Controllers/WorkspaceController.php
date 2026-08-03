<?php

namespace App\Professional\Presentation\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class WorkspaceController extends Controller
{
    public function show(): View
    {
        return view('professional.workspace', ['professional' => Auth::user()]);
    }
}
