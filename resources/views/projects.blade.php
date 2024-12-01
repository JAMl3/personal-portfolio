<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jamie Miller - Projects</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="antialiased bg-gray-50 dark:bg-gray-900">
    <!-- Navigation -->
    <nav class="bg-white dark:bg-gray-800 shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-gray-900 dark:text-white">mill3r.dev</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#about" class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white px-3 py-2">About</a>
                    <a href="#projects" class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white px-3 py-2">Projects</a>
                    <div class="flex items-center space-x-4">
                        <a href="https://github.com/JAML3" target="_blank" class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/jamie-miller-1b8b5522b/" target="_blank" class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section with About Me -->
    <section id="about" class="pt-24 pb-12 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl p-8 md:p-12">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div class="space-y-6">
                        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white">
                            Hi, I'm Jamie Miller
                        </h1>
                        <p class="text-xl text-gray-600 dark:text-gray-300">
                            A passionate developer specializing in Python automation, web development, and creating innovative web applications. I love turning complex problems into elegant solutions.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#projects" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition duration-300">
                                View Projects
                            </a>
                            <a href="mailto:jamie@mill3r.dev" class="bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-800 dark:text-white px-6 py-3 rounded-lg font-medium transition duration-300">
                                Contact Me
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <div class="relative">
                            <div class="absolute inset-0 bg-blue-500 rounded-full opacity-10 blur-xl"></div>
                            <img src="images/profile/your-profile-image.jpg" alt="Jamie Miller" class="relative rounded-full w-64 h-64 object-cover shadow-xl">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects -->
    <section id="projects" class="py-12 px-4">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Featured Projects</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Featured Project Card 1 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl overflow-hidden transition duration-300 hover:transform hover:scale-105">
                    <div class="relative">
                        <img src="images/projects/project1.png" alt="Project 1" class="w-full h-48 object-cover">
                        <div class="absolute top-0 right-0 p-4 space-x-2">
                            <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm">Laravel</span>
                            <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm">Web App</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Morris Pizza</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            A website for a takeaway restaurant that allows customers to view the menu, order takeaway, and pay online.
                            Admin dashboard for managing orders and inventory.
                        </p>
                        <div class="flex justify-between items-center">
                            <div class="space-x-4">
                                <a href="https://github.com/JAMl3/MorrisPizza" class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">
                                    <i class="fab fa-github"></i> View Code
                                </a>
                                <a href="#" class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">
                                    <i class="fas fa-external-link-alt"></i> Live Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Featured Project Card 2 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl overflow-hidden transition duration-300 hover:transform hover:scale-105">
                    <div class="relative">
                        <img src="images/projects/project2.png" alt="Project 2" class="w-full h-48 object-cover">
                        <div class="absolute top-0 right-0 p-4 space-x-2">
                            <span class="bg-yellow-500 text-white px-3 py-1 rounded-full text-sm">Python</span>
                            <span class="bg-purple-500 text-white px-3 py-1 rounded-full text-sm">Pandas</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">iSeries DB Query Tool</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            A tool for querying iSeries DB2 databases using Python, pandas, and the iSeries ODBC driver.
                            GUI built with Tkinter.
                        </p>
                        <div class="flex justify-between items-center">
                            <div class="space-x-4">
                                <a href="https://github.com/JAMl3/iSQT" class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">
                                    <i class="fab fa-github"></i> View Code
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl overflow-hidden transition duration-300 hover:transform hover:scale-105">
                    <div class="relative">
                        <img src="images/projects/project2.png" alt="Project 2" class="w-full h-48 object-cover">
                        <div class="absolute top-0 right-0 p-4 space-x-2">
                            <span class="bg-yellow-500 text-white px-3 py-1 rounded-full text-sm">Python</span>
                            <span class="bg-purple-500 text-white px-3 py-1 rounded-full text-sm">Pandas</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">TimeTrack</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Clocking system for employees to clock in and out. Allows HR to have full dashboard view of all employees and timesheets.
                            managers can track and approve time off requests.
                        </p>
                        <div class="flex justify-between items-center">
                            <div class="space-x-4">
                                <a href="https://github.com/JAMl3/iSQT" class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">
                                    <i class="fab fa-github"></i> View Code
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-12 px-4 bg-gray-100 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Skills & Technologies</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md text-center">
                    <i class="fab fa-python text-4xl text-blue-500 mb-4"></i>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Python</h3>
                </div>
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md text-center">
                    <i class="fab fa-js text-4xl text-yellow-500 mb-4"></i>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">JavaScript</h3>
                </div>
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md text-center">
                    <i class="fab fa-react text-4xl text-blue-400 mb-4"></i>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">React</h3>
                </div>
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md text-center">
                    <i class="fab fa-laravel text-4xl text-red-500 mb-4"></i>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Laravel</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white dark:bg-gray-800 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-center md:text-left mb-4 md:mb-0">
                    <p class="text-gray-600 dark:text-gray-300">&copy; 2024 Jamie Miller. All rights reserved.</p>
                </div>
                <div class="flex space-x-6">
                    <a href="https://github.com/JAML3" target="_blank" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="https://linkedin.com/in/yourusername" target="_blank" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                        <i class="fab fa-linkedin text-xl"></i>
                    </a>
                    <a href="mailto:jamie@mill3r.dev" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                        <i class="fas fa-envelope text-xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Dark mode toggle script -->
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</body>
</html> 