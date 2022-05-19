<?php
$title = "Page d'accueil";
$nav = "index";
require 'header.php'; ?>
<main>
    <h1>Get started with Bootstrap</h1>
    <p class="fs-5 col-md-8">Quickly and easily get started with Bootstrap's compiled, production-ready files with this
        barebones example featuring some basic HTML and helpful links. Download all our examples to get started.</p>
    <?php require 'tableau.php'; ?> <br>


    <form action="action.php" method="post">
        <label>Nom : <input type="text" name="Nom"></label><br>
        <label>Prix : <input type="text" name="Prix"></label><br>
        <label>Image : <input type="url" name="Image"></label><br>
        <label>Discount : <input type="checkbox" name="Discount"></label><br>
        <input type="submit" value="ADD">
    </form>

    <?php require 'footer.php'; ?>
