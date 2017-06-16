<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Workshop;
use App\Presentations;
use App\Notes;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Hash;
use DateTime;

class AdminController extends Controller
{
    public function wadd(Request $requests)
    {
        $rules = array(
            'wname' => 'required',
            'wdate' => 'required',
            'wloc' => 'required'
        );

        $this->validate($requests, $rules);

        $newworkshop = new Workshop;
        $newworkshop->workshop = $requests->input('wname');
        $newworkshop->date = $requests->input('wdate');
        $newworkshop->loc = $requests->input('wloc');
        $newworkshop->save();
        return view('admin.workshop');
        //return redirect('verifyemail');
    }
    public function nadd(Request $requests)
    {
        
        $rules = array(
            'wname' => 'required',
            'wdate' => 'required',
            'nname' => 'required'
        );

        $this->validate($requests, $rules);

      //  $ext = pathinfo($requests->input('wposter'), PATHINFO_EXTENSION); # extra () to prevent notice
        $postname=$requests->input('wdate')."-".$requests->input('nname').'.'.$requests->notes->getClientOriginalExtension();//.".".$ext;
    	
        $newnote = new Notes;
        $newnote->workshop = $requests->input('wname')." - ".$requests->input('wdate');
        $newnote->name = $requests->input('nname');
        $path = $requests->file('notes')->storeAs('files/notes',$postname);
		$newnote->filename = $postname;
        $newnote->save();
        return view('admin.notes');
        //return redirect('verifyemail');
    }

    public function padd(Request $requests)
    {
        $rules = array(
            'wname' => 'required',
            'wdate' => 'required',
            'pname' => 'required'
        );

        $this->validate($requests, $rules);

      //  $ext = pathinfo($requests->input('wposter'), PATHINFO_EXTENSION); # extra () to prevent notice
        $postname=$requests->input('wdate')."-".$requests->input('pname').'.'.$requests->presen->getClientOriginalExtension();//.".".$ext;
    	
        $newpresentation = new Presentations;
        $newpresentation->workshop = $requests->input('wname')." - ".$requests->input('wdate');
        $newpresentation->name = $requests->input('pname');
        $paths = $requests->file('presen')->storeAs('files/presentations',$postname);
		$newpresentation->filename = $postname;
        $newpresentation->save();
        return view('admin.pres');
        //return redirect('verifyemail');
    }
}
