<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$config = require __DIR__ . '/config.php';

if (!function_exists('e')) {
    function e(?string $val): string {
        return htmlspecialchars((string)$val, ENT_QUOTES, 'UTF-8');
    }
}

$waSendUrl  = "https://wa.me/" . $config['whatsapp']['lapaz'] . "?text=" . urlencode($config['whatsapp']['msg_send']);
$waQuoteUrl = "https://wa.me/" . $config['whatsapp']['lapaz'] . "?text=" . urlencode($config['whatsapp']['msg_quote']);
$currentDate = date('d M Y - H:i');
?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($config['brand']['name']) ?> | <?= e($config['brand']['sub']) ?></title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&family=Caveat:wght@600;700&display=swap" rel="stylesheet">
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              sans: ['"Plus Jakarta Sans"', 'sans-serif'],
              script: ['"Caveat"', 'cursive']
            },
            colors: {
              brand: {
                pink: '#E11658',
                roseDark: '#C10E47',
                textMuted: '#64748B'
              }
            }
          }
        }
      }
    </script>
</head>

<body class="bg-white text-slate-900 font-sans antialiased min-h-screen flex flex-col justify-between selection:bg-brand-pink selection:text-white">

    <!-- Modal legal obligatorio al entrar -->
    <?php include __DIR__ . '/components/legal-modal.php'; ?>

    <?php include __DIR__ . '/components/header.php'; ?>
    <?php include __DIR__ . '/components/hero.php'; ?>
    <?php include __DIR__ . '/components/features-bar.php'; ?>
    <?php include __DIR__ . '/components/how-it-works.php'; ?>
    <?php include __DIR__ . '/components/quote-section.php'; ?>
    <?php include __DIR__ . '/components/advantages.php'; ?>
    <?php include __DIR__ . '/components/offices.php'; ?>
    <?php include __DIR__ . '/components/faq.php'; ?>
    <?php include __DIR__ . '/components/footer.php'; ?>

    <script src="assets/js/app.js"></script>
</body>
</html>