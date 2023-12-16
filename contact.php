<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - AskandExplore</title>
        <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        .container {
            padding: 10px;
        }

        form {
            max-width: 570px;
            margin: 20px auto;
        }

        form input,
        form textarea {
            padding: 12px 12px;
            width: 100%;
            outline: none;
            border: 1px solid #766e6e;
            margin-top: 10px;
            font-size: 16px;
            border-radius: 5px;
        }

        form textarea {
            height: 90px;
        }

        form button {
            padding: 9px 12px;
            outline: none;
            border: 1px solid #766e6e;
            margin-top: 10px;
            font-size: 15px;
            background: #4d90fe;
            color: #fff;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }

        footer {
            margin: 0 auto !important;
        }
    </style>
</head>

<body>
    <style>
    .header {
        padding: 15px;
    }
</style>

<div class="header">
    <a href="/">
        <img src="iassets/logo.png" alt="AskandExplore Logo" width="150px">
    </a>
</div>    <div class="container">
        <h2>Contact</h2>
        <form method="post" action="mail.php">
            <input type="text" placeholder="Name" name="name" required="">
            <input type="email" placeholder="Email" name="email" required="">
            <input type="tel" placeholder="Phone Number" name="phone" required="">
            <textarea placeholder="Message" name="message" required=""></textarea>
            <button type="submit" value="Submit">Submit</button>
        </form>
    </div>
    <style>
    footer {
        max-width: 550px;
        margin: -50px auto 0 auto;
        font-family: sans-serif;
        text-align: center;
    }

    footer a {
        text-decoration: none;
        color: #000;
        font-weight: 600;
        display: inline-block;
        padding: 0 10px;
    }

    footer a.link-line {
        border-left: 2px solid #000;
    }

    .copy-right {
        margin-top: 15px;
    }

    .copy-right p {
        font-weight: 600;
        display: inline-block;
        border-left: 2px solid #000;
        border-right: 2px solid #000;
        padding: 0 10px;
    }

    .text {
        text-align: center;
        color: #000;
        font-weight: 600;
        margin-bottom: 30px;
        font-size: 25px;
    }
</style>
<footer>
    <p class="text">Explore the web with AskandExplore - your search companion.</p>
    <div class="footer-row">
        <a href="privacy.php">Privacy Policy</a>
        <a href="terms.php" class="link-line">Terms of Conditions</a>
        <a href="about.php" class="link-line">About us</a>
        <a href="contact.php" class="link-line">Contact us</a>
    </div>
    <div class="copy-right">
        <p>
            © 2023 AskandExplore
        </p>
    </div>
</footer>

</body></html>