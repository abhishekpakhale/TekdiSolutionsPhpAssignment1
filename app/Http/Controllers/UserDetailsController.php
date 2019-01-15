<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDetail;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $userdetails = UserDetail::latest()->paginate(5);
        return view('userdetail.index', compact('userdetails'))
                  ->with('i', (request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view( 'userdetail.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate([
          'name' => 'required',
          'email_address' => 'required',
          'birth_date' => 'required',
        ]);
        UserDetail::create($request->all());
        return redirect()->route('userdetail.index')
                        ->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id ) {
         $userdetail = UserDetail::find($id);
        return view('userdetail.detail', compact('userdetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
         $userdetail = UserDetail::find($id);
        return view('userdetail.edit', compact('userdetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $request->validate([
        'name' => 'required',
        'email_address' => 'required',
        'birth_date' => 'required',

      ]);
      $userdetail = UserDetail::find($id);
      $userdetail->name = $request->get('name');
      $userdetail->email_address = $request->get('email_address');
      $userdetail->country = $request->get('country');
      $userdetail->mobile_number = $request->get('mobile_number');
      $userdetail->about_you = $request->get('about_you');
      $userdetail->birth_date = $request->get('birth_date');
      $userdetail->save();
 
      return redirect()->route('userdetail.index')
                      ->with('success', 'User details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $userdetail = UserDetail::find($id);
        $userdetail->delete();
        return redirect()->route('userdetail.index')
                        ->with('success', 'User deleted successfully');
    }
    }
}