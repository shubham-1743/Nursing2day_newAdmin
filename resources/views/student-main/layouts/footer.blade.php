<div class="footer">
    <div class="row">
      <div class="col">
        <h4>About us</h4>
        <p><strong>Nursing Today</strong> Enables you to conduct flexible online examination system with ease. Powerful system, dozen of settings, native mobile app and secure frame work make the software stand different in crowd.</p>
      </div>
      <div class="col">
        <h4>Quick Links</h4>
        <p><a href="#">About Nursing2Day</a></p>
        <p><a href="#">Privacy Policy</a></p>
        <p><a href="#">Terms and Conditions</a></p>
        <p><a href="#">Refund and Cancellation</a></p>
        <p><a href="#">FAQ</a></p>
      </div>
      <div class="col">
        <h4>Address</h4>
        <p>746, Barkat Nagar, Tonk Phatak, Jaipur - 302015</p>
        <p>Email: info@nursing2day.com</p>
        <p>Mobile: +91 9529488883</p>
      </div>
      <div class="col">
        <h4>Link Us</h4>
        <p><a href="#">Facebook</a></p>
        <p><a href="#">Youtube</a></p>
      </div>
    </div>
    <div class="footer-bottom">
      © Copyright 2025 Nursing Today | Time: {{ now()->format('d-m-Y h:i:s A') }} | Powered by Nursing Today
    </div>
  </div>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    function openTab(evt, tabName) {
      var i, tabcontent, tablinks;
  
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
  
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
      }
  
      document.getElementById(tabName).style.display = "block";
      evt.currentTarget.classList.add("active");
    }
  
    document.getElementById("defaultOpen").click();
  </script>
  