<html>
<head>
  <title>Lista de planetas</title>
</head>
<body>
  <h1>Lista de planetas</h1>
  <ul>
  @foreach($planets as $planet)
    <li>{{ $planet['name'] }}</li>
  @endforeach
  </ul>
</body>
</html>
