<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;

class CompanyController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        //
    }


    public function store(StoreCompanyRequest $request)
    {
        //
    }


    public function show($company)
    {
        $company = Company::find($company);
        return view("pages.company.index", compact("company"));
    }


    public function edit($company)
    {
        $company = Company::find($company);
        return view('pages.company.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'radius_km' => 'required',
            'time_in' => 'required',
            'time_out' => 'required',
        ]);

        $company->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'radius_km' => $request->radius_km,
            'time_in' => $request->time_in,
            'time_out' => $request->time_out,
        ]);
        return redirect()->route('companies.show',1)->with('success', 'Company updated successfully');

    }


    public function destroy(Company $company)
    {
        //
    }
}