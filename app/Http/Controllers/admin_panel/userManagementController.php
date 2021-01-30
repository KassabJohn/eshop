<?php

namespace App\Http\Controllers\admin_panel;

use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductVerifyRequest;
use function GuzzleHttp\Promise\all;


class userManagementController extends Controller
{
    public function index()
    {
        $user = User::all();

        return view('admin_panel.user.index')
            ->with('user', $user);

    }


    public function store(ProductVerifyRequest $request)
    {

        $user = new User();
        $user->full_name = $request->full_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->area = $request->area;
        $user->city = $request->city;
        $user->comment = $request->comment;
        $user->zip = $request->zip;
        $user->save();
        return redirect()->route('admin.user');
    }

    public function edit($id)
    {
        $cat = Category::all();
        $prd = Product::find($id);
        $user = User::find($id);

        return view('admin_panel.user.edit')
            -> with('user', $user)
            ->with('product', $prd)
            ->with('catlist', $cat)
            ->with('select_attribute', '');

    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'area' => 'required',
            'comment',
            'city' => 'required',
            'zip' => 'required'
        ]);

        $user->update($request->all());

        return redirect()->route('user.logout')
            ->with('success','User modifié avec succès');
    }


    public function delete($id)
    {

        $user = User::find($id);

        return view('admin_panel.user.delete')
            ->with('user', $user);
    }

    public function destroy(Request $request)
    {

        $user = User::find($request->id);
        $user->delete();

        return redirect()->route('admin.user');

    }


}
