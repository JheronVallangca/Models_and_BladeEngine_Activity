@extends('partials.layout')
  @section('content')
  <div class="container mx-auto">
    <table class="table-auto text-white font-serif " >
        <thead>
          <tr class="border-y-2 border-x-2 border-gray-400  bg-slate-700 h-20">
            <th >ID</th>
            <th>BOOK NUMBER</th>
            <th>BOOK TITLE</th>
            <th>AUTHOR</th>
            <th>DESCRIPTION</th>
            <th>DATE PUBLISHED</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr class="border-b-2 border-l-2 border-r-2 border-gray-500 bg-gray-700">  
                  <td class="px-7">{{ $book->id }}</td>
                  <td class="px-7">{{ $book->isbn }}</td>         
                  <td class="px-7">{{ $book->title }}</td>
                  <td class="px-8">{{ $book->author }}</td>   
                  <td class="px-40">{{ $book->description }}</td>
                  <td class="px-2">{{ $book->date_published}}</td>         
                </tr>
            @endforeach
        </tbody>
    </table>
  </div>
  @endsection
  