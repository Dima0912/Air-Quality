<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/csstyle.css">
{{--    <link rel=stylesheet" type="text/css" href="/css/style.css">--}}
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@yield('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="footer">
                <div class="col-md-12">
                    <div class="album py-5 bg-light">
                        <div class="col-md-20">
                            <div class="container">
                                <div class="row">
                                  {{ config('mail.from.address') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
