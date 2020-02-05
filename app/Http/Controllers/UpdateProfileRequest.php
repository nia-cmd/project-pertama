<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateProfileRequest extends Controller
{
    /**
     * Update user's profile
     *
     * @param  UpdateProfileRequest $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(UpdateProfileRequest $request)
    {
        $request->user()->update(
            $request->all()
        );

        return redirect()->route('profile.edit');
    }
}
