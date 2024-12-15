<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        body {
        font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;  
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }   

        .header {
            background-color: #94df33;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .bg-ijosusu {
            background-color: #d4f2d3;
        }

        .content {
            padding: 20px;
            line-height: 1.6;
            color: #555;
        }

        .content p {
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            color: white;
            background-color: #94df33;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            text-align: center;
        }

        .btn:hover {
            background-color: #94df33;
        }

        .footer {
            text-align: center;
            padding: 10px;
            font-size: 12px;
            background-color: #f9f9f9;
            color: #777;
        }

        .footer a {
            color: #427236ff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

    </style>

</head>
<body class="bg-ijosusu">
    <div class="email-container">
        <div class="header">
            <h1>Reset Your Password</h1>
        </div>
        <div class="content">
            <p>Hello,</p>
            <p>We received a request to reset your password. Click the button below to reset it:</p>
            <p style="text-align: center;">
                <a href="{{ route('anew-password', ['token' => $token]) }}" class="btn">Reset Password</a>
            </p>
            <p>If you did not request a password reset, please ignore this email or contact support if you have questions.</p>
            <p>Thank you,<br>The bookber Team</p>
        </div>
        <div class="footer">
            <p>If the button above doesn't work, copy and paste the link below into your browser:</p>
            <p><a href="{{ route('anew-password', ['token' => $token]) }}">{{ route('anew-password', ['token' => $token]) }}</a></p>
            <p>&copy; {{ date('Y') }} bookber. All rights reserved.</p>
        </div>
    </div>
</body>
</html>