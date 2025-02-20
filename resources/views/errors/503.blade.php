<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Coming Soon</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    <style>
        .img{
            width: 40%;
            height: auto;
            object-fit: contain;
        }
    </style>
</head>
<body class="font-[Poppins] bg-white h-screen flex items-center justify-center p-4">
    <div class="text-center max-w-lg mx-auto flex flex-col items-center">
        <img src="{{ asset('assets/images/error.jpg') }}" alt="Error Image" class="img ">
        <a href="{{ url('/') }}" class="text-center mt-6 inline-block bg-blue-500 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-blue-600 transition duration-300">Go Home</a>
    </div>
</body>
</html>