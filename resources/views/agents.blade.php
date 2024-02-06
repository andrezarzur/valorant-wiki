@extends('layout')


@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/full-page-scroll.css') }}">
    <script src="{{ URL::asset('assets/js/full-page-scroll.js') }}"></script>

    <link rel="stylesheet" href="{{ asset( 'css/bootstrap.min.css' ) }}">
    <script src="{{ asset( 'js/bootstrap.bundle.min.js' ) }}"></script>

    <style>
        body {
            background-color: gray;
        }
    </style>
</head>
<body>
    <div id="main" class="scroll-container">
        @foreach($agentsData as $index => $data)
            @if($data["fullPortrait"] !== null)
                <section class="section{{$index + 1}}" style="background-color: #{{$data['backgroundGradientColors'][1]}}">
                    <div style="height: 30vh; width: 100%;background-color: #{{$data['backgroundGradientColors'][0]}}; position: absolute; z-index: 0; display:flex">
                        <div style="display: inline-block; align-self: flex-end; margin-left: 1vw">
                            <div style="font-size: 64px; font-weight: bold; margin-bottom: 0px">{{$data['displayName']}}</div>
                            <div style="font-size: 32px; color: gray">{{$data['role']['displayName']}}</div>
                            <div style="font-style:italic;">Developed by: {{$data['developerName']}}</div>
                        </div>
                    </div>
                    <div>
                        <img src="{{$data['background']}}" alt="Base Image" style="position: absolute; left: 70vw;height: 540px; width: auto;">
                        <img src="{{$data["fullPortrait"]}}" alt="Overlay Image" style="position: absolute; left: 70vw;height: 540px;">
                    </div>
                    <div style="padding-top: 35vh; padding-left: 3vw">
                        @foreach($data['abilities'] as $index => $skill)
                            <div style=" display: flex; padding-bottom: 25px">
                                <img style="height: 90px; width: auto;"src="{{$skill['displayIcon']}}" alt="">
                                <div style="width: 60vw; padding-left: 20px">
                                    <span class="badge bg-secondary">{{$skill['displayName']}}</span >
                                    <div>{{$skill['description']}}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif
        @endforeach
    </div>
</body>
</html>
@endsection

@section('scripts')
    <script>
        new fullScroll({
            // parent container
            container : 'main',
            // content section
            sections : 'section',
            // animation speed
            animateTime : 0.7,
            // easing for animation
            animateFunction : 'ease',
            // current position
            currentPosition: 0,
            // display dots navigation
            displayDots: true,
            // where to place the dots navigation
            dotsPosition: 'right',

            mainElement: 'main',
        });
    </script>
@endsection