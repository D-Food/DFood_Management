@extends('layouts.master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Healthy Diet
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
      <form method="post" action="{{ route('healthies.update', $healthy->id) }} enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="title">Titles:</label>
          <input type="text" class="form-control" name="title" value={{ $healthy->title }} />
        </div>

        <div class="form-group">

              <label for="description">Descriptions:</label>
              <textarea type="text" class="form-control" name="description">
                <?php echo $healthy['description'] ?>
            </textarea>
              
          </div>

          <div class="form-group">
            <label for="choose" class="col-sm-2 col-form-label" >Images:</label>
            <div class="col-sm-10">
              <input type="file" name="image" value={{ $healthy->image }} />
            </div>
          </div>

        
<!--         
        <div class="form-group">
          <label for="image"> images:</label>
          <input type="text" class="form-control" name="image" value={{ $healthy->image }} />
        </div> -->
        <!-- <div class="form-group">
          <label for="image" class="col-sm-2 col-form-label" >Images:</label>
            <div class="col-sm-10">
            <input type="file" name="image" id="image" required value={{ $healthy->image}}/>
            </div>
        </div>  
          <br> -->
        <button type="submit" class="btn btn-primary">Update</button>
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
