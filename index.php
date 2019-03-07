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
        	<?php for ($i=0; $i <6 ; $i++) {?>
	        	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	        		<div class="product-item">
	        			<a class="over" href="#">
		        			<div class="product-images">
		        				<img src="https://dummyimage.com/370x250/d9d9d9/fff" alt="Vinhomes Graden Mỹ Đình">
		        			</div>
		        			<div class="product-caption">
		        				<h4>Vinhomes Graden Mỹ Đình</h4>
		        				<div class="pr-add">Mỹ Đình, Hà Nội</div>
		        				<ul class="list-pro">
		        					<li>Hạ tầng</li>
		        					<li>Tiện ích</li>
		        					<li>Chủ đầu tư</li>
		        				</ul>
		        			</div>
	        			</a>
	        		</div>
	        	</div>
        	
			<?php }?>
        </div>


    </div><!-- /#contents -->
    <?php include "./templates/footer.php"; ?>
</body>
</html>