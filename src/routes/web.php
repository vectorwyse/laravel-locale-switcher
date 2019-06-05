<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

Route::middleware('web')->group(function () {
    Route::get('/set-locale', function (Request $request) {
        if (!Auth::user()) {
            abort(403, 'You are not authorized to perform this action.');
        }

        $request->validate([
            'locale' => 'required|in:'.implode(',', array_keys(config('app.available_locales'))),
        ]);

        $newLocale = $request->get('locale');

        Auth::user()->locale = $newLocale;
        Auth::user()->save();

        return redirect()->back();
    });
});
