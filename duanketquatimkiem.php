<?php $page = 'project-page'; include "./config/include.php"; ?>

<!-- *** stylesheet *** -->
<?php include "./templates/common_css.php"; ?>

<!-- *** javascript *** -->
<?php include "./templates/common_js.php"; ?>
</head>

<body id="<?php echo $page; ?>">
    <?php include "./templates/header_login.php"; ?>
    <div id="contents">
		<div class="container project-page">
			<div class="topicpath view_pc-tab">
				<ul>
					<li><a href="#">Trang chủ</a></li>
					<li>Kết quả tìm kiếm</li>
					<li class="keyword"><a href="#">#chudautu</a></li>
				</ul>
			</div><!--/.topicpath-->
			<div class="box-filter-duan">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
						<h4>Bộ Lọc</h4>
						<div class="box-group-fillter">
							<div class="item-fillter">
								<select class="form-control">
		                            <option value="1">Chủ đầu tư</option>
		                            <option value="2">TP.HCM</option>
		                            <option value="3">An Giang</option>
		                            <option value="4">Hải Phòng</option>
		                            <option value="5">Đà Nẵng</option>
		                        </select>
	                        </div>
	                        <div class="item-fillter">
		                        <select class="form-control">
		                            <option value="1">Quận/huyện</option>
		                            <option value="2">TP.HCM</option>
		                            <option value="3">An Giang</option>
		                            <option value="4">Hải Phòng</option>
		                            <option value="5">Đà Nẵng</option>
		                        </select>
							</div>
	                        <div class="item-fillter">		                        
		                        <select class="form-control">
		                            <option value="1">Đường/phố</option>
		                            <option value="2">TP.HCM</option>
		                            <option value="3">An Giang</option>
		                            <option value="4">Hải Phòng</option>
		                            <option value="5">Đà Nẵng</option>
		                        </select>
		                    </div>
	                        <div class="item-fillter">    
		                        <select class="form-control">
		                            <option value="1">Loại hình phát triển</option>
		                            <option value="2">TP.HCM</option>
		                            <option value="3">An Giang</option>
		                            <option value="4">Hải Phòng</option>
		                            <option value="5">Đà Nẵng</option>
		                        </select>
		                    </div>
	                        <div class="item-fillter">    
		                        <select class="form-control">
		                            <option value="1">Phân khúc giá</option>
		                            <option value="2">TP.HCM</option>
		                            <option value="3">An Giang</option>
		                            <option value="4">Hải Phòng</option>
		                            <option value="5">Đà Nẵng</option>
		                        </select>
		                    </div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 pull-right">
						<h4>Sắp xếp theo</h4>
						<select class="form-control">
                            <option value="1">Giá</option>
                            <option value="2">A-Z</option>
                            <option value="3">Tên sản phẩm</option>
                        </select>
					</div>
				</div>				
			</div><!--/.box-filter-duan-->

			<div class="box-project-favorite">
				<ul class="list-project-favorite">
					<li class="item-pr">
		        		<div class="product-item">
		        			<div class="product-images">
		        				<div class="img-inner">
		        					<a href="#"><img src="images/product-du-an.png" alt="Vinhomes Graden Mỹ Đình"></a>
		        				</div>
		        				<div class="box-view-control">
		        					<div class="row">
		        						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-left">
		        							<img src="images/ic-view.png" alt="45 Đang xem"> 45 Đang xem
		        						</div>
		        						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
		        							<img src="images/ic-360.png" alt="45 Đang xem">
		        							<img src="images/ic-gallery.png" alt="Album ảnh">
		        							<img src="images/ic-favior.png" alt="Yêu thích">
		        						</div>
		        					</div>
		        				</div>
		        			</div>
		        			<div class="product-caption">
		        				<div class="row">
		        					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
		        						<h4>Vinhomes Graden Mỹ Đình</h4>
		        						<div class="pr-add"><i class="fa fa-map-marker"></i> Mỹ Đình, Hà Nội</div>
		        					</div>
		        					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-price text-right">
		        						Giá từ: <span>8.4 tỷ</span>
		        					</div>
		        				</div>
		        				
		        				<div class="pd-desc">Căn hộ của dự án đăng bán trên YouHomes</div>
		        				<ul class="list-utilities-list">
		        					<li>
		        						<div class="title">Số phòng ngủ</div>
		        						<div class="text">2 PN <i class="fa fa-angle-up"></i></div>
		        					</li>
		        					<li>
		        						<div class="title">Hướng ban công</div>
		        						<div class="text">Đông nam <i class="fa fa-angle-up"></i></div>
		        					</li>
		        					<li>
		        						<div class="title">Diện tích</div>
		        						<div class="text"><60m2 <i class="fa fa-angle-up"></i></div>
		        					</li>
		        					<li>
		        						<div class="title">Giá</div>
		        						<div class="text"><span class="text-primary">5,3 Tỷ</span></div>
		        					</li>
		        				</ul>

		        				<div class="box-price">
		        					<div class="row">
		        						<div class="col-xs-6 col-sm-5 col-md-6 col-lg-6 txt-comment">
		        							<i class="fa fa-calendar"></i>
		        							<i class="fa fa-comments"></i>
		        						</div>
		        						<div class="col-xs-6 col-sm-7 col-md-6 col-lg-6 text-right">
		        							<a href="#">CHI TIẾT DỰ ÁN</a>
		        						</div>
		        					</div>
		        				</div>
		        			</div>
		        		</div>						
					</li>
					<li class="item-pr">
		        		<div class="product-item">
		        			<div class="product-images">
		        				<div class="img-inner">
		        					<a href="#"><img src="images/product-du-an.png" alt="Vinhomes Graden Mỹ Đình"></a>
		        				</div>
		        				<div class="box-view-control">
		        					<div class="row">
		        						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-left">
		        							<img src="images/ic-view.png" alt="45 Đang xem"> 45 Đang xem
		        						</div>
		        						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
		        							<img src="images/ic-360.png" alt="45 Đang xem">
		        							<img src="images/ic-gallery.png" alt="Album ảnh">
		        							<img src="images/ic-favior.png" alt="Yêu thích">
		        						</div>
		        					</div>
		        				</div>
		        			</div>
		        			<div class="product-caption">
		        				<div class="row">
		        					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
		        						<h4>Vinhomes Graden Mỹ Đình</h4>
		        						<div class="pr-add"><i class="fa fa-map-marker"></i> Mỹ Đình, Hà Nội</div>
		        					</div>
		        					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-price text-right">
		        						Giá từ: <span>8.4 tỷ</span>
		        					</div>
		        				</div>
		        				
		        				<div class="pd-desc">Căn hộ của dự án đăng bán trên YouHomes</div>
		        				<ul class="list-utilities-list">
		        					<li>
		        						<div class="title">Số phòng ngủ</div>
		        						<div class="text">2 PN <i class="fa fa-angle-up"></i></div>
		        					</li>
		        					<li>
		        						<div class="title">Hướng ban công</div>
		        						<div class="text">Đông nam <i class="fa fa-angle-up"></i></div>
		        					</li>
		        					<li>
		        						<div class="title">Diện tích</div>
		        						<div class="text"><60m2 <i class="fa fa-angle-up"></i></div>
		        					</li>
		        					<li>
		        						<div class="title">Giá</div>
		        						<div class="text"><span class="text-primary">5,3 Tỷ</span></div>
		        					</li>
		        				</ul>

		        				<div class="box-price">
		        					<div class="row">
		        						<div class="col-xs-6 col-sm-5 col-md-6 col-lg-6 txt-comment">
		        							<i class="fa fa-calendar"></i>
		        							<i class="fa fa-comments"></i>
		        						</div>
		        						<div class="col-xs-6 col-sm-7 col-md-6 col-lg-6 text-right">
		        							<a href="#">CHI TIẾT DỰ ÁN</a>
		        						</div>
		        					</div>
		        				</div>
		        			</div>
		        		</div>						
					</li>					
				</ul>
				<div class="btn-view-more text-right"><a href="#">Xem thêm</a></div>
			</div>
						<div class="box-banner-youhome">
				<h3>Đơn giản hơn với YouHomes</h3>
				<ul class="list-giaiphap slider-one">
					<li>
						<div class="box-icon"><span><img src="images/icon-search.png" alt=""></span></div>
						<h4>Tìm kiếm và<br>chọn lọc</h4>
						<div class="txt-desc">
							<p>Danh sách được xác minh bởi chuyên gia You Homes</p>
							<button type="button" class="btn btn-default">Liên lạc</button>
						</div>
					</li>
					<li>
						<div class="box-icon"><span><img src="images/ic-appointment.png" alt="Đặt lịch xem nhà"></span></div>
						<h4>Đặt lịch xem nhà</h4>
						<div class="txt-desc">
							<p>Chuyên viên You Homes đưa bạn xem căn hộ thực tế cùng chủ nhà</p>
							<button type="button" class="btn btn-default">Đặt lịch hẹn</button>
						</div>
					</li>
					<li>
						<div class="box-icon"><span><img src="images/ic-pay.png" alt=""></span></div>
						<h4>Hỗ trợ vay<br>mua nhà</h4>
						<div class="txt-desc">
							<p>Thuận lợi vay mua nhà qua hệ thống ngân hàng liên kết với YouHomes</p>
							<button type="button" class="btn btn-default">Vay mua nhà</button>
						</div>
					</li>
					<li>
						<div class="box-icon"><span><img src="images/ic-libra.png" alt=""></span></div>
						<h4>Tư vấn pháp lý</h4>
						<div class="txt-desc">
							<p>Chuyên tư vấn pháp lý của YouHomes đồng hành cùng bạn</p>
							<button type="button" class="btn btn-default">Liên lạc</button>
						</div>
					</li>
					<li>
						<div class="box-icon"><span><img src="images/ic-transfer.png" alt=""></span></div>
						<h4>Hoàn tất thủ tục<br>chuyển nhượng</h4>
						<div class="txt-desc">
							<p>Chuyên viên YouHomes hoàn thiện đầy đủ thủ tục chuyển nhượng tới lúc nhận nhà</p>
							<button type="button" class="btn btn-default">Liên lạc</button>
						</div>
					</li>
				</ul>
			</div>
			<div class="box-project-favorite">
				<ul class="list-project-favorite">
					<li class="item-pr">
		        		<div class="product-item">
		        			<div class="product-images">
		        				<div class="img-inner">
		        					<a href="#"><img src="images/product-du-an.png" alt="Vinhomes Graden Mỹ Đình"></a>
		        				</div>
		        				<div class="box-view-control">
		        					<div class="row">
		        						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-left">
		        							<img src="images/ic-view.png" alt="45 Đang xem"> 45 Đang xem
		        						</div>
		        						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
		        							<img src="images/ic-360.png" alt="45 Đang xem">
		        							<img src="images/ic-gallery.png" alt="Album ảnh">
		        							<img src="images/ic-favior.png" alt="Yêu thích">
		        						</div>
		        					</div>
		        				</div>
		        			</div>
		        			<div class="product-caption">
		        				<div class="row">
		        					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
		        						<h4>Vinhomes Graden Mỹ Đình</h4>
		        						<div class="pr-add"><i class="fa fa-map-marker"></i> Mỹ Đình, Hà Nội</div>
		        					</div>
		        					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-price text-right">
		        						Giá từ: <span>8.4 tỷ</span>
		        					</div>
		        				</div>
		        				
		        				<div class="pd-desc">Căn hộ của dự án đăng bán trên YouHomes</div>
		        				<ul class="list-utilities-list">
		        					<li>
		        						<div class="title">Số phòng ngủ</div>
		        						<div class="text">2 PN <i class="fa fa-angle-up"></i></div>
		        					</li>
		        					<li>
		        						<div class="title">Hướng ban công</div>
		        						<div class="text">Đông nam <i class="fa fa-angle-up"></i></div>
		        					</li>
		        					<li>
		        						<div class="title">Diện tích</div>
		        						<div class="text"><60m2 <i class="fa fa-angle-up"></i></div>
		        					</li>
		        					<li>
		        						<div class="title">Giá</div>
		        						<div class="text"><span class="text-primary">5,3 Tỷ</span></div>
		        					</li>
		        				</ul>

		        				<div class="box-price">
		        					<div class="row">
		        						<div class="col-xs-6 col-sm-5 col-md-6 col-lg-6 txt-comment">
		        							<i class="fa fa-calendar"></i>
		        							<i class="fa fa-comments"></i>
		        						</div>
		        						<div class="col-xs-6 col-sm-7 col-md-6 col-lg-6 text-right">
		        							<a href="#">CHI TIẾT DỰ ÁN</a>
		        						</div>
		        					</div>
		        				</div>
		        			</div>
		        		</div>						
					</li>
					<li class="item-pr">
		        		<div class="product-item">
		        			<div class="product-images">
		        				<div class="img-inner">
		        					<a href="#"><img src="images/product-du-an.png" alt="Vinhomes Graden Mỹ Đình"></a>
		        				</div>
		        				<div class="box-view-control">
		        					<div class="row">
		        						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-left">
		        							<img src="images/ic-view.png" alt="45 Đang xem"> 45 Đang xem
		        						</div>
		        						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
		        							<img src="images/ic-360.png" alt="45 Đang xem">
		        							<img src="images/ic-gallery.png" alt="Album ảnh">
		        							<img src="images/ic-favior.png" alt="Yêu thích">
		        						</div>
		        					</div>
		        				</div>
		        			</div>
		        			<div class="product-caption">
		        				<div class="row">
		        					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
		        						<h4>Vinhomes Graden Mỹ Đình</h4>
		        						<div class="pr-add"><i class="fa fa-map-marker"></i> Mỹ Đình, Hà Nội</div>
		        					</div>
		        					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-price text-right">
		        						Giá từ: <span>8.4 tỷ</span>
		        					</div>
		        				</div>
		        				
		        				<div class="pd-desc">Căn hộ của dự án đăng bán trên YouHomes</div>
		        				<ul class="list-utilities-list">
		        					<li>
		        						<div class="title">Số phòng ngủ</div>
		        						<div class="text">2 PN <i class="fa fa-angle-up"></i></div>
		        					</li>
		        					<li>
		        						<div class="title">Hướng ban công</div>
		        						<div class="text">Đông nam <i class="fa fa-angle-up"></i></div>
		        					</li>
		        					<li>
		        						<div class="title">Diện tích</div>
		        						<div class="text"><60m2 <i class="fa fa-angle-up"></i></div>
		        					</li>
		        					<li>
		        						<div class="title">Giá</div>
		        						<div class="text"><span class="text-primary">5,3 Tỷ</span></div>
		        					</li>
		        				</ul>

		        				<div class="box-price">
		        					<div class="row">
		        						<div class="col-xs-6 col-sm-5 col-md-6 col-lg-6 txt-comment">
		        							<i class="fa fa-calendar"></i>
		        							<i class="fa fa-comments"></i>
		        						</div>
		        						<div class="col-xs-6 col-sm-7 col-md-6 col-lg-6 text-right">
		        							<a href="#">CHI TIẾT DỰ ÁN</a>
		        						</div>
		        					</div>
		        				</div>
		        			</div>
		        		</div>						
					</li>					
				</ul>
				<div class="btn-view-more text-right"><a href="#">Xem thêm</a></div>
			</div>			
			<div class="box-banner"><a href="#"><img src="images/banner_4.png" alt=""></a></div>
			<div class="box-project-favorite">
				<ul class="list-project-favorite">
					<li class="item-pr">
		        		<div class="product-item">
		        			<div class="product-images">
		        				<div class="img-inner">
		        					<a href="#"><img src="images/product-du-an.png" alt="Vinhomes Graden Mỹ Đình"></a>
		        				</div>
		        				<div class="box-view-control">
		        					<div class="row">
		        						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-left">
		        							<img src="images/ic-view.png" alt="45 Đang xem"> 45 Đang xem
		        						</div>
		        						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
		        							<img src="images/ic-360.png" alt="45 Đang xem">
		        							<img src="images/ic-gallery.png" alt="Album ảnh">
		        							<img src="images/ic-favior.png" alt="Yêu thích">
		        						</div>
		        					</div>
		        				</div>
		        			</div>
		        			<div class="product-caption">
		        				<div class="row">
		        					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
		        						<h4>Vinhomes Graden Mỹ Đình</h4>
		        						<div class="pr-add"><i class="fa fa-map-marker"></i> Mỹ Đình, Hà Nội</div>
		        					</div>
		        					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-price text-right">
		        						Giá từ: <span>8.4 tỷ</span>
		        					</div>
		        				</div>
		        				
		        				<div class="pd-desc">Căn hộ của dự án đăng bán trên YouHomes</div>
		        				<ul class="list-utilities-list">
		        					<li>
		        						<div class="title">Số phòng ngủ</div>
		        						<div class="text">2 PN <i class="fa fa-angle-up"></i></div>
		        					</li>
		        					<li>
		        						<div class="title">Hướng ban công</div>
		        						<div class="text">Đông nam <i class="fa fa-angle-up"></i></div>
		        					</li>
		        					<li>
		        						<div class="title">Diện tích</div>
		        						<div class="text"><60m2 <i class="fa fa-angle-up"></i></div>
		        					</li>
		        					<li>
		        						<div class="title">Giá</div>
		        						<div class="text"><span class="text-primary">5,3 Tỷ</span></div>
		        					</li>
		        				</ul>

		        				<div class="box-price">
		        					<div class="row">
		        						<div class="col-xs-6 col-sm-5 col-md-6 col-lg-6 txt-comment">
		        							<i class="fa fa-calendar"></i>
		        							<i class="fa fa-comments"></i>
		        						</div>
		        						<div class="col-xs-6 col-sm-7 col-md-6 col-lg-6 text-right">
		        							<a href="#">CHI TIẾT DỰ ÁN</a>
		        						</div>
		        					</div>
		        				</div>
		        			</div>
		        		</div>						
					</li>
					<li class="item-pr">
		        		<div class="product-item">
		        			<div class="product-images">
		        				<div class="img-inner">
		        					<a href="#"><img src="images/product-du-an.png" alt="Vinhomes Graden Mỹ Đình"></a>
		        				</div>
		        				<div class="box-view-control">
		        					<div class="row">
		        						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-left">
		        							<img src="images/ic-view.png" alt="45 Đang xem"> 45 Đang xem
		        						</div>
		        						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
		        							<img src="images/ic-360.png" alt="45 Đang xem">
		        							<img src="images/ic-gallery.png" alt="Album ảnh">
		        							<img src="images/ic-favior.png" alt="Yêu thích">
		        						</div>
		        					</div>
		        				</div>
		        			</div>
		        			<div class="product-caption">
		        				<div class="row">
		        					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
		        						<h4>Vinhomes Graden Mỹ Đình</h4>
		        						<div class="pr-add"><i class="fa fa-map-marker"></i> Mỹ Đình, Hà Nội</div>
		        					</div>
		        					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-price text-right">
		        						Giá từ: <span>8.4 tỷ</span>
		        					</div>
		        				</div>
		        				
		        				<div class="pd-desc">Căn hộ của dự án đăng bán trên YouHomes</div>
		        				<ul class="list-utilities-list">
		        					<li>
		        						<div class="title">Số phòng ngủ</div>
		        						<div class="text">2 PN <i class="fa fa-angle-up"></i></div>
		        					</li>
		        					<li>
		        						<div class="title">Hướng ban công</div>
		        						<div class="text">Đông nam <i class="fa fa-angle-up"></i></div>
		        					</li>
		        					<li>
		        						<div class="title">Diện tích</div>
		        						<div class="text"><60m2 <i class="fa fa-angle-up"></i></div>
		        					</li>
		        					<li>
		        						<div class="title">Giá</div>
		        						<div class="text"><span class="text-primary">5,3 Tỷ</span></div>
		        					</li>
		        				</ul>

		        				<div class="box-price">
		        					<div class="row">
		        						<div class="col-xs-6 col-sm-5 col-md-6 col-lg-6 txt-comment">
		        							<i class="fa fa-calendar"></i>
		        							<i class="fa fa-comments"></i>
		        						</div>
		        						<div class="col-xs-6 col-sm-7 col-md-6 col-lg-6 text-right">
		        							<a href="#">CHI TIẾT DỰ ÁN</a>
		        						</div>
		        					</div>
		        				</div>
		        			</div>
		        		</div>						
					</li>					
				</ul>
				<div class="btn-view-more text-right"><a href="#">Xem thêm</a></div>
			</div>	

			<div class="bn-fixed box-banner-left"><a href="#"><img src="images/banner_1.png" alt=""></a></div>
			<div class="bn-fixed  box-banner-right"><a href="#"><img src="images/banner_1.png" alt=""></a></div>
		</div>
    </div><!-- /#contents -->
    <?php include "./templates/footer.php"; ?>
</body>
</html>