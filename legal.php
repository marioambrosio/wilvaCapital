<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

declare(strict_types=1);


$config = require __DIR__ . '/config.php';

function e(string $val): string {
    return htmlspecialchars($val, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marco Legal y Términos de Servicio | <?= e($config['brand']['name']) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: { sans: ['"Plus Jakarta Sans"', 'sans-serif'] },
            colors: {
              brand: {
                pink: '#E11658',
                roseDark: '#C10E47'
              }
            }
          }
        }
      }
    </script>
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased min-h-screen flex flex-col justify-between selection:bg-brand-pink selection:text-white">

    <!-- Encabezado -->
    <header class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="index.php" class="flex items-center gap-2 text-slate-900 font-bold hover:text-brand-pink transition text-sm">
                <i data-lucide="arrow-left" class="w-4 h-4"></i>
                <span>Volver a WILVA CAPITAL</span>
            </a>
            <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Compliance & Legal</span>
        </div>
    </header>

    <!-- Contenido Principal -->
    <main class="max-w-5xl mx-auto px-6 py-12 flex-1">
        
        <div class="mb-10">
            <div class="inline-flex items-center gap-2 px-3 py-1 mb-3 text-xs font-bold tracking-widest uppercase text-brand-pink bg-pink-50 border border-pink-200 rounded-full">
                Documentación Institucional
            </div>
            <h1 class="text-3xl sm:text-4xl font-black text-slate-950 tracking-tight">Términos, Riesgos y Políticas</h1>
            <p class="text-sm text-slate-500 mt-2">
                WILVA CAPITAL DE WILSON CHOQUE URUÑO (Empresa Unipersonal, Bolivia) · <a href="mailto:wilson@wilvacapital.com" class="text-brand-pink underline">wilson@wilvacapital.com</a>
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-8">
            
            <!-- Índice lateral -->
            <aside class="md:col-span-1 space-y-2 sticky top-24 self-start text-xs font-bold">
                <a href="#terms" class="block p-3 rounded-xl bg-white border border-slate-200 text-slate-700 hover:border-brand-pink hover:text-brand-pink transition shadow-sm">
                    1. Terms of Service
                </a>
                <a href="#risks" class="block p-3 rounded-xl bg-white border border-slate-200 text-slate-700 hover:border-brand-pink hover:text-brand-pink transition shadow-sm">
                    2. Risk Disclosure
                </a>
                <a href="#privacy" class="block p-3 rounded-xl bg-white border border-slate-200 text-slate-700 hover:border-brand-pink hover:text-brand-pink transition shadow-sm">
                    3. Privacy Policy
                </a>
                <a href="#aml" class="block p-3 rounded-xl bg-white border border-slate-200 text-slate-700 hover:border-brand-pink hover:text-brand-pink transition shadow-sm">
                    4. KYC / AML Statement
                </a>
            </aside>

            <!-- Textos Legales Detallados -->
            <div class="md:col-span-3 space-y-10">
                
                <!-- 1. TERMS OF SERVICE -->
                <section id="terms" class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-sm">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-4 mb-6">
                        <h2 class="text-xl font-black text-slate-950">1. Terms of Service</h2>
                        <span class="text-[10px] uppercase font-bold tracking-wider px-2 py-1 bg-amber-100 text-amber-800 rounded-md">Draft for Review</span>
                    </div>

                    <div class="space-y-5 text-sm text-slate-600 leading-relaxed">
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">1. Scope</strong>
                            <p>These proposed terms concern website use and requests for services advertised by WILVA CAPITAL, the trade name of WILVA CAPITAL DE WILSON CHOQUE URUÑO (sole proprietorship, Bolivia). They must be approved before becoming binding customer terms.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">2. Services</strong>
                            <p>The website advertises cross-border payments, international SWIFT-related transfers, USDT-related transactions and currency conversion quotations. Service availability depends on destination, transaction eligibility, third-party participation and applicable law.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">3. Customer Information</strong>
                            <p>Customers must provide complete, accurate instructions and information they are authorized to use, including recipient bank or wallet details. Identity and transaction documentation may be requested.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">4. Quotes and Fees</strong>
                            <p>Exchange rates and availability may change. A quote is not a completed transaction. The website advertises a 2% service commission; the applicable calculation, other charges, exchange rate and amount to be received must be disclosed and agreed before proceeding.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">5. Timing</strong>
                            <p>The website describes USDT confirmations as potentially taking minutes following approval and SWIFT transfers as generally taking 24–72 business hours. These are estimates, not guarantees. Banking reviews, network congestion, intermediary actions, holidays and incorrect instructions can cause delays.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">6. Execution, Cancellation and Refunds</strong>
                            <p>Transactions should be executed only after customer confirmation through an authorized channel. A completed blockchain transfer may be irreversible; bank transfer recalls may depend on third parties.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">7. Risks and Responsibilities</strong>
                            <p>Cross-border transfers involve exchange-rate, counterparty, banking, network, technical and digital-asset risks. Customers must not request unlawful