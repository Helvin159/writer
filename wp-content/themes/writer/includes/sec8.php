<div class="container-fluid contactForm py-5" style="background: url(<?php echo get_theme_file_uri('assets/img/a1.jpg') ?>)">
    <div class="container px-5">
            <div class="container  formContainer">
                <div class="container py-4">
                    <h2>LET'S START A CONVERSATION</h2>
                </div>

                <!-- <hr class="w-25"> -->
                <div class="container">

                    <form action="#" id="universalForm">
                    <label for="">
                        <input type="text" name="fName" class="px-3" placeholder="Name">
                        <p id="noNameMsg" class="p-0 m-0 d-none red fontSize15 errMessages">Please enter a name.</p>
                    </label>
                    <label for="">
                        <input type="email" name="email" id="univEmail" class="px-3" placeholder="Email">
                        <p id="noEmailMsg" class="p-0 m-0 d-none red fontSize15 errMessages">Please enter an email address.</p>
                    </label>
                    <br>
                    <label for="">
                    <input type="date" name="date" id=""><input name="time" type="time">
                    <p id="noDateMsg" class="p-0 m-0 d-none red fontSize15 errMessages">Please enter a date.</p>
                    </label>
                    <br>                
                    <label for="">
                        <textarea name="messageOrComment" id="contactComment" class="px-2" placeholder="Message"></textarea>
                        <p id="noMessageMsg" class="p-0 m-0 d-none red fontSize15 errMessages">Please enter a message.</p>
                    </label>
                    <br>
                    <div class="text-left py-2">
                        <input type="submit" class="btn btn-md btnPurple lightGrey josefinLight fontSize18">
                    </div>
                    
                    </form>
                    <h3 class="d-none text-center p-4 white" id="sec8ErrorMsg">Uh Oh, looks like something went wrong. Please Try Again!</h3>
                </div>
                
            </div>
            <div class="container py-5 d-none thankyouMessage">
                <h1>Thank You!</h1>
                <h3>I'll be in touch ASAP</h3>
            </div>
    </div>
</div>