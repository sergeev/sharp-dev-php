@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Welcome {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>id</td>
                        <td>transfer_to_user</td>
                        <td>transaction_amount</td>
                        <td>date</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
