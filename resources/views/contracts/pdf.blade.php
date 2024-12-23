<!DOCTYPE html>
<html lang="fa">
<head>
<meta charset="UTF-8">
<title>قرارداد</title>
<link href="https://cdn.jsdelivr.net/npm/select2@4/dist/css/select2.min.css" rel="stylesheet" />

<style>
@font-face {
    font-family: 'Vazirmatn';
    src: url('{{ public_path("assets/fonts/Vazirmatn.ttf") }}') format('truetype');
    font-weight: normal;
    font-style: normal;
}

/* اگر نیاز به نسخه بولد دارید، یک @font-face دیگر هم تعریف کنید و font-weight:bold */
body {
    font-family: 'Vazirmatn', sans-serif;
    direction: rtl;
    text-align: justify;
    color: #000;
    font-size: 14px;
}
</style>
</head>
<body>
{!! nl2br($contract->contract_details) !!}
</body>
</html>
