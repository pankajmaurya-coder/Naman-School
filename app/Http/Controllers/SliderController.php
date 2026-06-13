<?php
namespace App\Http\Controllers;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

public function edit(int $id){
 $slider = Slider::findOrFail($id);
 return view('admin.slider.update', compact('slider'));
}

public function update(Request $request, $id)
{
    $slider = Slider::findOrFail($id);

    $request->validate([
        'title' => 'required',
        'image' => 'nullable|image',
        'sort_order' => 'required',
        'status' => 'required'
    ]);

    if ($request->hasFile('image')) {

        if($slider->image && storage::disk('public')->exists($slider->image)){
            storage::disk('public')->delete($slider->image);
        }


        $imagePath = $request->file('image')
                             ->store('web/sliders', 'public');

        $slider->image = $imagePath;
    }

    $slider->title = $request->title;
    $slider->sort_order = $request->sort_order;
    $slider->status = $request->status;

    $slider->save();

    return redirect()->back()->with('success', 'Slider Updated Successfully');
}

public function delete(int $id){

    $slider = Slider::findOrFail($id);
    if($slider->image && Storage::disk('public')->exists($slider->image)){
        Storage::disk('public')->delete($slider->image);
    }
    $slider->delete();
    return redirect()->back()->with('success', 'slider delete successfully.');
}
}
