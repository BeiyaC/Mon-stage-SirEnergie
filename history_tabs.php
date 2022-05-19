<?php

$articles = [
    "article1" =>
        [
            "Nom" => "Tenue de sport",
            "Prix" => 60,
            "Image" => '/Assets/tenue_de_sport.webp',
            "Discount" => true,

        ],

    "article2" =>
        [
            "Nom" => "Ballon",
            "Prix" => 15,
            "Image" => '/Assets/ballon.webp',
            "Discount" => false,

        ],

    "article3" =>
        [
            "Nom" => "Protège tibia",
            "Prix" => 18,
            "Image" => '/Assets/protege_tibia.webp',
            "Discount" => false,

        ],

    "article4" =>
        [
            "Nom" => "Crampon",
            "Prix" => 49,
            "Image" => '/Assets/crampon.webp',
            "Discount" => true,

        ],


];


<table>

    <tr>
        <th>Article</th>
        <th>Nom</th>
        <th>Prix</th>
        <th>Image</th>
        <th>Discount</th>
    </tr>
    <?php foreach ($articles as $key=>$article) : ?>
        <tr> </tr>
        <td><?php echo ($key); ?></td>
        <td><?php echo ($article["Nom"]); ?></td>
    <td><?php if ($article["Discount"] === true): ?> <p style="color:red;"> <?php echo ($article["Prix"] ."\n"); ?> </p><br> <?php $article["Prix"] = $article["Prix"] * (1 - 0.20) ; ?> <p style="color:green;"> <?php echo ($article["Prix"]); else: echo ($article["Prix"]); endif; ?> </p></td>
        <td> <img class="picture" src="<?php echo ($article["Image"]); ?>" alt="Picture" width="150" height="150"></td>
        <td><?php if ($article["Discount"] === true): echo ("oui") ; else: echo ("non"); endif; ?></td>
    <?php endforeach; ?>

</table>