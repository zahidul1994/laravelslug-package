## Laravel Bangla Slug Package 
[![Latest Version](https://img.shields.io/github/release/zahidul1994/laravelslug-package.svg?style=flat-square)](https://github.com/zahidul1994/laravelslug-package/releases)
[![GitHub issues](https://img.shields.io/github/issues/zahidul1994/laravelslug-package)](https://github.com/zahidul1994/laravelslug-package/issues)
[![GitHub forks](https://img.shields.io/github/forks/zahidul1994/laravelslug-package)](https://github.com/zahidul1994/laravelslug-package/network)
[![GitHub stars](https://img.shields.io/github/stars/zahidul1994/laravelslug-package)](https://github.com/zahidul1994/laravelslug-package/stargazers)

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

php artisan serve

```sh
http://127.0.0.1:8000/makesulg

```
