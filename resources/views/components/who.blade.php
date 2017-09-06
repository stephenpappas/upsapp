@if (Auth::guard('web')->check())
    <p class="text-success">
        You are logged IN as a <strong>USER</strong>
    </p>
@else
    <p class="text-danger">
        You are logged OUT as a <strong>USER</strong>
    </p>

@endif

@if (Auth::guard('admin')->check())
    <p class="text-success">
        You are logged IN as an <strong>ADMIN</strong>
    </p>
@else
    <p class="text-danger">
        You are logged OUT as an <strong>ADMIN</strong>
    </p>

@endif

@if (Auth::guard('superadmin')->check())
    <p class="text-success">
        You are logged IN as a <strong>SUPERADMIN</strong>
    </p>
@else
    <p class="text-danger">
        You are logged OUT as a <strong>SUPERADMIN</strong>
    </p>

@endif
