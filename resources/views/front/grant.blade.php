@extends('front.layout')

@section('css')
   <link rel="stylesheet" href="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.css">
@endsection

@section('main')
        <h2>Grant</h2>
        <p>Something will be there later...
        </p>

            @if (session('message-ok'))
                @component('alert')
                    @slot('type')
                        success
                    @endslot
                    {!! session('message-ok') !!}
                @endcomponent
            @endif

    <form method="post" action="{{ route('grantstore') }}">
                    {{ csrf_field() }}
            <div class="row">
                <div class="col-25">
                    <label for="fname">Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="name" placeholder="Your name.." value="{{old('name')}}">
                    {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="email">Gmail</label>
                </div>
                <div class="col-75">
                    <input type="email" id="email" name="email" placeholder="Your gmail" value="{{old('email')}}">
                    {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">
                        Answers on questions</label>
                </div>
                <div class="col-75">
                    <textarea id="subject" name="message" placeholder="Answers..." style="height:200px">{{old('message')}}</textarea>    
                    {!! $errors->first('message', '<small class="help-block">:message</small>') !!}                                    
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
@endsection

@section('js')
    <script src="{{ asset('public/js/mine.js') }}"></script>
    <script>
       $(document).ready(function(){
          //...
       });       
    </script>
@endsection  