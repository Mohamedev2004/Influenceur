<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class AdminBrandController extends Controller
{
    // Function to fetch all brands
    public function index()
    {
        // Fetch all brands
        $brands = Brand::with('user' , 'sector')->get();
        $total = $brands->count();
        // Calculate statistics

        $activeBrands = $brands->filter(fn($brand)=>$brand->user && $brand->user->status === 'Active'); // Assuming 'status' column
        $inactiveBrands =  $brands->filter(fn($brand)=>$brand->user && $brand->user->status === 'Inactive'); // Inactive brands

        $active = $activeBrands->count();
        $inactive = $inactiveBrands->count();

        return view('admin.brand.brand-list', compact('brands', 'total', 'active', 'inactive', 'activeBrands' , 'inactiveBrands'));
    }


    public function destroy($id)
    {
        // Find the brand by id and delete it
        $brand = Brand::findOrFail($id);
        $brand->delete();

        // Redirect back to the brand list with a success message
        return redirect()->route('brandlist')->with('success', 'Brand deleted successfully!');
    }

    // To show the brand status update page
    public function showStatusForm($id)
    {
        // Find the brand by id
        $brand = Brand::findOrFail($id);

        // Return the view with the brand data
        return view('admin.brand.brand-status', compact('brand'));
    }

    // Method to update the brand's status
    public function updateStatus(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'status' => 'required|in:Active,Inactive',
        ]);

        // Find the brand by id
        $brand = Brand::findOrFail($id);

        // Update the brand's status
        if($brand->user){
            $brand->user->update([
                'status' =>$request->input('status'),
            ]);
        }


        // Redirect back to the brand list page with a success message
        return redirect()->route('brandlist')->with('success', 'Status updated successfully!');
    }
}


