<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bikes Rental Home Page</title>
    @vite(['resources/css/app.css']) 
</head>
<body>
    <div class="bg-gray-800 text-white flex flex-col items-center justify-center min-h-screen">
        <div>
            <h1 class="text-3xl font-bold mb-4">All Bikes</h1>
        </div>
        
        <ul class="space-y-2">
            @foreach ($clients as $client )
                <li>
                    <a href="/clients/{{ $client['id'] }}" class="text-white hover:underline">
                        {{ $client['name'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
