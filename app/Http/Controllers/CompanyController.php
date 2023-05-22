<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCompanyRequest;
use App\Notifications\WelcomeEmailNotification;
use Illuminate\Support\Facades\Notification;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::orderBy('id','desc')->get(); 
        return view('companies.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request)
    {
        if($request->photo == null ){
        $company = company::create([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
        ]);
        }
        else{
        $path = $request->file('photo')->store('photos','public');
        $company = company::create([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'logo' => $path,
        ]);
         }   
$company->notify(new WelcomeEmailNotification($company));
 return redirect()->route('companies.index', app()->getLocale());
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
        $company = company::find($id);
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCompanyRequest $request, $id)
    {
        $company = company::find($id);
        if($request->photo == null ){
           $path = $company->logo;
        }
        else{
        $path = $request->file('photo')->store('photos','public');
         }
       $company->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'website'=>$request->website,
            'logo'=>$path,
        ]);
        return redirect()->route('companies.index',app()->getLocale());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company =company::find($id);
        $company->delete();

        return redirect()->route('companies.index', app()->getLocale());
    }
}
