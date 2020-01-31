@extends('admin_settings.index')

@section('extra-settings')
    <form action="">
        <div class="card">
            <div class="card-header border-0">
                <h4 class="lead">User</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <p><strong>Avatar</strong></p>
                    <input type="file" name="avatar" id="avatar" class="btn btn-outline-primary">
                </div>
                <div class="form-group">
                    <label for="username"><strong>Username</strong></label>
                    <input type="text" class="form-control" placeholder="Username" id="username">
                </div>
                <div class="form-group">
                    <label for="email"><strong>Email</strong></label>
                    <input type="text" class="form-control" placeholder="Email" id="email">
                </div>
            </div>
        </div>
        <input type="submit" value="Save Setting" class="btn btn-primary">
    </form>
@endsection