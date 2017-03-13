@extends('layouts.master')
@section('content')
<section>
  <div class="container">
    <!-- START THE FEATURETTES -->
    
    <div class="featurette-heading">Contact Us</div>
        <div class="col-md-5">            
            <p class="featurette-text">
                Simply fill out the form to contact us. We can discuss how to get more leads and more exposure for your business starting today!
            </p>
            <p class="featurette-text">
                We offer a free consultation and there is no obligation by filling out the form below.
            </p>
        </div>
        <!-- col-md-5 -->
        <div class="col-md-5 col-md-offset-1">
            <form method="post" action="/form/store">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="example-text-input" class="sr-only col-xs-4 col-form-label">Name</label>
                    <div class="col-xs-12">
                        <input class="form-control" type="text" value="Name" name="name" id="example-text-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-inputexample-text-input" class="sr-only col-xs-4 col-form-label">Email</label>
                    <div class="col-xs-12">
                        <input class="form-control" type="email" name="email" value="Email" id="example-text-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="sr-only col-xs-4 col-form-label">Telephone</label>
                    <div class="col-xs-12">
                        <input class="form-control" type="tel" name="phone" value="Phone" id="example-tel-input">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-xs-12">
                        <label for="example-text-input" class="sr-only">Text</label>
                        <textarea class="form-control" id="example-text-input" name="text" rows="3">Message</textarea>
                    </div>
                </div>
                <!-- Button -->
                <div class="form-group row">
                    <div class="chapter col-xs-12">
                        <label class="control-label"></label>
                        <button type="submit" class="btn btn-lg btn-warning button-width">Send <span class="glyphicon glyphicon-send"></span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- container -->
@include('includes.footer')
</section>

@endsection