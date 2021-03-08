<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use App\Company;

class CompanyController extends Controller
{
	public function index() {
		$companies = Company::orderBy('name')->get();

		return response()->json(compact('companies'));
	}

	public function store(Request $request) {
        $validator = Validator::make($request->all(), [ 
            'name' => 'required',
            'private' => 'required'
        ]);

        $managers = $request->managers;

        // dd($managers);

        if ($validator->fails())
        {
            return response()->json(['error'=>$validator->errors()], 422);            
        }

        $company = Company::create([
            'name' => $request->name
        ]);

        foreach ($managers as $key => $manager) {
        	$user = $company->users()->create([
        		'name' => $manager['name'],
        		'email' => $manager['email'],
        		'password' => bcrypt('password')
        	]);

        	$user->roles()->attach(ROLE_APPLICANT);
        }
        
        return response()->json('Created successfully.', 201);
	}
}
