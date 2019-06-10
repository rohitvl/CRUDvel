<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Post - <?php echo $post->title; ?></title>
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
        <a href="{{route('posts.create')}}" class="btn btn-info mt-2 mr-3">Create Post</a>
        <a href="{{route('posts.index')}}" class="btn btn-info mt-2 mr-3">See All Post</a>
        <a href="/" class="btn btn-info mt-2">Home</a>
        </div>

        <h1 class="text-center mt-5 text-primary">See The Post</h1>
        <div class="border border-radius mt-3 p-3 bg-dark text-white text-center">
              {{$post->title}}
        </div>
        <div class="text-center mt-3">
        <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary px-5">Edit Post</a>
        </div>
      </div>



  </body>
</html>
