<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<header class="text-white text-center font-bold text-5xl ">
    <div class="p-10 border-b-2 border-gray-400 mb-5">
        <h1>Faker Book Store</h1>
    </div>
</header>

<body  class="bg-slate-900">
    @yield('content')
</body>

<footer class="text-white text-center text-2x1">
    <div class="p-10 border-t-2 border-gray-400 mt-5">
        <p>Copyrights reserve @Faker.com</p>
    </div>
</footer>
</html>