<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="utf-8">
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<nav class="navbar navbar-light" style="background-color: royalblue;">
 <h1 style="color: yellow">{{__('Air Quality')}}</h1>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/" style="color: #1a202c">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="cities/show" style="color: #1a202c">Cities</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="" style="color: #1a202c">Contacts</a>
        </li>
        <div class="container">
            <select class="form-select" aria-label="Default select example">
                <option selected>...</option>
                @foreach($city as $cities)
                <option value="1">{{ $cities->name }}</option>
                @endforeach
            </select>
        </div>
    </ul>
</nav>
@yield('content')
@section('footer')

{{--    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">--}}
{{--<div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-20">--}}
{{--                <div class="footer">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <div class="album py-5 bg-light">--}}
{{--                            <div class="col-md-20">--}}
{{--                                <div class="container">--}}
{{--                                    <div class="row">--}}
{{--                                        {{ config('mail.from.address') }}--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    </nav>--}}
{{--    @show--}}
{{--    </div>--}}
</body>
</html>
