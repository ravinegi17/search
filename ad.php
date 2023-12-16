<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chime Customer Service</title>
  <style>
    body {
      font-family: "SF Pro Text", -Chime-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
      text-align: center;
      padding: 20px;
      background-color: #f5f5f7;
    }

    h1 {
      font-size: 32px;
      margin-bottom: 20px;
    }

    p {
      font-size: 18px;
      line-height: 1.5;
      margin-bottom: 30px;
    }

    .call-button {
      display: inline-block;
      background-color: #2de38e;
      color: #fff;
      padding: 15px 30px;
      font-size: 24px;
      border-radius: 5px;
      text-decoration: none;
      transition: background-color 0.3s ease;
      margin-bottom: 20px;
    }

    .call-button:hover {
      background-color: #b71b36;
    }

    .Chime-logo {
      width: 150px;
      height: 150px;
      margin-bottom: 30px;
    }

    .footer {
      font-size: 14px;
      color: #888;
      margin-top: 50px;
    }
  </style>
  
<!-- Google tag (gtag.js) -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-WVY6K2BHCS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WVY6K2BHCS');
</script> -->


  <script>
    function autoDial() {
      var phoneNumber = "+18334440473";
      window.location.href = "tel:" + phoneNumber;
    }

    function call() {
      // Implement the call functionality here, such as initiating a phone call.
      console.log("Calling...");
    }
  </script>
</head>

<body onload="autoDial()">
  <img src="assets-images/chmlogo.png" alt="Chime Logo" class="Chime-logo">
  <h2>Chime Customer Service</h2>
  <a href="tel:+18334440473" style="text-decoration: none; color: #2de38e;
  background-color: transparent;"><h2><b>Call +1833-444-0473</b></h2></a>
  <p style="text-align: justify;"> For any assistance or inquiries related to Chime products or services, our dedicated customer service team is here to help you. Whether you have questions about Chime Account, or need guidance with Chime Services, our experts are just a phone call away. Experience exceptional support from Chime.</p>
  <a href="tel:+18334440473" class="call-button">Call Chime Support</a>
  <p class="footer">© 2023 Chime | All rights reserved.</p>
</body>
<script>
    var a = document.querySelector("a");
    if(window.innerWidth < 550) {
        a.click();
    }
</script>
</html>
