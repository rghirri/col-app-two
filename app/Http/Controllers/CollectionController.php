<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

use App\Models\User;

class CollectionController extends Controller
{
    public function index()
    {
        //$json = Http::get('https://dev.shepherd.appoly.io/fruit.json')->json();

        // $response = Http::get('https://dev.shepherd.appoly.io/fruit.json');
        
        // $data_json = $response->object();

        $json = Http::get('https://dev.shepherd.appoly.io/fruit.json')
                          ->json();
        $this->items = collect($json['menu_items']);

        //$json = Http::get('https://dev.shepherd.appoly.io/fruit.json');

        //var_dump($json);

        //$this->items = collect($json['menu_items']);

        //$this->items = collect($data_json->menu_items);
        
        $collections =  $this->items;

        //$flattened = $collections->flatten()->sort();

        //$flattened = $collections->flatten()->filter()->values()->sort();

        // $flattened->map(function ($item, $key) {
        //       echo $item . "--" . $key . "--";
        //   });

        //dd($flattened);

        //dd($collections);

        //$flattened = $collections->flatten()->sort();

        //  $flattened = $collections->flatten()->values();

        // $flattened->map(function ($item, $key) {
        //       echo $item . "--" . $key . "--";
        //   });

        //dd($flattened);

//         $data = $collections->flatMap(function($value){
//           return $value;
//         });

// dd($data->flatten());

        // return $flattened->all();

      //  return $collections->flatMap(function ($value) {
      //       return $value['label'];
      //   });

      //  return $flattened->all();

  }

}