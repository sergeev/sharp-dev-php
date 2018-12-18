@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Transfer page</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Select an action:
                    <a class="nav-link" href="{{ url('tr') }}">{{ __('Transfer') }}</a>
                    <a class="nav-link" href="{{ url('rq') }}">{{ __('To request') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection