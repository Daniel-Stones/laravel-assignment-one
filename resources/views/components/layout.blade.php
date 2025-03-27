<!DOCTYPE html>
<html>
  <head>
    <title>{{$title}}</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" />
  </head>

  <body>
    <nav class="navbar">
      <ul>
        <li><a href="/bands">Home</a></li>
        <li><a href="/bands/create">Add new band</a></li>
        <li><a href="/bands/about">About</a></li>
      </ul>
    </nav>

    <main>
      {{$slot}}
    </main>
  </body>
</html>
