<?php
// index.php
$page = 'accueil'; // Page actuelle (définir la page)

$base_url = "";

include 'includes/header.php';
?>

<div class="w-full max-w-7xl bg-white shadow-lg rounded-xl p-8 mt-6">
    <h1 class="text-4xl font-semibold text-gray-900 mb-10 text-center uppercase tracking-wide">Accueil - Gestion de Stock</h1>
    <p class="text-center"></p>


    <div class="w-full max-w-7xl bg-white shadow-lg rounded-xl p-8 mt-6">
        <?php include 'includes/shortcuts.php'; ?>
    </div>

</div>

<?php
include 'includes/footer.php';
?>