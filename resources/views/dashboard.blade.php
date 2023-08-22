@extends('layouts.app')

@section('content')
<div class="container">
    <?php $uid = Auth::user()->id;
    // $method = ["create", "read", "write", "delete"]
    ?>
    @if(checkpermission($uid,$modalname="Leave","read"))
    <h1 style="color:red;">Admin</h1>
    <h1>User</h1>
    @endif
    <h1>Writer</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
                <div class="card-footer">
                    {{Auth::user()->name}}
                </div>
            </div>
            <div>

            </div>
        </div>
    </div>
</div>
@endsection