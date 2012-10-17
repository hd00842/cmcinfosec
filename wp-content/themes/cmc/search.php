<?php include "header.php"?>
    <body>
    	<div id="wrapper-shadow">
		<div class="span11 wrapper">
			<div class="row">
			<div id="header">
				
					<div class="span3 logo">
						<?php include "/module/header.php"; ?>
					</div>
					<div class="clear"></div>
					<div class="banner">
						<img src="<?php echo bloginfo('template_directory').'/images/homepage-banner.png'?>" style="padding-top: 5px; width: 1025px;" />
					</div>
				
			</div>
			<div id="content">
					<div class="clear"></div>
					<h3>Sản Phẩm & Dịch Vụ</h3>
					<div id="tabContainer">
					    <div class="tabs">
						    <ul>
							    <li id="tabHeader_1">Cá nhân, Gia đình</li>
							    <li id="tabHeader_2">Doanh Nghiệp</li>
							    <li id="tabHeader_3">Mobile</li>
							    <li id="tabHeader_4">Dịch Vụ</li>
						    </ul>
					    </div>
<?php include "single.php"?>					
					</div>
					<div id="sidebar">
						<?php include "/module/news-support-sidebar.php"; ?>
					</div>
					<div class="clear"></div>
					<div id="slider">
						<?php include "/module/slider.php"?>
					</div>
					<div id="embedVideo_index">
						<?php include "/module/embedVideoIndex.php"; ?>
					</div>
				
			
					<div class="clear"></div>
					<div id="footer">
						<?php include "module/footer.php"; ?>
					</div>
				</div> <!-- .content -->
			</div> <!-- .Row -->
		</div> <!-- .Wrapper -->
		</div>
    </body>
    </html>