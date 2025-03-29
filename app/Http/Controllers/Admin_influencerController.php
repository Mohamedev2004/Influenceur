<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Influencer;
use Doctrine\Inflector\Inflector;

class Admin_influencerController extends Controller
{
    // Display the list of influencers
    public function index()
    {
        $influencers = Influencer::with('user', 'sector')->get(); // Load influencers with related user and sector
        $total = $influencers->count();

        $activeInfluencers = $influencers->filter(fn($influencer) => $influencer->user && $influencer->user->status === 'Active');
        $inactiveInfluencers = $influencers->filter(fn($influencer) => $influencer->user && $influencer->user->status === 'Inactive');

        $active = $activeInfluencers->count();
        $inactive = $inactiveInfluencers->count();

        return view('admin.influencer.influencer-list', compact('influencers', 'total', 'active', 'inactive', 'activeInfluencers', 'inactiveInfluencers'));
    }

    // Delete an influencer
    public function destroy($id) {
        $influencer = Influencer::findOrFail($id);
        $influencer->delete();
        return redirect()->back()->with('success', 'Influencer deleted successfully.');
    }

    public function showStatusForm($id)
    {
        // Find the influencer by id
        $influencer = Influencer::findOrFail($id);

        // Return the view with the influencer data
        return view('admin.influencer.influencer-status', compact('influencer'));
    }

    public function updateStatus(Request $request, $id)
{
    // Validate the incoming request
    $request->validate([
        'status' => 'required|in:Active,Inactive',
    ]);

    // Find the influencer by id
    $influencer = Influencer::findOrFail($id);

    // Check if the influencer has a related user and update status
    if ($influencer->user) {
        $influencer->user->update([
            'status' => $request->input('status'),
        ]);
    }

    // Redirect to the influencer list with a success message
    return redirect()->route('influencerlist')->with('success', 'Status updated successfully!');
}


}
