@extends('home')

@section('title', '| Dashboard')

@section('content')
<div class="row">
{{--36 sector model --}}
{{-- <div class="container">
    <div class="row">
        <div class="col-md-4" name="section1">
            <div class="col-md-4" name="column1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h5>MON</h5>
                    </div>
                    <div class="panel-body">
                    ...
                    </div>
                </div>
            </div>
            <div class="col-md-4" name="column2">           
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h5>TUE</h5>
                    </div>
                    <div class="panel-body">
                    ...
                    </div>
                </div>
            </div>
            <div class="col-md-4" name="column3"> 
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h5>WED</h5>
                    </div>
                    <div class="panel-body">
                    ...
                    </div>
                </div>
            </div>
        </div>    
        <div class="col-md-4" name="section2">        
            <div class="col-md-4" name="column4"> 
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h5>THU</h5>
                    </div>
                    <div class="panel-body">
                    ...
                    </div>
                </div>
            </div>
            <div class="col-md-4" name="column5"> 
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h5>FRI</h5>
                    </div>
                    <div class="panel-body">
                    ...
                    </div>
                </div>
            </div>
            <div class="col-md-4" name="column6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h5>SAT</h5>
                    </div>
                    <div class="panel-body">
                    ...
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4" name="section2"> 
            <div class="col-md-4" name="column7">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h5>SUN</h5>
                    </div>
                    <div class="panel-body">
                    ...
                    </div>
                </div>                 
            </div>
            <div class="col-md-8" name="column8">            
                <div class="panel panel-default">
                  <div class="panel-body">
                    <p> Account Information </p>...
                    <hr>
                    <p> Business Hours </p>...
                    <hr>
                    <p> Contact Info </p>...
                    <hr>
                  </div>
                </div>
            </div>
        </div>    
    </div>  
</div> --}}

{{--75/25 model --}}
{{-- <div class="container">
    <div class="row">
        <div class="col-md-9" name="section1">
            <div class="col-md-2" name="column1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h5>MON</h5>
                    </div>
                    <div class="panel-body">
                    ...
                    </div>
                </div>
            </div>
            <div class="col-md-2" name="column2">           
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h5>TUE</h5>
                    </div>
                    <div class="panel-body">
                    ...
                    </div>
                </div>
            </div>
            <div class="col-md-2" name="column3"> 
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h5>WED</h5>
                    </div>
                    <div class="panel-body">
                    ...
                    </div>
                </div>
            </div>       
            <div class="col-md-2" name="column4"> 
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h5>THU</h5>
                    </div>
                    <div class="panel-body">
                    ...
                    </div>
                </div>
            </div>
            <div class="col-md-2" name="column5"> 
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h5>FRI</h5>
                    </div>
                    <div class="panel-body">
                    ...
                    </div>
                </div>
            </div>
            <div class="col-md-2" name="column6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h5>SAT</h5>
                    </div>
                    <div class="panel-body">
                    ...
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3" name="section2"> 
            <div class="col-md-6" name="column7">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h5>SUN</h5>
                    </div>
                    <div class="panel-body">
                    ...
                    </div>
                </div>                 
            </div>
            <div class="col-md-6" name="column8">            
                <div class="panel panel-default">
                  <div class="panel-body">
                    <p> Account Information </p>...
                    <hr>
                    <p> Business Hours </p>...
                    <hr>
                    <p> Contact Info </p>...
                    <hr>
                  </div>
                </div>
            </div>
        </div>    
    </div>  
</div> --}}

<div class="container">
    <div class="row">
        <div class="col-md-9" name="section1">
            <div class="col-md-2" name="column0">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <p> Account Name </p>
                    <hr>
                    <p> Account Information </p>...
                    <hr>
                    <p> Business Hours </p>...
                    <hr>
                    <p> Contact Info </p>...
                    <hr>
                  </div>
                </div>
            </div>
            <div class="col-md-2" name="column1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h5>MON</h5>
                    </div>
                    <div class="panel-body">
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                    </div>
                </div>
            </div>
            <div class="col-md-2" name="column2">           
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h5>TUE</h5>
                    </div>
                    <div class="panel-body">
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                    </div>
                </div>
            </div>
            <div class="col-md-2" name="column3"> 
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h5>WED</h5>
                    </div>
                    <div class="panel-body">
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                    </div>
                </div>
            </div>       
            <div class="col-md-2" name="column4"> 
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h5>THU</h5>
                    </div>
                    <div class="panel-body">
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                    </div>
                </div>
            </div>
            <div class="col-md-2" name="column5"> 
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h5>FRI</h5>
                    </div>
                    <div class="panel-body">
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3" name="section2"> 
            <div class="col-md-6" name="column6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h5>SAT</h5>
                    </div>
                    <div class="panel-body">
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                        <p>...<p>
                    </div>
                </div>
            </div>
            <div class="col-md-6" name="column7">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h5>SUN</h5>
                    </div>
                    <div class="panel-body">
                        <p>...</p>
                        <p>...</p>
                        <p>...</p>
                        <p>...</p>
                        <p>...</p>
                        <p>...</p>
                        <p>...</p>
                        <p>...</p>
                        <p>...</p>
                    </div>
                </div>                 
            </div>
        </div>    
    </div>  
</div>
</div>
@endsection