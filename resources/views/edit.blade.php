<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>
<body>

    <form action="{{route('update',$data->id)}}" method="post">
        @csrf

        <div class="container">
        <div class="form-group">
          <label for="exampleInputfullname">fullname</label>
          <input type="text" class="form-control" id="exampleInputfullname" name="fullname" value="{{$data->fullname}}">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword" name="password" value="{{$data->password}}">
        </div>

        <div class="form-group">
            <label for="exampleInputemail">email</label>
            <input type="email" class="form-control" id="exampleInputemail" name="email" value="{{$data->email}}">
          </div>

          <div class="form-group">
            <label for="exampleInputmobileno">mobile no</label>
            <input type="number" class="form-control" id="exampleInputmobileno" name="mobileno" value="{{$data->mobileno}}">
          </div>

          <div class="form-group">
            <label for="exampleInputaddress">address</label>
            <input type="address" class="form-control" id="exampleInputaddress" name="address" value="{{$data->address}}">
          </div>

        <button type="submit" class="btn btn-primary">update</button>
        </div>
      </form>

</body>
</html>
