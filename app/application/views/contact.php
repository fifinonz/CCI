<div class="top-image">
    <img src="<?php echo base_url();?>assets/images/faq-top.jpg" alt="" />
</div><!-- Page Top Image -->

<section class="inner-page">
    <div class="container">
        <div class="page-title">
            <h1>Contact <span>Us</span></h1>
        </div><!-- Page Title -->
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info">
                    <h3 class="sub-head">CONTACT INFORMATION</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.789963224817!2d36.8071222!3d-1.3008954000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10ec4e8f002f%3A0xd6b6ca540f4d4701!2sKenyatta+National+Hospital!5e0!3m2!1sen!2sus!4v1433581201451" width="600" height="450" frameborder="0" style="border:0"></iframe>
                    <p>We would love to have your organization on board as a partner/sponsor or just you as a volunteer. Get in touch with us today and <a href="<?php echo base_url();?>site/relay/get_involved">get involved now!</a></p>

                    <ul class="contact-details">
                        <li>
                            <span><i class="icon-home"></i>ADDRESS</span>
                            <p>KENCASA Offices, KNH Nairobi.</p>
                        </li>
                        <li>
                            <span><i class="icon-phone-sign"></i>PHONE NO</span>
                            <p>(+254) 717-666-044</p>
                        </li>
                        <li>
                            <span><i class="icon-envelope-alt"></i>EMAIL ID</span>
                            <p>info@relayforlifekenya.org</p>
                        </li>
                        <li>
                            <span><i class="icon-link"></i>WEB ADDRESS</span>
                            <p>http://www.relayforlifekenya.org</p>
                        </li>
                    </ul>
                    <p>We try to keep our administration costs as low possible so that more of the money that you raise for Relay For Life can go towards funding Kenya Cancer Association's life-saving work.<br><br>Please help us keep costs down by checking if your query can be answered by our <a href="<?php echo base_url();?>site/relay/faqs" >frequently asked questions</a> before you contact us.</p>

                </div>
            </div>	<!-- Contact Info -->
            <div class="col-md-6">
                <div id="message"></div>
                <div class="form">
                    <h3 class="sub-head">SEND US A MESSAGE</h3>

                    <p>Required fields <span>*</span></p>
                    <form method="post"  action="#" name="contactform" id="contactform">
                        <label for="name" accesskey="U">Full name <span>*</span></label>
                        <input name="vname" class="form-control input-field" type="text" id="name" size="30" value="" placeholder="Your Name" />
                        <label for="email" accesskey="E">Email Address <span>*</span></label>
                        <input name="vemail" class="form-control input-field" type="text" id="email" size="30" value="" placeholder="Your Email"/>
                        <label for="subject" accesskey="S">Subject <span>*</span></label>
                        <input name="vname" class="form-control input-field" type="text" id="name" size="30" value="" placeholder="Subject"/>
                        <label for="comments" accesskey="C">Message <span>*</span></label>
                        <textarea name="msg" rows="9" id="comments" rows="7" class="form-control input-field" placeholder="Type your text here..."></textarea>
                        <input type="submit" class="form-button submit" id="send" value="SEND MESSAGE" />
                    </form>
                        <h3><?php include "secure_email_code.php"?></h3> 
                </div>
            </div>	<!-- Message Form -->
        </div>
    </div>


    <div class="container">
        <h3>FIND US ON SOCIAL MEDIA.</h3>
        <ul class="social-bar">
            <li><a title="" href="#"><img alt="" src="<?php echo base_url();?>assets/images/youtube.png"></a></li>
            <li><a title="" href="https://www.facebook.com/Relay4LifeKenya"><img alt="" src="<?php echo base_url();?>assets/images/facebook.png"></a></li>
            <li><a title="" href="https://www.twitter.com/Relay4LifeKE"><img alt="" src="<?php echo base_url();?>assets/images/twitter.png"></a></li>
            <li><a title="" href="https://instagram.com/relayforlifekenya/"><img alt="" src="<?php echo base_url();?>assets/images/instagram.jpg"></a></li>

        </ul>
    </div><!-- Social Media Bar -->

    <section class="block whitish">
        <div class="container">
            <div class="fixed whitish" style="background:url(images/parallax2.jpg);"></div>
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-3">
                    <div class="service">
                        <img src="<?php echo base_url();?>assets/images/service1.png" alt="">
                        <h4>OUR <span>COMMITMENT </span></h4>
                        <p>With your Support we are commited to the fight for a future without cancer</p>
                        <a href="#" title="">Volunteer</a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="service">
                        <img src="<?php echo base_url();?>assets/images/service2.png" alt="">
                        <h4>20 <span>countries</span></h4>
                        <p>More than 5,000 Relay For Life events take place across twenty countries. </p>
                        <a href="https://en.wikipedia.org/wiki/Relay_For_Life" target="_blank" title="">READ</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service">
                        <img src="<?php echo base_url();?>assets/images/service3.png" alt="">
                        <h4>88.3% <span>of all KSH</span></h4>
                        <p>Money we raise goes to Supporting the Fight Against Cancer in Kenya</p>
                        <a href="<?php echo base_url();?>site/relay/donate" title="">DONATE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>