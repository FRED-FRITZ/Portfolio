<?php

namespace App\Http\Controllers;

use App\Models\Webinar;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class WebinarController extends Controller
{
    /**
       * Display a listing of the resource.
       */
      public function index()
      {
          //
          $webinar = Webinar::get();
          return view('webinar.index', compact('webinar'));
      }

      /**
       * Show the form for creating a new resource.
       */
      public function create()
      {
          //
          return view('webinars.create');
      }

      /**
       * Store a newly created resource in storage.
       */
      public function store(Request $request)
      {
        $data = $request->validate([
            'certificate' => 'required',
            'agenda' => 'required',
            'host_name' => 'required',
            'date' => 'required',

        ]);

        if($request->hasFile('certificate')){
            $image = $request->file('certificate');
            $imagePath = $image->store('img', 'public');
            $data['certificate'] = $imagePath;
        }


         Webinar::create($data);
         return redirect()->route('webinars.index');

      }

      /**
       * Display the specified resource.
       */
      public function show(string $id)
      {
          //
      }

      /**
       * Show the form for editing the specified resource.
       */
      public function edit(Webinar $webinar)
      {
          //
          return view('webinar.edit', compact('webinar'));
      }

      /**
       * Update the specified resource in storage.
       */
      public function update(Request $request, Webinar $webinar): RedirectResponse
      {

        $data = $request->validate([
            'certificate' => 'required',
            'agenda' => 'required',
            'host_name' => 'required',
            'date' => 'required',

        ]);

        if($request->hasFile('certificate')){
            $image = $request->file('certificate');
            $imagePath = $image->store('img', 'public');
            $data['certificate'] = $imagePath;
        }



         $webinar->update($data);

         return redirect()->route('webinar.index');

      }

      /**
       * Remove the specified resource from storage.
       */
      public function destroy(Webinar $webinar): RedirectResponse
      {
          //
          $webinar->delete();

          return redirect()->route('webinar.index');
      }
  }
