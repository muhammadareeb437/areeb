<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    
<form action="{{url('/updatedata')}}" method="post" class="text-center shadow w-50">
    <input type="hidden" name="id" value="{{$data[0]->id}}">
 @csrf
<input type="text" class="form-control" value="{{$data[0]->email}}" name="email">
<br>
<br>
<input type="text" class="form-control"  value="{{$data[0]->name}}" name="name">
<br>
<br>
<input type="text" class="form-control"  value="{{$data[0]->age}}" name="age" >
<br>
<br>
<input type="submit" class="btn btn-primary" value="submit">
</form>


</body>
</html>