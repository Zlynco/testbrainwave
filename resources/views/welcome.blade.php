<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>E-Online</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="bg-white text-gray-800">
    <header class="flex flex-wrap justify-between items-center p-4 md:p-6">
        <div class="text-2xl font-bold">E-Online.</div>
        <nav class="space-x-4 text-center md:space-x-6">
            <a class="text-gray-600 hover:text-gray-900" href="#">Home</a>
            <a class="text-gray-600 hover:text-gray-900" href="#">Category</a>
            <a class="text-gray-600 hover:text-gray-900" href="#">Courses</a>
            <a class="text-gray-600 hover:text-gray-900" href="#">Blog</a>
        </nav>
        <button class="mt-4 md:mt-0 bg-purple-500 text-white px-4 py-2 rounded-full hover:bg-purple-600">Sign Up</button>
    </header>
    <main class="px-4 py-8 md:px-6 md:py-12">
        <section class="text-center md:text-left md:flex md:items-center md:justify-between">
            <div class="md:w-1/2">
                <h1 class="text-3xl md:text-5xl font-black leading-tight">
                    Investing in
                    <br />
                    Knowledge and
                    <br />
                    <span class="text-orange-500">Your Future</span>
                </h1>
                <p class="mt-4 text-gray-600">
                    Our e-learning programs have been developed to deliver multimedia learning solutions for your business.
                </p>
                <div class="mt-6 flex flex-wrap justify-center md:justify-start items-center space-x-4">
                    <button class="bg-purple-500 text-white px-6 py-2 rounded-full hover:bg-purple-600">Contact</button>
                    <div class="text-center">
                        <div class="text-2xl font-bold">50+</div>
                        <div class="text-gray-600">Career Courses</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold">1M+</div>
                        <div class="text-gray-600">Our Students</div>
                    </div>
                </div>
            </div>
            <div class="mt-8 md:mt-0 md:w-1/2 relative">
                <img
                    alt="A student holding books and a backpack, with a learning chart in the background"
                    class="rounded-lg shadow-lg w-full h-auto"
                    src="https://storage.googleapis.com/a1aa/image/V1FSIx6gbDJrKh97Ksavuf4v798UT1ze98NYNia3om3DQiHUA.jpg"
                />
                <div class="absolute top-4 left-4 bg-white p-2 rounded-lg shadow-lg">
                    <div class="text-sm text-gray-600">175K</div>
                    <div class="text-xs text-gray-500">Assisted Students</div>
                </div>
                <div class="absolute bottom-4 right-4 bg-white p-2 rounded-lg shadow-lg">
                    <div class="text-sm text-gray-600">Learning Chart</div>
                    <img
                        alt="A bar chart showing learning progress"
                        class="mt-2"
                        src="https://storage.googleapis.com/a1aa/image/jilCL22sj7LrCRQ09yBe6clh78ewPmHIe19wBePWRG4JAJegC.jpg"
                        width="80"
                    />
                </div>
            </div>
        </section>
        <section class="mt-16">
            <h2 class="text-3xl font-bold text-center md:text-left">Browse Top Essential Career Courses</h2>
            <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-pink-100 p-6 rounded-lg text-center">
                    <i class="fas fa-paint-brush text-4xl text-pink-500"></i>
                    <h3 class="mt-4 text-xl font-bold">UI/UX Design</h3>
                </div>
                <div class="bg-purple-100 p-6 rounded-lg text-center">
                    <i class="fas fa-code text-4xl text-purple-500"></i>
                    <h3 class="mt-4 text-xl font-bold">Web Development</h3>
                </div>
                <div class="bg-blue-100 p-6 rounded-lg text-center">
                    <i class="fas fa-bullhorn text-4xl text-blue-500"></i>
                    <h3 class="mt-4 text-xl font-bold">Digital Marketing</h3>
                </div>
                <div class="bg-orange-100 p-6 rounded-lg text-center">
                    <i class="fas fa-chalkboard-teacher text-4xl text-orange-500"></i>
                    <h3 class="mt-4 text-xl font-bold">Practical Learning</h3>
                </div>
            </div>
            <div class="mt-8 text-center">
                <button class="bg-purple-500 text-white px-6 py-2 rounded-full hover:bg-purple-600">Browse All</button>
            </div>
        </section>
        <section class="mt-16">
            <h2 class="text-3xl font-bold text-center">Pricing Plans</h2>
            <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div class="bg-white border rounded-lg shadow-lg p-6 text-center">
                    <h3 class="text-xl font-bold">Basic Plan</h3>
                    <p class="text-gray-600 mt-2">Access to basic courses</p>
                    <p class="text-2xl font-bold mt-4">$10/month</p>
                    <button class="mt-4 bg-purple-500 text-white px-4 py-2 rounded-full hover:bg-purple-600">Choose Plan</button>
                </div>
                <div class="bg-white border rounded-lg shadow-lg p-6 text-center">
                    <h3 class="text-xl font-bold">Pro Plan</h3>
                    <p class="text-gray-600 mt-2">Access to all courses</p>
                    <p class="text-2xl font-bold mt-4">$20/month</p>
                    <button class="mt-4 bg-purple-500 text-white px-4 py-2 rounded-full hover:bg-purple-600">Choose Plan</button>
                </div>
                <div class="bg-white border rounded-lg shadow-lg p-6 text-center">
                    <h3 class="text-xl font-bold">Premium Plan</h3>
                    <p class="text-gray-600 mt-2">Access to all courses + personal mentorship</p>
                    <p class="text-2xl font-bold mt-4">$30/month</p>
                    <button class="mt-4 bg-purple-500 text-white px-4 py-2 rounded-full hover:bg-purple-600">Choose Plan</button>
                </div>
            </div>
        </section>
    </main>
</body>
</html>