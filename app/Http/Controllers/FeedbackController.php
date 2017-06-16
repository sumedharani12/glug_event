<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Hash;
use DateTime;

class FeedbackController extends Controller
{
    public function submitt(Request $requests)
    {
        $rules = array(
            'fname' => 'required',
            'email' => 'required',
            'event_name' => 'required',
            'content' => 'required',
            'presentation' => 'required',
            'speaker' => 'required',
            'organization' => 'required',
            'overall' =>'required'
        );

        $this->validate($requests, $rules);
        $feedbackcontent="Rating:<br> Content - ".$requests->input('content')."<br>Presentation - ".$requests->input('presentation')."<br>Speaker - ".$requests->input('speaker')."<br>Organization - ".$requests->input('organization')."<br>Overall - ".$requests->input('overall')."<br>Suggestions - ".$requests->input('suggestions');
    
        $newfeedback = new Feedback;
        $newfeedback->workshop = $requests->input('event_name');
        $newfeedback->name = $requests->input('fname');
        $newfeedback->email = $requests->input('email');
        $newfeedback->comment = $feedbackcontent;
        $newfeedback->save();
        return redirect('/index');
    }
}
