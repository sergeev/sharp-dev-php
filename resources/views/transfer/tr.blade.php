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
                    <div class="form-group">
                    <div class="input-group input-group-md">
                        <div class="icon-addon addon-md">
                            <input type="text" placeholder="What are you looking for?" class="form-control">
                        </div>
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Search!</button>
                        </span>
                    </div>
                </div>
            </div>
            <div id="products" class="row list-group">
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
