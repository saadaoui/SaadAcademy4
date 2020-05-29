@extends('layouts.app')


@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">

                        {{ strtoupper($user->formatedName() )}}   Address

                    </div>

                    <div class="card-body">
                        <form action=" {{ route('profile-address') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="street_number" class="col-sm-2 col-form-label">Street Number</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="street_number" name="street_number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="unit_number" class="col-sm-2 col-form-label">Unit Number</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="unit_number" name="unit_number">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="suburb" class="col-sm-2 col-form-label">Suburb</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="suburb" name="suburb">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="city" class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="city" name="city">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="state" class="col-sm-2 col-form-label">State</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="state" name="state">
                                </div>
                            </div>


                            <div class="form-group row">
                                    <label for="post_code" class="col-sm-2 col-form-label">Post Code</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="post_code" name="post_code">
                                    </div>
                            </div>


                            <div class="form-group row">
                                    <label for="country" class="col-sm-2 col-form-label">Country</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="country" name="country">
                                    </div>
                            </div>

                            <div class="form-group row">
                                <label for="country" class="col-sm-2 col-form-label">Address Type</label>
                                <div class="col-sm-10">

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="addresses" id="billing_address" value="billing">
                                        <label class="form-check-label" for="billing_address">Billing  Address</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="addresses" id="shipping_address" value="shipping">
                                        <label class="form-check-label" for="shipping_address">Shipping Address</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="addresses" id="both_addresses" value="both" checked>
                                        <label class="form-check-label" for="both_addresses">Both</label>
                                    </div>

                                </div>
                            </div>


                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Update Address</button>
                                </div>
                            </div>


                        </form>

                    </div>

                </div>
                <br>
                <div class="card">

                    <div class="card-header">

                        {{ strtoupper($user->formatedName() )}}   Avatar

                    </div>

                    <div class="card-body">

                    </div>

                </div>
            </div>

        </div>


    </div>


@endsection
