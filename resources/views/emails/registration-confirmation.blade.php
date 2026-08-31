<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .header {
            background-color: #2563eb;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
            margin: -20px -20px 20px -20px;
        }
        .content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
        }
        .button {
            display: inline-block;
            background-color: #2563eb;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #666;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Welcome to Our Marketplace!</h1>
        </div>

        <div class="content">
            <p>Hello {{ $user->name }},</p>

            <p>Thank you for registering with our marketplace! We're excited to have you on board.</p>

            <p>Your account has been successfully created with the following details:</p>
            <ul>
                <li><strong>Name:</strong> {{ $user->name }}</li>
                <li><strong>Email:</strong> {{ $user->email }}</li>
            </ul>

            <p>You can now log in to your account and start exploring our amazing products and services.</p>

            <a href="{{ url('/') }}" class="button">Visit Our Marketplace</a>

            <p style="margin-top: 20px;">If you have any questions or need assistance, please don't hesitate to contact our support team.</p>

            <p>Best regards,<br><strong>The Marketplace Team</strong></p>
        </div>

        <div class="footer">
            <p>&copy; 2024 Marketplace. All rights reserved.</p>
            <p>This is an automated email. Please do not reply to this message.</p>
        </div>
    </div>
</body>
</html>
