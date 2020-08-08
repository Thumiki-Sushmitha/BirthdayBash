 <style>
 section#contact {
    background-repeat: no-repeat;
}
section {
    padding: 30px 0PX;
}
section#contact .section-heading {
    color: white;
}
section#contact .form-group {
    margin-bottom: 25px;
}
section#contact .form-group input,
section#contact .form-group textarea {
    padding: 20px;
}
section#contact .form-group input.form-control {
    height: auto;
}
section#contact .form-group textarea.form-control {
    height: 236px;
}
section#contact .form-control:focus {
    border-color: #fed136;
    box-shadow: none;
}
section#contact ::-webkit-input-placeholder {
    font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
    text-transform: uppercase;
     font-weight: 700;
    color: #eeeeee;
}
.gellary_bg_none img{
	width: 100%;
	height: 250px;
}
section#contact :-moz-placeholder {
    /* Firefox 18- */
    font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
    text-transform: uppercase;
    font-weight: 700;
    color: #eeeeee;
}
section#contact ::-moz-placeholder {
    /* Firefox 19+ */
    font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
    text-transform: uppercase;
    font-weight: 700;
    color: #eeeeee;
}
section#contact :-ms-input-placeholder {
    font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
    text-transform: uppercase;
    font-weight: 700;
    color: #eeeeee;
}
section#contact .text-danger {
    color: #e74c3c;
}

.about_our_company{
    text-align: center;
}
.about_our_company h1{
    font-size: 25px;
}
.titleline-icon {
    position: relative;
    max-width: 100px;
    border-top: 4px double #F99700;
    margin: 20px auto 20px;
}
.titleline-icon:after {
    position: absolute;
    top: -11px;
    left: 0;
    right: 0;
    margin: auto;
    font-family: 'FontAwesome';
    content: "\f141";
    font-size: 20px;
    line-height: 1;
    color: #F99700;
    text-align: center;
    vertical-align: middle;
    width: 40px;
    height: 20px;
    background: #ffffff;
}
</style>
<div class="container col-sm-8  width = 100%" >
	<section id="contact" style="">
            <div class="container">
                <div class="row">
                    <div class="about_our_company" style="margin-bottom: 20px;">
                        <h1 style="color:#000;">Please Write your valuable sugessions</h1>
                        <div class="titleline-icon"></div>
                        <p style="color:#000; text-align: center; ">We will be happy to get your views </p>
                    </div>
                </div>
                <form action="<?php echo base_url();?>home/setsuggestions" method="post">
                <div class="row">
                    <div class="col-md-8">
                        <form name="sentMessage" id="contactForm" novalidate="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name *" name="name" required="" data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" name="email" required="" data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Your Phone *"  name="phoneno" required="" data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Your Message *"  name="suggest" required="" data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl get"
                                    style="background-color: navy;
                                    color: white;">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <p style="color:#000;">
                            <strong><i class="fa fa-map-marker"></i> Address : </strong><br>
                            CSE,B.Tech(2/4),NIT Warangal
                        </p>
                        <p style="color:#000;"><strong><i class="fa fa-phone"></i> Phone Number :</strong><br>
                            (+91)9876543210</p>
                        <p style="color:#000;">
                            <strong><i class="fa fa-envelope"></i>  Email Address :</strong><br>
                           <a href="mailto:deepthivemula585@gmail.com">contact.support@birthdaybash.com</a></p>
                        <p></p>
                    </div>
                </div>
                </form>
            </div>
        </section>
</div>
     <!--   <b>
<div class="container col-sm-offset-1 col-sm-6 col-sm-offset-5" style="padding-bottom: 50px;background-color: #a4a9ce; border: 3px solid black;">
<h1 style="text-align: center; background-color: blue; padding: 5px; color: white;">Feedback Form</h1><br>
    <p >Tell your valuable suggestions and send your querries which make sthis website much more attractive</p>
     <form class="form" method="POST" action="<?php echo base_url();?>home/suggest">
    <div class="form-group ">
  <label for="usr" >Subject:</label>
  <input type="text" class="form-control" id="usr" name="subject" placeholder="Subject" >
</div>
  <p>The form below contains a textarea for comments:</p>
 
    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" name="comment" rows="5" id="comment" placeholder="Comments/Suggestions">
      </textarea>
    </div>
    <b><p >Please rate our site</p></b>&nbsp;
        <select  name="rate">
        <option value=5>5</option>
        <option value=4>4</option>
        <option value=3>3</option>
        <option value=2>2</option>
        <option value=1>1</option></select><br><br>
        <button type="submit" name="submit" class="btn btn-success">Submit!!</button>
        </form></div></b>-->