<div class="footer" style="background: #024b86; color: white; padding: 30px 20px; margin-top: 40px;">
  <div class="row" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
    <div class="col" style="flex: 1 1 220px; margin: 10px;">
      <h4 style="margin-bottom: 10px; border-bottom: 2px solid white; display: inline-block; padding-bottom: 5px;">About us</h4>
      <p><strong>Nursing Today</strong> Enables you to conduct flexible online examination system with ease. Powerful system, dozen of settings, native mobile app and secure frame work make the software stand different in crowd.</p>
    </div>
    <div class="col" style="flex: 1 1 220px; margin: 10px;">
      <h4 style="margin-bottom: 10px; border-bottom: 2px solid white; display: inline-block; padding-bottom: 5px;">Quick Links</h4>
      <p><a href="#" style="color: white;">About Nursing2Day</a></p>
      <p><a href="#" style="color: white;">Privacy Policy</a></p>
      <p><a href="#" style="color: white;">Terms and Conditions</a></p>
      <p><a href="#" style="color: white;">Refund and Cancellation</a></p>
      <p><a href="#" style="color: white;">FAQ</a></p>
    </div>
    <div class="col" style="flex: 1 1 220px; margin: 10px;">
      <h4 style="margin-bottom: 10px; border-bottom: 2px solid white; display: inline-block; padding-bottom: 5px;">Address</h4>
      <p>746, Barkat Nagar, Tonk Phatak, Jaipur - 302015</p>
      <p>Email: info@nursing2day.com</p>
      <p>Mobile: +91 9529488883</p>
    </div>
    <div class="col" style="flex: 1 1 220px; margin: 10px;">
      <h4 style="margin-bottom: 10px; border-bottom: 2px solid white; display: inline-block; padding-bottom: 5px;">Link Us</h4>
      <p><a href="#" style="color: white;">Facebook</a></p>
      <p><a href="#" style="color: white;">Youtube</a></p>
    </div>
  </div>
  <div class="footer-bottom" style="text-align: center; margin-top: 20px; border-top: 1px solid #ccc; padding-top: 10px; font-size: 13px;">
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
