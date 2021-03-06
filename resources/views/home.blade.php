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

            @foreach($pages as $page)
            <li class="nav-item">
            <a class="nav-link" href="/page/{{$page->id}}">{{$page->name}}</a>
            </li>
            @endforeach
            <li class="nav-item">
                <a class="nav-link" href="/contact-us">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/specials">Add/Edit/Remove Special</a>
            </li>
        </ul>
    </nav>

    <div class="row">
        @foreach($specials as $special)
        <div class="col-md-3">
            <div style="text-align: center">
            <h4>{{$special->name}}</h4>
            <p>Was: ${{$special->was_price}}</p>
            <p>Now: ${{$special->current_price}}</p>
            <a href="/special/{{$special->id}}">Click to view the special item</a>
            </div>
        </div>
        @endforeach
    </div>

    <div>
        {{ $pageDetail->description}}
    </div>
</body>
</html>