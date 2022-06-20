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
        $json = Http::get('https://dev.shepherd.appoly.io/fruit.json')->json();

        $this->items = collect($json['menu_items']);
        
        $collections =  $this->items;

        
        $collections->each(function ($value, $key) {
          //var_dump($value['children']);
           echo $value['label'] . ' -- ';
            $value->each(function ($value, $key) {
                echo $value['label'] . ' -- ';
             });
            //  $itemsOne = $value['children'];
            //  var_dump($itemsOne);
            //  $itemsOne->each(function ($value, $key) {
            //      echo $value['label'] . ' -- ';
            //   });
        //     $itemsOne->each(function ($value, $key) {
        //       echo $value['label'] . ' -- ';
        //     if(!empty($itemsOne)){
        //       echo "empty";
               
        //       echo $value['label'] . ' -- ';
        //   });
        //  }
            
        });

        //$collections->each(function ($value, $key) {
          //var_dump($value['children']);
          //  echo $value['label'] . ' -- ';
          //   $value->each(function ($value, $key) {
          //       echo $value['label'] . ' -- ';
          //    });
            //  $itemsOne = $value['children'];
            //  var_dump($itemsOne);
            //  $itemsOne->each(function ($value, $key) {
            //      echo $value['label'] . ' -- ';
            //   });
        //     $itemsOne->each(function ($value, $key) {
        //       echo $value['label'] . ' -- ';
        //     if(!empty($itemsOne)){
        //       echo "empty";
               
        //       echo $value['label'] . ' -- ';
        //   });
        //  }
            
       //});
        
        $collections->each(function ($value, $key) {
          //var_dump($value['children']);
           echo $value['label'] . ' -- ';
            $value->each(function ($value, $key) {
                echo $value['label'] . ' -- ';
             });
            //  $itemsOne = $value['children'];
            //  var_dump($itemsOne);
            //  $itemsOne->each(function ($value, $key) {
            //      echo $value['label'] . ' -- ';
            //   });
        //     $itemsOne->each(function ($value, $key) {
        //       echo $value['label'] . ' -- ';
        //     if(!empty($itemsOne)){
        //       echo "empty";
               
        //       echo $value['label'] . ' -- ';
        //   });
        //  }
            
        });


        // var_dump($collections);

        //  return $collections->map(function ($itemFirst){
        //     return $itemFirst->pluck('label')->sort()->all();
        //     return $itemFirst->map(function ($itemSecond){
        //       return $itemSecond->pluck('label')->sort()->all();
        //     });
        // });

        // use map method to loop through collection of items
        // Each array is sorted within a loop

        //return $collections->pluck('label')->sort()->all();

        // return $collection->each(function ($item, $key) {

        //     return $item->get()->pluck('label')->sort();

        // });
        
      //  return $collections->map(function ($item){
      //     return  collect($item)->only(['label', 'children'])->sort()->all();
      //     // return $item;
      //   });


        //  return $collection->mapWithKeys(function ($item){
        //     return [
        //         $item['label'];
        //     ];
        // });

        // return $collection->map(function ($item){
        //     return collect($item)->map(function ($child){
        //         return collect($child)->only()
        //     });
        // });

        //return $collection->pluck('label');

        // $plucked = $collection->pluck('label');

        // return $plucked->all();

        // if ($collection->pluck('children')->isNotEmpty()){
        //     return $collection->pluck('label');
        //   }

        //return $collection->pluck('children');

        //  $users = User::all();

        //  return $users
        //          ->pluck('name')
        //          ->except('id', 10)
        //          ->skip(1);

        // $collections->each(function ($value, $key) {
        //     $item = $value['label'];
        //     echo $item . ' | ';
        // });

        // $collection->map(function ($item, $key) {
        //     print_r($item);
        // });

        // $filter = $collection->filter(function ($value, $key){
        //     return $key == 'label';
        // });

        // print_r($filter->all());

       // return $users;

         //$json = Http::get('https://dev.shepherd.appoly.io/fruit.json')->json();

        //var_dump($json);

          //$this->items = collect($json['menu_items'])->all();
        //  $collection =  $this->items;
        
        //$collection = collect(['name', 'language']);

        //$combine = $collection->combine(['Dary', 'Laravel']);

        //dd($collection->contains(6));

        // $collection = collect([
        //     ['name' => 'Dary'],
        //     ['name' => 'John'],
        //     ['name' => 'Michael']
        // ]);

        // if($collection->contains('name', 'Dary2')){
        //     return 'True';
        // }else
        // {
        //     return 'False';
        // }

        // $collection = collect([
        //     'name'      => 'Dary',
        //     'Job'       => 'Web Developer',
        //     'country'   => 'The Netherlands'
        // ]);

        // return $collection->forget('Job');

    }
    
}