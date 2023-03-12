<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CanaryRoom;

class CanaryRoomsController extends Controller
{

      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function index()
      {
              $canaryrooms = CanaryRoom::all();
              // $canaryroom = CanaryRoom::where('id', '>=' ,  1)->orderBy('sid', 'ASC')->paginate(32);
              $canaryroom = CanaryRoom::where('id', '>=' , 1)->paginate(32);



              return view('canaryrooms.index', compact('canaryroom', 'canaryrooms'));

      }

      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {

          return view('canaryrooms.create', compact('canaryroom'));
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
        $canaryroom = new CanaryRoom();

        $canaryroom->sid = request('sid');
        $canaryroom->description = request('description');
        $canaryroom->picsnum = request('picsnum');
        $canaryroom->keynum = request('keynum');
        $canaryroom->img1 = request('img1');
        $canaryroom->img2 = request('img2');
        $canaryroom->img3 = request('img3');
        $canaryroom->img4 = request('img4');
        $canaryroom->img5 = request('img5');
        $canaryroom->img6 = request('img6');
        $canaryroom->img7 = request('img7');
        $canaryroom->img8 = request('img8');
        $canaryroom->img9 = request('img9');
        $canaryroom->img10 = request('img10');
        $canaryroom->img11 = request('img11');
        $canaryroom->img12 = request('img12');
        $canaryroom->planpage = request('planpage');
        $canaryroom->maplocation = request('maplocation');
        $canaryroom->route = request('route');
        $canaryroom->routeend = request('routeend');

        if(CanaryRoom::where('sid', $canaryroom->sid )->exists()){
           return redirect('exists/error');
        }

        $canaryroom->save();



        return redirect()->back()->withInput();

       // return redirect('/rooms');
      }

      /**
       * Display the specified resource.
       *
       * @param  \App\CanaryRoom  $canaryroom
       * @return \Illuminate\Http\Response
       */
      public function show(CanaryRoom $canaryroom)
      {

        return view('canaryrooms.show', compact('canaryroom'));

      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\CanaryRoom  $canaryroom
       * @return \Illuminate\Http\Response
       */
      public function edit(CanaryRoom $canaryroom)
      {

          return view('canaryrooms.edit', compact('canaryroom'));
      }

      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  \App\CanaryRoom  $canaryroom
       * @return \Illuminate\Http\Response
       */
      public function update(Request $request, CanaryRoom $canaryroom)
      {
        $canaryroom->update(request([
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

        return redirect('/canaryrooms');
      }

      /**
       * Remove the specified resource from storage.
       *
       * @param  \App\CanaryRoom  $canaryroom
       * @return \Illuminate\Http\Response
       */
      public function destroy(CanaryRoom $canaryroom)
      {
        $canaryroom->delete();
        return redirect('/canaryrooms');
      }

      public function searchrooms() {


          $search = request();
          $info = $search->searchrooms;

            //dd($info);
          // $canaryroom = CanaryRoom::where('description', 'like', "%{$info}%")->get();
            $canaryroom = CanaryRoom::where('description', 'like', "%{$info}%")->get();

          // dd($canaryroom);


          return view('canaryrooms.results', compact('canaryroom'));
      }
      public function searchsid() {


          $search = request();
          $info = $search->searchsid;

           // dd($info);
          $canaryroom = CanaryRoom::where('sid', 'like', "%{$info}%")
          ->limit(100)
          ->get();

          // dd($canaryroom);


          return view('canaryrooms.results', compact('canaryroom'));
      }

      public function error() {
        return view('exists/error');
      }

}
