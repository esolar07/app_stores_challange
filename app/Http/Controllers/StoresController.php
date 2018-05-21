<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stores;
use FarhanWazir\GoogleMaps\GMaps;

class StoresController extends Controller
{

    protected $gmap;

    public function __construct(GMaps $gmap){
        $this->gmap = $gmap;
    }

    public function getAllStores(){

        $config = $marker = array();

        $stores = Stores::all();
        
        $config['center'] = 'Miami, FL';
        $config['zoom'] = '10';
        $config['map_height'] = '500px';
        $config['map_width'] = '500px';
        $this->gmap->initialize($config);
       
        foreach ( $stores as $store){
            $marker['position'] = $store['address'] . ' ' . $store['city'] . ', ' . $store['state'];
            $marker['infowindow_content'] = $store['name'];
            $this->gmap->add_marker($marker);
        }
       
        $map = $this->gmap->create_map();

        return view('map')->with(['stores' => $stores, 'map'=> $map]);
    }


    public function showStoreForm(){
        return view('add_store');
    }

    public function addStore(){

        Stores::create([
            'name' => request('name'),
            'address'=> request('address'),
            'city' => request('city'),
            'state' => request('state'),
            'zip' => request('zip'),
            'phone' => str_replace('-', '', request('phone'))
        ]);

        return redirect('/stores');

    }
}
