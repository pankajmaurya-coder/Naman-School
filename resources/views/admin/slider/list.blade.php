
@extends('admin.layouts.app')

@section('title','Slider List')

@push('styles')
 <link rel="stylesheet" href="{{ asset('css/admin/sliders/list.css') }}">
@endpush

@section('content')

 <h1>All Sliders</h1>
     <button class="add-slider"><a href="{{route('slider')}}">Add Slider</a></button>
    <table>
       <tr>
        <th>image</th>
        <th>Title</th>
        <th>sort_id</th>
        <th colspan="2">Action</th>
       </tr>
       @foreach($sliders as $slider)
       <tr>
         <td>
                <img src="{{ asset('storage/'.$slider->image) }}"
                     class="img-thumbnail"
                     style="width:100px;height:60px;object-fit:cover;">
            </td>
        <td>{{$slider->title}}</td>
        <td>{{$slider->sort_order}}</td>
        <td><a href="{{route('slider.edit',$slider->id)}}">Edit</a></td>
        <td>
        <form action="{{route('slider.delete', $slider->id) }}" method="POST">
            @csrf
           @method('DELETE')

           <button type="submit"  onclick="return confirm('Are you sure you want to delete this slider?')">
            Delete</button>
         </form>
        </td>
       </tr>
       @endforeach
    </table>


@endsection