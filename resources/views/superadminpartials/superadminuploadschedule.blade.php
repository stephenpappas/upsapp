@extends('superadmin')

@section('title', '| Upload Schedules')

@section('content')

<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Upload New Pickup Schedules</h3>
        </div>

        <div class="panel-body">

            <form action="{{url('/upload')}}" method="POST" enctype="multipart/form-data" class="col-md-8 col-md-offset-2">
            {{csrf_field()}}

            <div class="row">
                <div class="form-group ">                          
                    <input type="file" class="form-control" placeholder="Search" name="upload-file">     
                </div>
            </div>
            <div class="row col-md-4 col-md-offset-4">
                <button type="submit" class="btn btn-success btn-block" value="Upload Image" name="submit" >Upload</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection