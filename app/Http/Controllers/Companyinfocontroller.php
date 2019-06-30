<?php

namespace App\Http\Controllers;

use App\User;
use App\Company;
use Illuminate\Http\Request;

class Companyinfocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.addcompany');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = Company::all();
        $user=User::all();
        return view('user.company',compact('company','user'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Company();
        $company->Companyname = $request->companyname; 
        $company->Companyinfo = $request->companyinfo; 
        $company->Ownername = $request->ownername; 
        $company->Address = $request->address; 
        $company->Phoneno = $request->phone; 
        $company->Userid=$request->user()->id;                          
        $company->save();
        return redirect()->back()->with('success','Successfully Added');
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
        $company = Company::findOrFail($id);                
        return view('user.editcompany')->with('company',$company);
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
        $company = Company::findOrFail($id);
        $company->Companyname = $request->name; 
        $company->Companyinfo = $request->info; 
        $company->Ownername = $request->ownername; 
        $company->Address = $request->address;    
        $company->Phoneno = $request->phone;                    
        $company->save();
        return redirect()->route('company.create')->with('success','Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();        
        return redirect()->back()->with('success','Successfully Deleted');

    }
}
