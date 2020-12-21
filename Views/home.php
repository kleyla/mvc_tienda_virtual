<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["tag_name"] ?></title>
</head>

<body>
    <?php dep($data) ?>
    <section id="<?php echo $data["page_name"] ?>">
        <h1><?php echo $data["page_title"] ?></h1>
        <p><?php echo $data["page_content"] ?></p>
    </section>
    <?php echo formatMoney(52500623.566); ?>
</body>

</html>