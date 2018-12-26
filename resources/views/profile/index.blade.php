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
                		            <div class="row">
                		                <div class="col-md-12">
                		                    <h4>Your Profile</h4>
                		                    <hr>
                		                </div>
                		            </div>
                		            <div class="row">
                		                <div class="col-md-12">
                		                    <form>
                                              <div class="form-group row">
                                                <label for="name" class="col-3 col-form-label">First Name</label>
                                                <label for="name" class="col-6 col-form-label">First Name</label>
                                                <div class="col-3">
                                                  <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
                                                </div>
                                              </div>

                                              <div class="form-group row">
                                                <label for="lastname" class="col-4 col-form-label">Last Name</label>
                                                <div class="col-8">
                                                  <input id="lastname" name="lastname" placeholder="Last Name" class="form-control here" type="text">
                                                </div>
                                              </div>
                                              <div class="form-group row">
                                                <label for="text" class="col-4 col-form-label">Nick Name*</label>
                                                <div class="col-8">
                                                  <input id="text" name="text" placeholder="Nick Name" class="form-control here" required="required" type="text">
                                                </div>
                                              </div>
                                              <div class="form-group row">
                                                <label for="select" class="col-4 col-form-label">Display Name public as</label>
                                                <div class="col-8">
                                                  <select id="select" name="select" class="custom-select">
                                                    <option value="admin">Admin</option>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="form-group row">
                                                <label for="email" class="col-4 col-form-label">Email*</label>
                                                <div class="col-8">
                                                  <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="text">
                                                </div>
                                              </div>
                                              <div class="form-group row">
                                                <label for="website" class="col-4 col-form-label">Website</label>
                                                <div class="col-8">
                                                  <input id="website" name="website" placeholder="website" class="form-control here" type="text">
                                                </div>
                                              </div>
                                              <div class="form-group row">
                                                <label for="publicinfo" class="col-4 col-form-label">Public Info</label>
                                                <div class="col-8">
                                                  <textarea id="publicinfo" name="publicinfo" cols="40" rows="4" class="form-control"></textarea>
                                                </div>
                                              </div>
                                              <div class="form-group row">
                                                <label for="newpass" class="col-4 col-form-label">New Password</label>
                                                <div class="col-8">
                                                  <input id="newpass" name="newpass" placeholder="New Password" class="form-control here" type="text">
                                                </div>
                                              </div>
                                              <div class="form-group row">
                                                <div class="offset-4 col-8">
                                                  <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
                                                </div>
                                              </div>
                                            </form>
                		                </div>
                		            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
