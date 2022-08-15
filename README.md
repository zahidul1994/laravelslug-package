## Laravel Bangla Slug Package 


# Installation

1. Install the package via Composer:

    ```sh
    $ composer require sohibd/laravelslug
    ```

    The package will automatically register its service provider.

2. Optionally, publish the configuration file if you want to change any defaults:

    ```sh
    php artisan vendor:publish --provider="Sohibd\Laravelslug\SlugServiceProvider"
    ```

3. Updating your Controllers

``` php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Sohibd\Laravelslug\Generate;
use App\Http\Controllers\Controller;

class YourController extends Controller
{
   public function store(Request $request){
   
    YourModel::Create([
        'title'=>$request->title,
//for bangla or other language
        'slug'=> Generate::Slug($request->title),
//for specific Language 
        'slug'=> Generate::Enslug($request->title),
        //or Bangla
        
        'slug'=> Generate::Bnslug($request->title),
    ]);
     
    }   

}
```




4 Test

run your  porject as like php artisan serve  and
coppy this url
http://127.0.0.1:8000/makesulg

