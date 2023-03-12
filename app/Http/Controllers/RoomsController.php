<?php

namespace App\Http\Controllers;

use App\Room;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $rooms = Room::all();
            // $room = Room::where('id', '>=' ,  1)->orderBy('sid', 'ASC')->paginate(32);
            $room = Room::where('id', '>=' , 1)->paginate(32);



            return view('rooms.index', compact('room', 'rooms'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('rooms.create', compact('room'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


      $room = new Room();

      $room->sid = request('sid');
      $room->description = request('description');
      $room->picsnum = request('picsnum');
      $room->keynum = request('keynum');
      $room->img1 = request('img1');
      $room->img2 = request('img2');
      $room->img3 = request('img3');
      $room->img4 = request('img4');
      $room->img5 = request('img5');
      $room->img6 = request('img6');
      $room->img7 = request('img7');
      $room->img8 = request('img8');
      $room->img9 = request('img9');
      $room->img10 = request('img10');
      $room->img11 = request('img11');
      $room->img12 = request('img12');
      $room->planpage = request('planpage');
      $room->maplocation = request('maplocation');
      $room->route = request('route');
      $room->routeend = request('routeend');

      if(Room::where('sid', $room->sid )->exists()){
         return redirect('exists/error');
      }

      $room->save();



      return redirect()->back()->withInput();

     // return redirect('/rooms');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {

      return view('rooms.show', compact('room'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
      $room->update(request([
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

      return redirect('/rooms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
      $room->delete();
      return redirect('/rooms');
    }

    public function searchrooms() {


        $search = request();
        $info = $search->searchrooms;

          //dd($info);
        // $room = Room::where('description', 'like', "%{$info}%")->get();
          $room = Room::where('description', 'like', "%{$info}%")->get();

        // dd($room);


        return view('rooms.results', compact('room'));
    }
    public function searchsid() {


        $search = request();
        $info = $search->searchsid;

         // dd($info);
        $room = Room::where('sid', 'like', "%{$info}%")
        ->limit(100)
        ->get();

        // dd($room);


        return view('rooms.results', compact('room'));
    }

    public function error() {
      return view('exists/error');
    }




}
