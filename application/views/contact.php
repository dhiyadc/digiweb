<?php $this->load->view('layout/header')?>
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
                    <div class="page_link">
						<a href="<?= base_url() ?>">Home</a>
						<a href="<?= base_url() ?>/contact">Contact</a>
					</div>
						<h2 style="color: white; text-shadow: 2px 2px 4px #000000; letter-spacing: 10px; word-spacing: 10px;">CONTACT US</h2>
						
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Contact Area =================-->
        <!--
        <section class="contact_area section_gap">
            <div class="container">
                <div>

                </div>
            </div>
        </div>
    </section>
     -->
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
        <div class="container">
            <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.4205959609862!2d104.72406721483576!3d-2.980680297829198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b74774ada4081%3A0xced91e4b000cd6b0!2sDigital%20Creative!5e0!3m2!1sid!2sid!4v1584780570718!5m2!1sid!2sid" width="600" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            
            
                <div class="col-lg-5 mt-4">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Palembang,Indonesia</h6>
                            <p>Jl. Lunjuk Jaya, Lorok Pakjo, Kec. Ilir Bar. I, Kota Palembang, Sumatera Selatan 30137</p>
                        </div>
                        <div class="info_item mt-3">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">0811-7199-210</a></h6>
                            <p>Mon to Fri 8am to 6 pm</p>
                        </div>
                        <div class="info_item mt-3">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">warungbelajar@gmail.com</a></h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mt-4">
                    <form class="row contact_form" action=" mailto: warungbelajar@gmail.com?cc=" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="primary_btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modals error -->

    <div id="error" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Sorry !</h2>
                    <p> Something went wrong </p>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->
    </section>
    
    <?php $this->load->view('layout/footer')?>   
    <!--================Contact Area =================-->
    
        
   
       