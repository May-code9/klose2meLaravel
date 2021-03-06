<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebsiteFeature;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getFeatures = WebsiteFeature::join('users', 'users.id', '=', 'website_features.user_id')
        ->select('website_features.id', 'name', 'website_feature', 'dynamic', 'feature_cost')
        ->paginate(10);

        return view('admin.pages.siteFeature.view', compact('getFeatures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.siteFeature.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      WebsiteFeature::create($request->all());
      return redirect()->back()->with('success_status', 'Feature Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $getFeature = WebsiteFeature::findOrFail($id);
      return view('admin.pages.siteFeature.edit', compact('getFeature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $name = $request->input('website_feature');
      WebsiteFeature::findOrFail($id)->update($request->all());
      return redirect('/siteFeature')->with('success_status', 'Feature with Id Number ' .$id. ' Updated Successfully to ' . $name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      WebsiteFeature::destroy($id);
      return back()->with('failure_status', 'Feature with Id Number ' .$id. ' Successfully Moved to Trash');
    }
}
