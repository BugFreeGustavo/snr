<?php

namespace App\Professional\Presentation\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Professional\Presentation\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function edit(): View
    {
        return view('professional.profile', ['professional' => Auth::user()]);
    }

    public function update(UpdateProfileRequest $request): RedirectResponse
    {
        $professional = Auth::user();

        $professional->name = $request->validated('name');
        $professional->email = $request->validated('email');

        if ($request->filled('password')) {
            $professional->password = Hash::make($request->validated('password'));
        }

        $professional->save();

        return redirect()->route('profile.edit');
    }
}
