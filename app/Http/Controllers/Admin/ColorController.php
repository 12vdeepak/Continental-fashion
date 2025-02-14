<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ColorRequest;
use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $color = Color::all();
        return view('admin.master-crud.colors.index', compact('color'));
    }

    public function create()
    {
        return view('admin.master-crud.colors.create');
    }

    public function store(ColorRequest $request)
    {
        // Create a new banner instance
        $color = new Color();
        $color->color_code = $request->input('color_code');
        // Handle image upload
        if ($request->hasFile('color_image')) {
            $imagePath = $request->file('color_image')->store('color_images', 'public'); // Store the image in the storage folder
            $color->color_image = $imagePath; // Save the file path to the image attribute
        }

        // Save the Banner instance to the database
        $color->save();

        // Redirect back to the banners index page
        return redirect()->route('colors.index')->with('message', 'Color created successfully.');
    }

    public function edit($id)
    {
        $color = Color::findOrFail($id);
        return view('admin.master-crud.colors.edit', compact('color'));
    }

    public function update(ColorRequest $request, $id)
    {
        $color = Color::findOrFail($id);

        // Handle the description update
        $color->color_code = $request->input('color_code');

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($color->color_image) {
                Storage::disk('public')->delete($color->color_image);
            }

            // Handle image upload
            $imagePath = $request->file('image')->store('color_images', 'public');
            $color->color_image = $imagePath;
        }

        // Save the updated Banner instance to the database
        $color->save();

        return redirect()->route('colors.index')->with('message', 'Color updated successfully.');
    }
    public function destroy($id)
    {
        $color = Color::findOrFail($id);

        // Delete the image if it exists
        if ($color->color_image) {
            Storage::disk('public')->delete($color->color_image);
        }

        $color->delete();
        return redirect()->route('colors.index')->with('message', 'Color deleted successfully.');
    }
}