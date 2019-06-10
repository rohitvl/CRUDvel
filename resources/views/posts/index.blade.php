<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Post</title>
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
          <a href="/" class="btn btn-info mt-2">Home</a>
          </div>


          <h1 class="text-center mt-5 text-primary">My Posts</h1>

           @foreach($myposts as $mypost)


                 <div class="border border-radius mt-3 p-3 bg-light text-dark">
                   <div>
                       <a href="{{route('posts.show', $mypost->id)}}" style="text-decoration: none;">{{$mypost->title}}</a>
                   </div>
                 </div>


            @endforeach



          <h1 class="text-center mt-5 text-primary">All the Posts</h1>

          <div class="mb-5">
            @foreach($posts as $post)

                  <div class="border border-radius mt-3 p-3 bg-light text-dark">
                    <div>
                        <a style="text-decoration: none;">{{$post->title}}</a>
                    </div>
                  </div>

            @endforeach
          </div>
    <div>


  </body>
</html>
