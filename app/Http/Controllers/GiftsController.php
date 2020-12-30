<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class GiftsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gifts = Gift::all()->load('category');
        return view('control.gifts.index', ['gifts' => $gifts]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('control.gifts.create', ['categories' => $categories]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'image' => 'required|mimes:jpg,png,jpeg',
            'category_id' => 'required|integer',
        ]);

        // Upload Image And Store
        $uploadedImage = $request->file('image');
        $imageName = time() . '.' . $uploadedImage->getClientOriginalExtension();
        $direction = public_path('/gifts');
        $uploadedImage->move($direction, $imageName);

        $gift = new Gift();
        $gift->fill($request->all());
        $gift->image = '/gifts/' . $imageName;
        $result = $gift->save();
        return redirect()->route('gift.all')->with(['success' => 'The Gift Added Successflly']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gift  $gift
     * @return \Illuminate\Http\Response
     */
    public function show(Gift $gift)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gift  $gift
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gift = Gift::findOrFail($id);
        $categories = Category::all();
        return view('control.gifts.edit', ['gift' => $gift, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gift  $gift
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'image' => 'mimes:jpg,png,jpeg',
            'category_id' => 'required|integer',
        ]);

        $gift = Gift::findorFail($id);
        $gift->fill($request->all());


        // Update Image If A new Image Added
        if($request->hasFile('image')) {
            // Upload Image And Store
            $uploadedImage = $request->file('image');
            $imageName = time() . '.' . $uploadedImage->getClientOriginalExtension();
            $direction = public_path('/gifts');
            $uploadedImage->move($direction, $imageName);
            $gift->image = '/gifts/' . $imageName;
        }

        $gift->update();
        return redirect()->route('gift.all')->with(['success' => 'The Gift Updated Successflly']);

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gift  $gift
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gift = Gift::findOrFail($id);
        $result = $gift->delete();
        return redirect()->back()->with(['success' => 'The Gift Deleted Successflly']);
    }
}
