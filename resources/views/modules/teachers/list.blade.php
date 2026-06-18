
@extends('admin.layouts.app')

@section('title','Slider List')

@push('styles')
 <link rel="stylesheet" href="{{ asset('css/modules/teacher/list.css') }}">
@endpush

@section('content')

<h1>Teachers</h1>

     <div class="add-nav">
      <a href="{{route('teacher.create')}}">ADD New Teacher</a>
</div>
    <table>
        <tr>
            <th>Sr.No</th>
          <th>Photo</th>
          <th>Name</th>
          <th>Qualification</th>
          <th>Phone</th>
          <th colspan=2>Action</th>
         </tr>
         @foreach($teachers as $teacher)
         <tr>
               <td>{{$loop->iteration}}</td>
              <td>
                <img src="{{ asset('storage/' . $teacher->user->photo) }}" alt="Teacher Image" width="50">
              </td>
               <td>{{$teacher->user->name}}</td>
               <td>{{$teacher->qualification}}</td>
               <td>{{$teacher->phone}}</td>
               <td><a href="{{route('teacher.show', $teacher->id)}}">View</td>
               <td><form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST" style="display:inline;">
               @csrf
                  @method('DELETE')
             <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')">
                 Delete
    </button>
</form></td> 
         </tr>
         @endforeach
    </table>


    @endsection