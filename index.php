<?php $page = 'homepage'; include "./config/include.php"; ?>

<!-- *** stylesheet *** -->
<?php include "./templates/common_css.php"; ?>

<!-- *** javascript *** -->
<?php include "./templates/common_js.php"; ?>
</head>

<body id="<?php echo $page; ?>">
    <?php include "./templates/header.php"; ?>
    <div id="contents">
        <div class="main-container">
            <h1 class="header">Chào mừng bạn đã đến</h1>
        </div>
        <button type="button" class="btn btn-primary">button</button>

    </div><!-- /#contents -->
    <?php include "./templates/footer.php"; ?>
</body>

</html>