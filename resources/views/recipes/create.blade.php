@extends('layouts.master')
@section('title', 'Recipe')

@section('Header')
@show

@section('content')
<br>
<br>
     <div class="container col-md-6">
          <h2 align="center"><b>Add Recipe</b></h2><br>
          <div class="jumbotron">
          <form method="post" action="{{ route('recipes.store')}}" enctype="multipart/form-data">
               @csrf
               <div class="form-group ">
                    <label for="exampleInputTitle">Title</label>
                    <input type="text" class="form-control" id="exampleInputTitle" name="title" placeholder="Enter Food Title" required>
               </div>
               
               <div class="form-group">
                    <label for="exampleInputDuration">Duration</label>
                    <input type="text" class="form-control" id="exampleInputDuration" placeholder="Example: 45min" name="duration" required>
               </div>
               <div class="form-group">
                  <label for="exampleFormControlDescription">Description</label>
                  <textarea class="form-control" id="exampleFormControlDescription" rows="5" name="description"  required></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlIngredients">Ingredients</label>
                  <textarea class="form-control" id="exampleFormControlIngredients" rows="5" name="ingredients"  required></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlPrep">Preparation</label>
                  <textarea class="form-control" id="exampleFormControlPrep" rows="5" name="preparation"  required></textarea>
                </div>
                <div class="form-group">
                  <label for="Profile3" class="col-sm-2 col-form-label">Image</label>
                  <div class="col-sm-6 col-md-8">
                      <input type="file" value="image" class="form-control-file" id="FormControlFile1" name="image" required >
                  </div>
                </div>  
                <br>
                <div class="col-md-6">
                    <button href="{{ url('recipes.index') }}" class="btn btn-warning" type="submit">Add</button>
                    <button href="#" class="btn btn-dark" type="reset">Cancel</button>
                   
               </div>
          </form>
        </div>
     </div>


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