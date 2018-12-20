<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="style.css">
      <style>
		   .logo{
				width: 300px;
				height: 70px;
				margin: 150px auto 50px auto;
				font-size: 50px;
				text-shadow: -1px 2px 2px #000;
				text-align: center;
				color: azure;
			}
      </style>
	</head>
	
	<body>

	<?php 
	  echo '<div class="loaders-css" id="ld1">
					<div class="loader-inners-sections">
						<span class="loader">
						   <span style="color:darkturquoise;">Loading.... Wait </span>
						</span>
						<div class="loader loader1">
							<div>
								<div>
								<div>
									<div>
									<div>
										<div>
											
										</div>
									</div>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>';
	
	  echo '<script type="text/javascript">
			   (function() {	
				var preload = document.getElementById("preload");
				var loading = 0;
				var id = setInterval(frame, 64);
				function frame(){
					if(loading == 100){
					   clearInterval(id);
					   window.open("index.php", "_self"); 
					}
					else{
						loading = loading + 1;
						if(loading == 90){
						  preload.style.animation = "fadeout 1s ease";
						}
					}
				}
			  })();
			 </script>';
	?>
	</body>
</html>