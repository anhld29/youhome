<?php $page = 'copy'; include "../config/include.php"; ?>

<!-- *** stylesheet *** -->
<?php include "../templates/common_css.php"; ?>
<link href="../css/<?php echo $page; ?>.css" rel="stylesheet" type="text/css" media="all">

<!-- *** javascript *** -->
<?php include "../templates/common_js.php"; ?>
<script>
// readyEvent
$(function(){

	$w.on({
		//load
		'load' : function(){

		},
		//scroll
		'scroll' : function(){

		}
	}).superResize({
		//resize
		resizeAfter : function(){

		}
	}).firstLoad({
		//firstLoad
		pc_tab : function(){

		},
		sp : function(){

		}
	});
});
</script>
</head>

<body id="<?php echo $page; ?>">
<?php include "../templates/header.php"; ?>
<div id="contents">



</div><!-- /#contents -->
<?php include "../templates/footer.php"; ?>
</body>
</html>
