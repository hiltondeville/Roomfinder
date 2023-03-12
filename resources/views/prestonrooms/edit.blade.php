@extends('layouts.layout')


@section('content')

<h1 class="title">Edit Project</h1>

<form class="container" method="post" action="/prestonrooms/{{ $prestonroom->id }}" >

  @method('PATCH')

  @csrf

  <div class="form-group">
    <label for="sid">Sid</label>
    <input type="text" name="sid" class="form-control" value="{{ $prestonroom->sid }}">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text"  name="description" class="form-control" value="{{ $prestonroom->description }}">
  </div>
  <div class="form-group">
    <label for="picsnum">Number of pics</label>
    <input type="number"  name="picsnum" class="form-control" value="{{ $prestonroom->picsnum }}">
  </div>
  <div class="form-group">
    <label for="keynum">Key number</label>
    <input type="text"  name="keynum" class="form-control" value="{{ $prestonroom->keynum }}">
  </div>
  <div class="form-group">
    <label for="img1">Pic 1</label>
    <input type="text"  name="img1" class="form-control" value="{{ $prestonroom->img1 }}">
  </div>
  <div class="form-group">
    <label for="img2">Pic 2</label>
    <input type="text" name="img2"class="form-control" value="{{ $prestonroom->img2 }}">
  </div>
  <div class="form-group">
    <label for="img3">Pic 3</label>
    <input type="text" name="img3" class="form-control" value="{{ $prestonroom->img3 }}">
  </div>
  <div class="form-group">
    <label for="img4">Pic 4</label>
    <input type="text" name="img4" class="form-control" value="{{ $prestonroom->img4 }}">
  </div>
  <div class="form-group">
    <label for="img5">Pic 5</label>
    <input type="text"  name="img5" class="form-control" value="{{ $prestonroom->img5 }}">
  </div>
  <div class="form-group">
    <label for="img6">Pic 6</label>
    <input type="text"  name="img6" class="form-control" value="{{ $prestonroom->img6 }}">
  </div>
  <div class="form-group">
    <label for="img7">Pic 7</label>
    <input type="text"  name="img7" class="form-control" value="{{ $prestonroom->img7 }}">
  </div>
  <div class="form-group">
    <label for="img8">Pic 8</label>
    <input type="text"  name="img8" class="form-control" value="{{ $prestonroom->img8 }}">
  </div>
  <div class="form-group">
    <label for="img9">Pic 9</label>
    <input type="text"  name="img9" class="form-control" value="{{ $prestonroom->img9 }}">
  </div>
  <div class="form-group">
    <label for="img10">Pic 10</label>
    <input type="text"  name="img10" class="form-control" value="{{ $prestonroom->img10 }}">
  </div>
  <div class="form-group">
    <label for="img11">Pic 10</label>
    <input type="text"  name="img11" class="form-control" value="{{ $prestonroom->img11 }}">
  </div>
  <div class="form-group">
    <label for="img12">Pic 12</label>
    <input type="text"  name="img12" class="form-control" value="{{ $prestonroom->img12 }}">
  </div>
  <div class="form-group">
    <label for="planpage">Plan Page</label>
    <input type="number" name="planpage"  class="form-control" value="{{ $prestonroom->planpage }}">
  </div>
  <div class="form-group">
    <label for="maplocation">Map location</label>
    <input type="text"  name="maplocation" class="form-control" value="{{ $prestonroom->maplocation }}">
  </div>
  <div class="form-group">
    <label for="route">Route</label>
    <input type="number"  name="route" class="form-control" value="{{ $prestonroom->route }}">
  </div>
  <div class="form-group">
    <label for="routeend">Route end</label>
    <input type="number"  name="routeend" class="form-control" value="{{ $prestonroom->routeend }}">

  </div>
<!-- button container -->
<div class="container">
  <div class="row">
    <div class="col-md-6 float-left">
  <div class="field is-grouped">
    <div class="control">
      <button class="button is-link btn-success" type="submit">Submit</button>
    </div>
  </div>

</form>
</div>


<div class="col-md-6 float-right">
<form class="" action="/prestonrooms/{{ $prestonroom->id }}" method="post">

  @method('DELETE')

  @csrf






    <div class="field is-grouped">
      <div class="control">
        <button class="button is-link btn-danger" type="submit">Delete Entire Room</button>
      </div>
    </div>
    </form>
    </div>
    </div>
</div>

<div class="container">

</div>



@endsection
