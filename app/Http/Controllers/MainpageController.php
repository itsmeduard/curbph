<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\{Request,Response};
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Collection;
use DB,App\Photo,Validator,Redirect,File;
use Intervention\Image\Exception\NotReadableException;
use Intervention\Image\Facades\Image as Image;
class MainpageController extends Controller
{
    public function mainpage()
    {
        return view('mainpage');
    }

    /*Trasport Locator*/
    public function translocator()
    {
        return view('translocator');
    }

    public function tl_search()
    {
        $city = DB::table('philippine_cities')->orderBy('city_municipality_description')->get(['city_municipality_description','city_municipality_code']);

        $barangay = DB::table('philippine_barangays')->orderBy('barangay_description')->get(['barangay_code','barangay_description']);

        $provinces = DB::table('philippine_provinces')->orderBy('province_description')->get(['province_description','province_code']);

        return view('tl_search',compact('city','barangay','provinces'));
    }

    public function ps_search(Request $request)
    {
        $provinces = DB::table('philippine_provinces')
        ->orderBy('province_description')
        ->get(['province_description','province_code']);

        $city = DB::table('philippine_cities')
        ->orderBy('city_municipality_description')
        ->get(['city_municipality_description','city_municipality_code','province_code']);

        $barangay = DB::table('philippine_barangays')
        ->orderBy('barangay_description')
        ->get(['barangay_code','barangay_description','province_code']);

        return view('ps_search',compact('city','barangay','provinces'))->render();
    }

    public function translocator_location(Request $request)
    {
        try {
            $data = DB::table('philippine_barangays')
            ->leftjoin('philippine_cities','philippine_cities.city_municipality_code','philippine_barangays.city_municipality_code')
            ->leftjoin('translocator_location','translocator_location.brgy_code','philippine_barangays.barangay_code')
            ->leftjoin('philippine_provinces','philippine_provinces.province_code','philippine_cities.province_code')
            ->where('barangay_code',$request->brgy)
            ->first();

            $product = 'public/img/' . $data->image_name;

            return view('translocator_location',compact('data','product') );
        } catch (DecryptException $e) {
            $data = DB::table('philippine_barangays')
            ->leftjoin('philippine_cities','philippine_cities.city_municipality_code','philippine_barangays.city_municipality_code')
            ->leftjoin('translocator_location','translocator_location.brgy_code','philippine_barangays.barangay_code')
            ->leftjoin('philippine_provinces','philippine_provinces.province_code','philippine_cities.province_code')
            ->where('barangay_code',$request->brgy)
            ->first();

            $product = 'public/img/' . $data->image_name;
         
            return view('translocator_location',compact('data','product') );
        }  
    }

    public function ps_location(Request $request)
    {
        try {
            $data = DB::table('philippine_barangays')
            ->leftjoin('philippine_cities','philippine_cities.city_municipality_code','philippine_barangays.city_municipality_code')
            ->leftjoin('ps_location','ps_location.brgy_code','philippine_barangays.barangay_code')
            ->leftjoin('philippine_provinces','philippine_provinces.province_code','philippine_cities.province_code')
            ->where('barangay_code',$request->brgy)
            ->first();

            return view('ps_location',compact('data') );
        } catch (DecryptException $e) {
            $data = DB::table('philippine_barangays')
            ->leftjoin('philippine_cities','philippine_cities.city_municipality_code','philippine_barangays.city_municipality_code')
            ->leftjoin('ps_location','ps_location.brgy_code','philippine_barangays.barangay_code')
            ->leftjoin('philippine_provinces','philippine_provinces.province_code','philippine_cities.province_code')
            ->where('barangay_code',$request->brgy)
            ->first();
         
            return view('ps_location',compact('data') );
        }  
    }

    public function translocator_location_update($id, Request $request)
    {
        $last_id = DB::table('translocator_location')->orderBy('id', 'DESC')->first(['id']);

        $img = $last_id->id.''.'img';
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
        ]);

        if ($files = $request->file('image')) {

            $image = $files->store('public/img');
            // for save original image
            $ImageUpload = Image::make($files);
            // $originalPath = 'public/img/';
            // $ImageUpload->save($originalPath.$request->brgy.$img.'.'.$files->getClientOriginalExtension());

            // for save thumnail image
            $thumbnailPath = 'public/img/';
            $ImageUpload->resize(250,125);
            $ImageUpload = $ImageUpload->save($thumbnailPath.$request->brgy.$img.'.'.$files->getClientOriginalExtension());

            $image_name = $request->brgy.$img.'.'.$files->getClientOriginalExtension();
        }

        if(DB::table('translocator_location')->where('brgy_code',$request->brgy)->first() != null){
            $data = DB::table('translocator_location')->where('brgy_code',$request->brgy)->update([
                'brgy_code'          => $request->brgy,
                'n_landmark'         => $request->n_landmark,
                'description'        => $request->desc,
                'oh_from'            => $request->oh_from,
                'oh_from'            => $request->oh_to,
                'contact_person'     => $request->cp,
                'contact_no'         => $request->cn,
                'image_name'         => $image_name,
            ]);
        }else{
            $data = DB::table('translocator_location')->updateOrInsert([
                'brgy_code'          => $request->brgy,
                'n_landmark'         => $request->n_landmark,
                'description'        => $request->desc,
                'oh_from'            => $request->oh_from,
                'oh_from'            => $request->oh_to,
                'contact_person'     => $request->cp,
                'contact_no'         => $request->cn,
                'image_name'         => $image_name,
            ]);
        }

        return redirect()->back();
    }

    public function ps_location_update($id, Request $request)
    {
        if(DB::table('ps_location')->where('brgy_code',$request->brgy)->first() != null){
            $data = DB::table('ps_location')->where('brgy_code',$request->brgy)->update([
                'brgy_code'          => $request->brgy,
                'description'        => $request->desc,
                'contact_person'     => $request->cp,
                'contact_no'         => $request->cn,
                'mon'                => $request->sched1,
                'tue'                => $request->sched2,
                'wed'                => $request->sched3,
                'thu'                => $request->sched4,
                'fri'                => $request->sched5,
                'sat'                => $request->sched6,
                'sun'                => $request->sched7,
                'oh_from_mon'        => $request->oh_from_mon,
                'oh_from_tue'        => $request->oh_from_tue,
                'oh_from_wed'        => $request->oh_from_wed,
                'oh_from_thu'        => $request->oh_from_thu,
                'oh_from_fri'        => $request->oh_from_fri,
                'oh_from_sat'        => $request->oh_from_sat,
                'oh_from_sun'        => $request->oh_from_sun,
                'oh_to_mon'          => $request->oh_to_mon,
                'oh_to_tue'          => $request->oh_to_tue,
                'oh_to_wed'          => $request->oh_to_wed,
                'oh_to_thu'          => $request->oh_to_thu,
                'oh_to_fri'          => $request->oh_to_fri,
                'oh_to_sat'          => $request->oh_to_sat,
                'oh_to_sun'          => $request->oh_to_sun,
            ]);
        }else{
            $data = DB::table('ps_location')->updateOrInsert([
                'brgy_code'          => $request->brgy,
                'description'        => $request->desc,
                'contact_person'     => $request->cp,
                'contact_no'         => $request->cn,
                'mon'                => $request->sched1,
                'tue'                => $request->sched2,
                'wed'                => $request->sched3,
                'thu'                => $request->sched4,
                'fri'                => $request->sched5,
                'sat'                => $request->sched6,
                'sun'                => $request->sched7,
                'oh_from_mon'        => $request->oh_from_mon,
                'oh_from_tue'        => $request->oh_from_tue,
                'oh_from_wed'        => $request->oh_from_wed,
                'oh_from_thu'        => $request->oh_from_thu,
                'oh_from_fri'        => $request->oh_from_fri,
                'oh_from_sat'        => $request->oh_from_sat,
                'oh_from_sun'        => $request->oh_from_sun,
                'oh_to_mon'          => $request->oh_to_mon,
                'oh_to_tue'          => $request->oh_to_tue,
                'oh_to_wed'          => $request->oh_to_wed,
                'oh_to_thu'          => $request->oh_to_thu,
                'oh_to_fri'          => $request->oh_to_fri,
                'oh_to_sat'          => $request->oh_to_sat,
                'oh_to_sun'          => $request->oh_to_sun,
            ]);
        }

        return redirect()->back();
    }

    public function search_mun(Request $request)
    {
        // try {
            $data = DB::table('philippine_cities')
            ->where('province_code',$request->mun)
            ->orderBy('city_municipality_description')
            ->get(['city_municipality_description','city_municipality_code','province_code']);

            return response()->json($data);

        // } catch (DecryptException $e) {
        //     $data = DB::table('philippine_cities')
        //     ->where('province_code',$request->mun)
        //     ->orderBy('city_municipality_description')
        //     ->get(['city_municipality_description','city_municipality_code','province_code']);

        //     return response()->json($data);
        // } 
    }

    public function search_brgy(Request $request)
    {
        // try {
            $data = DB::table('philippine_barangays')
            ->where('city_municipality_code',$request->brgy)
            ->orderBy('barangay_description')
            ->get(['barangay_code','barangay_description','city_municipality_code']);

            return response()->json($data);

        // } catch (DecryptException $e) {
        //     $data = DB::table('philippine_barangays')
        //     ->where('city_municipality_code',$request->brgy)
        //     ->orderBy('barangay_description')
        //     ->get(['barangay_code','barangay_description','city_municipality_code']);

        //     return response()->json($data);
        // }
    }

    /*COVID19-Tracer*/
    public function covid_tracer()
    {
        return view('covid_tracer');
    }

    public function covid_tracer_q(Request $request)
    {
        $city = DB::table('philippine_cities')->orderBy('city_municipality_description')->get(['city_municipality_description','city_municipality_code']);
        $barangay = DB::table('philippine_barangays')->orderBy('barangay_description')->get(['barangay_code','barangay_description']);
        $province = DB::table('philippine_provinces')->orderBy('province_description')->get(['province_description','province_code']);
        $country = DB::table('apps_countries')->orderBy('country_name')->get(['id','country_name']);

        return view('covid_tracer_q',compact('city','barangay','province','country'));
    }

    public function covid_tracer_q_submit(Request $request)
    {
        $q15 = '';
        if(count((array)$request->q15) == 1){
            $q15 = implode($request->q15);
        }else if(count((array)$request->q15) > 1){
            foreach($request->q15 as $rec){
                if($rec == 1)
                    $q15.= $rec; 
                else
                    $q15.= ','.$rec; 
            }
        }

        $q29 = '';
        if(count((array)$request->q29) == 1){
            $q29 = implode($request->q29);
        }else if(count((array)$request->q29) > 1){
            foreach($request->q29 as $rec){
                if($rec == 1)
                    $q29.= $rec; 
                else
                    $q29.= ','.$rec; 
            }
        }

        $q35 = '';
        if(count((array)$request->q35) == 1){
            $q35 = implode($request->q35);
        }else if(count((array)$request->q35) > 1){
            foreach($request->q35 as $rec){
                if($rec == 1)
                    $q35.= $rec; 
                else
                    $q35.= ','.$rec; 
            }
        }

        $q37 = '';
        if(count((array)$request->q37) == 1){
            $q37 = implode($request->q37);
        }else if(count((array)$request->q37) > 1){
            foreach($request->q37 as $rec){
                if($rec == 1)
                    $q37.= $rec; 
                else
                    $q37.= ','.$rec; 
            }
        }

        $data = DB::table('tracer_record')->updateOrInsert([
            'q1'  => $request->q1  ?? NULL,
            'q2'  => $request->q2  ?? NULL,
            'q3'  => $request->q3  ?? NULL,
            'q4'  => $request->q4  ?? NULL,
            'q5'  => $request->q5  ?? NULL,
            'q6'  => $request->q6  ?? NULL,
            'q7'  => $request->q7  ?? NULL,
            'q8'  => $request->q8  ?? NULL,
            'q9'  => $request->q9  ?? NULL,
            'q10' => $request->q10 ?? NULL,
            'q11' => $request->q11 ?? NULL,
            'q12' => $request->q12 ?? NULL,
            'q13' => $request->q13 ?? NULL,
            'q14' => $request->q14 ?? NULL,
            'q15' => $q15          ?? NULL,
            'q16' => $request->q16 ?? NULL,
            'q17' => $request->q17 ?? NULL,
            'q18' => $request->q18 ?? NULL,
            'q19' => $request->q19 ?? NULL,
            'q20' => $request->q20 ?? NULL,
            'q21' => $request->q21 ?? NULL,
            'q22' => $request->q22 ?? NULL,
            'q23' => $request->q23 ?? NULL,
            'q24' => $request->q24 ?? NULL,
            'q25' => $request->q25 ?? NULL,
            'q26' => $request->q26 ?? NULL,
            'q27' => $request->q27 ?? NULL,
            'q28' => $request->q28 ?? NULL,
            'q29' => $q29          ?? NULL,
            'q30' => $request->q30 ?? NULL,
            'q31' => $request->q31 ?? NULL,
            'q32' => $request->q32 ?? NULL,
            'q33' => $request->q33 ?? NULL,
            'q34' => $request->q34 ?? NULL,
            'q35' => $q35          ?? NULL,
            'q36' => $request->q36 ?? NULL,
            'q37' => $q37          ?? NULL,
        ]);

        return redirect()->route('covid_tracer_q_done');
    }

    public function covid_tracer_q_done(Request $request)
    {
        return view('covid_tracer_q_done');
        // return redirect()->route('covid_tracer_q_done');
    }

    /*Mobile Seller Locator*/
    public function msl()
    {
        $city = DB::table('philippine_cities')->orderBy('city_municipality_description')->get(['city_municipality_description','city_municipality_code']);
        $barangay = DB::table('philippine_barangays')->orderBy('barangay_description')->get(['barangay_code','barangay_description']);
        $province = DB::table('philippine_provinces')->orderBy('province_description')->get(['province_description','province_code']);
        return view('msl',compact('city','barangay','province'));
    }

    public function msl_product(Request $request)
    {
        // dd('sample');
        $data = DB::table('philippine_cities')
        ->leftjoin('msl_record','msl_record.mun_code','philippine_cities.city_municipality_code')
        ->leftjoin('philippine_provinces','philippine_provinces.province_code','philippine_cities.province_code')
        ->where('city_municipality_code',$request->mun_code)
        ->orderBy('product','ASC')
        ->get(['msl_record.id as item_id','msl_record.product','city_municipality_description','province_description']);
        // dd($data);
        return view('msl_product',compact('data'));
    }

    public function msl_item($id)
    {
        $data = DB::table('philippine_cities')
        ->leftjoin('msl_record','msl_record.mun_code','philippine_cities.city_municipality_code')
        ->leftjoin('philippine_provinces','philippine_provinces.province_code','philippine_cities.province_code')
        ->where('msl_record.id',$id)
        ->first();

        return view('msl_item',compact('data'));
    }

    public function msl_seller()
    {
        $city = DB::table('philippine_cities')->orderBy('city_municipality_description')->get(['city_municipality_description','city_municipality_code']);
        $barangay = DB::table('philippine_barangays')->orderBy('barangay_description')->get(['barangay_code','barangay_description']);
        $province = DB::table('philippine_provinces')->orderBy('province_description')->get(['province_description','province_code']);

        return view('msl_seller',compact('city','barangay','province'));
    }

    public function msl_seller_create(Request $request)
    {
        $data = DB::table('msl_record')->updateOrInsert([
            'mun_code'      => $request->mun_code ?? '',
            'product'       => $request->product  ?? '',
            'description'   => $request->desc     ?? '',
            'seller'        => $request->seller   ?? '',
            'fb_link'       => $request->fb_link  ?? '',
            'contact'       => $request->contact  ?? '',
            'delivery'      => $request->delivery ?? '',
        ]);
        return redirect()->to('msl_product_created/'.$request->mun_code)->with('alert', 'Item Created');
    }

}