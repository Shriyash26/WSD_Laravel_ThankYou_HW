@extends('layouts.default')
@section('content')
    <div class="card mt-4">
        <div class="card-title ml-4 mt-3"><h1>Contact</h1>
            <p>Use this form to contact site owner</p></div>
        <div class="card-body">
            <form action="/contact" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="Email1_Id">Email</label>
                    <input name="Email" type="Email" class="form-control" id="Email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="Message">Message</label>
                    <textarea type="Message" name="Message" class="form-control" id="Message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
