<?php
// sidebar.php
?>
<aside class="w-64 h-screen bg-gray-800 text-white p-4 fixed top-0 left-0">
    <h2 class="text-2xl font-bold">Menu</h2>
    <ul class="mt-4 space-y-4">
        <li><a href="produits.php" class="<?= ($page == 'produits') ? 'text-teal-600' : '' ?>">Produits</a></li>
        <li><a href="entrees.php" class="<?= ($page == 'entrees') ? 'text-teal-600' : '' ?>">Entrées</a></li>
        <li><a href="sorties.php" class="<?= ($page == 'sorties') ? 'text-teal-600' : '' ?>">Sorties</a></li>
        <!-- Ajoute d'autres liens de menu ici -->
    </ul>
</aside>