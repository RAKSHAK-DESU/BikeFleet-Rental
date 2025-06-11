<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rakshak Code Lab</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-900 text-white">
    <div class="flex flex-col items-center justify-center min-h-screen">
        
        <h1 class="text-3xl bg-blue-500 p-3 rounded-xl mt-4">Bikes Details</h1>
        <h2 class="text-3xl bg-blue-500 p-3 rounded-xl mt-4">{{ $client['name'] }}</h2>
        <h2 class="text-3xl bg-blue-500 p-3 rounded-xl mt-4">{{ $client['price'] }}</h2>
        <h2 class="text-3xl bg-blue-500 p-3 rounded-xl mt-4">{{ $client['age'] }}</h2>
        <a href="/clients" class="text-3xl bg-red-500 p-3 rounded-xl mt-4">Go Back</a>
    </div>
</body>
</html>