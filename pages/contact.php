<?php
    require_once 'includes/functions.php';
?>
<!--Section: Contact v.2-->
<section class="mb-4">
<br>  

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Nom</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Nom">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="lastname" class="">Prénom</label>
                            <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Prénom">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Mail</label>
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="ex : sehh@ghs.com">
                            
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form"> 
                            <label for="message">Message</label>
                            <textarea type="text" id="message" name="message" rows="6" class="form-control md-textarea" placeholder="Message..."></textarea>
                           
                        </div>

                    </div>
                </div>
                <br>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary">Envoyer</a>
            </div>
            <div class="status"></div>
        </div>


    </div>

</section>
<br>
<br>