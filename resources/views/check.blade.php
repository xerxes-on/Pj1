<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="h-screen bg-gray-900 flex justify-center items-center flex-col">
        <div class=" w-1/3 h-4/5 bg-gray-100 flex flex-col justify-center items-center">
            @php
                $total = 0;
            @endphp
            @for($i = 1; $i<(count($allData) - 1)/3; $i++)
                @php
                    $totalHere = $allData['quantity' .$i] * $allData['price' .$i];
                    $total += $totalHere;
                @endphp
                <h3 class="text-center">
                    <span>{{$allData['product' .$i  . '_name']}} :</span>
                    <span>{{$allData['quantity' .$i]}} x </span>
                    <span>{{$allData['price' .$i]}} == {{number_format($totalHere)}} sum</span>
                    <br>
                </h3>
            @endfor
        </div>
        <h1 class="text-6xl text-white">Total: {{number_format($total)}}</h1>
    </div>

</body>
</html>