<?php

namespace App\Http\Controllers;

use App\Company;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class CompanyController extends Controller
{
    function index() {
        $companies = Company::all();

        return view('companies.index', compact('companies'));
    }

    function show($company_name) {
        $company = Company::where('name', $company_name)->firstOrFail();



        return view('companies.show', compact('company'));
    }

    function create() {
        return view('companies.create');
    }

    function store()
    {
        $input = Request::all();

        $company = new Company;

        $company->name = $input['name'];
        $company->website = $input['website'];

        $company->save();

        return $this->index();
    }
}
