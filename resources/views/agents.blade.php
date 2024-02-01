<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/full-page-scroll.css') }}">
    <script src="{{ URL::asset('assets/js/full-page-scroll.js') }}"></script>
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
                        <div style="display: inline-block; align-self: flex-end">
                            <h1>{{$data['displayName']}}</h1>
                            <h1>{{$data['role']['displayName']}}</h1>
                            <h1>Developed by: {{$data['developerName']}}</h1>
                        </div>
                    </div>
                    <div>
                        <img src="{{$data['background']}}" alt="Base Image" style="position: absolute; left: 60vw;height: 540px; width: auto;">
                        <img src="{{$data["fullPortrait"]}}" alt="Overlay Image" style="position: absolute; left: 60vw;height: 540px;">
                    </div>
                </section>
            @endif
        @endforeach
    </div>
</body>
</html>

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
