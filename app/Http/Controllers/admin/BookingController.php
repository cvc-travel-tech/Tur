<?php

namespace App\Http\Controllers\Admin;

use App\Booking;
use App\Http\Controllers\Controller;
use App\Package;
use App\BookingPackageOption;
use PDF;


use App\BookingRoomType;
//use App\Booking;

class BookingController extends Controller
{

    public function index()
    {
        $data = Booking::with('package')->latest()->paginate();
        return view('admin.Booking.index', compact('data'));
    }

    public function store()
    {

    }

    public function show($id)
    {
        $roomdata=BookingRoomType::all()->where('booking_id',$id);
        $data = Booking::find($id);
        $filename=$data->id;
        $pdf = PDF::loadView('admin.Booking.pdf',compact('data','roomdata'))->setPaper('a4', 'portrait');
        return $pdf->stream( $filename,'.pdf');

    }



    public function edit($id)
    {
        $data = Booking::where('id',$id)->with('package','booking_package_options','booking_room_types')->first();
        $packages = Package::all();

        return view('admin.Booking.edit', compact('data','packages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        Booking::findOrFail($id)->update(request()->all());
        return redirect()->route('admin.booking.index')->with('successMsg', 'Property is updated .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Booking::findOrFail($id)->delete();
        return redirect()->back();
    }
}
