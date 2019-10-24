<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.css') }}">
<title>Grant</title>
<html>

<head>
    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        input[type=email],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            width: 75%;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        p {
            border: 2px solid black;
            border-radius: 10px;
            padding: 15px;
            text-align: left;
        }

        header > img {
            width: 100%;

        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            text-align: center;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        .help-block {
            color: red;
            font-weight: bold;     
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>

<body>
    <header>
        <img src="{{ asset('public/images/scholarship.jpg')}}" alt="">
    </header>

    <div class="container">
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
    </div>
    </div>

</body>

</html>