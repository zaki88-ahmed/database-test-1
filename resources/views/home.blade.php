@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>

                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-3">
                                    <a href="{{url('redirect/google')}}" class="btn btn-primary btn-block">Home Page</a>
                                    <a href="{{url('redirect/facebook')}}" class="btn btn-primary btn-block">Invoice Details</a>
                                    <a href="{{url('redirect/github')}}" class="btn btn-primary btn-block">Invoice List</a>
                                </div>
                            </div>







                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
