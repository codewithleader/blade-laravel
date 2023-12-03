<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  {{-- Cargar recursos estaticos con asset() --}}
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>

  {{-- Variable para agregar otros estilos --}}
  @yield('style')

  <title>@yield('title')</title>
</head>
<body>
  @include('layouts._partials.menu')
  @yield('content')

  {{-- Variable para agregar un script personalizado --}}
  @yield('script')
</body>
</html>