<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/admin/sliders/list.css') }}">
</head>
<body>
     <h1>All Sliders</h1>
     <button><a href="{{route('slider')}}">Add Slider</a></button>
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
        <td>Edit</td>
        <td>Delete</td>
       </tr>
       @endforeach
    </table>
</body>
</html>