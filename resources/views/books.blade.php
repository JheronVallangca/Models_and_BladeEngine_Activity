<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Book List</title>
</head>

<body>
    <table class="table-auto border-separate border-spacing-2 border " >
        <thead>
          <tr>
            <th>ID</th>
            <th>ISBN</th>
            <th>TITLE</th>
            <th>AUTHOR</th>
            <th>DESCRIPTION</th>
            <th>DATE PUBLISHED</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                  <td>{{ $book->id }}</td>
                  <td>{{ $book->isbn }}</td>         
                  <td>{{ $book->title }}</td>
                  <td>{{ $book->author }}</td>   
                  <td>{{ $book->description }}</td>
                  <td>{{ $book->date_published}}</td>         
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>