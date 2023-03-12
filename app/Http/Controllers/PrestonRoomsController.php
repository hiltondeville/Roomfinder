<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PrestonRoom;

class PrestonRoomsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
          $prestonrooms = PrestonRoom::all();
          // $prestonroom = PrestonRoom::where('id', '>=' ,  1)->orderBy('sid', 'ASC')->paginate(32);
          $prestonroom = PrestonRoom::where('id', '>=' , 1)->paginate(32);



          return view('prestonrooms.index', compact('prestonroom', 'prestonrooms'));

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {

      return view('prestonrooms.create', compact('prestonroom'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {

    // dd($request);
    $prestonroom = new PrestonRoom();

    $prestonroom->sid = request('sid');
    $prestonroom->description = request('description');
    $prestonroom->picsnum = request('picsnum');
    $prestonroom->keynum = request('keynum');
    $prestonroom->img1 = request('img1');
    $prestonroom->img2 = request('img2');
    $prestonroom->img3 = request('img3');
    $prestonroom->img4 = request('img4');
    $prestonroom->img5 = request('img5');
    $prestonroom->img6 = request('img6');
    $prestonroom->img7 = request('img7');
    $prestonroom->img8 = request('img8');
    $prestonroom->img9 = request('img9');
    $prestonroom->img10 = request('img10');
    $prestonroom->img11 = request('img11');
    $prestonroom->img12 = request('img12');
    $prestonroom->planpage = request('planpage');
    $prestonroom->maplocation = request('maplocation');
    $prestonroom->route = request('route');
    $prestonroom->routeend = request('routeend');

    if(PrestonRoom::where('sid', $prestonroom->sid )->exists()){
       return redirect('exists/error');
    }

    $prestonroom->save();



    return redirect()->back()->withInput();

   // return redirect('/rooms');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\PrestonRoom  $prestonroom
   * @return \Illuminate\Http\Response
   */
  public function show(PrestonRoom $prestonroom)
  {

    return view('prestonrooms.show', compact('prestonroom'));

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\PrestonRoom  $prestonroom
   * @return \Illuminate\Http\Response
   */
  public function edit(PrestonRoom $prestonroom)
  {

      return view('prestonrooms.edit', compact('prestonroom'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\PrestonRoom  $prestonroom
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, PrestonRoom $prestonroom)
  {
    $prestonroom->update(request([
      'description',
      'sid',
      'picsnum',
      'keynum',
      'img1',
      'img2',
      'img3',
      'img4',
      'img5',
      'img6',
      'img7',
      'img8',
      'img9',
      'img10',
      'img11',
      'img12',
      'planpage',
      'route',
      'routeend',
      'extrainfo'
    ]));

    return redirect('/prestonrooms');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\PrestonRoom  $prestonroom
   * @return \Illuminate\Http\Response
   */
  public function destroy(PrestonRoom $prestonroom)
  {
    $prestonroom->delete();
    return redirect('/prestonrooms');
  }

  public function searchrooms() {


      $search = request();
      $info = $search->searchrooms;

        //dd($info);
      // $prestonroom = PrestonRoom::where('description', 'like', "%{$info}%")->get();
        $prestonroom = PrestonRoom::where('description', 'like', "%{$info}%")->get();

      // dd($prestonroom);


      return view('prestonrooms.results', compact('prestonroom'));
  }
  public function searchsid() {


      $search = request();
      $info = $search->searchsid;

       // dd($info);
      $prestonroom = PrestonRoom::where('sid', 'like', "%{$info}%")
      ->limit(100)
      ->get();

      // dd($prestonroom);


      return view('prestonrooms.results', compact('prestonroom'));
  }

  public function error() {
    return view('exists/error');
  }
}
