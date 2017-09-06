@extends('superadmin')

@section('title', '| Dashboard')

@section('content')

<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Admin Dashboard</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">Missing Account Alpha's</h3>
                        </div>
                        <div class="panel-body">
                            <p>ABC Corp</p>
                            <p>Costco</p>
                            <p>Amazon</p>
                            <p>...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Open Board Monitor</h3>
                        </div>
                        <div class="panel-body">
                            <p>8:00 - 9:00 = 3</p>
                            <p>9:00 - 10:00 = 4</p>
                            <p>10:00 - 11:00 = 8</p>
                            <p>...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Added Pickups</h3>
                        </div>
                        <div class="panel-body">
                            <p>RHCCA @ 11:00</p>
                            <p>MMCCA @ 21:00</p>
                            <p>LLRCA @ 16:00</p>
                            <p>...</p>
                        </div>
                    </div>
                </div>                
                <div class="col-md-3">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">Cancellations</h3>
                        </div>
                        <div class="panel-body">
                            <p>KHLCA @ 12:00</p>
                            <p>GPLCA @ 13:00</p>
                            <p>ZUMCA @ 18:00</p>
                            <p>...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection