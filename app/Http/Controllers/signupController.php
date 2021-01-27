<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\User;
use App\Address;


class signupController extends Controller
{
    public function userIndex()
    {

        if (session()->has('user')) {
            return redirect()->route("user.cart");
        }

        $res = Product::all();
        $cat = Category::all();


        return view('store.signup')
            ->with('products', $res)
            ->with("cat", $cat);
    }

    public function userPosted(Request $r)
    {
        $u = new user();
        $add = new Address();
        $add->area = $r->address;
        $add->city = $r->city;
        $add->zip = $r->zip;

        $add->save();
        $add_id = $add->id;

        $u->full_name = $r->name;
        $u->email = $r->email;
        $u->password = $r->pass;
        $u->address_id = $add_id;
        $u->phone = $r->tel;
        $u->city = $add->city;
        $u->area = $r->address;
        $u->zip = $add->zip;

        $u->save();

        $user = user::find($u->id);

        $r->session()->put('user', $user);

        return redirect()->route('user.home');
    }
}

