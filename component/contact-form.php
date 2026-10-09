<form action="<?php echo BASE_URL ?>php/contact-form-query.php" method="post" id="contactForm">
    <div class="row">
        <div class="col-lg-6 pr-lg-1">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="col-lg-6 pl-lg-1">
            <label>Phone</label>
            <input type="number" name="phone" class="form-control" placeholder="Phone" maxlength="13" minlength="10">
        </div>
        <div class="col-12">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="col-12">
            <label>Company</label>
            <input type="text" name="company" class="form-control" placeholder="Company">
        </div>
        <div class="col-12">
            <label>Services</label>
            <select name="services" class="form-control">
                <option value="">Selected you services . . . </option>
                <optgroup label="REGULATORY AFFAIRS">
                    <option value="CDSCO">CDSCO</option>
                    <option value="NPPA: Pricing & Overcharging Matters">NPPA: Pricing & Overcharging Matters</option>
                    <option value="FSSAI: Food License">FSSAI: Food License</option>
                    <option value="Legalization: MEA & Embassy">Legalization: MEA & Embassy</option>
                    <option value="State License">State License</option>
                    <option value="Central Bureau of Narcotics Quota">Central Bureau of Narcotics Quota</option>
                    <option value="DSIR">DSIR</option>
                </optgroup>
                <option value="LEGAL SERVICES">LEGAL SERVICES</option>
                <option value="QUALITY ASSURANCE">QUALITY ASSURANCE</option>
            </select>
        </div>
        <div class="col-12">
            <label>Message</label>
            <textarea name="message" id="" placeholder="Message" class="form-control"></textarea>
        </div>
        <div class="col-12">
            <button class="vkp-button w-100 py-4">Send my message</button>
        </div>
    </div>
</form>