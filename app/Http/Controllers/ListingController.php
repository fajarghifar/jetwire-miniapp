<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\Color;
use App\Models\Listing;
use App\Models\Category;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreListingRequest;
use App\Http\Requests\UpdateListingRequest;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listings = Listing::with(['categories', 'colors', 'sizes'])->get();

        return view('listings.index', compact('listings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $sizes = Size::all();
        $colors = Color::all();

        return view('listings.create', compact('categories', 'sizes', 'colors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreListingRequest $request)
    {
        $listing = auth()->user()->listings()->create($request->validated());

        for ($i = 1; $i <= 3; $i++) {
            if ($request->hasFile('photo' . $i)) {
                $listing->addMediaFromRequest('photo' . $i)
                    ->toMediaCollection('listings');
            }
        }

        $listing->categories()->attach($request->categories);
        $listing->sizes()->attach($request->sizes);
        $listing->colors()->attach($request->colors);

        return redirect()->route('listings.index')->with('success', 'Listing created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        return view('listings.show', compact('listing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {
        Gate::authorize('update', $listing);
        $listing->load('categories', 'sizes', 'colors');

        $media = $listing->getMedia('listings');
        $categories = Category::all();
        $sizes = Size::all();
        $colors = Color::all();

        return view('listings.edit', compact('listing', 'media', 'categories', 'sizes', 'colors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateListingRequest $request, Listing $listing)
    {
        Gate::authorize('update', $listing);

        $listing->update($request->validated());

        for ($i = 1; $i <= 3; $i++) {
            if ($request->hasFile('photo' . $i)) {
                $listing->addMediaFromRequest('photo' . $i)
                    ->toMediaCollection('listings');
            }
        }

        $listing->categories()->sync($request->categories);
        $listing->sizes()->sync($request->sizes);
        $listing->colors()->sync($request->colors);

        return redirect()->route('listings.index')->with('success', 'Listing updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing)
    {
        Gate::authorize('delete', $listing);

        $listing->delete();

        return redirect()->route('listings.index')->with('success', 'Listing deleted successfully!');
    }

    public function deletePhoto($listingId, $photoId)
    {
        $listing = Listing::where('user_id', auth()->user()->id)->findOrFail($listingId);

        $photo = $listing->getMedia('listings')->where('id', $photoId)->first();

        if ($photo) {
            $photo->delete();
        }

        return redirect()->route('listings.edit', $listingId);
    }
}
