<!-- Contact Section -->
<div id="contact" class="contact section-invert py-4">
  <h3 class="section-title text-center m-5">Contact Us</h3>
  <div class="container py-4">
    <div class="row justify-content-md-center px-4">
      <div class="contact-form col-sm-12 col-md-10 col-lg-7 p-4 mb-4 card">
        <form>
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label for="contactFormFullName">First Name</label>
                <input type="text" class="form-control" id="contactFormFirstName" placeholder="Enter your first name">
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label for="contactFormEmail">Last Name</label>
                <input type="text" class="form-control" id="contactFormLastName" placeholder="Enter your last name">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10 col-sm-12">
              <div class="form-group">
                <label for="contactFormEmail">Email address</label>
                <input type="email" class="form-control" id="contactFormEmail" placeholder="Enter your email address">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5 col-sm-12">
              <div class="form-group">
                <label for="contactFormSubject">Subject</label>
                <fieldset>
                  <select id="form-subject" name="subject" class="custom-select w-100" required="" onchange="getSubjectSelectForm()">
                    <option value="">Select Your Subject</option>
                    <option value="quote">Request a Quote</option>
                    <option value="demo">Request a Demo</option>
                    <option value="meeting">Schedule a meeting</option>
                    <option value="caht">Just Chat</option>
                    <option value="portfolio">Submit My Portfolio</option>
                  </select>
                </fieldset>
              </div>
            </div>
          </div>
          <div id="form-portfolio" class="row" style="display:none;">
            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label for="contactFormSubject">Upload Portfolio</label>
                <fieldset>
                  <div class="custom-file w-100">
                    <input type="file" class="custom-file-input" id="portfolioFile">
                    <label class="custom-file-label" for="portfolioFile">Choose file...</label>
                  </div>
                </fieldset>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                  <label for="exampleInputMessage1">Message</label>
                  <textarea id="exampleInputMessage1" class="form-control mb-4" rows="10" placeholder="Enter your message..." name="message"></textarea>
              </div>
            </div>
          </div>
          <input class="btn btn-primary btn-pill d-flex ml-auto mr-auto" type="submit" value="Send Your Message">
        </form>
        
      </div>
    </div>
  </div>
</div>
<script>
  function getSubjectSelectForm() {
    if (jQuery('#form-portfolio').css('display') == 'none') {
      jQuery('#form-portfolio').show();
    } else {
      jQuery('#form-portfolio').hide();
    }
  }
</script>
<!-- / Contact Section -->