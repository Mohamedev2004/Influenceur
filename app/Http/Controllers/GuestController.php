<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(Request $request)
    {
        $brands = Brand::with('collaboration', 'sector')->latest()->paginate(6);

        if ($request->ajax()) {
            $isAuthenticated = auth()->check();
            $user = auth()->user();

            return response()->json([
                'brands' => $brands->map(function ($brand) use ($isAuthenticated, $user) {
                    return [
                        'logo_image' => asset('storage/' . $brand->logo_image),
                        'brandName' => $brand->brandName,
                        'brandLocalisation' => $brand->brandLocalisation,
                        'sector_name' => $brand->sector->name,
                        'show_url' => $isAuthenticated && ($user->isBrand() || $user->isInfluencer())
                            ? route('show_brand_auth', $brand->id)
                            : route('show_brand_guest', $brand->id),
                        'brandDescription' => $brand->brandDescription,
                        'brandSize' => $brand->brandSize,
                        'collaboration_type' => $brand->collaboration->name,
                    ];
                }),
                'pagination' => (string) $brands->links(),
            ]);
        }

        // For non-AJAX requests, return the normal view
        return view('welcome', compact('brands'));
    }


    public function show_brand($id)
    {
        // Fetch the brand along with its relationships (collaboration, sector, and posts)
        $brand = Brand::with(['collaboration', 'sector'])->findOrFail($id);

        // Get the user associated with this brand
        $user = User::find($brand->user_id);

        // Fetch the posts associated with the user of this brand
        $posts = Post::where('user_id', $user->id)->get();

        // Fetch other brands for the sidebar or whatever purpose
        $brands = Brand::with('sector')->latest()->limit(6)->get();

        // Return the brand view and pass the brand and posts data
        return view('pages.brand-profile', compact('brand', 'brands', 'posts'));
    }





}
