@extends('layouts.app')
@section('content')
<div class="card-inner contacts" id="contacts-card">
    <div class="card-wrap">

        <div class="content contacts">

            <!-- title -->
            <div class="title">Product Package</div>

            <!-- content -->
            <div class="row">
                <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                    <div class="contact_form">
                        <form id="cform" method="post">
                            <div class="row">
                                <div class="col col-d-6 col-t-6 col-m-12">
                                    <div class="group-val">
                                        <input type="text" name="fname" placeholder="Firstname" />
                                    </div>
                                </div>
                                <div class="col col-d-6 col-t-6 col-m-12">
                                    <div class="group-val">
                                        <input type="text" name="lname" placeholder="Lastname" />
                                    </div>
                                </div>
                                <div class="col col-d-12 col-t-12 col-m-12">
                                    <div class="group-val">
                                        <input type="email" name="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="col col-d-12 col-t-12 col-m-12">
                                    <div class="group-val">
                                        <input type="text" name="address" placeholder="Address" />
                                    </div>
                                </div>
                                <div class="col col-d-12 col-t-12 col-m-12">
                                    <div class="group-val">
                                        <input type="text" name="card-name" placeholder="Name on Card" />
                                    </div>
                                </div>
                                <div class="col col-d-12 col-t-12 col-m-12">
                                    <div class="group-val">
                                        <input type="text" name="card-number" placeholder="Card Number" />
                                    </div>
                                </div>

                                <div class="col col-d-6 col-t-6 col-m-12">
                                    <div class="group-val">
                                        <input type="text" name="expiration" placeholder="Expiration" />
                                    </div>
                                </div>

                                <div class="col col-d-6 col-t-6 col-m-12">
                                    <div class="group-val">
                                        <input type="text" name="ccv" placeholder="CCV" />
                                    </div>
                                </div>

                            </div>
                            <div class="align-left">
                                <a href="#" class="button" onclick="$('#cform').submit(); return false;">
                                    <span class="text">Continue Checkout</span>
                                    <span class="arrow"></span>
                                </a>
                            </div>
                        </form>
                        <div class="alert-success">
                            <p>Thanks, your message is sent successfully.</p>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

        </div>
    </div>
</div>
@endsection