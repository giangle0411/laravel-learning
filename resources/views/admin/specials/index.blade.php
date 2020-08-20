<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Home</h1>
   <!-- A grey horizontal navbar that becomes vertical on small screens -->
    <nav class="navbar navbar-expand-sm bg-light">
        <!-- Links -->
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="/">Go Back</a>
            </li>
        </ul>
    </nav>
    <div>
        <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Brand</th>
                <th>Description</th>
                <th>Was</th>
                <th>Now</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($specials as $special)
              <tr>
              <td>{{ $special->name}}</td>
              <td>{{$special->brand}}</td>
              <td>{{$special->description}}</td>
              <td>${{$special->was_price}}</td>
              <td>${{$special->current_price}}</td>
              <td>
                <a href="/admin/specials/{{ $special->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
              <form method="post" action="/admin/specials/{{$special->id}}">
                @method('delete')
                @csrf
                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
              </form>
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>

          <a href="/admin/specials/create" class="btn btn-primary">Add New Special Item</a>
    </div>
</body>
</html>