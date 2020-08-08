<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/1.css">
    <link rel="stylesheet" href="fonts/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <script src="js/swiper-bundle.min.js"></script>
    <title>1</title>
</head>

<body>
    <?php @include '1-content.php' ?>
    <script>
    // setTimeout(showbox, 1000);
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        spaceBetween: 30,
        centeredSlides: true,
        // autoplay: {
        //     delay: 10000,
        //     disableOnInteraction: false,
        // },
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    </script>
</body>

</html>