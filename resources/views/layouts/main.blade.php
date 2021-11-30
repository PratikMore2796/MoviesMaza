<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Movie Maza </title>
    <livewire:styles />
    <link rel="shortcut icon" href="./img/app_icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
<style>
    button{background-color: orange;
    border-radius: 50px 50px;
    padding: 20px;}
    button:hover{
        background-color: darkorange;
        transition: ease-in-out;
        transition-duration: 150ms;
    }
</style>
</head>
<body class="font-sans text-white" style="background-color: #000000">
    <nav>
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-8 p-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{route('movies.index')}}">
                        <img src="./img/app_icon.jpg" style="max-width: 70px; max-height: 70px" >
                        <h1 style="text-align: center">MovieMaza</h1>
                    </a>
                </li>

            </ul>
            <div class="flex flex-col md:flex-row items-center" >
                    <input type="text" style="background-color: #000000;" class=" focus:shadow-outlinerounded-full w-64 px-4 pl-8 py-1" disabled >
                    <div class="absolute text-sm rounded w-64 mt-4" style="background-color: #000000;">
                        <livewire:search-dropdown></livewire:search-dropdown>
                    </div>

            </div>
        </div>
    </nav>
    @yield('content')
    <livewire:scripts />
</body>
</html>
