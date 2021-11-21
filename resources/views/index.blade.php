@extends('layouts.app')

@section('content')
			<!-- 
				Card - About
			-->
			<div class="card-inner animated active" id="about-card">
				<div class="card-wrap">

					<!-- 
						About 
					-->
					<div class="content about">

						<!-- title -->
						<div class="title">About Me</div>

						<!-- content -->
						<div class="row">
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="text-box">
									<p>
										I am Gideon Asare, web developer from Peterborough, Cambridgeshire. I am pasionate about software development and continue to learn new tech. 	
									</p>
								</div>
								<div class="info-list">
									<ul>
										<li><strong>Email . . . . .</strong> info@gideonasare.net</li>
										<li><strong>Residence . . . . .</strong> UK</li>
										<li><strong>Freelance . . . . .</strong> Available</li>
										<li><strong>Address . . . . .</strong> Peterborough</li>
									</ul>
								</div>
							</div>
							<div class="clear"></div>
						</div>

					</div>

					<!--
						Services
					-->
					<div class="content services">

						<!-- title -->
						<div class="title">My Services</div>

						<!-- content -->
						<div class="row service-items border-line-v">

							<!-- service item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-h">
								<div class="service-item">
									<div class="icon"><span class="ion ion-card"></span></div>
									<div class="name">ECommerce</div>
									<p>
										Crafting modern ecommerce solutions for businesses. 
									</p>
								</div>
							</div>

							<!-- service item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-h">
								<div class="service-item">
									<div class="icon"><span class="ion ion-code"></span></div>
									<div class="name">Web Development</div>
									<p>
										Developing websites and apps for any need. 
								</div>
							</div>

							<!-- service item -->
							<div class="col col-d-6 col-t-6 col-m-12">
								<div class="service-item">
									<div class="icon"><span class=" ion-ios-email"></span></div>
									<div class="name">Email Solutions</div>
									<p>
										Getting business domain emails for business of any size 
									</p>
								</div>
							</div>

							<!-- service item -->
							<div class="col col-d-6 col-t-6 col-m-12">
								<div class="service-item">
									<div class="icon"><span class="ion ion-calendar"></span></div>
									<div class="name">Booking Systems</div>
									<p>
										Developing Booking systems for all line of business.
									</p>
								</div>
							</div>

							<div class="clear"></div>
						</div>

					</div>

					<!--
						Price Tables
					-->
					<div class="content pricing">

						<!-- title -->
						<div class="title">Pricing</div>

						<!-- content -->
						<div class="row pricing-items">

							<!-- pricing item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="pricing-item">
									<div class="icon"><i class="ion ion-speedometer speed-basic"></i></div>
									<div class="name">Basic</div>
									<div class="amount">
										<span class="dollar">£</span>
										<span class="number">200</span>
									</div>
									<div class="feature-list">
										<ul>
											<li>5 page website</li>
											<li>1 admin dashboard</li>
											<li>1 year hosting</li>
											<li>1 free email</li>
										</ul>
									</div>
									<div class="lnks">
										<a href="{{url('checkout')}}"  class="lnk">
											<span class="text">Buy Basic</span>
											<i class="ion ion-speedometer speed-basic"></i>
										</a>
									</div>
								</div>
							</div>

							<!-- pricing item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="pricing-item">
									<div class="icon"><i class="ion ion-speedometer"></i></div>
									<div class="name">Pro</div>
									<div class="amount">
										<span class="dollar">£</span>
										<span class="number">600</span>	
									</div>
									<div class="feature-list">
										<ul>
											<li>15 pages minimum website</li>
											<li>4 admin dashboard </li>
											<li>2 year hosting</li>
											<li>5 free email</li>
										</ul>
									</div>
									<div class="lnks">
										<a href="#" class="lnk">
											<span class="text">Buy Pro</span>
											<i class="ion ion-speedometer"></i>
										</a>
									</div>
								</div>
							</div>

							<div class="clear"></div>
						</div>

					</div>

					<!--
						Fun Fact
					-->
					<div class="content fuct">

						<!-- title -->
						<div class="title">Fun Fact</div>

						<!-- content -->
						<div class="row fuct-items">

							<!-- fuct item -->
							<div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="fuct-item">
									<div class="icon"><span class="ion-ios-football"></span></div>
									<div class="name">Chelsea FC</div>
								</div>
							</div>

							<!-- fuct item -->
							<div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="fuct-item">
									<div class="icon"><span class="ion-android-bicycle"></span></div>
									<div class="name">Loves Biking</div>
								</div>
							</div>

							<!-- fuct item -->
							<div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="fuct-item">
									<div class="icon"><span class="ion ion-coffee"></span></div>
									<div class="name">latte lover</div>
								</div>
							</div>

							{{-- <!-- fuct item -->
							<div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="fuct-item">
									<div class="icon"><span class="ion ion-flag"></span></div>
									<div class="name">10 Countries Visited</div>
								</div>
							</div> --}}

							<div class="clear"></div>
						</div>

					</div>

					<!--
						Clients
					-->
					<div class="content clients">

						<!-- title -->
						<div class="title">Clients</div>

						<!-- content -->
						<div class="row client-items">

							<!-- client item -->
							<div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="client-item">
									<div class="image">
										<a target="_blank" href="https://www.asanteakyemruralbank.com">
											<img src="images/clients/asakyem.png" alt="" />
										</a>
									</div>
								</div>
							</div>

							<!-- client item -->
							<div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="client-item">
									<div class="image">
										<a target="_blank" href="">
											<img src="images/clients/wensah.jpeg" alt="" />
										</a>
									</div>
								</div>
							</div>

						{{-- 	<!-- client item -->
							<div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="client-item">
									<div class="image">
										<a target="_blank" href="https://www.google.com">
											<img src="images/clients/client_3.png" alt="" />
										</a>
									</div>
								</div>
							</div>

							<!-- client item -->
							<div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="client-item">
									<div class="image">
										<a target="_blank" href="https://www.google.com">
											<img src="images/clients/client_4.png" alt="" />
										</a>
									</div>
								</div>
							</div> --}}

							<div class="clear"></div>
						</div>

					</div>

					<!--
						Testimonials
					-->
				{{-- 	<div class="content testimonials">

						<!-- title -->
						<div class="title">Testimonials</div>

						<!-- content -->
						<div class="row testimonials-items">

							<!-- client item -->
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="revs-carousel default-revs">
									<div class="owl-carousel">
										<div class="item">
											<div class="revs-item">
												<div class="text">
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
												</div>
												<div class="user">
													<div class="img"><img src="images/man1.jpg" alt="" /></div>
													<div class="info">
														<div class="name">Helen Floyd</div>
														<div class="company">Art Director</div>
													</div>
													<div class="clear"></div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="revs-item">
												<div class="text">
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
												</div>
												<div class="user">
													<div class="img"><img src="images/man1.jpg" alt="" /></div>
													<div class="info">
														<div class="name">Robert Chase</div>
														<div class="company">CEO</div>
													</div>
													<div class="clear"></div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="revs-item">
												<div class="text">
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
												</div>
												<div class="user">
													<div class="img"><img src="images/man1.jpg" alt="" /></div>
													<div class="info">
														<div class="name">Helen Floyd</div>
														<div class="company">Art Director</div>
													</div>
													<div class="clear"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="clear"></div>
						</div>

					</div> --}}

				</div>
			</div>

			<!--
				Card - Resume
			-->
			<div class="card-inner" id="resume-card">
				<div class="card-wrap">

					<!--
						Resume
					-->
					<div class="content resume">

						<!-- title -->
						<div class="title">Resume</div>

						<!-- content -->
						<div class="row">

							<!-- experience -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="resume-title border-line-h">
									<div class="icon"><i class="ion ion-briefcase"></i></div>
									<div class="name">Experience</div>
								</div>
								<div class="resume-items">
									<div class="resume-item border-line-h active">
										<div class="date">2020 - Present</div>
										<div class="name">Web Developer</div>
										<div class="company">Freelance</div>
										<p>
											Marketing and developing Websites and Web Applications for  clients. 
										</p>
									</div>
									<div class="resume-item border-line-h">
										<div class="date">2015 - 2018</div>
										<div class="name">Web  Developer</div>
										<div class="company">webnun it solutions.</div>
										<p>
											Developing clients websites using wordpress, Bootstrap and JQuery
										</p>
									</div>
			
								</div>
							</div>

							<!-- education -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="resume-title border-line-h">
									<div class="icon"><i class="ion ion-university"></i></div>
									<div class="name">Education</div>
								</div>
								<div class="resume-items">
					
									<div class="resume-item border-line-h">
										<div class="date">2020-Date </div>
										<div class="name">Laravel Framework</div>
										<div class="company">Laracast</div>
										<p>
											Coursework - Laravel from Scratch,Eloquent Models, Factories and Seeders, Studs,Cashier,Multiauth,Stripe Integration etc.
										</p>
									</div>
									<div class="resume-item border-line-h">
										<div class="date">2015-2018 </div>
										<div class="name">Web Development</div>
										<div class="company">Udemy</div>
										<p>
											Coursework - Bootstrap,JQuery, Angular and Advance PHP
										</p>
									</div>
									<div class="resume-item border-line-h">
										<div class="date">2014 </div>
										<div class="name">Web Development</div>
										<div class="company">Udemy</div>
										<p>
											Coursework - HTML, CSS, Javascript, JQuery, PHP ,MySQL,Wordpress 
										</p>
									</div>
									<div class="resume-item border-line-h">
										<div class="date">2012 - 2013</div>
										<div class="name">Introduction to  C/C++</div>
										<div class="company">Cousera</div>
										<p>
											Coursework - Data Structures, Standard Template Library, Pointers, Objected Oriented principles. 
										</p>
									</div>
									<div class="resume-item border-line-h">
										<div class="date">2005 - 2009</div>
										<div class="name">Kwame Nkrumah University of Science & Technology</div>
										<div class="company">Ghana</div>
										<p>
											Bachelor of Art  in Integrated Rural  Art & Industry
										</p>
									</div>
									
								</div>
							</div>

							<div class="clear"></div>
						</div>

					</div>

					<!--
						Skills
					-->
					<div class="content skills">

						<!-- title -->
						<div class="title">My Skills</div>
					
						<!-- content -->
						<div class="row">
						
							<!-- skill item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="skills-list">
									<div class="skill-title border-line-h">
										<div class="icon"><i class="ion ion-easel"></i></div>
										<div class="name">MySql</div>
									</div>
									<ul>
										<li class="border-line-h"> 
											<div class="name">PHP</div>
											<div class="progress">
												<div class="percentage" style="width:90%;"></div>
											</div>
										</li>
										<li class="border-line-h"> 
											<div class="name">Laravel</div>
											<div class="progress">
												<div class="percentage" style="width:65%;"></div>
											</div>
										</li>
                                        <li>
											<div class="name">Wordpress</div>
											<div class="progress">
												<div class="percentage" style="width:85%;"></div>
											</div>
                                            
										</li>
										<li class="border-line-h"> 
											<div class="name">CSS</div>
											<div class="progress">
												<div class="percentage" style="width:75%;"></div>
											</div>
										</li>
										<li>
											<div class="name">JavaScript/JQuery</div>
											<div class="progress">
												<div class="percentage" style="width:85%;"></div>
											</div>
                                            
										</li>
                                        <li>
											<div class="name">Bootstrap</div>
											<div class="progress">
												<div class="percentage" style="width:85%;"></div>
											</div>
                                            
										</li>
									</ul>
								</div>
							</div>

							<!-- skill item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="skills-list dotted">
									<div class="skill-title border-line-h">
										<div class="icon"><i class="ion ion-flag"></i></div>
										<div class="name">Languages</div>
									</div>
									<ul>
										<li class="border-line-h"> 
											<div class="name">English</div>
											<div class="progress">
												<div class="percentage" style="width:90%;"></div>
											</div>
										</li>
										<li class="border-line-h"> 
											<div class="name">German</div>
											<div class="progress">
												<div class="percentage" style="width:60%;"></div>
											</div>
										</li>
										<li class="border-line-h"> 
											<div class="name">Italian</div>
											<div class="progress">
												<div class="percentage" style="width:30%;"></div>
											</div>
										</li>
										<li> 
											<div class="name">French</div>
											<div class="progress ">
												<div class="percentage" style="width:70%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<!-- skill item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="skills-list circles">
									<div class="skill-title border-line-h">
										<div class="icon"><i class="ion ion-code"></i></div>
										<div class="name">Coding</div>
									</div>
									<ul>
										<li> 
											<div class="name">WordPress</div>
											<div class="progress p90">
												<span>90%</span>
											</div>
										</li>
										<li> 
											<div class="name">PHP/LARAVEL</div>
											<div class="progress p75">
												<span>75%</span>
											</div>
										</li>
                                        
										<li> 
											<div class="name">Angular / JavaScript</div>
											<div class="progress p85">
												<span>85%</span>
											</div>
										</li>
										<li> 
											<div class="name">HTML / CSS</div>
											<div class="progress p95">
												<span>95%</span>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<!-- skill item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="skills-list list">
									<div class="skill-title border-line-h">
										<div class="icon"><i class="ion ion-android-list"></i></div>
										<div class="name">Knowledge</div>
									</div>
									<ul>
										<li> 
											<div class="name">Website hosting</div>
										</li>
										<li> 
											<div class="name">iOS and android apps</div>
										</li>
										<li> 
											<div class="name">Create logo design</div>
										</li>
										<li> 
											<div class="name">Design for print</div>
										</li>
										<li> 
											<div class="name">Modern and mobile-ready</div>
										</li>
										<li> 
											<div class="name">Advertising services include</div>
										</li>
										<li> 
											<div class="name">Graphics and animations</div>
										</li>
										<li> 
											<div class="name">Search engine marketing</div>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="clear"></div>
						</div>
						
					</div>

					

				</div>
			</div>


			

			<!--
				Card - Works
			-->
			<div class="card-inner" id="works-card">
				<div class="card-wrap">

					<!--
						Works
					-->
					<div class="content works">

						<!-- title -->
						<div class="title">Recent Works</div>

						<!-- filters -->
						<div class="filter-menu filter-button-group">
							<div class="f_btn active">
								<label><input type="radio" name="fl_radio" value="grid-item" />All</label>
							</div>
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="photo" />Laravel</label>
							</div>
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="video" />Wordpress</label>
							</div>
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="music" />MySQL</label>
							</div>
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="design" />JavaScript</label>
							</div>
						</div>

						<!-- content -->
						<div class="row grid-items border-line-v">

							<!-- work item photo -->
							<div class="col col-d-6 col-t-6 col-m-12 grid-item photo border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="images/works/work1.jpg" class="has-popup-image">
											<img src="images/works/work1.jpg" alt="" />
											<span class="info">
												<span class="ion ion-image"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="images/works/work1.jpg" class="name has-popup-image">Motorcycle Helmet</a>
										<div class="category">Photo</div>
									</div>
								</div>
							</div>

							<!-- work item video -->
							<div class="col col-d-6 col-t-6 col-m-12 grid-item video border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="images/works/student_crud.jpg" class="has-popup-video">
											<img src="images/works/student_crud.jpg" alt="" />
											<span class="info">
												<span class="ion ion-videocamera"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="images/works/student_crud.jpg" class="name has-popup-video">Student Crud</a>
										<div><a href="https://enigmatic-garden-27041.herokuapp.com/">Demo</a></div>
										<div class="category">Laravel</div>
									</div>
								</div>
							</div>

							<!-- work item music -->
							<div class="col col-d-6 col-t-6 col-m-12 grid-item music border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="http://www.fashiecommercesite.xyz/" class="has-popup-music">
											<img src="images/works/fashi-img.png" alt="" />
											<span class="info">
												<span class="ion ion-music-note"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="#" class="name has-popup">Fashi Ecommerce</a>
                                        <a href="http://www.fashiecommercesite.xyz/">Demo</a>
                                        <div>
                                        <a href="https://github.com/asare847/fashi">source code</a>
                                        </div>
										<div class="category"></div>
									</div>
								</div>
							</div>

							<!-- work item design -->
							<div class="col col-d-6 col-t-6 col-m-12 grid-item design border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="#popup-1" class="has-popup-media">
											<img src="images/works/work4.jpg" alt="" />
											<span class="info">
												<span class="ion ion-images"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="#popup-1" class="name has-popup-media">Mobile Application</a>
										<div class="category">Design</div>
									</div>
									<div id="popup-1" class="popup-box mfp-fade mfp-hide">
										<div class="content">
											<div class="image">
												<img src="images/works/work4.jpg" alt="">
											</div>
											<div class="desc">
												<div class="post-box">
													<h1>Mobile Application</h1>						
													<div class="blog-detail">Design</div>
													<div class="blog-content">
														<p>
															So striking at of to welcomed resolved. Northward by described up household therefore 
															attention. Excellence decisively nay man yet impression for contrasted remarkably.
														</p>
														<p>
															Forfeited you engrossed but gay sometimes explained. Another as studied it to evident. 
															Merry sense given he be arise. Conduct at an replied removal an amongst. Remaining 
															determine few her two cordially admitting old.
														</p>
														<blockquote>
															Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia 
															Curae; Pellentesque suscipit.
														</blockquote>
														<p>
															Tiled say decay spoil now walls meant house. My mr interest thoughts screened of outweigh 
															removing. Evening society musical besides inhabit ye my. Lose hill well up will he over on. 
															Increasing sufficient everything men him admiration unpleasing sex.
														</p>
														<ul class="list-style">
															<li>Greatest properly off ham exercise all.</li>
															<li>Unsatiable invitation its possession nor off.</li>
															<li>All difficulty estimating unreserved increasing the solicitude.</li>
														</ul>
														<p>
															Unpleasant astonished an diminution up partiality. Noisy an their of meant. Death means 
															up civil do an offer wound of.
														</p>
													</div>
													<a href="#" class="button">
														<span class="text">View Project</span>
														<span class="arrow"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- work item photo -->
							<div class="col col-d-6 col-t-6 col-m-12 grid-item photo border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="images/works/work5.jpg" class="has-popup-image">
											<img src="images/works/work5.jpg" alt="" />
											<span class="info">
												<span class="ion ion-image"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="images/works/work5.jpg" class="name has-popup-image">Gereal Travels</a>
										<div class="category">Photo</div>
									</div>
								</div>
							</div>

							<!-- work item music -->
							<div class="col col-d-6 col-t-6 col-m-12 grid-item music border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="https://w.soundcloud.com/player/?visual=true&url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&show_artwork=true" class="has-popup-music">
											<img src="images/works/work8.jpg" alt="" />
											<span class="info">
												<span class="ion ion-music-note"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="#" class="name has-popup">Daylight Entrance</a>
										<div class="category">Music</div>
									</div>
								</div>
							</div>

							<!-- work item video -->
							<div class="col col-d-6 col-t-6 col-m-12 grid-item video border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="https://vimeo.com/97102654" class="has-popup-video">
											<img src="images/works/work6.jpg" alt="" />
											<span class="info">
												<span class="ion ion-videocamera"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="https://vimeo.com/97102654" class="name has-popup-video">Architecture</a>
										<div class="category">Video</div>
									</div>
								</div>
							</div>

							<!-- work item design -->
							<div class="col col-d-6 col-t-6 col-m-12 grid-item design border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="#popup-2" class="has-popup-media">
											<img src="images/works/work7.jpg" alt="" />
											<span class="info">
												<span class="ion ion-images"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="#popup-2" class="name has-popup-media">Social Website</a>
										<div class="category">Design</div>
									</div>
									<div id="popup-2" class="popup-box mfp-fade mfp-hide">
										<div class="content">
											<div class="image">
												<img src="images/works/work7.jpg" alt="">
											</div>
											<div class="desc">
												<div class="post-box">
													<h1>Mobile Application</h1>						
													<div class="blog-detail">Design</div>
													<div class="blog-content">
														<p>
															So striking at of to welcomed resolved. Northward by described up household therefore 
															attention. Excellence decisively nay man yet impression for contrasted remarkably.
														</p>
														<p>
															Forfeited you engrossed but gay sometimes explained. Another as studied it to evident. 
															Merry sense given he be arise. Conduct at an replied removal an amongst. Remaining 
															determine few her two cordially admitting old.
														</p>
														<blockquote>
															Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia 
															Curae; Pellentesque suscipit.
														</blockquote>
														<p>
															Tiled say decay spoil now walls meant house. My mr interest thoughts screened of outweigh 
															removing. Evening society musical besides inhabit ye my. Lose hill well up will he over on. 
															Increasing sufficient everything men him admiration unpleasing sex.
														</p>
														<ul class="list-style">
															<li>Greatest properly off ham exercise all.</li>
															<li>Unsatiable invitation its possession nor off.</li>
															<li>All difficulty estimating unreserved increasing the solicitude.</li>
														</ul>
														<p>
															Unpleasant astonished an diminution up partiality. Noisy an their of meant. Death means 
															up civil do an offer wound of.
														</p>
													</div>
													<a href="#" class="button">
														<span class="text">View Project</span>
														<span class="arrow"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="clear"></div>
						</div>

					</div>

				</div>
			</div>

			<!--
				Card - Blog
			-->
			<div class="card-inner blog" id="blog-card">
				<div class="card-wrap">

					<!--
						Blog
					-->
					<div class="content blog">

						<!-- title -->
						<div class="title">Latest Posts</div>

						<!-- content -->
						<div class="row border-line-v">
							@foreach ($posts as $post)
								<!-- blog item -->
							<div class="col col-d-12 col-t-12 col-m-12 border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="blog-post.html">
											<img src="images/blog/blog1.jpg" alt="" />
											<img src="/storage/images/{{$post->image}}" alt="">
											<span class="info">
												<span class="ion ion-document-text"></span>
											</span>
											<span class="date"><strong>{{date(' j',strtotime( $post->created_at))}}</strong>{{date('M ',strtotime( $post->created_at))}}</span>
						
											{{-- <span class="date">{{date('<strong>'.'j'.'</strong>'.'<strong>'.'F'.'</strong>',strtotime( $post->created_at))}}</span> --}}
											
										</a>
									</div>
									<div class="desc">
										<a href="{{ url('/blog/'.$post->slug) }}" class="name">{{ $post->title }}</a>
										<div class="category">Design</div>
									</div>
								</div>
							</div>
							@endforeach
							

							

							<div class="clear"></div>
						</div>

					</div>

				</div>
			</div>
			<!--
			
				Card - Contacts
			-->
			<div class="card-inner contacts" id="contacts-card">
				<div class="card-wrap">

					<!--
						Conacts Info
					-->
					<div class="content contacts">

						<!-- title -->
						<div class="title">Get in Touch</div>

						<!-- content -->
						<div class="row">
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="map" id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d19402.658020838127!2d-0.2564677!3d52.5636025!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1637342703551!5m2!1sen!2suk" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
								<div class="info-list">
									<ul>
										<li><strong>Address . . . . .</strong> Peterborough, UK</li>
										<li><strong>Email . . . . .</strong> info@gideonasare.net</li>
										<li><strong>Phone . . . . .</strong> +44 7365793327</li>
										<li><strong>Freelance . . . . .</strong> Available</li>
									</ul>
								</div>
							</div>
							<div class="clear"></div>
						</div>

					</div>

      
					<!--
						Contact Form
					-->
					<div class="content contacts">

						<!-- title -->
						<div class="title">Contact Form</div>

						<!-- content -->
						<div class="row">
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="contact_form">
									<div class="contact_form">
										<form id="cform" method="post">
											<div class="row">
												<div class="col col-d-6 col-t-6 col-m-12">
													<div class="group-val">
														<input type="text" name="name"  id="name" placeholder="Full Name" required />
													</div>
												</div>
												<div class="col col-d-6 col-t-6 col-m-12">
													<div class="group-val">
														<input type="text" name="email" id="email"  placeholder="Email Address"  required/>
													</div>
												</div>
												<div class="col col-d-12 col-t-12 col-m-12">
													<div class="group-val">
														<textarea name="message"  id="message"  placeholder="Your Message" required></textarea>
													</div>
												</div>
											</div>
											<div class="align-left">
												<a href="#" class="button" onclick="$('#cform').submit(); return false;">
													<span class="text">Send Message</span>
													<span class="arrow"></span>
												</a>
											</div>
											<div class="success alert-success" id="success-message">
												<p id="success-message">Thanks, your message is sent successfully.</p>
											</div>
										</form>
										<span class="success" style="color:green; margin-top:10px; margin-bottom: 10px;"></span>
									</div>
									
							</div>
							<div class="clear"></div>
						</div>

					</div>
					
				</div>
			</div>

	
			
	<!--
		jQuery Scripts
	-->

@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
		
       $('#cform').on('submit',function(e){
        e.preventDefault();

        let name = $('#name').val();
        let email = $('#email').val();
        let message = $('#message').val();
        $.ajax({
          url: "/contact/store",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            name:name,
            email:email,
            message:message,
          },
          success:function(response){
            if (response) {
              $('#success-message').text(response.success);
              $("#cform")[0].reset();
            }
          },
         });
        });
      </script>
@endpush