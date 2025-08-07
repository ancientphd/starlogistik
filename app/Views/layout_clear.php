<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'StarLogistic' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="asset/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="asset/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="asset/css/style.css" rel="stylesheet">
</head>
<body>

    <?= $this->renderSection('content') ?>

    <!-- JS Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('asset/lib/wow/wow.min.js') ?>"></script>
    <script src="<?= base_url('asset/lib/easing/easing.min.js') ?>"></script>
    <script src="<?= base_url('asset/lib/waypoints/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('asset/lib/counterup/counterup.min.js') ?>"></script>
    <script src="<?= base_url('asset/lib/owlcarousel/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('asset/lib/tempusdominus/js/moment.min.js') ?>"></script>
    <script src="<?= base_url('asset/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') ?>"></script>

    <!-- Main JS -->
    <script src="<?= base_url('asset/js/main.js') ?>"></script>
</body>
</html>
