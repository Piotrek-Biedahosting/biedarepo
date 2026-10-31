<?php
// index.php - Plik testowy dla PHP

$serverTime = date('Y-m-d H:i:s');
$phpVersion = phpversion();
$userIp = $_SERVER['REMOTE_ADDR'] ?? 'Nieznane';

$message = '';
if (isset($_POST['test_button'])) {
    $message = "✅ Kod PHP działa prawidłowo! Kliknięto przycisk o godzinie: " . date('H:i:s');
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP – Biedahosting</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            max-width: 450px;
            width: 100%;
        }
        h1 {
            color: #2c3e50;
            font-size: 24px;
            margin-top: 0;
        }
        .info {
            background: #eef2f5;
            padding: 12px;
            border-radius: 6px;
            margin: 15px 0;
            font-size: 14px;
            line-height: 1.6;
        }
        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            width: 100%;
            transition: background 0.2s;
        }
        button:hover {
            background-color: #2980b9;
        }
        .alert {
            margin-top: 15px;
            padding: 10px;
            background-color: #d4edda;
            color: #155724;
            border-radius: 6px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>🚀 PHP Test Page1</h1>
    <p>Jeśli widzisz tę stronę poprawnie sformatowaną, oznacza to, że PHP i serwer WWW działają elegancko!</p>
    
    <div class="info">
        <strong>Wersja PHP:</strong> <?= $phpVersion ?><br>
        <strong>Czas serwera:</strong> <?= $serverTime ?><br>
        <strong>Twój adres IP:</strong> <?= $userIp ?>
    </div>

    <form method="POST">
        <button type="submit" name="test_button">Uruchom test formularza</button>
    </form>

    <?php if ($message): ?>
        <div class="alert"><?= $message ?></div>
    <?php endif; ?>
</div>

</body>
</html>
