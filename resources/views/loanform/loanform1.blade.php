@extends('layout.master')
@section('title', 'Loan Form1')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal">
                <fieldset>
                    <legend>WELCOME TO ..... Fill details below and enjoy your loan!</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Content</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="content"></textarea>
                            <span class="help-block">Don't understand? just</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">NEXT</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection