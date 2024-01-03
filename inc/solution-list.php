
    <div class="side-form">
        <h4 class="heading-form">Enquire Now</h4>
    <form name="get_instant_call" action="get_instant_call_mail.php" method="post" id="get_instant_call">
        <input type="text" id="name-2" name="name_2" placeholder="Name" class="form-control mb-2" onkeypress="return isNAME(event)">
        <input type="email" id="emailid-2" name="emailid_2" placeholder="Email" class="form-control mb-2">
        <input type="tel" id="mobileno-2" name="mobileno_2" placeholder="Mobile" class="form-control mb-2" onkeypress="return isNumber(event)" maxlength="10">
        <textarea name="message_2" id="message-2" placeholder="Message" class="form-control mb-2"></textarea>
        <p class="bot-text">(Are you human, or spanbot?)</p>
      <div class="form-group plus-captcha">
        <p class=" plus-text"><span class="">8</span>+<span class="">5</span>=</p>
        <input type="text" class="form-control" name="captcha" id="captcha" placeholder="Please enter Total" required>
        <input type="hidden" class="form-control" name="captchatotal" id="captchatotal" value="<?php echo $total;?>" >
      </div>
        <input type="submit" class="btn btn-black mt-2" value="Submit" name="submit" onclick="return get_instant_call_validation();">
        <a href="tel:9910200288" class="btn btn-secondary mt-2" style="height:45px;display:inline-block;position:relative;vertical-align:middle;border-radius: 8px;float:right;padding:10px 12px"><span><i class="fa fa-phone mr-2" aria-hidden="true"></i></span>CALL NOW</a>
    </form>
</div>
<div class="solutions-list">
    <li>
        <a href="server-support-and-amc.php"><span>Server support and AMC</span></a>
    </li>
    <li>
        <a href="firewall.php"><span>Firewall</span></a>
    </li>
    <li>
        <a href="wifi-solutions.php"><span>WIFI Solutions</span></a>
    </li>
    <li>
        <a href="networking.php"><span>Networking</span></a>
    </li>
    <li>
        <a href="router-and-switching.php"><span>Router and Switching</span></a>
    </li>
    <li>
        <a href="cctv-surveillance.php"><span>CCTV Surveillance</span></a>
    </li>
    <li>
        <a href="biometric.php"><span>Biometric</span></a>
    </li>
    <li>
        <a href="lan-structured-cablingt.php"><span>LAN Structured cabling</span></a>
    </li>
    <li>
        <a href="voip.php"><span>VOIP</span></a>
    </li>
    <li>
        <a href="epbax-solutions.php"><span>EPBAX Solutions</span></a>
    </li>
</div>

