<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subject;
use App\Answer;
use App\Company;
use Illuminate\Support\Facades\Storage;

class SubjectController extends Controller
{
    public function show(Request $request, Subject $subject) {
    	$subject->category = $subject->category;

    	return response()->json(compact('subject'));
    }

    public function submitAnswer(Request $request) {
    	$subject = Subject::findOrFail($request->subject_id);

    	$user = $request->user('api');

    	$upload = $request->file('upload');
    	$fileNameToStore = null;

    	if ($upload) {
	        $filename = $upload->getClientOriginalName();
	        $extension = $request->file('upload')->getClientOriginalExtension();
	        $fileNameToStore = $filename . '_' . time() . '.' . $extension;    

	        $upload->storeAs('uploads/' . $user->id, $fileNameToStore);
    	}

		$answer = Answer::where('user_id', $user->id)->where('subject_id', $subject->id)->first();
		$path = $request->file('upload')->store('images', 's3');

    	if ($answer) {
    		$answer->update([
    			'yes_no' => $request->yes_no,
	    		'comment' => $request->comment,
	    		'upload' => $fileNameToStore
    		]);
    	} else {
	    	$user->answers()->create([
	    		'subject_id' => $subject->id,
	    		'yes_no' => $request->yes_no,
	    		'comment' => $request->comment,
				#'upload' => $fileNameToStore
				'upload' => Storage::disk('s3')->url($path),
	    	]);
    	}

    	$next_subject = $subject->next();

    	return response()->json([
    		'subject' => $next_subject,
            'completed' => $user->company->is_public ? $subject->id === 32 : $subject->id === 69
    	]);
    }

    public function getTopics(Request $request) {
    	$user = $request->user('api');

    	$company = $user->company;

    	$categories = Category::orderBy('id')->get();

    	foreach ($categories as $key => &$category) {
    		$subject_ids = $category->subjects($company->is_public)->pluck('id');

    		$answers_count = $user->answers->whereIn('subject_id', $subject_ids)->count();

    		if (count($subject_ids) == $answers_count)
    			$category->completed = true;
    		else
    			$category->completed = false;
    	}

    	return response()->json(compact('categories'));
    }

    public function getAllTopics(Request $request) {
        $categories = Category::orderBy('id')->get();

        return response()->json(compact('categories'));
    }

    public function getStartPoint(Request $request) {
    	$user = $request->user('api');

    	$answer = $user->answers()->orderBy('subject_id', 'DESC')->first();

    	if (!$answer) {
            $subject_id = $user->firstSubject()->id;

    		return response()->json([
    			'subject_id' => $subject_id,
                'completed' => $user->company->is_public ? $subject_id === 33 : $subject_id === 70
    		]);
    	} else {
            $subject_id = $answer->subject_id + 1;

    		return response()->json([
    			'subject_id' => $subject_id,
                'completed' => $user->company->is_public ? $subject_id === 33 : $subject_id === 70
    		]);
    	}
    }

    public function getAnswers(Request $request) {
        $user = $request->user('api');
        $answers = $user->answers()->orderBy('subject_id')->get();
        foreach ($answers as $key => &$answer) {
            $answer->subject_name = $answer->subject->subject;
            $answer->category_name = $answer->subject->category->name;
            $answer->category_id = $answer->subject->category->id;
        }

        return response()->json(compact('answers'));
    }

    public function getCompanyAnswers(Request $request, $id) {
        $company = Company::findOrFail($id);
        $user = $company->users()->first();

        $answers = $user->answers()->orderBy('subject_id')->get();
        foreach ($answers as $key => &$answer) {
            $answer->subject_name = $answer->subject->subject;
            $answer->category_name = $answer->subject->category->name;
            $answer->category_id = $answer->subject->category->id;
        }

        return response()->json(compact('answers'));
    }
}
