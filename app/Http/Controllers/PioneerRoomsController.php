<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PioneerRoom;

class PioneerRoomsController extends Controller
{

        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
                $pioneerrooms = PioneerRoom::all();
                // $pioneerroom = PioneerRoom::where('id', '>=' ,  1)->orderBy('sid', 'ASC')->paginate(32);
                $pioneerroom = PioneerRoom::where('id', '>=' , 1)->paginate(32);



                return view('pioneerrooms.index', compact('pioneerroom', 'pioneerrooms'));

        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {

            return view('pioneerrooms.create', compact('pioneerroom'));
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
          $pioneerroom = new PioneerRoom();

          $pioneerroom->sid = request('sid');
          $pioneerroom->description = request('description');
          $pioneerroom->picsnum = request('picsnum');
          $pioneerroom->keynum = request('keynum');
          $pioneerroom->img1 = request('img1');
          $pioneerroom->img2 = request('img2');
          $pioneerroom->img3 = request('img3');
          $pioneerroom->img4 = request('img4');
          $pioneerroom->img5 = request('img5');
          $pioneerroom->img6 = request('img6');
          $pioneerroom->img7 = request('img7');
          $pioneerroom->img8 = request('img8');
          $pioneerroom->img9 = request('img9');
          $pioneerroom->img10 = request('img10');
          $pioneerroom->img11 = request('img11');
          $pioneerroom->img12 = request('img12');
          $pioneerroom->planpage = request('planpage');
          $pioneerroom->maplocation = request('maplocation');
          $pioneerroom->route = request('route');
          $pioneerroom->routeend = request('routeend');

          if(PioneerRoom::where('sid', $pioneerroom->sid )->exists()){
             return redirect('exists/error');
          }

          $pioneerroom->save();



          return redirect()->back()->withInput();

         // return redirect('/rooms');
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\PioneerRoom  $pioneerroom
         * @return \Illuminate\Http\Response
         */
        public function show(PioneerRoom $pioneerroom)
        {

          return view('pioneerrooms.show', compact('pioneerroom'));

        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\PioneerRoom  $pioneerroom
         * @return \Illuminate\Http\Response
         */
        public function edit(PioneerRoom $pioneerroom)
        {

            return view('pioneerrooms.edit', compact('pioneerroom'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\PioneerRoom  $pioneerroom
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, PioneerRoom $pioneerroom)
        {
          $pioneerroom->update(request([
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

          return redirect('/pioneerrooms');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\PioneerRoom  $pioneerroom
         * @return \Illuminate\Http\Response
         */
        public function destroy(PioneerRoom $pioneerroom)
        {
          $pioneerroom->delete();
          return redirect('/pioneerrooms');
        }

        public function searchrooms() {


            $search = request();
            $info = $search->searchrooms;

              //dd($info);
            // $pioneerroom = PioneerRoom::where('description', 'like', "%{$info}%")->get();
              $pioneerroom = PioneerRoom::where('description', 'like', "%{$info}%")->get();

            // dd($pioneerroom);


            return view('pioneerrooms.results', compact('pioneerroom'));
        }
        public function searchsid() {


            $search = request();
            $info = $search->searchsid;

             // dd($info);
            $pioneerroom = PioneerRoom::where('sid', 'like', "%{$info}%")
            ->limit(100)
            ->get();

            // dd($pioneerroom);


            return view('pioneerrooms.results', compact('pioneerroom'));
        }

        public function error() {
          return view('exists/error');
        }
}
