<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// 🔑 PASSPHRASE (must match your loader)
$PASSPHRASE = "MySecretKey@123";

// 📄 YOUR FULL WEBSITE HTML (copy your entire shop-content.html here)
// For now, let's put a minimal test HTML to verify it works.
$HTML_CONTENT = <<<'HTML'
<!DOCTYPE html>
<html>
<head><title>Test</title></head>
<body>
    <h1>✅ It works!</h1>
    <p>If you see this, your API is live.</p>
</body>
</html>
HTML;

// 🔐 Encryption function (OpenSSL Salted Format – CryptoJS compatible)
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