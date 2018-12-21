<!DOCTYPE html>
<html>

<head>
    <title>Global Essay, Dissertation and Assignment Help </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta title="Looking for online essay, thesis or dissertation help? OnlineAssignmenthelp.com is your destination. We offer global assignment help service for all subjects at unbelievably cheap price.
                ">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/animated.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/scrollanimations.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://npmcdn.com/flickity@1.2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php include './header.php'?>
    <div class="onl-banner-sections">
        <div class="onl-inrs-banner-reviews">
            <div class="onl-sub-inners-sec-reviews">
                <div class="onl-sub-inners-left-section-reviews">
                    <div class="welcome-online-help animatable zoomIn">
                         <span class="listen-to-clients">
                            Listen to Our 98% Happy Clients
                         </span>
                           <br>
                         <span class="sub-listen-to-clients">
                            Still confused? Check our 14001 genuine reviews!
                        </span>
                        <div class="reviews-deatils-sections">
                              <div class="reviews-details-left-sections">
                                   <strong>4.0/<small>5</small></strong>
                                   <span class="text-uppercase review-star">
                                       <i class="fa fa-star stars" aria-hidden="true"></i>                                        
                                       <i class="fa fa-star stars" aria-hidden="true"></i>                                        
                                       <i class="fa fa-star stars" aria-hidden="true"></i>                                        
                                       <i class="fa fa-star stars" aria-hidden="true"></i>                                                                               
                                    </span>
                                   <span class="text-uppercase">  Overall rating</span>
                              </div>
                              <div class="reviews-details-right-sections">
                                   <strong>14,001</strong>
                                   <span class="text-uppercase">User reviews</span>     
                              </div>
                        </div>
                    </div>
                </div>
                <?php include './notification.php'?>    
        </div>
    </div>
    <div class="recently-added-reviews">
         <div class="recently-added-reviews-innerss">
            <div class="recent-inrs">
			 
			        <!--- Banner of Review  --->
                    <div class="recenetly-add-reviews-headings">
                        <div class="rc-left">
                            <span class="recetly-add">
                                Recently Added Reviews
                            </span>
                        </div>
					    <form>	
							<div class="rc-right">
								<div class="all-services">
									<select class="select-services" name="services">
										<option disabled selected>All Services</option>
										<option value="Essay">Essay</option>
										<option value="Assignment">Assignment</option>
										<option value="CDR">CDR</option>
									</select>
								</div>
								<div class="all-ratings">
									<select class="select-services" name="rating" onchange="this.form.submit()">
											<option disabled selected>All Rating</option>
											<option value="5">5 Star</option>
											<option value="4">4 Star</option>
											<option value="3">3 Star</option>
											<option value="2">2 Star</option>
											<option value="1">1 Star</option>
									</select>
								</div>
							</div>
						</form>	
                    </div>
					<!--- Banner of Review Ended --->
					
					<!--- Complete section --->
                    <div class="reviews-lt-rt-outers">
					
					    <!--- Review Boxes  --->	
                        <div class="reviews-lt-sc">
						  
						    
							<!--- Review Boxes 1 - 8 Started --->
							
							<?php
							/*  Comment Added 
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "oah";

										// Create connection
										$conn = new mysqli($servername, $username, $password, $dbname);

										// Check connection
										if ($conn->connect_error) {
											die("Connection failed: " . $conn->connect_error);
										} 

										$sql1   = "SELECT serialno FROM `user_review_data` ORDER BY serialno DESC LIMIT 1;";
										$result1 = $conn->query($sql1);
										
										$sql2   = "SELECT * FROM `user_review_data`;";
										$result2 = $conn->query($sql2);
										
										if(!$result1 OR !$result2){
											die ('SQL Error: ' . mysql_error($conn));
										}
										
										$row1 = mysqli_fetch_array($result1);
										$rcount = $row1['serialno'];
										
										if(isset($_GET["rating"])){
										   $rating = $_GET["rating"];
										    while ($row2 = mysqli_fetch_array($result2)){
												$img_field = $row2['image_path'];
										      $img_src = "Image_Source/$img_field";
												for ($count = 1; $count <= $rcount; $count++) {
													if($count == $row2['serialno'] AND $rating == $row2['starcount']){
													  echo  '<div class="card-outer-online-reviews zoomIn animatable">
																<div class="card-inner-section-reviews" id="reviews-deatil-open">
																	<div class="rv-outers-top">
																		<div class="rv-left-top">
																			<span class="reviews-tag">'.$row2['header'].'</span>
																			<span class="reviews-details">
																			<i class="word_count_deadline">Essay: '.$row2['pagecount'].' Pages, Deadline:  '.$row2['daycount'].' days</i>
																			</span>
																		</div>
																		<div class="rv-right-top">
																		  <span class="text-uppercase review-star">';
																		   for($scount = 1; $scount <= $row2['starcount']; $scount++){
																		    echo '<i class="fa fa-star stars animatable zoomIn swing" aria-hidden="true"></i>';
																		   };                                      
																	echo '</span>  
																		</div>
																	</div>
																	<div class="rv-bottm-se">
																		<span class="rv-details">
																			  '.$row2['review'].'                       
																		</span>
																	</div>
																	<div class="rvt-bottm-se">
																		<span class="rvt-profiles-details">
																			<span class="us-p">
																				<img src='.$img_src.' />
																			</span>
																			<div class="order-detailss">
																				<span class="user-id">
																				User Id: '.$row2['userid'].'
																				</span>
																				<i>'.$row2['country'].' <br>&nbsp;</i>
																				<span class="user-id">
																				Created On: '.$row2['timestamp'].'
																				</span>
																			</div>   
																	   </span>
																	</div>
																 </div>
																</div>';        
													}
											    }
											}										    
									    }
										
										    while ($row2 = mysqli_fetch_array($result2)){
												$img_field = $row2['image_path'];
										      $img_src = "Image_Source/$img_field";
												for ($count = 1; $count <= $rcount; $count++) {
													if($count == $row2['serialno']){
													  echo  '<div class="card-outer-online-reviews zoomIn animatable">
																<div class="card-inner-section-reviews" id="reviews-deatil-open">
																	<div class="rv-outers-top">
																		<div class="rv-left-top">
																			<span class="reviews-tag">'.$row2['header'].'</span>
																			<span class="reviews-details">
																			<i class="word_count_deadline">Essay: '.$row2['pagecount'].' Pages, Deadline:  '.$row2['daycount'].' days</i>
																			</span>
																		</div>
																		<div class="rv-right-top">
																		  <span class="text-uppercase review-star">';
																		   for($scount = 1; $scount <= $row2['starcount']; $scount++){
																		    echo '<i class="fa fa-star stars animatable zoomIn swing" aria-hidden="true"></i>';
																		   };                                      
																	echo '</span>  
																		</div>
																	</div>
																	<div class="rv-bottm-se">
																		<span class="rv-details">
																			  '.$row2['review'].'                       
																		</span>
																	</div>
																	<div class="rvt-bottm-se">
																		<span class="rvt-profiles-details">
																			<span class="us-p">
																				<img src='.$img_src.' />
																			</span>
																			<div class="order-detailss">
																				<span class="user-id">
																				User Id: '.$row2['userid'].'
																				</span>
																				<i>'.$row2['country'].' <br>&nbsp;</i>
																				<span class="user-id">
																				Created On: '.$row2['timestamp'].'
																				</span>
																			</div>   
																	   </span>
																	</div>
																 </div>
																</div>';        
													}
											    }
											}  
									Comment Ended */
									?>
									
									                            <div class="card-outer-online-reviews zoomIn animatable">
                                <div class="card-inner-section-reviews" id="reviews-deatil-open">
                                    <div class="rv-outers-top">
                                        <div class="rv-left-top">
                                            <span class="reviews-tag">Management</span>
                                            <span class="reviews-details">
                                            <i class="word_count_deadline">Essay: 2 Pages, Deadline:  
                                                  3 days</i>
                                            </span>
                                        </div>
                                        <div class="rv-right-top">
                                          <span class="text-uppercase review-star">
                                            <i class="fa fa-star stars" aria-hidden="true"></i>                                        
                                            <i class="fa fa-star stars" aria-hidden="true"></i>                                        
                                            <i class="fa fa-star stars" aria-hidden="true"></i>                                        
                                            <i class="fa fa-star stars " aria-hidden="true"></i>                                        
                                            <i class="fa fa-star stars" aria-hidden="true"></i>                                        
                                          </span>
                                            
                                        </div>
                                    </div>
                                    <div class="rv-bottm-se">
                                        <span class="rv-details">
                                              Very well written...got an A, couldn't ask for anything more! Thank you for all your hard work!                        
                                        </span>
                                    </div>
                                    <div class="rvt-bottm-se">
                                        <span class="rvt-profiles-details">
                                            <span class="us-p">
                                                 <img src="./assets/images/profile-pic.jpg"/>
                                            </span>
                                            <div class="order-detailss">
                                                <span class="user-id">
                                                User Id: 196847
                                                </span>
                                                <i>United States <br>&nbsp; 05 Dec 2018 </i>
                                            </div>
                                           
                                              
                                       </span>
                                    </div>

                                </div>
                            </div>
									
									
									
									
									
									
									
							<!--- Review Boxes 1 - 8 Ended   --->
							
                        </div>
						<!--- Review Boxes Ended --->
					    
						<!--- Right Panel Floater --->	
                        <div class="reviews-rt-sc">
                            <div class="card-outer-online-reviews-right zoomIn animatable">
                                    <div class="card-inner-section-reviews-right">
                                         <span class="latest-news">Latest News</span>
                                         Avail unbelievable discounts of upto 30% on all assignments, dissertations, essays and homework 
                                    </div>
                            </div>
                            <div class="card-outer-online-reviews-right zoomIn animatable">
                                    <div class="card-inner-section-reviews-right">
                                         <span class="latest-news">Latest Reviews</span>
                                         <img src="./assets/images/EXPERTS.jpg"/>
                                    </div>
                            </div>
                            <div class="card-outer-online-reviews-right zoomIn animatable">
                                    <div class="card-inner-section-reviews-right">
                                         <span class="latest-news">Latest Update</span>
                                         <img src="./assets/images/PREMIUM.jpg"/>
                                    </div>
                            </div>
                        </div>
						<!--- Right Panel Floater Ended --->
						
                    </div>
					<!--- Complete section Ended  --->
					
             </div>
         </div>
    </div>
    <?php include './footer.php'?>
    <div class="reviews-modal-section hide" id="modal-reviwes">
         <div class="reviwes-inner-modals zoomIn animatable">
              <div class="reviews-inner-contents">
                  <span class="closed-modals" id="closed-modals">
                     <i class="fa fa-times" aria-hidden="true"></i>
                  </span>
                  <div class="inner-content-sections">
                        <div class="reviews-lt-inner-modals">
                          <div class="reviews-deatils-op">
                            <span class="rv-tags">
                                 Name:
                            </span>
                            <span class="rv-tag-ans">
                                Pritam Kumar Soni
                            </span>

                          </div>
                          <div class="reviews-deatils-op">
                            <span class="rv-tags">
                                 Id:
                            </span>
                            <span class="rv-tag-ans">
                                196847
                            </span>

                          </div>
                          <div class="reviews-deatils-op">
                            <span class="rv-tags">
                                 Country:
                            </span>
                            <span class="rv-tag-ans">
                                United State
                            </span>

                          </div>
                          <div class="reviews-deatils-op">
                            <span class="rv-tags">
                                 Department:
                            </span>
                            <span class="rv-tag-ans">
                                 Management
                            </span>

                          </div>
                        </div>
                        <div class="reviews-bottm-inner-modals">
                            <span class="reviews-seen">
                                <span class="rd">
                                   Reviews Details
                                </span>
                                
                                <div class="rv-right-tops">
                                          <span class="text-uppercase review-star">
                                            <i class="fa fa-star stars" aria-hidden="true"></i>                                        
                                            <i class="fa fa-star stars" aria-hidden="true"></i>                                        
                                            <i class="fa fa-star stars" aria-hidden="true"></i>                                        
                                            <i class="fa fa-star stars " aria-hidden="true"></i>                                        
                                            <i class="fa fa-star stars" aria-hidden="true"></i>                                        
                                          </span>
                                            
                                </div>
                            </span>
                            <span class="reviews-messages">
                               " 
                                Very well written...got an A, couldn't ask for anything more! Thank you for all your hard work!                        
                                Very well written...got an A, couldn't ask for anything more! Thank you for all your hard work!
                                Very well written...got an A, couldn't ask for anything more! Thank you for all your hard work!"                       
                            <span>

                       </div>
                  </div>
              </div>
         </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://npmcdn.com/flickity@1.2/dist/flickity.pkgd.min.js"></script>
<script src="./assets/js/scrollanimations.js"></script>
<script src="./assets/js/style.js"></script>

<script>
    $(document).on("click", "#reviews-deatil-open", function () {
        $("#modal-reviwes").toggleClass('hide');
    });
    $(document).on("click", "#closed-modals", function () {
        $("#modal-reviwes").addClass('hide');
    });
</script>

</html>