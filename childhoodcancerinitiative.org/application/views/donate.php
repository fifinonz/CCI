
<div class="top-image">
    <img src="<?php echo base_url();?>assets/images/faq-top.jpg" alt="" />
</div><!-- Page Top Image -->

<section class="inner-page switch">
    <div class="container">

        <div class="row">
            <div class="left-content col-md-9">

                <div class="single-service">
                    <span><i style="color: #800080" class="icon-cogs"></i></span>
                    <h1> How Does The Money Raised Through Relay For Life® Make A Difference?</h1>
                    <p style="font-size: 24px;">Donations raised through Relay For Life KE support the Kenya Cancer Association efforts in rolling out cancer  education programmes in the rural areas to provide up-to-date cancer prevention and early detection information to educate people about the disease, establishing a toll free line for cancer information and cancer activities as well as offering free free programs and services to improve the quality of life for people facing cancer and their families. Visit our webpage
                        <a href="http://www.kenyacancer.org/">Kenya Cancer Association</a>
                        to learn more about how we are making a difference and our role in the fight against cancer.
                    </p>

                    <div class="benifits">
                        <h1><strong>How to Make A Donation</strong></h1><br/>

                        <ul style="font-size: 24px;">
                            <li><i style="color: #800080" class="icon-check"></i> Go to <strong>MPESA Menu</strong></li>
                            <li><i style="color: #800080" class="icon-check"></i> Select <strong>Lipa na MPESA</strong></li>
                            <li><i style="color: #800080" class="icon-check"></i> Enter Business number <strong>288773</strong></li>
                            <li><i style="color: #800080" class="icon-check"></i> Enter the word <strong>DONATION</strong> as the account number</li>
                            <li><i style="color: #800080" class="icon-check"></i> Enter Amount to send, your MPESA pin and confirm the transaction</li>
                        </ul>
                    </div>
                </div>


</div>
            <?php
            if (!$this->ion_auth->logged_in())

            {
                include "nav_new_user.php";
            }

            else
            {
                include "nav_logged_in.php";
            }
            ?>
        </div>

</div>
</section>

