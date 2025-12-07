<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WaitingListRequest;
use App\Models\WaitingList;

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
    public function store(WaitingListRequest $request, string $locale)
    {
        try {
            $validated = $request->validated();

            WaitingList::create($validated);

            return response()->json([
                'success' => true,
                'message' => __('coming-soon.form.success_message'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => __('coming-soon.form.error_message'),
            ]);
        }
    }
}

