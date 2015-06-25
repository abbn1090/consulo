<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8" />
    <title>Consulo 000</title>
    <link href="{{ asset('Semantic/dist/semantic.css') }}" rel="stylesheet">

    <style type="text/css">

        body{
            background: none repeat scroll 0% 0% #F7F7F7;
        }

        .wd{
            max-width: 1000px;
        }

        .ui.button.b_nb{
            padding: 0.7em;
            width: 6em;
        }

    </style>

</head>
<body>

<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
<script src="{{ URL::asset('Semantic/dist/jquery.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/sc.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('Semantic/dist/semantic.js') }}" type="text/javascript"></script>

 @yield('content')

	</body>
</html>
