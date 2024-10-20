<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <style>
        body {
            transition: background-color 0.3s, color 0.3s; /* Smooth transition */
            background-color: #ffffff; /* Light mode background */
            color: #000; /* Light mode text color */
            font-family: Arial, sans-serif; /* Added font for better appearance */
            margin: 0;
            padding: 0;
        }

        body.dark-mode {
            background-color: #000; /* Dark mode background */
            color: #fff; /* Dark mode text color */
        }

        body.dark-mode header {
            background-color: #000; /* Dark mode navbar background */
        }

        h2 {
            margin: 0;
        }

        /* Navbar list */
        ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        ul li {
            margin: 0 15px;
        }

        ul li a {
            text-decoration: none;
            color: inherit;
            transition: color 0.3s; /* Smooth transition for text color */
        }

        body.dark-mode ul li a {
            color: #fff; /* Dark mode text color for navbar links */
        }

        /* Optional: Style for the toggle button */
        .mode-toggle button {
            cursor: pointer;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #000; /* Light mode button background */
            color: #fff; /* Light mode button text color */
            transition: background-color 0.3s, color 0.3s;
            border-radius: 20px
        }

        body.dark-mode .mode-toggle button {
            background-color: #fff; /* Dark mode button background */
            color: #000; /* Dark mode button text color */
        }

        .mode-toggle button:hover {
            background-color: #333; /* Darker background on hover for better visibility */
        }

        body.dark-mode .mobile-menu {
            background-color: black;
            color: #ffffff;
        }
    </style>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="">
        {{-- Navbar --}}
        <header class="flex justify-between items-center py-5 px-20 bg-[#ffffff] relative transition-colors duration-300">
            <div>
                <h2>Rachael Adebisi</h2>
            </div> 
            <nav class="flex items-center" id="navbar">
                {{-- Nav list --}}
                <ul id="nav-list">
                    <li><a href="{{ route('blog.index') }}">Blog</a></li>
                    <li><a href="/">Projects</a></li>
                    <li><a href="{{ route('about')}}">About</a></li>
                    <li><a href="/">Newsletter</a></li>
                </ul>
                {{-- Dark and Light mode --}}
                <div class="mode-toggle">
                    <button id="dark-mode-toggle">🌙 Dark Mode</button>
                </div>
            </nav>
        </header>
        <div>
            @yield('content')
        </div>
        <div>
            @include('layouts.footer')
        </div>
    </div>

    <script>
        // Get the button and the body element
        const toggleButton = document.getElementById('dark-mode-toggle');
        const body = document.body;

        // Check for saved user preference for dark mode in localStorage
        if (localStorage.getItem('theme') === 'dark') {
            body.classList.add('dark-mode'); // Set dark mode
            toggleButton.textContent = '🌕 Light Mode'; // Change button text
        }

        // Add event listener for dark mode toggle button
        function toggleDarkMode() {
            body.classList.toggle('dark-mode');

            // Update button text based on the current theme
            if (body.classList.contains('dark-mode')) {
                toggleButton.textContent = '🌕 Light Mode'; // Change to light mode
                localStorage.setItem('theme', 'dark'); // Save preference
            } else {
                toggleButton.textContent = '🌙 Dark Mode'; // Change to dark mode
                localStorage.setItem('theme', 'light'); // Save preference
            }
        }

        // Add event listener for button click
        toggleButton.addEventListener('click', toggleDarkMode);
    </script>
</body>
</html>
