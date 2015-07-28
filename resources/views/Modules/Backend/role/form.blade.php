<?php
    use oblagio\Helpers\Site; 
?>
@extends('layouts.backend')
@section('content')
<div class="pageheader">
    
    <div class="pageicon"><span class="iconfa-table"></span></div>
    <div class="pagetitle">
        <h5>List</h5>
        <h1>Form</h1>
    </div>
</div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
                  <div class="widgetbox box-inverse">
                        <h4 class="widgettitle">Form Bordered</h4>
                        <div class="widgetcontent nopadding">
                            {!! Form::open(['class' => 'stdform stdform2' ,  'enctype' => 'multipart/form-data']) !!}
                                    <p>
                                        <label>Title</label>
                                        <span class="field">
                                            {!! Form::text('title' , old('title') , ['class' => 'input-xxlarge' ] ) !!}
                                           &nbsp; <span class = 'errorMessage'>{{ $errors->first('title') }}</span>
                                        </span>
                                    </p>
                                    <p class="stdformbutton">
                                        <button class="btn btn-primary">Submit </button>
                                        
                                    </p>
                            {!! Form::close() !!}
                        </div><!--widgetcontent-->
                    </div>
                </div>
            </div>

@endsection