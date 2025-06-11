<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike Details | BikeFleet CMS</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-900 text-white">
    <div class="flex flex-col items-center justify-center min-h-screen">
        <h1 class="text-4xl font-bold mb-4 text-blue-400">BikeFleet CMS</h1>

        <div class="bg-gray-800 p-6 rounded-xl shadow-xl w-[90%] md:w-[500px] text-center">
            <img src="{{ $client['image'] }}" alt="Bike Image" class="w-full h-90 object-cover rounded-xl mb-4 border-2 border-blue-400">

            <h2 class="text-2xl bg-slate-500 text-white hover:bg-gray-900 px-5 py-2 rounded-xl shadow-md font-semibold">{{ $client['name'] }}</h2>
            <p class=" text-xl text-green-300 mb-2">{{ $client['age'] }}</p>
            <p class="text-xl bg-cyan-500 text-white hover:bg-cyan-600 px-4 py-2 rounded mb-4">Rental Price: ₹{{ $client['price'] }}/day</p>

            <a href="/clients" class="inline-block bg-emerald-500 hover:bg-emerald-700 px-4 py-2 rounded-xl text-white text-lg">⬅ Go Back</a>
        </div>
    </div>
</body>
</html>
