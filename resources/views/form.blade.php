<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="/booking" method="POST">
    @csrf
    <label for="./" placeholer="Name : "></label>
    <input type="text" id="name">

    <label for="./" placeholder="Email : "></label>
    <input type="email" id="email">

    <input type="submit"/>
  </form>
</body>
</html>