<?php
namespace App\Http\Controllers;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
use View;
use Mail;
use Session;

use Illuminate\Support\Str;
use Redirect;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Validation\Rule;
class ViewController extends Controller
{



   public function index()
     {
        return View::make('index');

     }
        public function account()
          {
             return View::make('register');

          }
          public function dashboard()
                   {
                      return View::make('dashboard');

                   }
          public function checkout()
                             {
                                return View::make('checkout');

                             }
            public function cart()
                                        {
                                           return View::make('cart');

                                        }
             public function products()
                                                     {
                                                        return View::make('products');

                                                     }
               public function product()
                           {
                              return View::make('product');

                           }
               public function wish()
                      {
                         return View::make('wish');

                      }
               public function contact()
                                     {
                                        return View::make('contact');

                                     }
     }
