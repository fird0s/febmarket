<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;

class PortalController extends Controller
{

  public function home(Request $request){
    $auth = 'false';
    if ($request->session()->get('user')){
      $user = DB::table('users')->where('email', $request->session()->get('user'))->first();
      $auth = DB::table('store')->where('owner', $user->id)->first();
    }
    $category = DB::table('category')->orderBy('id', 'dsc')->get();
    $product = DB::table('product')->orderBy('id', 'dsc')->get();
    $product_popular = DB::table('product')->orderBy('viewer', 'dsc')->get();
    return view('portal/home/index', compact('category', 'product', 'product_popular', 'auth', 'user'));
  }

  public function home_thumbnail(Request $request){
    $auth = 'false';
    if ($request->session()->get('user')){
      $user = DB::table('users')->where('email', $request->session()->get('user'))->first();
      $auth = DB::table('store')->where('owner', $user->id)->first();
    }
    $category = DB::table('category')->orderBy('id', 'dsc')->get();
    $product = DB::table('product')->orderBy('id', 'dsc')->get();
    $product_popular = DB::table('product')->orderBy('viewer', 'dsc')->get();
    return view('portal/home/thumbnail', compact('category', 'product', 'product_popular', 'auth', 'user'));
  }

  public function display_product(Request $request, $slug){
    $auth = 'false';
    if ($request->session()->get('user')){
      $user = DB::table('users')->where('email', $request->session()->get('user'))->first();
      $auth = DB::table('store')->where('owner', $user->id)->first();
    }
    $product = DB::table('product')->where('slug_url', $slug)->first();
    $product_popular = DB::table('product')->orderBy('viewer', 'dsc')->limit(5)->get();
    $product_similar = DB::table('product')->where('category', $product->category)->orderBy('viewer', 'dsc')->limit(5)->get();
    $store = DB::table('store')->where('author', $product->owner)->first();
    $location = DB::table('city_list')->where('id', $store->city)->first();

    DB::table('product')->where('slug_url', $slug)->update([
      'viewer' => $product->viewer + 1
    ]);

    return view('portal/product/display-product', compact('product', 'product_popular','product_similar', 'store', 'auth', 'user', 'location'));
  }

  public function category(Request $request, $slug_url){
    $auth = 'false';
    if ($request->session()->get('user')){
      $user = DB::table('users')->where('email', $request->session()->get('user'))->first();
      $auth = DB::table('store')->where('owner', $user->id)->first();
    }
    $category = DB::table('category')->orderBy('id', 'dsc')->get();
    $selected_category = DB::table('category')->where('slug_url', $slug_url)->first();
    $product = DB::table('product')->where('category', $selected_category->id)->get();
    $product_popular = DB::table('product')->orderBy('viewer', 'dsc')->get();
    return view('portal/category/category', compact('category', 'product', 'product_popular', 'selected_category', 'auth', 'user'));
  }

  public function beranda(Request $request){
    $category = DB::table('category')->orderBy('id', 'dsc')->get();
    $product = DB::table('product')->orderBy('id', 'dsc')->get();
    $product_popular = DB::table('product')->orderBy('viewer', 'dsc')->limit(5)->get();
    return view('portal/home/index', compact('category', 'product', 'product_popular'));
  }

  public function page_about(Request $request){
    $auth = 'false';
    if ($request->session()->get('user')){
      $user = DB::table('users')->where('email', $request->session()->get('user'))->first();
      $auth = DB::table('store')->where('owner', $user->id)->first();
    }
    $product_popular = DB::table('product')->orderBy('viewer', 'dsc')->limit(5)->get();
    return view('portal/pages/about', compact('auth', 'user', 'product_popular'));
  }

  public function page_syarat_dan_ketentuan(Request $request){
    $auth = 'false';
    if ($request->session()->get('user')){
      $user = DB::table('users')->where('email', $request->session()->get('user'))->first();
      $auth = DB::table('store')->where('owner', $user->id)->first();
    }
    $product_popular = DB::table('product')->orderBy('viewer', 'dsc')->limit(5)->get();
    return view('portal/pages/syarat_dan_ketentuan', compact('auth', 'user', 'product_popular'));
  }

  public function page_faq(Request $request){
    $auth = 'false';
    if ($request->session()->get('user')){
      $user = DB::table('users')->where('email', $request->session()->get('user'))->first();
      $auth = DB::table('store')->where('owner', $user->id)->first();
    }
    $product_popular = DB::table('product')->orderBy('viewer', 'dsc')->limit(5)->get();
    return view('portal/pages/page_faq', compact('auth', 'user', 'product_popular'));
  }

  public function page_contact(Request $request){
    $auth = 'false';
    if ($request->session()->get('user')){
      $user = DB::table('users')->where('email', $request->session()->get('user'))->first();
      $auth = DB::table('store')->where('owner', $user->id)->first();
    }
    $product_popular = DB::table('product')->orderBy('viewer', 'dsc')->limit(5)->get();

      // contact form
			if ($request->input('name') && $request->input('email') && $request->input('subject') && $request->input('message') ){
        $to = 'firdauskoder@gmail.com';
        $subject = $request->input('subject');
        $message = $request->input('message');
        $from = "From: " + $request->input('name') + "<" + $request->input('email')+ ">";
        mail($to,$subject,$message,$from);
        $request->session()->flash('success', 'Sukses mengirim pesan');
        return redirect()->route('page_contact');
			}

    return view('portal/pages/contact', compact('auth', 'user', 'product_popular'));
  }

  public function blog(Request $request){
    return view('portal/blog/blog');
  }

  public function search(Request $request, $q){
    $auth = 'false';
    if ($request->session()->get('user')){
      $user = DB::table('users')->where('email', $request->session()->get('user'))->first();
      $auth = DB::table('store')->where('owner', $user->id)->first();
    }
    $category = DB::table('category')->orderBy('id', 'dsc')->get();
    $product = DB::table('product')->where('product_name', 'LIKE','%'.$q.'%')->orderBy('id', 'dsc')->get();
    $product_popular = DB::table('product')->orderBy('viewer', 'dsc')->get();
    return view('portal/product/search', compact('category', 'product', 'product_popular', 'auth', 'user'));
  }


}
