@extends('layouts.master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Healthy Diet
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('healthies.store') }}" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              <label for="title">Titles:</label>
              <input type="text" class="form-control" name="title"/>
          </div>

          <div class="form-group">

              <label for="Textarea">Descriptions:</label>
                <textarea class="form-control" id="textarea" rows="5" name="description"  required></textarea>
              
          </div>

          <div class="form-group">
              <label for="image"></label>
              <input type="file" value="image" class="form-control-file" id="image" name="image"/>
          </div>
         <!--  <div class="form-group">
              <label for="description">Descriptions:</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <div class="form-group">
              <label for="image">images:</label>
              <input type="text" class="form-control" name="image"/>
          </div> -->
          <button type="submit" class="btn btn-primary">Upload</button>
      </form>
  </div>
</div>
@endsection
@section('js')
  <script src="//cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
  <script type="text/javascript">
    CKEDITOR.replace('description');
  </script>
@endsection