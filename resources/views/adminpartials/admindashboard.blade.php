@extends('admin')

@section('title', '| Dashboard')

@section('content')

<div class="row">
<div class="col-md-8 col-md-offset-2" >
    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3 class="panel-title">Admin Dashboard</h3>
        </div>

            @if($accounts != false)
                  @foreach ($accounts as $account)
            <ul class="list-group">
                <li class="list-group-item">
         
                    <div class="col-md-3">   
                        <a class="secondary-content" href="{{url('/admin/account/'.$account->id)}}">
                            <span class="glyphicon glyphicon-triangle-right" title="View Account"></span>        
                        </a>
                        <a class="secondary-content" href="{{url('/admin/'.$account->id).'/editaccount'}}">
                            <span class="glyphicon glyphicon-pencil" title="Edit Account"></span>
                        </a>
                        <a class="secondary-content" href="{{url('/admin/account/'.$account->id).'/invite'}} ">  
                            <span class="glyphicon glyphicon-envelope" title="Invite User"></span>
                        </a> 
                    </div>  
                        {{$account->accountname}}&nbsp;&nbsp;{{$account->address1}}, {{$account->address2}}, {{$account->city}}, {{$account->state}} {{$account->zip}}  
    
                </li>

        @endforeach
        @else
                <li class="list-group-item">You do not have any accounts yet.  
                    <a href="{{ url('/admin/createaccount') }}">  Click here
                    </a> to add a new account. 
                </li>
        @endif
            </ul>

    </div>
</div>

<p class="col-md-4 col-md-offset-4 alert alert-info" role="alert" text-align="center">
    <a class="secondary-content">
        <span class="glyphicon glyphicon-triangle-right" title="View Account"></span>
        = View Account &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       
    </a>
    <a>            </a>
    <a class="secondary-content">
        <span class="glyphicon glyphicon-pencil" title="Edit Account"></span>
        = Edit Account &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </a>
    <a>            </a>
    <a class="secondary-content">  
        <span class="glyphicon glyphicon-envelope" title="Invite User"></span>
        = Invite User
    </a>                  
</p>
</div>

@endsection