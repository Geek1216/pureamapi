<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use App\Company;
use App\Mail\CompanyCompleteMail;
use App\Mail\CompanySubmitMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::orderBy('name')->get();

        return response()->json(compact('companies'));
    }

    public function update(Request $request, Company $company)
    {
        $data = $request->all();
        if (isset($data['is_completed'])) {
            $company['is_completed'] = $data['is_completed'];
            $users = $company->users;
            foreach ($users as $user) {
                Mail::to($user['email'])->send(new CompanyCompleteMail($company['name']));
            }
        }
        $company->save();
        return response()->json([
            'message' => 'Completed Successfully',
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'private' => 'required'
        ]);

        $managers = $request->managers;

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $company = Company::create([
            'name' => $request->name,
            'is_public' => $request->private === 'public'
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

    public function show(Request $request, Company $company)
    {
        return response()->json(compact('company'));
    }

    public function destroy(Request $request, Company $company)
    {
        $users = $company->users;

        foreach ($users as $key => $user) {
            $user->answers()->delete();
            DB::table('user_roles')->where('user_id', $user->id)->delete();
            $user->delete();
        }

        $company->delete();
        return response()->json([
            'message' => 'Deleted Successfully'
        ]);
    }

    public function submit(Request $request, $id)
    {
        Company::submitAnswers($id);
        $company = Company::find($id);
        Mail::to('neoprince1992@gmail.com')->send(new CompanySubmitMail($company->name));
        return response()->json([
            'message' => 'Submitted Successfully'
        ]);
    }
}
