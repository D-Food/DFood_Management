@extends('layouts.master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Title</td>
          <td>Description</td>
          <td>Image</td>
          
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($healthies as $healthy)
        <tr>
            <td>{{$healthy->id}}</td>
            <td>{{$healthy->title}}</td>
            <td>{{$healthy->description}}</td>
            <td><img width="100px" height="100px" src="{{asset($healthy['image'])}}"></td>
            
            <td><a href="{{ route('healthies.edit',$healthy->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('healthies.destroy', $healthy->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  {{$healthies->links()}}
<div>
@endsection