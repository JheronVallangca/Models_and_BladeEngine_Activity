<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<header>
    <div class="p-10 mb-5 text-white text-center font-bold text-5xl bg-gray-900 ">
        <h1>Faker Book Store</h1>
    </div>
</header>

<body  class="bg-slate-800">
    @yield('content')
</body>

<footer>
    <div class="p-10  mt-5 text-white text-center text-2x1 bg-gray-900">
        <p>Copyrights reserve @Faker.com</p>
    </div>
</footer>
</html>