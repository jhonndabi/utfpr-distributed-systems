<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Controle de despesas - @yield('title')</title>

  <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    @include('partials._navbar')

    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @yield('content')
                </div>
            </div>
        </div>

        @include('partials._footer')
    </div>
</body>

</html>
