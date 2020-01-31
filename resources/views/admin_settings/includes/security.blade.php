@extends('admin_settings.index')

@section('extra-settings')
    <form action="">
        <div class="card">
            <div class="card-header border-0">
                <h4 class="lead">Password</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="current-pass"><strong>Current Password</strong></label>
                    <input type="text" class="form-control" id="current-pass" placeholder="Current Password">
                </div>
                <div class="form-group">
                    <label for="new-pass"><strong>New Password</strong></label>
                    <input type="text" class="form-control" placeholder="New Password" id="new-pass">
                </div>
                <div class="form-group">
                    <label for="confirm-pass"><strong>Confirm New Password</strong></label>
                    <input type="text" class="form-control" placeholder="Confirm New Password" id="confirm-pass">
                </div>
            </div>
        </div>
        <input type="submit" value="Update Password" class="btn btn-primary">
    </form>
@endsection