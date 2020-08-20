<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/website.css">

   
</head>
<body>
    <div id="app">      
        <div class="container mt-2">
            <h1>Create a new special deal</h1>

            <div class="row">
                <div class="col-md-12">
                <form method="post" action="/admin/specials/{{$special->id}}">
                        @method('patch')
                        @csrf
                        
                        <div class="form-group">
                            <label for="name">Name:</label>
                        <input value="{{$special->name}}" type="text" class="form-control" id="name" placeholder="Enter the item's name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Brand:</label>
                            <input type="text" class="form-control" id="brand" placeholder="Enter the item's brand" name="brand" required>
                        </div>
    
                        <div class="form-group">
                            <label for="email">Description:</label>
                        <textarea class="form-control" id="email" placeholder="Enter the item's description" name="description" required>{{$special->description}}</textarea>    
                        </div>

                        <div class="form-group">
                            <label for="message">Old price:</label>
                            <input value="{{$special->was_price}}" step="0.01" type="number" class="form-control" id="was_price" placeholder="Please enter the old price" name="was_price" required>
                        </div>

                        <div class="form-group">
                            <label for="message">New price:</label>
                            <input value="{{$special->current_price}}" step="0.01" type="number" class="form-control" id="current_price" placeholder="Please enter the current price" name="current_price" required>
                        </div>
                        <a href="/admin/specials" class="btn btn-default">Go back</a>
                        <button type="submit" class="btn btn-primary">Update item</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
     <!-- JS, Popper.js, and jQuery -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
     <script src="/js/website.js"></script>
</body>
</html>