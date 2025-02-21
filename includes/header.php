<?php
// header.php
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Stock - BTP</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body class="bg-gray-100 min-h-screen p-8 font-montserrat">
    <nav class="w-full p-4 bg-transparent">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-gray-800 font-bold text-2xl">Gestion de Stock</div>

            <button class="lg:hidden text-gray-800" onclick="toggleMenu()">
                <i class="fa fa-bars text-2xl"></i>
            </button>

            <ul id="menu" class="lg:flex space-x-6 text-gray-800 hidden lg:block">
                <li><a href="pages/produits.php" class="<?= ($page == 'produits') ? 'text-teal-600' : 'hover:text-gray-500' ?>">Produits</a></li>
                <li><a href="pages/entrees.php" class="<?= ($page == 'entrees') ? 'text-teal-600' : 'hover:text-gray-500' ?>">Entrées</a></li>
                <li><a href="pages/sorties.php" class="<?= ($page == 'sorties') ? 'text-teal-600' : 'hover:text-gray-500' ?>">Sorties</a></li>
                <!-- Ajoute d'autres liens de menu ici -->
            </ul>

            <div class="flex items-center space-x-3 relative">
                <div class="w-10 h-10 rounded-full bg-gray-500 flex justify-center items-center text-white">
                    <i class="fa fa-user text-2xl"></i>
                </div>
                <div class="text-gray-800">
                    <p class="text-sm">Nom Prénom</p>
                    <p class="text-xs">Utilisateur</p>
                </div>
            </div>
        </div>
    </nav>