<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;
use Crypt;

class AccountController extends Controller
{
    public function auth(Request $request){
      if (! $request->session()->get('user')){
        return redirect("/login");
      }
    }

    public function profile(Request $request){
      if (! $request->session()->get('user')){
        return redirect()->route('auth_login');
      }
      $email = $request->session()->get('user');
      $user = DB::table('users')->where('email', $email)->first();
      $store = DB::table('store')->where('author', $user->id)->first();
      $list_city = DB::table('city_list')->orderBy('id', 'dsc')->get();

      DB::table('store')->where('author', $user->id)->update
      ([
        'updated_at' => date('Y-m-d')
      ]);

      if ($request->hasFile('logo_img') ){

			@unlink("media/logo".$store->photo_profile)."";

  			$imagename = time().$request->file('logo_img')->getClientOriginalName();
    		$upload = $request->file('logo_img')->move("media/logo/", $imagename);
    		DB::table('store')->where('author', $user->id)->update
  			([
  				'store_logo' => $imagename
  			]);

    	}

      if ($request->input('email')){
        try {
          DB::table('users')->where('id', $user->id)->update([
    				'email' => $request->input('email'),
    				'name' => $request->input('owner_name'),
  			  ]);

          // session
          $request->session()->forget('user');
          $request->session()->put('user', $request->input('email'));

        } catch(\Illuminate\Database\QueryException $ex){
        $request->session()->flash('error', 'Email sudah ada yang gunakan');
        return redirect('account/profile');
        }
      }

      if ($request->input('store_name')){
        DB::table('store')->where('author', $user->id)->update([
  				'store_name' => $request->input('store_name'),
  				'phone' => $request->input('phone_number'),
          'address' => $request->input('address'),
          'city' => $request->input('region'),
          'postal_code' => $request->input('postal_code'),
          'about' => $request->input('about'),
          'slug_url' => str_slug($request->input('store_name'), "-"),

			  ]);

        $request->session()->flash('success', 'Profil berhasil dirubah.');
        return redirect('account/profile');

      }

      return view('account/profile', compact('user', 'store', 'list_city'));

    }

    public function social_media(Request $request){
      if (! $request->session()->get('user')){
        return redirect()->route('auth_login');
      }
      $email = $request->session()->get('user');
      $user = DB::table('users')->where('email', $email)->first();
      $social_media = DB::table('social_media')->where('author', $user->id)->first();
        if ($request->input('facebook')){
          DB::table('social_media')->where('author', $user->id)->update([
    				'facebook' => $request->input('facebook'),
    				'twitter' => $request->input('twitter'),
            'BBM' => $request->input('bbm'),
            'gplus' => $request->input('google_plus'),
            'instagram' => $request->input('instagram'),
            'pinterest' => $request->input('pinterest'),
  			  ]);
        $request->session()->flash('success', 'Sosial media berhasil dirubah.');
        return redirect('account/social_media');

      }

      return view('account/social_media', compact('social_media', 'user'));
    }

    public function settings(Request $request){
    if (! $request->session()->get('user')){
      return redirect()->route('auth_login');
    }
    $email = $request->session()->get('user');
    $user = DB::table('users')->where('email', $email)->first();
    $store = DB::table('store')->where('author', $user->id)->first();
    $list_city = DB::table('city_list')->orderBy('id', 'dsc')->get();

      if ($request->input('payment_number')){
        DB::table('store')->where('author', $user->id)->update([
          'map_latitude' => $request->input('latitude'),
          'map_longtitude' => $request->input('longtitude'),
          'city' => $request->input('region'),
          'payment_bank' => $request->input('bank_account'),
          'payment_number' => $request->input('payment_number'),
          'sent_and_payment' => $request->input('sent_and_payment'),
      ]);

      if ($request->hasFile('image_header') ){
			  @unlink("media/image_header".$store->image_header)."";
  			$imagename = time().$request->file('image_header')->getClientOriginalName();
    		$upload = $request->file('image_header')->move("media/image_header/", $imagename);
    		DB::table('store')->where('author', $user->id)->update
  			([
  				'image_header' => $imagename
  			]);
    	}

      $request->session()->flash('success', 'Pengaturan berhasil dirubah.');
      return redirect('account/settings');

      }

      return view('account/settings', compact('store', 'user', 'list_city'));
    }

    public function product(Request $request){
      if (! $request->session()->get('user')){
        return redirect()->route('auth_login');
      }
      $email = $request->session()->get('user');
      $user = DB::table('users')->where('email', $email)->first();
      $store = DB::table('store')->where('author', $user->id)->first();

      $product = DB::table('product')->where('owner', $user->id)->orderBy('id', 'dsc')->get();
      return view('account/product/product', compact('product', 'user'));
    }

    public function add_product(Request $request){
      if (! $request->session()->get('user')){
        return redirect()->route('auth_login');
      }
      $email = $request->session()->get('user');
      $user = DB::table('users')->where('email', $email)->first();
      $store = DB::table('store')->where('author', $user->id)->first();
      $category = DB::table('category')->orderBy('id', 'dsc')->get();

        if ($request->hasFile('images') && $request->input('name') && $request->input('price') ) {

          $all_images = array();
      		foreach ($request->file('images') as $images) {
      			$imagename = time(). $images->getClientOriginalName();
      			$upload = $images->move("media/product", $imagename);
      			array_push($all_images, $imagename);
      		}

          $id = DB::table('product')->insertGetId([
           'owner' => $user->id,
           'product_name' => $request->input('name'),
           'price_product' => $request->input('price'),
           'category' => $request->input('category'),
           'condition' => $request->input('condition'),
           'sub_category' => 0,
           'stock' => $request->input('quantity'),
           'weight' => $request->input('weight'),
           'information_product' => $request->input('information'),
           'sent_and_payment' => $request->input('shipping_payment'),
           'slug_url' => str_slug($request->input('name'), "-", $store->store_name, "-", date('Y.m.d')),
           'status' => 0,
           'images' => serialize($all_images),
           'created_at' => date('Y-m-d'),
           'updated_at' => date('Y-m-d'),
          ]);

          $request->session()->flash('success', 'Produk berhasil ditambah');
          return redirect()->route('account_product');
        }

      return view('account/product/add_product', compact('user', 'category'));
    }

    public function edit_product(Request $request, $id){
      if (! $request->session()->get('user')){
        return redirect()->route('auth_login');
      }
      $email = $request->session()->get('user');
      $user = DB::table('users')->where('email', $email)->first();
      $store = DB::table('store')->where('author', $user->id)->first();
      $product = DB::table('product')->where('id', $id)->first();
      $category = DB::table('category')->orderBy('id', 'dsc')->get();

      if ($request->hasFile('images')) {

        // remove all images
        $images = unserialize($product->images);
    		foreach (range(0, sizeof($images) - 1 ) as $get_image) {
    			@unlink("media/product/".$images[$get_image])."";
    		}

        // add_images
        $all_images = array();
        foreach ($request->file('images') as $images) {
          $imagename = time(). $images->getClientOriginalName();
          $upload = $images->move("media/product", $imagename);
          array_push($all_images, $imagename);
        }

        DB::table('product')->where('id', $id)->update
    		([
  				'images' => serialize($all_images)
  			]);

      }

      if ($request->input('name') && $request->input('price') ) {
        $id = DB::table('product')->where('id', $id)->update([

         'owner' => $user->id,
         'product_name' => $request->input('name'),
         'price_product' => preg_replace('/[^0-9]/', '', $request->input('price')),
         'category' => $request->input('category'),
         'condition' => $request->input('condition'),
         'sub_category' => 0,
         'stock' => $request->input('quantity'),
         'weight' => $request->input('weight'),
         'information_product' => $request->input('information'),
         'sent_and_payment' => $request->input('shipping_payment'),
         'slug_url' => str_slug($request->input('name'), "-", $store->store_name, "-", date('Y.m.d')),
         'updated_at' => date('Y-m-d'),
        ]);

        $request->session()->flash('success', 'Produk berhasil dirubah');
        return redirect()->route('edit_product', ['id' => $product->id]);
      }

      return view('account/product/edit_product', compact('product', 'user', 'category'));
    }

    public function delete_product(Request $request, $id){
      if (! $request->session()->get('user')){
        return redirect()->route('auth_login');
      }
      $product = DB::table('product')->where('id', $id)->first();
      if ($product){
           $images = unserialize($product->images);
           foreach (range(0, sizeof($images) - 1 ) as $get_image) {
               @unlink("media/product/".$images[$get_image])."";
           }
           $product = DB::table('product')->where('id', $id)->delete();

           $request->session()->flash('success', 'Produk berhasil dihapus');
           return redirect()->route('account_product');
       }else{
         return redirect()->route('account_product');
       }
    }

    public function change_pwd(Request $request){
      if (! $request->session()->get('user')){
        return redirect()->route('auth_login');
      }
      $email = $request->session()->get('user');
      $user = DB::table('users')->where('email', $email)->first();
      $store = DB::table('store')->where('author', $user->id)->first();
      if ( $request->input("current_password") && $request->input("new_password") && $request->input("re_new_password") ){
  			if ($user && Crypt::decrypt($user->password) == $request->input('current_password')){
  				DB::table('users')->where('id', $user->id)->update([
  					'password' => Crypt::encrypt($request->input("new_password"))
  				]);

  				$request->session()->flash('success', 'Your password successfuly changed');
  				return redirect('account/change_pwd');

  			}else{
  				$request->session()->flash('error', 'Your password wrong or invalid');
  				return redirect('account/change_pwd');
  			}
  		}
      return view('account/change_pwd', compact('user'));
    }

    public function logout(Request $request){
      if (! $request->session()->get('user')){
        return redirect()->route('auth_login');
      }
      $request->session()->forget('user');
      return redirect("/login");
    }

    public function auth_login(Request $request){

      if ($request->session()->get('user')){
        return redirect("/account/profile");
      }

      if ($request->input('email') && $request->input('password')){
      		$user = DB::table('users')->where('email', $request->input('email'))->first();
      		if ($user && Crypt::decrypt($user->password) == $request->input('password')){
      			$request->session()->put("user", $user->email);
  				return redirect("/account/profile");
  			}else{
  				$request->session()->flash('error', 'Email or password invalid');
  			}
  		}

      return view('account/auth/login');
    }

    public function auth_forgot_password(Request $request){
      return view('account/auth/forgot_password');
    }

    public function account_register(Request $request){
      if ($request->session()->get('user')){
        return redirect("/account/profile");
      }

      if ($request->input('seller_name') && $request->input('store') && $request->input('email') && $request->input('password') ) {

      try{
        $user_id = DB::table('users')->insertGetId([
         'name' => $request->input('seller_name'),
         'email' => $request->input('email'),
         'password' => Crypt::encrypt($request->input('password')),
         'is_active' => 1,
         'is_validated' => 0,
         'created_at' => date('Y-m-d'),
         'updated_at' => date('Y-m-d'),
        ]);
      } catch(\Illuminate\Database\QueryException $ex){
        $request->session()->flash('error', 'Email sudah ada yang gunakan');
        return redirect()->route('register');
      }

        $id = DB::table('store')->insertGetId([
         'author' => $user_id,
         'store_name' => $request->input('store'),
         'slug_url' => str_slug($request->input('store'), "-"),
         'map_latitude' => "5.549013715023947",
         'map_longtitude' => "95.31978607177734",
         'store_logo' => "",
         'address' => " ",
         'postal_code' => " ",
         'about' => " ",
         'page_viewer' => 1,
         'city' => 1,
         'created_at' => date('Y-m-d'),
         'updated_at' => date('Y-m-d'),
         'phone' => $request->input('phone'),
         'payment_bank' => 1,
        ]);

        $id = DB::table('social_media')->insertGetId([
         'author' => $user_id,
         'facebook' => " ",
         'twitter' => " ",
         'BBM' => " ",
         'gplus' => " ",
         'instagram' => " ",
         'pinterest' => " ",
         'created_at' => date('Y-m-d'),
         'updated_at' => date('Y-m-d'),
        ]);


        $request->session()->flash('success', 'Anda berhasil mendaftar, mohon verifikasi malalui email Anda');
        return redirect()->route('auth_login');
      }

      return view('account/auth/register');
    }

}
