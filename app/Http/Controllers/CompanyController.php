<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $companies = Company::all();
        return view('profile.companies', ['companies' => $companies]);
    }
    public function store(Request $request){
        try{
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
            ]);

            $company = new Company();
            $company->name = $request->input('name');
            $company->url = $request->input('url');

            if($request->hasFile('image')){
                $image = $request->file('image');
                $image_name = $image->getClientOriginalName();
                $image->move(public_path('uploads/companies'), $image_name);
                $company->image = $image_name;
            }

            $company->save();
            return redirect()->back()->with('success', 'Company Added Successfully');
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function delete($id){
        $company = Company::find($id);
        if($company->image){
            unlink(public_path('uploads/companies/'.$company->image));
        }
        $company->delete();
        return redirect()->back()->with('success', 'Company Deleted Successfully');
    }


}
