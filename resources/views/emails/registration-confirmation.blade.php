<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Welcome to Marketplace</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            font-family: Arial, Helvetica, sans-serif;
            color: #1f2937;
        }

        table {
            border-spacing: 0;
        }

        .wrapper {
            width: 100%;
            background-color: #f3f4f6;
            padding: 40px 15px;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
        }

        .header {
            background-color: #2563eb;
            padding: 35px 30px;
            text-align: center;
        }

        .logo {
            color: #ffffff;
            font-size: 28px;
            font-weight: bold;
            margin: 0 0 8px 0;
        }

        .header-subtitle {
            color: #dbeafe;
            font-size: 15px;
            margin: 0;
        }

        .content {
            padding: 40px 35px;
        }

        .welcome {
            color: #111827;
            font-size: 26px;
            margin: 0 0 18px 0;
        }

        .text {
            color: #4b5563;
            font-size: 16px;
            line-height: 1.7;
            margin: 0 0 18px 0;
        }

        .account-box {
            background-color: #f8fafc;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 20px;
            margin: 25px 0;
        }

        .account-title {
            color: #111827;
            font-size: 15px;
            font-weight: bold;
            margin: 0 0 12px 0;
        }

        .account-detail {
            color: #4b5563;
            font-size: 14px;
            margin: 7px 0;
        }

        .account-label {
            color: #111827;
            font-weight: bold;
        }

        .button-container {
            text-align: center;
            padding: 10px 0 25px 0;
        }

        .button {
            display: inline-block;
            background-color: #2563eb;
            color: #ffffff !important;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            padding: 14px 30px;
            border-radius: 8px;
        }

        .button:hover {
            background-color: #1d4ed8;
        }

        .help {
            background-color: #eff6ff;
            border-left: 4px solid #2563eb;
            padding: 15px 18px;
            margin-top: 25px;
            border-radius: 5px;
        }

        .help p {
            color: #4b5563;
            font-size: 14px;
            line-height: 1.6;
            margin: 0;
        }

        .footer {
            background-color: #111827;
            padding: 25px 30px;
            text-align: center;
        }

        .footer-brand {
            color: #ffffff;
            font-size: 16px;
            font-weight: bold;
            margin: 0 0 8px 0;
        }

        .footer-text {
            color: #9ca3af;
            font-size: 12px;
            line-height: 1.6;
            margin: 5px 0;
        }

        .footer-link {
            color: #60a5fa;
            text-decoration: none;
        }

        @media only screen and (max-width: 600px) {

            .wrapper {
                padding: 20px 10px;
            }

            .content {
                padding: 30px 20px;
            }

            .header {
                padding: 30px 20px;
            }

            .welcome {
                font-size: 23px;
            }

            .text {
                font-size: 15px;
            }

            .button {
                display: block;
                padding: 14px 20px;
            }
        }
    </style>
</head>

<body>

    <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td>

                <div class="wrapper">

                    <table
                        class="container"
                        cellpadding="0"
                        cellspacing="0"
                        role="presentation"
                    >

                        <!-- HEADER -->
                        <tr>
                            <td class="header">

                                <p class="logo">
                                    Marketplace
                                </p>

                                <p class="header-subtitle">
                                    Your marketplace starts here
                                </p>

                            </td>
                        </tr>


                        <!-- CONTENT -->
                        <tr>
                            <td class="content">

                                <h1 class="welcome">
                                    Welcome, {{ $user->name }}! 👋
                                </h1>

                                <p class="text">
                                    Thank you for joining <strong>Marketplace</strong>.
                                    We're excited to have you as part of our community.
                                </p>

                                <p class="text">
                                    Your account has been successfully created. Here are
                                    the details associated with your new account:
                                </p>


                                <!-- ACCOUNT DETAILS -->
                                <div class="account-box">

                                    <p class="account-title">
                                        Your Account
                                    </p>

                                    <p class="account-detail">
                                        <span class="account-label">Name:</span>
                                        {{ $user->name }}
                                    </p>

                                    <p class="account-detail">
                                        <span class="account-label">Email:</span>
                                        {{ $user->email }}
                                    </p>

                                </div>


                                <p class="text">
                                    You can now sign in and start exploring everything
                                    Marketplace has to offer.
                                </p>


                                <!-- BUTTON -->
                                <div class="button-container">

                                    <a
                                        href="{{ url('/') }}"
                                        class="button"
                                    >
                                        Visit Marketplace
                                    </a>

                                </div>


                                <!-- HELP MESSAGE -->
                                <div class="help">

                                    <p>
                                        <strong>Need help?</strong><br>
                                        If you have any questions or need assistance,
                                        please contact our support team. We're happy
                                        to help.
                                    </p>

                                </div>


                                <p
                                    class="text"
                                    style="margin-top: 30px; margin-bottom: 0;"
                                >
                                    Best regards,<br>
                                    <strong>The Marketplace Team</strong>
                                </p>

                            </td>
                        </tr>


                        <!-- FOOTER -->
                        <tr>
                            <td class="footer">

                                <p class="footer-brand">
                                    Marketplace
                                </p>

                                <p class="footer-text">
                                    &copy; {{ date('Y') }} Marketplace.
                                    All rights reserved.
                                </p>

                                <p class="footer-text">
                                    This is an automated email. Please do not reply
                                    directly to this message.
                                </p>

                            </td>
                        </tr>

                    </table>

                </div>

            </td>
        </tr>
    </table>

</body>
</html>
