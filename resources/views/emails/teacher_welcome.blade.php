<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Teachers Market</title>
</head>
<body style="font-family: Tahoma, Arial, sans-serif; background:#f7f7f7; padding:20px; direction:ltr">

    <div style="max-width:600px; margin:auto; background:#ffffff; padding:30px; border-radius:10px">

        <h2 style="color:#2c3e50; text-align:center">
            🎉 Welcome to Teachers Market
        </h2>

        <p style="font-size:16px; color:#333">
            Dear <strong>{{ $teacher->name }}</strong>,
        </p>

        <p style="font-size:15px; line-height:1.8">
            We are truly excited to welcome you to <strong>Teachers Market</strong> —
            a platform designed to bring together outstanding educators and open new opportunities
            for visibility, professional growth, and reaching more students.
        </p>

        <p style="font-size:15px; line-height:1.8">
            🔹 Your account has been successfully created
            🔹 Your information is currently under review
        </p>

        <p style="font-size:15px; line-height:1.8">
            Our mission is to be your partner in success by providing a professional,
            trusted, and inspiring educational environment that truly reflects your experience and value as an educator.
        </p>

        <div style="margin:30px 0; text-align:center">
            <a href="{{ url('/') }}"
               style="background:#27ae60; color:#ffffff; padding:12px 25px; text-decoration:none; border-radius:6px">
                Visit Teachers Market
            </a>
        </div>

        <p style="font-size:14px; color:#777">
            If you have any questions, our support team is always happy to assist you 💚
        </p>

        <p style="font-size:14px; color:#555">
            Best regards,<br>
            <strong>Teachers Market Team</strong>
        </p>

    </div>

</body>
</html>
