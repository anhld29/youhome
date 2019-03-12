<?php $page = 'chitiet-duan'; include "./config/include.php"; ?>

<!-- *** stylesheet *** -->
<?php include "./templates/common_css.php"; ?>

<!-- *** javascript *** -->
<?php include "./templates/common_js.php"; ?>
</head>

<body id="<?php echo $page; ?>">
    <?php include "./templates/header_no_search.php"; ?>
    <div id="contents">
    	<div class="page-detail">
    		<div class="box-images-detail">
    			<ul class="list-images-detail">
    				<li class="img-detail-lg">
    					<div class="box-img-iner">
    						<img src="images/img-detail01.png" alt="">
    					</div>
    				</li>
    				<li>
    					<div class="box-img-iner">
    						<img src="images/img-detail02.png" alt="">
    					</div>
    				</li>
    				<li>
    					<div class="box-img-iner">
    						<img src="images/img-detail03.png" alt="">
    					</div>
    				</li>
    				<li>
    					<div class="box-img-iner">
    						<img src="images/img-detail04.png" alt="">
    					</div>
    				</li>
    				<li>
    					<div class="box-img-iner">
    						<img src="images/img-detail05.png" alt="">
    					</div>
    				</li>    				    				    				    				
    			</ul>
    		</div>
    	</div>
    </div><!-- /#contents -->
    <?php include "./templates/footer.php"; ?>
</body>
</html>