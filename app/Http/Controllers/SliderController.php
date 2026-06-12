<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'title'      => 'required|string|max:255',
        'image'      => 'required',
        'sort_order' => 'nullable',
        'status'     => 'required|in:active,inactive',
    ]);

       $imagePath = $request->file('image')
                         ->store('web/sliders', 'public');

    

    Slider::create([
        'title'      => $request->title,
        'image'      =>  $imagePath,
        'sort_order' => $request->sort_order ?? 0,
        'status'     => $request->status,
    ]);

    return redirect()
            ->back()
            ->with('success', 'Slider added successfully.');
}


public function list(){
    $sliders = Slider::where('status', 'active')->orderBy('sort_order')->get();
    return view('web.index', compact('sliders'));
}

public function index(){
  $sliders = Slider::latest()->get();
  return view('admin.slider.list', compact('sliders'));
}

public function show(int $id){
  $slider = Slider::findOrFail($id);
  return redirect()->route('show');
}




}
