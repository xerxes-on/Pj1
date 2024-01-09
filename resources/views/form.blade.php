<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
    <div class="container d-flex align-items-center justify-content-center flex-column vh-100 vw-100">
        <form action="/submit" method="post">
            @csrf
            @for($i = 1; $i<=$products; $i++)
                <div class="input-group mb-3 d-flex  border p-2" style="width: 80vw">
                    
                    <span class="input-group-text" >Product {{$i}}:</span>
                    <input type="text" class="form-control" name="product{{$i}}_name">
                    
                    <span class="input-group-text" style="margin-left: 8px">Quantity:</span>
                    <input type="number" class="form-control" name="quantity{{$i}}">
               
                    <input type="number" class="form-control" style="margin-left: 8px" name="price{{$i}}">
                    <span class="input-group-text">sum</span>
    
                </div>
            @endfor
            <input type="submit">
        </form>
    </div>
</body>
</html>