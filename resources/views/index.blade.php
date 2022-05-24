<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Welcome To the Movie Database Rating System</title>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <!-- CSS only -->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>


  <section>
    <h1 class="text-center">Movie Database</h1>

    <!-- partial:index.partial.html -->
    <div class="container">
           @foreach($System as $s)
                <div class="item">
          <!-- <img src="{{$s->photo}}" class="img-fluid zoom" style="max-width:100%" alt="{{$s->title}}"> -->
                    @if($s->photo)
                      <img src="{{$s->photo}}" class="img-fluid zoom" style="max-width:100%" alt="{{$s->title}}">
                    @else
                        <img src="{{asset('media/thumbnail-default.jpg')}}" class="img-fluid zoom" style="max-width:100%" alt="{{$s->title}}">
                    @endif
                  <p>{{$s->title;}}</p>
                  <div class="col-12">
                     <span>{{$s->rating}}</span>
                     <span> /<!-- -->10</span>
                  </div>
                  <div class="col-12">
                     <span>Release Date</span>
                     <span> /<!-- -->{{$s->rdate}}</span>
                  </div>
                </div>
          @endforeach



    </div>
    <!-- partial -->

  </section>
  <br>
  <h2 class="text-center"><a href="{{route('Addnewmovie')}}">Add New Movie</a></h2>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
