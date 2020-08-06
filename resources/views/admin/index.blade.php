@extends('layouts.admin')

@section('content')
<div class="container">
        <div class="col-md-12">
            <div class="card card-danger">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in the Admin Dashboard!') }}
                </div>
        </div>
    </div>
</div>
@endsection
