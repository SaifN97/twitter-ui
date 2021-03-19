<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tailwind example -Twitter</title>

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body class="bg-grey-light font-sans">
    <div class="bg-white">
        <div class="container mx-8 flex items-center py-4">
            <nav class="w-2/5">
                <a href="#" class="top-nav-item"><i class="fa fa-home fa-lg"></i>Home</a>
                <a href="#" class="top-nav-item"><i class="fa fa-bolt fa-lg"></i>Moments</a>
                <a href="#" class="top-nav-item"><i class="fa fa-bell fa-lg"></i>Notifications</a>
                <a href="#" class="top-nav-item"><i class="fa fa-envelope fa-lg"></i>Messages</a>
            </nav>
            <div class="w-1/5 text-center"><a href="#"><i class="fa fa-twitter fa-lg text-blue"></i></a></div>
            <div class="w-2/5 flex justify-end">
                <div class="mr-4 relative">
                    <input type="text" class="bg-grey-lighter h-8 px-4 py-2 text-xs w-48 rounded-full"
                        placeholder="Search Twitter">
                    <span class="flex items-center absolute pin-r pin-y mr-3"><i
                            class="fa fa-search text-grey"></i></span>
                </div>
                <div class="mr-4">
                    <a href="#"><img src="/img/avatar.jpg" alt="avatar" class="h-8 w-8 rounded-full"></a>
                </div>
                <div>
                    <button
                        class="bg-teal hover:bg-teal-dark text-white font-medium py-2 px-4 rounded-full">Tweet</button>
                </div>
            </div>
        </div> {{-- End of the container --}}
    </div>

    <div class="hero h-64 bg-cover"></div>

    <div class="bg-white shadow">
        <div class="container mx-8 flex items-center">
            <div class="w-1/4">
                <img src="/img/tailwind_logo.jpg" alt="logo" class="rounded-full h-48 w-48 absolute pin-l -mt-32 mx-8">
            </div>
            <div class="w-1/2">
                <ul class="list-reset flex">
                    <li class="text-center py-3 px-4 border-b-2 border-solid border-teal">
                        <a href="#" class="text-grey-darker hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Tweets</div>
                            <div class="text-lg tracking-tight font-bold text-teal">60</div>
                        </a>
                    </li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
                        <a href="#" class="text-grey-darker hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Following</div>
                            <div class="text-lg tracking-tight font-bold hover:text-teal">4</div>
                        </a>
                    </li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
                        <a href="#" class="text-grey-darker hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Followers</div>
                            <div class="text-lg tracking-tight font-bold hover:text-teal">3,810</div>
                        </a>
                    </li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
                        <a href="#" class="text-grey-darker hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Likes</div>
                            <div class="text-lg tracking-tight font-bold hover:text-teal">9</div>
                        </a>
                    </li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
                        <a href="#" class="text-grey-darker hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Moments</div>
                            <div class="text-lg tracking-tight font-bold hover:text-teal">1</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="w-1/4 flex justify-end items-center">
                <div class="mr-6">
                    <button
                        class="bg-teal hover:bg-blue-dark text-white font-medium py-2 px-4 rounded-full">Following</button>
                </div>
                <div>
                    <a href="#" class="text-grey-dark"><i class="fa fa-ellipsis-v fa-lg"></i></a>
                </div>
            </div>
        </div>

</body>

</html>
