<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Models\UserSubscription;
use App\Http\Controllers\Controller;

class UserSubscriptionController extends Controller
{

    public function show()
    {
        return view('blogs.subscription');
    }

    public function store(Request $request)
    {
        $request->validate([
            'plan' => 'required|string',
        ]);

        $subscription = new UserSubscription();
        $subscription->subscription = $request->plan;
        $subscription->user_id = auth()->user()->id;

        $subscription->save();

        return redirect()->route('blogs.index')->with('success', "You are now " . $request->plan . " User!");
    }

    public function destroy(UserSubscription $subscription)
    {

        $user = Auth::user();
        $currentUser = auth()->id();
        $data = \App\Models\User::find($currentUser);
        $user_id = $data->UserSubscription->user_id;
        $isPremium = $data->UserSubscription->isPremium;

        if ($user_id != $currentUser) {
            abort(403, 'Unauthorized Action');
        }

        $data->UserSubscription->delete();

        return redirect('blogs.index')->with('message', 'Unsubscribed from Premium');
    }
}
