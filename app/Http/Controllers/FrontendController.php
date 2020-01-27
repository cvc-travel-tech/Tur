<?php

namespace App\Http\Controllers;

use App\Booking;
use App\BookingPackageOption;
use App\BookingRoomType;
use App\Destination;
use App\Hotel;
use App\PackageOption;
use App\Repositories\BlogRepository;
use App\Repositories\PackageRepository;
use App\Images;
use App\PackagePrice;
use App\Package;
use App\Blog;

class FrontendController extends Controller
{
    private $Blog;
    private $Package;

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct(BlogRepository $Blog, PackageRepository $Package)
    {
        $this->Blog = $Blog;
        $this->Package = $Package;
    }

    public function index()
    {

        $features = setting('site', 'features');

        $destinations = Destination::latest()->limit(5)->withCount('Hotels')->with('tmpImg', 'Img')->get();
        $Package = Package::all();

        $hotels = Hotel::latest()->limit(8)->get();

        $titles = json_encode(collect(setting('site', 'titles'))->pluck('tital'));

        return view('index', compact('features', 'titles', 'destinations', 'hotels','Package'));
    }


    public function about()
    {
        return view('about');
    }


    public function blog()
    {
        $blogs = $this->Blog->getQuery();
        return view('blog', compact('blogs'));
    }


    public function destinations()
    {
        $destinations = Destination::latest()->withCount('Hotels')->with('tmpImg', 'Img')->get();

        return view('destinations', compact('destinations'));
    }


    public function contact()
    {
        return view('contact');

    }



    public function logiin()
    {
        return view('login');

    }

    public function Packages_details($slug)
    {

        $package = $this->Package->findOrFail($slug);

        $package['package_images'] = Images::whereIn('id', $package->images)->get();

        if (PackagePrice::where('package_id', $package->id)->count() > 0) {
            $package['prices'] = PackagePrice::where('package_id', $package->id)->get();
        }


        return view('Complete', compact('package'));
    }


    public function blog_details($id)
    {
        $Blog = Blog::find($id);
        return view('blog-details', compact('Blog'));
    }


    public function pack()
    {
        $packages = $this->Package->getQuery();
        foreach ($packages as $key => $package) {
            $package['package_images'] = Images::whereIn('id', $package->images)->get();

            if (PackagePrice::where('package_id', $package->id)->count() > 0) {

                $package['three_p_price'] = PackagePrice::
                    where('package_id', $package->id)
                        ->orderBy('id', 'desc')->first()->{'3_person'} ?? '';

            }

        }

        // dd($package);

        return view('Pack', compact('packages','package'));
    }


    public function Complete()
    {

        return view('Complete');
    }


    public function Booking($id)
    {
        $package = Package::where('id', $id)->with('package_options', 'package_prices')->first();

        return view('Booking', compact('package'));
    }





    public function saveBooking()
    {
//        dd(request()->all());
        $booking = Booking::create([
            'gender' => request('gender'),
            'language' => request('language'),
            'first_name'=>request('first_name'),
            'last_name'=>request('last_name'),
            'email'=>request('email'),
            'phone'=>request('phone'),
            'city'=>request('city'),
            'nationality'=>request('nationality'),
            'country'=>request('country'),
            'special_requirements'=>request('special_requirements'),
            'payment_method'=>request('payment_method'),
            'no_of_adults'=>request('no_of_adults'),
            'no_of_rooms'=>request('no_of_rooms'),
            'no_of_children'=>request('no_of_children'),
            'status'=>1,
            'package_id' => request('package_id')
        ]);

        foreach(request('room_type') as $k=>$val){
            BookingRoomType::create([
                'booking_id' => $booking->id,
                'room_type' => $val
            ]);
        }

        foreach (request('package_options') as $key => $value) {
            $option_price = PackageOption::where('id',$value)->first()->price;
            BookingPackageOption::create([
                'booking_id' => $booking->id,
                'package_option_id' => $value,
                'no_of_pax'=>request('no_of_pax')[$key],
                'price'=>$option_price,
            ]);
        }

        $booking->update([
            'total_price' => BookingPackageOption::where('booking_id',$booking->id)->sum('price')
        ]);


        return redirect()->back();
    }




    public function destinations_details($id)
    {
        $hotels = Hotel::all()->where('destination_id',$id);
        $destinations_details = Destination::find($id);
        return view('destinations_details', compact('destinations_details','hotels'));
    }



    public function hotel_ditails($id)
    {
        $hotel_ditails = Hotel::find($id);
        return view('hotel_ditails', compact('hotel_ditails'));
    }
    
    

}
