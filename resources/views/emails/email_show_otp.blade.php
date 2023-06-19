<!DOCTYPE html>
<html>
<head>
    <title>OTP Email</title>
    <style>
        /* Custom styles */
        .email-container {
            max-width:400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color:#f7f9d5;
        }

        .center-image img{
            width: 117px;
            height: auto;
            object-fit: contain;
            display: flex;
            justify-content: center;
            align-items: center;
            margin:auto;
        }

        .otp-code {
            font-size: 24px;
            font-weight: bold;
            color: #acb5bf;
            margin-bottom: 0px;
            margin-top: -10px;
        }

        .otp-text {
            color: #555;
        }
        .name-text{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="center-image">
            <img alt="" border="0"
            src="https://s.talentrack.in/uploads/acc_img/528/12/528012_6341cfbcabc29.jpg"
             alt="logo" />
        </div>
        <h2 class="name-text">{{ $Firstname.' '.$Lastname}}</h2>
        <h4>OTP Verification Code</h4>
        <p class="otp-code">{{ $otp }}</p>
    </div>
</body>
</html>
