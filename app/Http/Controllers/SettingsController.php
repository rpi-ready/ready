<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller {
    public function index() {
        return inertia("SettingsPage");
    }

    public function Nameupdate(NameChangeRequest $request) {
        $user = auth()->user();
        $user->update($request->validated());

        return redirect()->route('settings.index');

    }

    public function Passwordupdate(PasswordChangeRequest $request) {
        $user = auth()->user();
        $user->update($request->validated());

        return redirect()->route('settings.index');

    }    

}
