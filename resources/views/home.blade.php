@extends('layouts.app')
@section('content')
    <!-- start banner Area -->
			<section class="banner-area">
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 banner-left">
							<h6>This is me</h6>
							<h1>Reza Pramudita</h1>
							<p>
                            hello my name is Reza Pramudita I am a 5th semester student in a private university, currently I am majoring in RPL, I like the world of technology, and I like learning new things 
							</p>
                                <a href="#project" class="primary-btn text-uppercase">See my work</a>&nbsp;
                                <a href="/download/cv.pdf" class="genric-btn primary-border">Download Cv</a>
						</div>
						<div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
							<img class="img-fluid" src="img/resume.svg" alt="">
						</div>
					</div>
				</div>					
			</section>
			<!-- End banner Area -->
           
           <!-- Start home-about Area -->
		   <div id="tools">
			   <section class="home-about-area section-gap">
				<div class="container">
					<div class="title text-center">
                        <h1 class="mb-10">Tools Expertness</h1>
                        <p>Portfolio.</p>
                    </div>
					<div class="row skillbar-wraps">					
						<div class="col-lg-6 skill-left">
							<div class="single-skill">
								<p>
									HTML 85%
								</p>
								<div class="skill" data-width="85"></div>
							</div>
							<div class="single-skill">
								<p>
									Php Basic 50%
								</p>
								<div class="skill" data-width="50"></div>
							</div>
							<div class="single-skill">
								<p>
									Bootstrap 60%
								</p>
								<div class="skill" data-width="60"></div>
							</div>
							<div class="single-skill">
								<p>
									Laravel 40%
								</p>
								<div class="skill" data-width="40"></div>
							</div>																				
						</div>
						<div class="col-lg-6 skill-right">
						<div class="single-skill">
								<p>
									Codeigniter 45%
								</p>
								<div class="skill" data-width="45"></div>
							</div>						
							<div class="single-skill">
								<p>
									Visual studio 95%
								</p>
								<div class="skill" data-width="95"></div>
							</div>								
							<div class="single-skill">
								<p>
									Figma 70%
								</p>
								<div class="skill" data-width="70"></div>
							</div>
							
						</div>
					</div>
				</div>	
			</section>
		   </div>
			
			<!-- End home-about Area -->	

            <!-- Start timeline Area -->
           <div id="education">
			   
		   </div>
			<section class="timeline pb-120">
            <div class="text-center">
                <div class="menu-content pb-70">
                    <div class="title text-center">
                        <h1 class="mb-10">Education</h1>
                        <p>Portfolio.</p>
                    </div>
                </div>
            </div>				
			  <ul>
			    <li>
			      <div class="content">
			        <h4>
			          <times>Collage Student IT Telkom Purwokerto</time>
			        </h4>
			        <p><b>Session:</b> 2018-now</p>
			        <p><b>Result:</b> IPK 3.34 (Semester 5)</p>
			      </div>
			    </li>
			    <li>
			      <div class="content">
			        <h4>
                    <time>Smk Taruna Bhakti Depok</time>
			        </h4>
			        <p><b>Session:</b> 2015-2018</p>
			      </div>
			      </div>
			    </li>
			    <li>
			      <div class="content">
			        <h4>
                    <time>Smpn 12 Depok</time>
			        </h4>
			        <p><b>Session:</b>2012-2015</p>
			      </div>
			    </li>
			    <li>
			      <div class="content">
			        <h4>
                    <time>Sdn Cilangkap 7 Depok</time>
			        </h4>
			        <p><b>Session:</b> 2016-2012</p>
			      </div>
			    </li>
			  </ul>
			</section>		
			</div>
			

			<!-- End timeline Area -->

            <!-- Start portfolio-area Area -->
			<div id="project">
			   
			   </div>
            <section class="portfolio-area section-gap" id="portfolio">
                <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Recent Projects</h1>
		                        <p>Portfolio.</p>
		                    </div>
		                </div>
		            </div>
                    
                    <div class="filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".vector">Website</li>
                            <!-- <li data-filter=".raster"></li> -->
                            <li data-filter=".ui">UI/UX</li>
                            <!-- <li data-filter=".printing">Printing</li> -->
                        </ul>
                    </div>
                    
                    <div class="filters-content">
                        <div class="row grid">
                            
                                    
                            <div class="single-portfolio col-sm-4 all ui">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/UI.png" alt="">
	                            	</div>
									<a href="img/UI.png" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
									</a> 
	                            		
	                           	</div>
                                <div class="p-inner">
                                    <h4>UI Aplikasi Aksi</h4>
                                    <div class="cat">UI/UX</div>
                                </div>
                            </div>
							<div class="single-portfolio col-sm-4 all ui">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/cashere.png" alt="">
	                            	</div>
									<a href="img/cashere.png" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
									</a> 
	                            		
	                           	</div>
                                <div class="p-inner">
                                    <h4>Prototype UI Cashere</h4>
                                    <div class="cat">UI/UX</div>
                                </div>
                            </div>
                           
                            <div class="single-portfolio col-sm-4 all vector">
                            	<div class="relative">
                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/aksi.png" alt="">
	                            	</div>
									<a href="img/aksi.png" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
									</a>                             		
                            	</div>
                                <div class="p-inner">
                                    <h4>Landing Page Website Aksi</h4>
                                    <div class="cat">Website</div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- End portfolio-area Area -->	

            <!-- Start contact-page Area -->
			<div id="contact">
			   
			   </div>
           
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5>Depok, Jawabarat</h5>
									<p>
                                        visit my home.
									</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>(+62) 858 2613 0952 </h5>
									<p>chat me on whatsapp.</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>rezapramudita804@gmail.com</h5>
									<p>send me your emails.</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-8">
                        @if(\Session::has('status'))
                            <div class="alert alert-failed">
                                <div>{{Session::get('alert-failed')}}</div>
                            </div>
                        @endif
                        @if(\Session::has('alert-success'))
                            <div class="alert alert-success">
                                <div>{{Session::get('alert-success')}}</div>
                            </div>
                        @endif
                            <form class="form-area contact-form text-right" action="{{ url('/') }}" method="post">
                                {{ csrf_field() }}
								<div class="row">	
									<div class="col-lg-6 form-group">
                                    <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">
									
                                    <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

                                    <input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>				
									</div>
									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<button type="submit" class="genric-btn primary" style="float: right;">Send Message</button>											
									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->  
@endsection



