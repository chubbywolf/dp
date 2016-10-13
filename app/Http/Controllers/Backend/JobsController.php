<?php namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Job;
use Auth;

class JobsController extends Controller {
    
    public function __construct() {
        
    }
    
    public function create() {
        return view('backend.job.view');
    }
    
    public function edit($id) {
        $data['model'] = Job::findorfail($id);
        return view('backend.job.view', $data);
    }
    
    public function store(Request $request) {
        if(isset($request->id)) {
            Job::findorfail($request->id)->update($request->all());
            return redirect(route('backend.job.edit',$request->id))->withFlashSuccess('Updated');
        } 
        Job::create($request->all());
        return redirect(route('backend.job.create'))->withFlashSuccess('Created');        
    }
    
    public function destroy($id) {
        Job::destroy($id);
        return redirect(route('backend.job.listing'))->withFlashSuccess('Created');        
    }
    
    public function view($id) {
        $data['model'] = Job::findorfail($id);
        $data['disabled'] = 'disabled';
        return view('backend.job.view', $data);
    }
    
    public function listing() {
        $data['model_data'] = job::where('user_id', Auth::user()->id)->get();
        return view('backend.job.list', $data);
    }
}