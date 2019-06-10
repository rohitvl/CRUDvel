<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Create Post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>


      <div class="container">

            <div class="jumbotron text-center text-info">
            <h2>You are logged in as : {{$user->name}}</h2>
            <a href="{{route('posts.index')}}" class="btn btn-info mt-2 mr-3">See All Post</a>
            <a href="/" class="btn btn-info mt-2">Home</a>
            </div>

            <h1 class="text-center mt-5">Create Post</h1>
            <form action="/posts" method="post">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="post" class="text-primary">Post Title:</label>
                  <input type="text" class="form-control" id="post" name="title">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Create Post</button>
            </form>


                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <h2 class="text-danger mt-3">
                            {{$error}}
                        </h2>
                    @endforeach
                @endif

      </div>




  </body>
</html>
