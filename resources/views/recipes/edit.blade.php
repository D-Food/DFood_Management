@extends('layouts.master')
@section('title', 'Edit Recipe')

@section('Header')
@show

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="container col-md-8">
<div class="card uper">
  <div class="card-header">
    <h2><b>Edit Recipe</b></h2>
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      <br/>
    @endif
      <form method="post" action="{{ route('recipes.update', $recipe->id) }} enctype="multipart/form-data">
        @method('PATCH')
        @csrf
          <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" value={{ $recipe->title }} />
          </div>
          <div class="form-group">
            <label for="duration">Duration:</label>
            <input type="text" class="form-control" name="duration" value={{ $recipe->duration}} />
          </div>
          <div class="form-group">
            <label for="extarea">Description:</label>
            <textarea type="text" class="form-control" name="description">
                <?php echo $recipe['description'] ?>
            </textarea>
          </div>
          <div class="form-group">
            <label for="ingredients">Ingredients:</label>
            <textarea type="text" class="form-control" name="ingredients"  >
                <?php echo $recipe['ingredients'] ?>
            </textarea>
          </div>
          <div class="form-group">
            <label for="preparation">Preparation:</label>
            <textarea type="text" class="form-control" name="preparation">
                <?php echo $recipe['preparation'] ?>
            </textarea>
          </div>

          <div class="form-group">
          <label for="choose" class="col-sm-2 col-form-label" >Image:</label>
          <div class="col-sm-10">
            <input type="file" name="image" value={{ $recipe->image }} />
          </div>
        </div>
          <button type="submit" class="btn btn-warning">Update</button>
          <button  href="#" type="button" class="btn btn-dark">Cancel</button>
      </form>
  </div>
</div>
</div>
<br>
@endsection
@section('js')
  <script src="//cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
  <script type="text/javascript">
    CKEDITOR.replace('description');
  </script>

  <script src="//cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
  <script type="text/javascript">
    CKEDITOR.replace('ingredients');
  </script>

  <script src="//cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
  <script type="text/javascript">
    CKEDITOR.replace('preparation');
  </script>
@endsection

@section('Footer')
@show