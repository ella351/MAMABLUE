<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('countries.countries', compact('countries'));
    }

    // 👉 Show the form to create a new country
    public function create()
    {
        return view('countries.create');
    }

    // 👉 Save new country to database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required|max:3',
            'continent' => 'required',
            'population' => 'required|numeric',
        ]);

        Country::create($request->all());

        return redirect()->route('countries.index')
            ->with('success', 'Country added successfully.');
    }

    // 👉 Show the form to edit an existing country
    public function edit(Country $country)
    {
        return view('countries.edit', compact('country'));
    }

    // 👉 Update country in database
    public function update(Request $request, Country $country)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required|max:3',
            'continent' => 'required',
            'population' => 'required|numeric',
        ]);

        $country->update($request->all());

        return redirect()->route('countries.index')
            ->with('success', 'Country updated successfully.');
    }

    // 👉 Delete a country
    public function destroy(Country $country)
    {
        $country->delete();

        return redirect()->route('countries.index')
            ->with('success', 'Country deleted successfully.');
    }
}
