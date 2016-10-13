@extends('layouts.app')

@section('content')
<div class='container'>
    <table class="striped responsive-table">
        <thead>
          <tr>
              <th data-field="company">Company</th>
              <th data-field="job_title">Job Title</th>
              <th data-field="post_date">Post Date</th>
              <th data-field="end_date">End Date</th>
              <th data-field="job_location">Job Location</th>
              <th data-field="working_date">Working Date</th>
              <th data-field="working_time">Working Time</th>
              <th data-field="wages">Wages</th>
              <th data-field="job_type">Job Type</th>
              <th data-field="distance">Distance</th>
              <th data-field='action'>Action</th>
          </tr>
        </thead>

        <tbody>
         @foreach($model_data as $val)
         <tr>
             <td>{{ $val->company }}</td>
             <td>{{ $val->job_title }}</td>
             <td>{{ $val->post_date }}</td>
             <td>{{ $val->end_date }}</td>
             <td>{{ $val->job_location }}</td>
             <td>{{ $val->working_date }}</td>
             <td>{{ $val->working_time }}</td>
             <td>{{ $val->wages }}</td>
             <td>{{ $val->job_type }}</td>
             <td>{{ $val->distance }}</td>
             <td><a href='{{ route('backend.job.view',$val->id) }}'><i class="material-icons">launch</i></a>|<a href='{{ route('backend.job.edit',$val->id) }}'><i class="material-icons">mode_edit</i></a>|<a href='{{ route('backend.job.destroy',$val->id) }}'><i class="material-icons">delete</i></a></td>
         </tr>
         @endforeach
        </tbody>
      </table>
</div>
@endsection