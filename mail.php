<?php

if (
    isset($_POST['name']) &&
    isset($_POST['email']) &&
    isset($_POST['mobile']) &&
    isset($_POST['company']) &&
    isset($_POST['city']) &&
    isset($_POST['state']) &&
    isset($_POST['area']) &&
    isset($_POST['requirements'])
) {

    // Sanitize inputs
    $name         = htmlspecialchars(trim($_POST['name']));
    $email        = htmlspecialchars(trim($_POST['email']));
    $mobile       = htmlspecialchars(trim($_POST['mobile']));
    $company      = htmlspecialchars(trim($_POST['company']));
    $city         = htmlspecialchars(trim($_POST['city']));
    $state        = htmlspecialchars(trim($_POST['state']));
    $area         = htmlspecialchars(trim($_POST['area']));
    $requirements = nl2br(htmlspecialchars(trim($_POST['requirements'])));

    // Email Body (HTML)
    $htmlMessage = "
    <html>
    <body>
    <table width='600' cellspacing='0' cellpadding='0' style='border:1px solid #ddd;font-family:Arial, sans-serif;'>

        <tr>
            <td style='background:#2c5364;color:#fff;font-size:20px;padding:15px;'>
                New Requirement Enquiry
            </td>
        </tr>

        <tr>
            <td style='padding:15px;font-weight:bold;'>
                Enquiry details are as follows:
            </td>
        </tr>

        <tr>
            <td>
                <table width='100%' cellspacing='0' cellpadding='8'>

                    <tr style='background:#f7f7f7;'>
                        <td><strong>Name</strong></td>
                        <td>$name</td>
                    </tr>

                    <tr>
                        <td><strong>Email</strong></td>
                        <td>$email</td>
                    </tr>

                    <tr style='background:#f7f7f7;'>
                        <td><strong>Mobile</strong></td>
                        <td>$mobile</td>
                    </tr>

                    <tr>
                        <td><strong>Company Name</strong></td>
                        <td>$company</td>
                    </tr>

                    <tr style='background:#f7f7f7;'>
                        <td><strong>City</strong></td>
                        <td>$city</td>
                    </tr>

                    <tr>
                        <td><strong>State</strong></td>
                        <td>$state</td>
                    </tr>

                    <tr style='background:#f7f7f7;'>
                        <td><strong>Area Space</strong></td>
                        <td>$area</td>
                    </tr>

                    <tr>
                        <td><strong>Requirements</strong></td>
                        <td>$requirements</td>
                    </tr>

                </table>
            </td>
        </tr>

    </table>
    </body>
    </html>
    ";

    // Email Settings
    $to      = "vipul.infra89@gmail.com ";      // ðŸ”´ Replace
    $from    = "info@vipulinfraprojects.com";         // ðŸ”´ Replace
    $subject = "New Enquiry [#ENQ-" . date('Y') . "-" . substr(time(), -5) . "]";

    // Headers
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: $from\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Cc: joshi.vipul1124@gmail.com\r\n";
    $headers .= "BCc: technologycybill@gmail.com\r\n";

    // Send Mail
    if (mail($to, $subject, $htmlMessage, $headers)) {
        header("Location: thank-you.html");
        exit;
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }

} else {
    echo "Please fill all required fields.";
}
?>
