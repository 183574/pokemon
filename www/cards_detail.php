<?php
session_start();

require 'database.php';

if (isset($_GET['id'])) {
    $card_id = $_GET['id'];
    $sql = "SELECT * FROM Cards WHERE card_id = $card_id";
    $result = mysqli_query($conn, $sql);
    $card = mysqli_fetch_assoc($result);
}
require 'header.php';
?>

<main class="flex justify-center items-center min-h-screen bg-gradient-to-r from-purple-400 via-pink-500 to-red-500">
    <div class="container mx-auto p-8 bg-white shadow-lg rounded-lg max-w-4xl">
        <?php if (isset($card)) : ?>
            <div class="product-detail space-y-6">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/2">
                        <img src="<?php echo isset($card['image']) ? 'images/' . $card['image'] : 'https://placehold.co/200' ?>" alt="<?php echo $card['name'] ?>" class="w-full h-auto rounded-lg shadow-md">
                    </div>
                    <div class="md:w-1/2 md:pl-8">
                        <h3 class="text-3xl font-bold text-gray-900"><?php echo $card['name'] ?></h3>
                        <p class="text-lg text-gray-700"><?php echo $card['type'] ?></p>
                        <p class="text-lg text-gray-700"><?php echo $card['rarity'] ?></p>
                        <p class="text-2xl text-gray-900 font-semibold">€ <?php echo number_format($card['price'] / 100, 2, ',', '') ?></p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</main>
<?php require 'footer.php' ?>