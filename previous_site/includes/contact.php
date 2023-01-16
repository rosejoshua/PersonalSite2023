<?php

    if (isset($_POST['name']) && $_POST['name'] != '' && isset($_POST['referral']) && $_POST['referral'] != '' && isset($_POST['contact_body']) && $_POST['contact_body'] != '' ) {
        
    $userName = $_POST['name'];
    $replyTo = $_POST['replyto'];
    $referredFrom = $_POST['referral'];
    $postBody = $_POST['contact_body'];

    $to = "errantaxiom@gmail.com";
    $subject = "contact-message";
    $body = "";
    $body .= "From: ".$userName."\r\n";
    $body .= "Reply To: ".$replyTo."\r\n";
    $body .= "Referred By: ".$referredFrom."\r\n";
    $body .= "Message: ".$postBody."\r\n";
    
    mail($to, $subject, $body);
    }
?>

<div class="row starthidden" id="contact">
    <div class="fullcolumn">
        <div class="card">
            <h2 class="cardtitlecontact center">Send Me A Message</h2>
            <div class="container">
                <form id="contact_form" action="index.php" method="POST">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="Or nickname..." maxlength="50" required>
                    
                    <label for="replyto">Contact Details (If You Want A Response)</label>
                    <input type="text" id="replyto" name="replyto" placeholder="123-456-7890, abc@site.com, IG:@handle, etc..." maxlength="50">
                    
                    <label for="referral">How Did You Find My Site?</label>
                    <select required name="referral" id="referral">
                        <option value="" disabled selected hidden>Choose one...</option>
                        <option value="internet_search">Internet search</option>
                        <option value="linkedin">LinkedIn</option>
                        <option value="github">GitHub</option>
                        <option value="youtube">YouTube</option>
                        <option value="resume">Your resume</option>
                        <option value="you_told_me">You told me about it</option>
                        <option value="return_visitor">Not my first visit</option>
                    </select>
                    
                    <label for="contact_body">Subject</label>
                    <textarea id="contact_body" name="contact_body" placeholder="Write something..." style="height:200px" maxlength="3000" required></textarea>
                    
                    <div class="center">
                        <input class="readMoreButton" id="form_submit" type="submit" value="Submit"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
