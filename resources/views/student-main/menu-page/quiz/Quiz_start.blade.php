<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exam Guidelines</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: #f1f1f1;
        }

        .guideline-card {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            display: none;
        }

        .guideline-body {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .guideline-body img {
            max-width: 200px;
        }

        .footer {
            font-size: 14px;
            color: #777;
            text-align: center;
            margin-top: 30px;
        }

        .progress-bar {
            height: 8px;
        }

        #startTestBtn {
            display: none;
            margin: 20px auto;
        }

    </style>
</head>
<body>

    <div id="cards-container">

        <!-- CARD 1 -->
        <div class="guideline-card">
            <div class="p-3 border-bottom bg-light"><strong> Quiz 6 (General Question)</strong></div>
            <div class="progress">
                <div class="progress-bar bg-success" style="width: 20%"></div>
            </div>
            <div class="p-4 guideline-body">
                <div>
                    <p class="fs-5">Please close all of your chat windows,<br>screen-saver, and anti-virus programs before starting your test</p>
                </div>
                <div>
                    <img src="https://cdn-icons-png.flaticon.com/512/2882/2882807.png" alt="Guideline Icon">
                </div>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="guideline-card">
            <div class="p-3 border-bottom bg-light"><strong> Quiz 6 (General Question)</strong></div>
            <div class="progress">
                <div class="progress-bar bg-success" style="width: 40%"></div>
            </div>
            <div class="p-4 guideline-body">
                <div>
                    <p class="fs-5">Please do not press "F5" during your test.<br>This will finish your test and you will not be able to re-open the test</p>
                </div>
                <div>
                    <img src="https://cdn-icons-png.flaticon.com/512/1828/1828778.png" alt="F5 Warning">
                </div>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="guideline-card">
            <div class="p-3 border-bottom bg-light"><strong>  Quiz 6 (General Question)</strong></div>
            <div class="progress">
                <div class="progress-bar bg-success" style="width: 60%"></div>
            </div>
            <div class="p-4 guideline-body">
                <div>
                    <p class="fs-5">Your responses will be saved. If your test is disconnected, your responses up to that point will be saved</p>
                </div>
                <div>
                    <img src="https://cdn-icons-png.flaticon.com/512/1792/1792719.png" alt="Auto Save">
                </div>
            </div>
        </div>

        <!-- CARD 4 -->
        <div class="guideline-card">
            <div class="p-3 border-bottom bg-light"><strong>  Quiz 6 (General Question)</strong></div>
            <div class="progress">
                <div class="progress-bar bg-success" style="width: 80%"></div>
            </div>
            <div class="p-4 guideline-body">
                <div>
                    <p class="fs-5">Please close all programs that upload or download files<br>in the background (e.g. Dropbox, torrent, etc)</p>
                    <button id="nextToAgreement" class="btn btn-primary mt-3">Next</button>
                </div>


                <div>
                    <img src="https://cdn-icons-png.flaticon.com/512/2882/2882807.png" alt="Programs Block">
                </div>
            </div>
        </div>
        <!-- AGREEMENT CARD -->
        <div class="guideline-card" id="agreementCard">
            <div class="p-3 border-bottom bg-light"><strong>Instructions of Quiz 6 (General Question)</strong></div>
            <div class="p-4">
              
                <div class="form-check">
                    <label class="form-check-label" for="agreeRadio">Do all </label><br>
                    <input class="form-check-input" type="radio" name="agreement" id="agreeRadio">
                    <label class="form-check-label">I am ready to begin</label>
                </div>
                <button id="startTestBtnFinal" class="btn btn-success mt-3" disabled>Start Exam</button>
            </div>
        </div>


    </div>

    <!-- Start Test Button -->
    <div class="text-center">
        <button id="startTestBtn" class="btn btn-success">Start Exam</button>
    </div>

    <div class="footer">
        Copyright &copy; 2025 <strong>Nursing Today</strong> |
        Date &amp; Time: <span id="datetime"></span><br>
        Powered by <strong>Nursing Today</strong>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      // Real-time datetime
      setInterval(() => {
        document.getElementById("datetime").textContent = new Date().toLocaleString();
      }, 1000);
    
      $(document).ready(function () {
        let currentIndex = 0;
        const cards = $(".guideline-card").not("#agreementCard"); // Ignore agreement card initially
        const totalCards = cards.length;
    
        function showCard(index) {
          $(".guideline-card").hide();
          $(cards[index]).fadeIn();
        }
    
        showCard(currentIndex);
    
        const interval = setInterval(() => {
          currentIndex++;
          if (currentIndex < totalCards) {
            showCard(currentIndex);
          } else {
            clearInterval(interval);
            // Show "Next" on last card instead of Start button
            $("#nextToAgreement").show();
          }
        }, 2000); // 2 seconds
    
        // Handle next to agreement
        $("#nextToAgreement").click(function () {
          $(".guideline-card").hide();
          $("#agreementCard").fadeIn();
        });
    
        // Enable Start button only when radio is checked
        $("#agreeRadio").change(function () {
          if ($(this).is(":checked")) {
            $("#startTestBtnFinal").prop("disabled", false);
          }
        });
    
        // Final start test
        $('#startTestBtnFinal').click(function () {
          window.location.href = "{{route('student.start_qu')}}";
        });
      });
    </script>
    

</body>
</html>
