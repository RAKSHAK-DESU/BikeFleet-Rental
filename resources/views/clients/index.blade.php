<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Bikes | BikeFleet CMS</title>
    @vite(['resources/css/app.css']) 
</head>
<body class="bg-gray-900 text-white">
    <div class="flex flex-col items-center justify-center min-h-screen px-4">
        <h1 class="text-4xl font-bold text-blue-400 mb-8">All Available Bikes</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-full max-w-6xl">
            @foreach ($clients as $client)
    <a href="/clients/{{ $client['id'] }}" class="bg-gray-800 rounded-xl shadow-md hover:shadow-blue-400 transition duration-300 p-4 flex flex-col items-center">
        <img src="{{ '/images/bike' . $client['id'] . '.jpg' }}" alt="Bike Image" class="w-full h-full object-cover rounded-lg mb-4 border border-blue-300">
        <h2 class="text-2xl font-semibold text-white mb-2">{{ $client['name'] }}</h2>
        <p class="text-yellow-400 text-lg">₹{{ $client['price'] }}/day</p>
    </a>
@endforeach

        </div>
    </div>
</body>
</html>

<!-- <html lang="en">

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
 -->