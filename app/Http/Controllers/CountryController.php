<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    // Display all countries
    public function index()
    {
        $countries = Country::all(); 
        return view('countries.countries', compact('countries'));
    }

    // Delete a country
    public function destroy($id)
    {
        $country = Country::findOrFail($id); 
        $country->delete(); 

        return redirect()->back()->with('success', 'Country deleted successfully!');
    }
}