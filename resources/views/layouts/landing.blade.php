<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>@yield('title')</title>
  <style>
    ul {
      list-style: none;
      display: flex;
      gap: 5px;
      text-align: center;
    }

    li {
      padding: 10px 20px;
      border: 1px solid silver;
      border-radius: 8px;
    }

    a {
      color: rgb(12, 12, 12);
    }
  </style>
</head>
<body>
  @include('layouts._partials.menu')
  @yield('content')
</body>
</html>