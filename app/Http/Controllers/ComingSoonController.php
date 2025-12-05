<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComingSoonController extends Controller
{
    /**
     * Display the coming soon page.
     */
    public function index()
    {
        return view('coming-soon', [
            'kunoozLogoPath' => asset('logo/kunooz_logo_h.svg'),
            'section1ImagePath' => asset('design.svg'),
            'section2ImagePath' => asset('wating_list.svg'),
        ]);
    }

    /**
     * Handle waiting list form submission.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'store_url' => 'nullable|url|max:255',
        ]);

        // TODO: Store the waiting list entry in the database
        // For now, we'll just return a success response

        return response()->json([
            'success' => true,
            'message' => __('coming-soon.form.success_message'),
        ]);
    }
}

