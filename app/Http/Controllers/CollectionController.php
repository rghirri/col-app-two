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

        $response = Http::get('https://dev.shepherd.appoly.io/fruit.json');
        
        $data_json = $response->object();

        $this->items = collect($data_json->menu_items);
        
        $collections =  $this->items;

        //$data = $collections->all();

        var_dump($collections);

        // return $collections->map(function ($item, $key) {
        //   if (is_array($item)){
        //     echo '--' . $item['label'];
        //     echo '<br>';
        //     continue;
        //     }else
        //     {
        //     echo '--' . $item['label'];
        //     echo '<br>';
        //     }
          // echo $item->label . '--';
          // $itemObjects = $item->children;
          // if (!empty($itemObject)){
          // return   $itemObjects->map(function ($itemObject, $key) {
          //     echo $itemObject->label . '--';
          //   });
          // }
        // });

        
      //  return $collections->map(function ($item, $key) {
      //     echo $item->label . '--';
      //     $itemObjects = $item->children;
      //     if (!empty($itemObject)){
      //     return   $itemObjects->map(function ($itemObject, $key) {
      //         echo $itemObject->label . '--';
      //       });
      //     }
      //   });

  }
}