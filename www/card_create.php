<?php
session_start();

require 'database.php';
require 'header.php';

?>

<main>
    <div class="container">
        <form action="card_create_process.php" method="post" enctype="multipart/form-data">
        <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500">
            </div>
            <div>
                <label for="type" class="block text-lg font-semibold text-gray-800">Type:</label>
                <input type="text" id="type" name="type" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500">
            </div>
            <div>
                <label for="rarity" class="block text-lg font-semibold text-gray-800">Rarity:</label>
                <input type="text" id="rarity" name="rarity" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500">
            </div>
            <div>
                <label for="price" class="block text-lg font-semibold text-gray-800">Price:</label>
                <input type="number" id="price" name="price" step="0.01" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500">
            </div>
            <div>
                <label for="image" class="block text-lg font-semibold text-gray-800">Image:</label>
                <input type="file" id="image" name="image" class="mt-1 block w-full text-sm text-gray-600">
            </div>
            <div>
                <input type="submit" value="Add Pokemon" class="w-full py-3 px-4 border border-transparent rounded-lg shadow-sm text-lg font-semibold text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
            </div> type="submit" value="Add Pokemon">
        </form>
    </div>
</main>
<?php require 'footer.php' ?>