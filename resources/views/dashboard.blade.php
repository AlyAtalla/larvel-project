<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Hello Laravel</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">Dashboard</h1>
        
        <!-- Example Grid Layout -->
        <div class="grid grid-cols-3 gap-4">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg p-6 shadow-md">
                <h2 class="text-xl font-semibold mb-4">Statistics</h2>
                <p class="text-gray-600">Display your website statistics here.</p>
            </div>
            
            <!-- Card 2 -->
            <div class="bg-white rounded-lg p-6 shadow-md">
                <h2 class="text-xl font-semibold mb-4">Recent Activities</h2>
                <p class="text-gray-600">Display recent activities of users or system events.</p>
            </div>
            
            <!-- Card 3 -->
            <div class="bg-white rounded-lg p-6 shadow-md">
                <h2 class="text-xl font-semibold mb-4">Notifications</h2>
                <p class="text-gray-600">Display notifications or alerts here.</p>
            </div>
        </div>
    </div>
</body>
</html>
