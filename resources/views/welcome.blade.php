<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zangar</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="/css/quiz.css">

        
    </head>
    <body>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif --}}
                    @endauth
                </div>
            @endif

            <div class="left">
                <h3>Zangar<span>-M</span></h3>
                <h2>Welcome to the</h2>
                <h1>Zangar <span>Quiz</span></h1>
                <p>You are required to attach an email address 
                    and password to the "login" before entering the quiz
                </p>
                <div>
                    <button class="more">LEARN MORE <i class="fa-solid fa-chevron-right"></i></button>
                    <i class="fa-regular fa-circle-play fa-2x"></i>
                </div>
            </div>
            <div class="right">
        
                <form action="login.php" method="post">
                    <h3>LOGIN NOW</h3>
                    <input type="email" name="email" required placeholder="Enter your email address">
                    <input type="password" name="password" required placeholder="Enter new password">
                    <input type="submit" name="submit" value="submit" class="form-btn">
                </form>
                
            </div>
        </div>
    </body>
</html>
