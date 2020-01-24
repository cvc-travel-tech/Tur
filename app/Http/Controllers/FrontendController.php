<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\BlogRepository;
use App\Repositories\PackageRepository;
use App\Images;
use App\PackagePrice;

class FrontendController extends Controller
{
    private $Blog;
    private $Package;

        /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct(BlogRepository $Blog , PackageRepository $Package)
    {
        $this->Blog = $Blog;
        $this->Package = $Package;
    }

    public function index()
    {
        $features = setting('site', 'features');
        // dd();
        $titles = json_encode(collect(setting('site', 'titles'))->pluck('tital'));
        return view('index', compact('features', 'titles'));
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
        return view('destinations');

    }  
    
    
    public function contact()
    {
        return view('contact');

    }  
    
    
    public function travel_free()
    {
        return view('travel-free');

    }  


    public function logiin()
    {
        return view('login');

    } 
    
    public function Packages_details($slug)
    {

        $package = $this->Package->findOrFail($slug);

        $package['package_images'] = Images::whereIn('id',$package->images)->get(); 

        if(PackagePrice::where('package_id',$package->id)->count() > 0){
            $package['prices'] = PackagePrice::where('package_id',$package->id)->get();
        }

        
        return view('Complete', compact( 'package'));
    } 
    

    public function blog_details()
    {
        return view('blog-details');
    }
 
    
    public function pack()
    {
        $packages = $this->Package->getQuery();

        foreach($packages as $key => $package){
             $package['package_images'] = Images::whereIn('id',$package->images)->get(); 

            if(PackagePrice::where('package_id',$package->id)->count() > 0){

                $package['three_p_price'] = PackagePrice::
                where('package_id',$package->id)
                ->orderBy('id','desc')->first()->{'3_person'} ?? '';
            }
        }
       

        return view('Pack',compact('packages'));
    }


    public function Complete()
    {

        return view('Complete');
    }
    

    public function Booking()
    {
        return view('Booking');
    }



    
}
