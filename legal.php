<?php
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
    <title>Marco Legal y Términos y Condiciones | <?= e($config['brand']['name']) ?></title>
    <link rel="icon" type="image/jpeg" href="assets/images/logo.jpeg">
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
                    1. Términos y condiciones
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
                
                <!-- 1. TÉRMINOS Y CONDICIONES -->
                <section id="terms" class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-sm">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-4 mb-6">
                        <h2 class="text-xl font-black text-slate-950">1. Términos y condiciones</h2>
                        <span class="text-[10px] uppercase font-bold tracking-wider px-2 py-1 bg-amber-100 text-amber-800 rounded-md"></span>
                    </div>

                    <div class="space-y-5 text-sm text-slate-600 leading-relaxed">
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">1. Alcance</strong>
                            <p>Estos términos describen el uso del sitio web y las solicitudes de los servicios anunciados por WILVA CAPITAL, nombre comercial de WILVA CAPITAL DE WILSON CHOQUE URUÑO (empresa unipersonal, Bolivia). Este texto es un borrador y debe revisarse y aprobarse antes de utilizarse como condiciones definitivas para clientes.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">2. Servicios</strong>
                            <p>El sitio web anuncia pagos transfronterizos, transferencias internacionales relacionadas con SWIFT, operaciones relacionadas con USDT y cotizaciones de cambio de moneda. La disponibilidad depende del destino, la elegibilidad de la operación, la participación de terceros y la normativa aplicable.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">3. Información del cliente</strong>
                            <p>El cliente debe proporcionar instrucciones completas y exactas, así como información cuyo uso esté autorizado, incluidos los datos bancarios o de la billetera del destinatario. Se podrán solicitar documentos de identidad y respaldos de la operación.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">4. Cotizaciones y cargos</strong>
                            <p>Los tipos de cambio y la disponibilidad pueden variar. Una cotización no constituye una operación completada. El sitio anuncia una comisión de servicio del 2%; antes de proceder, se deberán informar y acordar su cálculo aplicable, los demás cargos, el tipo de cambio y el importe que recibirá el destinatario.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">5. Plazos</strong>
                            <p>El sitio indica que las confirmaciones de USDT podrían tomar minutos después de su aprobación y que las transferencias SWIFT suelen demorar entre 24 y 72 horas hábiles. Son estimaciones, no garantías. Las revisiones bancarias, la congestión de la red, las acciones de intermediarios, los feriados y las instrucciones incorrectas pueden ocasionar demoras.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">6. Ejecución, cancelación y reembolsos</strong>
                            <p>Las operaciones solo deben ejecutarse después de la confirmación del cliente a través de un canal autorizado. Una transferencia completada en blockchain puede ser irreversible; la revocación de una transferencia bancaria puede depender de terceros.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">7. Riesgos y responsabilidades</strong>
                            <p>Las transferencias transfronterizas implican riesgos relacionados con el tipo de cambio, las contrapartes, los bancos, las redes, la tecnología y los activos digitales. El cliente no debe solicitar operaciones ilícitas. Estas condiciones y cualquier limitación de responsabilidad no sustituyen los derechos irrenunciables que establezca la normativa aplicable.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">8. Consultas y reclamos</strong>
                            <p>Las consultas y los reclamos pueden enviarse a <a href="mailto:wilson@wilvacapital.com" class="text-brand-pink font-semibold underline">wilson@wilvacapital.com</a>.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">9. Modificaciones y contacto</strong>
                            <p>Los términos aprobados podrán actualizarse y notificarse cuando corresponda. WILVA CAPITAL DE WILSON CHOQUE URUÑO (empresa unipersonal, Bolivia). Sitio web: https://wilvacapital.com.</p>
                        </div>
                    </div>
                </section>

                <!-- 2. RISK DISCLOSURE STATEMENT -->
                <section id="risks" class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-sm">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-4 mb-6">
                        <h2 class="text-xl font-black text-slate-950">2. Risk Disclosure Statement</h2>
                        <span class="text-[10px] uppercase font-bold tracking-wider px-2 py-1 bg-amber-100 text-amber-800 rounded-md">Draft for Review</span>
                    </div>

                    <div class="space-y-5 text-sm text-slate-600 leading-relaxed">
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">1. Overview</strong>
                            <p>Cross-border payments, foreign exchange and digital-asset transfers carry financial and operational risks. Read the confirmed transaction terms before proceeding.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">2. Exchange Rates and Fees</strong>
                            <p>Exchange rates may change before a quote is accepted. Third-party charges can affect the amount ultimately received.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">3. USDT and Blockchain</strong>
                            <p>USDT is designed to reference the US dollar but its market value, liquidity and redemption are not guaranteed. Transfers can be irreversible and may fail or be lost through wrong wallet addresses, incompatible networks or technical incidents.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">4. Banks and Counterparties</strong>
                            <p>SWIFT-related transfers can be delayed, returned, rejected or reviewed by banks and intermediaries. External platforms and counterparties may experience failures or restrictions.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">5. Legal and Transaction Risks</strong>
                            <p>Payment requests may be subject to identification, information requests and restrictions under applicable law.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">6. Contact</strong>
                            <p>WILVA CAPITAL DE WILSON CHOQUE URUÑO (sole proprietorship, Bolivia). <a href="mailto:wilson@wilvacapital.com" class="text-brand-pink font-semibold underline">wilson@wilvacapital.com</a>.</p>
                        </div>
                    </div>
                </section>

                <!-- 3. PRIVACY POLICY -->
                <section id="privacy" class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-sm">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-4 mb-6">
                        <h2 class="text-xl font-black text-slate-950">3. Privacy Policy</h2>
                        <span class="text-[10px] uppercase font-bold tracking-wider px-2 py-1 bg-amber-100 text-amber-800 rounded-md">Draft for Review</span>
                    </div>

                    <div class="space-y-5 text-sm text-slate-600 leading-relaxed">
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">1. Who We Are</strong>
                            <p>WILVA CAPITAL is the trade name of WILVA CAPITAL DE WILSON CHOQUE URUÑO (sole proprietorship, Bolivia) ("we", "us"). This notice describes the handling of personal information associated with inquiries and cross-border payment services offered through wilvacapital.com.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">2. Information We May Process</strong>
                            <p>Depending on the requested service, information may include names, contact details, identification documents, business registration and ownership details, payment instructions, bank or wallet addresses, sender and beneficiary information, transaction amounts, purpose and source-of-funds documents, and website technical information.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">3. Why We Process Information</strong>
                            <p>We may use relevant information to respond to inquiries, prepare quotes, assess and execute requested transactions, verify identity, detect fraud, handle disputes, maintain records and meet applicable legal obligations.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">4. Sharing and Cross-Border Processing</strong>
                            <p>Information may need to be shared with transaction banks, payment intermediaries, digital-asset platforms, verification vendors, technical providers or authorities where necessary and lawful. International payments can require processing outside Bolivia.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">5. Security and Retention</strong>
                            <p>We seek to use safeguards appropriate to the sensitivity of the information. No transmission method is completely secure. Information should be retained only as long as necessary for legitimate purposes or legal requirements.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">6. Your Requests</strong>
                            <p>To inquire about your information or request access, correction or deletion where applicable, email <a href="mailto:wilson@wilvacapital.com" class="text-brand-pink font-semibold underline">wilson@wilvacapital.com</a>.</p>
                        </div>
                    </div>
                </section>

                <!-- 4. CUSTOMER VERIFICATION AND AML -->
                <section id="aml" class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-sm">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-4 mb-6">
                        <h2 class="text-xl font-black text-slate-950">4. Customer Verification & Financial Crime Statement</h2>
                        <span class="text-[10px] uppercase font-bold tracking-wider px-2 py-1 bg-amber-100 text-amber-800 rounded-md">Draft for Review</span>
                    </div>

                    <div class="space-y-5 text-sm text-slate-600 leading-relaxed">
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">1. Purpose</strong>
                            <p>WILVA CAPITAL recognizes the importance of preventing fraud, money laundering and misuse of cross-border payment services. The website refers to KYC/KYB checks. This draft does not certify that any specific control is already implemented.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">2. Customer and Business Information</strong>
                            <p>Depending on the service and applicable obligations, identity, company registration, beneficial ownership, beneficiary and transaction-purpose information may be requested.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">3. Transaction Review</strong>
                            <p>Some transactions may require additional supporting documents or review. Suspected unlawful activity must be handled according to applicable obligations.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">4. Privacy and Contact</strong>
                            <p>Personal information obtained for verification should be handled in accordance with the approved Privacy Policy and applicable law. Contact: <a href="mailto:wilson@wilvacapital.com" class="text-brand-pink font-semibold underline">wilson@wilvacapital.com</a>.</p>
                        </div>
                    </div>
                </section>

            </div>

        </div>

    </main>

    <!-- Pie de página simple -->
    <footer class="bg-white border-t border-slate-200 py-6 text-center text-xs text-slate-400">
        <p>© <?= date('Y') ?> WILVA CAPITAL DE WILSON CHOQUE URUÑO. Todos los derechos reservados.</p>
    </footer>

    <script>lucide.createIcons();</script>
</body>
</html>