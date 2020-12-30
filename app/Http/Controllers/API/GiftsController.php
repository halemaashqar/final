<?php

namespace App\Http\Controllers\API;

use App\Models\Book;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class GiftsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gifts = gift::all()->load('category');
        return Controller::success($gifts);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'image' => 'required|mimes:jpg,png,jpeg',
            'category_id' => 'required|integer',
        ]);
        if($validated->fails()) {
        	return Controller::error($validated->errors());
        } else {

	        // Upload Image And Store
	        $uploadedImage = $request->file('image');
	        $imageName = time() . '.' . $uploadedImage->getClientOriginalExtension();
	        $direction = public_path('/gifts');
	        $uploadedImage->move($direction, $imageName);

	        $gift = new Gift();
	        $gift->fill($request->all());
	        $gift->image = '/gifts/' . $imageName;
	        $result = $gift->save();

	        if( $result ){
	        	return Controller::success($gift);
	        }
	        else {
	        	return Controller::error("Something Went Wrong!!");
	        }
	    }
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
        $validated = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'image' => 'mimes:jpg,png,jpeg',
            'category_id' => 'required|integer',
        ]);

        if($validated->fails()) {
            return Controller::error($validated->errors());
        } else {
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

            $result = $gift->update();

            if( $result ){
                return Controller::success($gift);
            }
            else {
                return Controller::error("Something Went Wrong!!");
            }
        }
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
        return Controller::success($gift);
    }
}
