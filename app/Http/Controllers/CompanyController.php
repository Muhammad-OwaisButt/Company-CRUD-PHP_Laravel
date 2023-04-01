<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Company;

class CompanyController extends Controller
{
    //

    function index()
    {
        $company = new Company();
        $companies = $company->all();
        return view("company")->with('companies',$companies);
    }

    function store(Request $req)
    {
        // dd($req->all());

        $company = new Company();

        if($req->hasfile('imgpath'))
        {
            $image_file = $req->file('imgpath');

            $image_ext = $image_file->getClientOriginalExtension();

            $image_name = "img_".rand(123456,999999).".".$image_ext;

            $destination_path = public_path('/upload');

            $image_file->move($destination_path,$image_name);
        }

        $company->name = $req->name;
        $company->fname = $req->fname;
        $company->address = $req->address;
        $company->imgpath = $image_name;
        $company->save();

        return redirect('/company');
    }

    function edit($id)
    {
        $companies = new Company();
        $company = $companies->find($id);
        return view('editform')->with('company', $company);
    }

    function update(Request $req)
    {
        // dd($req->all());

        $company = Company::find($req->id);
        $company->name = $req->name;
        $company->fname = $req->fname;
        $company->address = $req->address;
        $company->save();

        return redirect('/company');

    }

    function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();

        return redirect('/company');
    }
}
