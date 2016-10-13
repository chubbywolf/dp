<div class="row">
    <div class="col s12">
        <div class="row">
            <div class="input-field col s12">
                {!! Form::text('company', null, ['class' => '', 'type'=>'text', isset($disabled) ? 'disabled' : '']) !!}
                <label for="company" data-error="wrong" data-success="right">Company Name</label>
            </div>
            
            <div class="input-field col s12">
                {!! Form::textarea('company_address', null, ['class' => 'materialize-textarea', 'type'=>'text', isset($disabled) ? 'disabled' : '']) !!}
                <label for="company_address" data-error="wrong" data-success="right">Company Address</label>
            </div>
            
            <div class="input-field col s12">
                {!! Form::text('job_title', null, ['class' => '', 'type'=>'text', isset($disabled) ? 'disabled' : '']) !!}
                <label for="job_title" data-error="wrong" data-success="right">Job Title</label>
            </div>
            
            <div class="input-field col s12">
                {!! Form::textarea('job_details', null, ['class' => 'materialize-textarea', 'type'=>'text', isset($disabled) ? 'disabled' : '']) !!}
                <label for="job_details" data-error="wrong" data-success="right">Job Details</label>
            </div>
            
            <div class="input-field col s12">
                {!! Form::textarea('requirement', null, ['class' => 'materialize-textarea', 'type'=>'text', isset($disabled) ? 'disabled' : '']) !!}
                <label for="requirement" data-error="wrong" data-success="right">Requirement</label>
            </div>
            
            <div class="input-field col s12">
                {!! Form::textarea('responsibilities', null, ['class' => 'materialize-textarea', 'type'=>'text', isset($disabled) ? 'disabled' : '']) !!}
                <label for="responsibilities" data-error="wrong" data-success="right">Responsibilities</label>
            </div>
            
            <div class="input-field col s12">
                {!! Form::date('post_date', null, ['class' => 'datepicker', 'type'=>'text', isset($disabled) ? 'disabled' : '']) !!}
                <label for="post_date" data-error="wrong" data-success="right">Post Date</label>
            </div>
            
            <div class="input-field col s12">
                {!! Form::date('end_date', null, ['class' => 'datepicker', 'type'=>'text', isset($disabled) ? 'disabled' : '']) !!}
                <label for="end_date" data-error="wrong" data-success="right">End Date</label>
            </div>
            
            <div class="input-field col s12">
                {!! Form::text('job_location', null, ['class' => '', 'type'=>'text', isset($disabled) ? 'disabled' : '']) !!}
                <label for="job_location" data-error="wrong" data-success="right">Job Location</label>
            </div>
            
            <div class="input-field col s12">
                {!! Form::date('working_date', null, ['class' => 'datepicker', 'type'=>'text', isset($disabled) ? 'disabled' : '']) !!}
                <label for="working_date" data-error="wrong" data-success="right">Working Date</label>
            </div>
            
            <div class="input-field col s12">
                {!! Form::text('working_time', null, ['class' => '', 'type'=>'text', isset($disabled) ? 'disabled' : '']) !!}
                <label for="working_time" data-error="wrong" data-success="right">Working Time</label>
            </div>
            
            <div class="input-field col s12">
                {!! Form::text('wages', null, ['class' => '', 'type'=>'text', isset($disabled) ? 'disabled' : '']) !!}
                <label for="wages" data-error="wrong" data-success="right">Wages</label>
            </div>
            
            <div class="input-field col s12">
                {!! Form::text('job_type', null, ['class' => '', 'type'=>'text',isset($disabled) ? 'disabled' : '']) !!}
                <label for="job_type" data-error="wrong" data-success="right">Job Type</label>
            </div>
            
            <div class="input-field col s12">
                {!! Form::text('distance', null, ['class' => '', 'type'=>'text', isset($disabled) ? 'disabled' : '']) !!}
                <label for="distance" data-error="wrong" data-success="right">Distance</label>
            </div>
            
            <div class="input-field col s12">
                {!! Form::text('latitude', null, ['class' => '', 'type'=>'text', isset($disabled) ? 'disabled' : '']) !!}
                <label for="latitude" data-error="wrong" data-success="right">Latitude</label>
            </div>
            
            <div class="input-field col s12">
                {!! Form::text('longitude', null, ['class' => '', 'type'=>'text', isset($disabled) ? 'disabled' : '']) !!}
                <label for="longitude" data-error="wrong" data-success="right">Longitude</label>
            </div>
        </div>
    </div>
</div>