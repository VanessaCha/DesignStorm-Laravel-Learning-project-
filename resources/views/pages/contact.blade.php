@extends('layouts.main')

<!-- section is one section -->
@section('title') 
    Design Storm - Contact Us
@endsection

@section('content')
    <div class="container mt-5 bg-warning" style="border: 1px solid black;">
        <div class="row mx-auto mt-3 mb-4">
            <div class="col">
                <div class="form-group row">
                    <label for="name">Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group row">
                    <label for="name">Email Address</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group row">
                    <label for="name">Contact No.</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group row">
                    <label for="name">Comment</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group row mt-3">
                    <button type="submit" class="btn btn-dark">
                        Submit
                    </button>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-center text-light">
                    <label for="name">Don't Hestitate to Contact Us!<br>Tel: 03-123456789<br>123456789<br>123456789<br>123456789<br>123456789<br>123456789<br>123456789<br>123456789<br>123456789<br>123456789<br>123456789<br>d
                    </label>
                </div>
            </div>
        </div>
    </div>
@endsection