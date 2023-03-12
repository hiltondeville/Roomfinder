@extends('layouts.layout')


@section('content')
<div class="container">
<h1 class="mt-5 mb-5">Create a new room</h1>

<form method="POST" action="/pioneerrooms">

  {{ csrf_field() }}

  <div class="form-group">
    <label for="sid">Sid</label>
    <input type="text" name="sid" class="form-control" placeholder="{{ old('sid') }}"
    value="{{ old('sid') }}">

  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text"  name="description" class="form-control" placeholder=" old('description') "
    value="{{ old('description') }}">
  </div>
  <div class="form-group">
    <label for="picsnum">Number of pics</label>
    <input type="number"  name="picsnum" class="form-control" placeholder="old('picsnum')"
    value="{{ old('picsnum') }}">
  </div>
  <div class="form-group">
    <label for="keynum">Key number</label>
    <input type="text"  name="keynum" class="form-control" placeholder="{{ old('keynum')}}"
    value="{{ old('keynum') }}">
  </div>
  <div class="form-group">
    <label for="img1">Pic 1</label>
    <input type="text"  name="img1" class="form-control" placeholder="old('img1')"
    value="{{ old('img1') }}">
  </div>
  <div class="form-group">
    <label for="img2">Pic 2</label>
    <input type="text" name="img2"class="form-control" placeholder="old('img2')"
    value="{{ old('img2') }}">
  </div>
  <div class="form-group">
    <label for="img3">Pic 3</label>
    <input type="text" name="img3" class="form-control" placeholder="old('img3')"
    value="{{ old('img3') }}">
  </div>
  <div class="form-group">
    <label for="img4">Pic 4</label>
    <input type="text" name="img4" class="form-control" placeholder="old('img4')"
    value="{{ old('img4') }}">
  </div>
  <div class="form-group">
    <label for="img5">Pic 5</label>
    <input type="text"  name="img5" class="form-control" placeholder="old('img5')"
    value="{{ old('img5') }}">
  </div>
  <div class="form-group">
    <label for="img6">Pic 6</label>
    <input type="text"  name="img6" class="form-control" placeholder="old('img6')"
    value="{{ old('img6') }}">
  </div>
  <div class="form-group">
    <label for="img7">Pic 7</label>
    <input type="text"  name="img7" class="form-control" placeholder="old('img7')"
    value="{{ old('img7') }}">
  </div>
  <div class="form-group">
    <label for="img8">Pic 8</label>
    <input type="text"  name="img8" class="form-control" placeholder="old('img8')"
    value="{{ old('img8') }}">
  </div>
  <div class="form-group">
    <label for="img9">Pic 9</label>
    <input type="text"  name="img9" class="form-control" placeholder="old('img9')"
    value="{{ old('img9') }}">
  </div>
  <div class="form-group">
    <label for="img10">Pic 10</label>
    <input type="text"  name="img10" class="form-control" placeholder="old('img10')"
    value="{{ old('img10') }}">
  </div>
  <div class="form-group">
    <label for="img11">Pic 10</label>
    <input type="text"  name="img11" class="form-control" placeholder="old('img11')"
    value="{{ old('img11') }}">
  </div>
  <div class="form-group">
    <label for="img12">Pic 12</label>
    <input type="text"  name="img12" class="form-control" placeholder="old('img12')"
    value="{{ old('img12') }}">
  </div>
  <div class="form-group">
    <label for="planpage">Plan Page</label>
    <input type="number" name="planpage"  class="form-control" placeholder="old('planpage')"
    value="{{ old('planpage') }}">
  </div>
  <div class="form-group">
    <label for="maplocation">Map location</label>
    <input type="text"  name="maplocation" class="form-control" placeholder="old('maplocation')"
    value="{{ old('maplocation') }}">
  </div>
  <div class="form-group">
    <label for="route">Route</label>
    <input type="number"  name="route" class="form-control" placeholder="old('route')"
    value="{{ old('route') }}">
  </div>
  <div class="form-group">
    <label for="routeend">Route end</label>
    <input type="number"  name="routeend" class="form-control" placeholder="old('routeend')"
    value="{{ old('routeend') }}">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
@endsection
