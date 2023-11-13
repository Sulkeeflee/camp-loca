<?php
namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Campground;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ReviewController extends Controller
{


    public function create(Request $request, $campgroundId)
    {
        // Validation logic here
    
        $user = Auth::user(); // Get the authenticated user
        
        $request->validate([
            'review.rating' => 'required|integer|between:1,5',
            'review.body' => 'required|string',
            
        ]);

        Review::create([
            'campground_id' => $campgroundId,
            'user_id' => $user->id,
            'rating' => $request->input('review.rating'),
            'body' => $request->input('review.body'),
            // Add other fields as needed
        ]);
    
        return redirect()->back()->with('success', 'Review submitted successfully.');
    }

 


    public function delete($campgroundId, $reviewId)
    {
        $campground = Campground::findOrFail($campgroundId);
        $review = Review::findOrFail($reviewId);

        // Additional authorization check if needed
        if ($review->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $review->delete();

        return redirect()->back()->with('success', 'Review deleted successfully!');

    }
}