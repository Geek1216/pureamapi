<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subject;
use App\Answer;

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
	    		'upload' => $fileNameToStore
	    	]);
    	}

    	$next_subject = $subject->next();

    	return response()->json([
    		'subject' => $next_subject
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

    public function getStartPoint(Request $request) {
    	$user = $request->user('api');

    	$answer = $user->answers()->orderBy('subject_id', 'DESC')->first();

    	if (!$answer) {
    		return response()->json([
    			'subject_id' => $user->firstSubject()->id
    		]);
    	} else {
    		return response()->json([
    			'subject_id' => $answer->subject_id + 1
    		]);
    	}
    }
}
