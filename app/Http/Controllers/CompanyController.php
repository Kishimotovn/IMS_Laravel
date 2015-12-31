<?php

namespace App\Http\Controllers;

use App\Company;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCompanyRequest;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin', ['except' => 'show']);
        $this->middleware('auth');
    }

    function index() {
        $companies = Company::all();

        return view('companies.index', compact('companies'));
    }

    function show($id) {
        $company = Company::findOrFail($id);



        return view('companies.show', compact('company'));
    }

    function create() {
        return view('companies.create');
    }

    function store(CreateCompanyRequest $request)
    {
        $company = Company::Create($request->all());

        $company->save();

        return redirect('companies');
    }

    function edit($id) {
        $company = Company::findOrFail($id);

        return view('companies.edit', compact('company'));
    }

    function update(CreateCompanyRequest $request, $id)
    {
        $company = Company::findOrFail($id);

        $company->update($request->all());

        return redirect('companies');
    }
}

