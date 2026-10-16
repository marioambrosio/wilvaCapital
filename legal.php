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
            <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Cumplimiento y marco legal</span>
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
                    2. Divulgación de riesgos
                </a>
                <a href="#privacy" class="block p-3 rounded-xl bg-white border border-slate-200 text-slate-700 hover:border-brand-pink hover:text-brand-pink transition shadow-sm">
                    3. Política de privacidad
                </a>
                <a href="#aml" class="block p-3 rounded-xl bg-white border border-slate-200 text-slate-700 hover:border-brand-pink hover:text-brand-pink transition shadow-sm">
                    4. Verificación de clientes y prevención de delitos financieros
                </a>
            </aside>

            <!-- Textos Legales Detallados -->
            <div class="md:col-span-3 space-y-10">
                
                <!-- 1. TÉRMINOS Y CONDICIONES -->
                <section id="terms" class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-sm">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-4 mb-6">
                        <h2 class="text-xl font-black text-slate-950">1. Términos y condiciones</h2>
                        <span class="text-[10px] uppercase font-bold tracking-wider px-2 py-1 bg-amber-100 text-amber-800 rounded-md">Borrador para revisión</span>
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

                <!-- 2. DIVULGACIÓN DE RIESGOS -->
                <section id="risks" class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-sm">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-4 mb-6">
                        <h2 class="text-xl font-black text-slate-950">2. Divulgación de riesgos</h2>
                        <span class="text-[10px] uppercase font-bold tracking-wider px-2 py-1 bg-amber-100 text-amber-800 rounded-md">Borrador para revisión</span>
                    </div>

                    <div class="space-y-5 text-sm text-slate-600 leading-relaxed">
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">1. Descripción general</strong>
                            <p>Los pagos transfronterizos, las operaciones de cambio de divisas y las transferencias de activos digitales conllevan riesgos financieros y operativos. Lee y confirma las condiciones de cada operación antes de continuar.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">2. Tipos de cambio y cargos</strong>
                            <p>Los tipos de cambio pueden variar antes de que se acepte una cotización. Los cargos de terceros pueden afectar el importe final recibido.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">3. USDT y blockchain</strong>
                            <p>USDT está diseñado para mantener una referencia al dólar estadounidense, pero su valor de mercado, liquidez y posibilidad de reembolso no están garantizados. Las transferencias pueden ser irreversibles y fallar o perderse si se utilizan direcciones de billetera incorrectas, redes incompatibles o si ocurren incidentes técnicos.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">4. Bancos y contrapartes</strong>
                            <p>Las transferencias relacionadas con SWIFT pueden sufrir demoras, devoluciones, rechazos o revisiones por parte de bancos e intermediarios. Las plataformas externas y las contrapartes pueden experimentar fallas o restricciones.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">5. Riesgos legales y de la operación</strong>
                            <p>Las solicitudes de pago pueden estar sujetas a verificaciones de identidad, solicitudes de información y restricciones conforme a la normativa aplicable.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">6. Contacto</strong>
                            <p>WILVA CAPITAL DE WILSON CHOQUE URUÑO (empresa unipersonal, Bolivia). <a href="mailto:wilson@wilvacapital.com" class="text-brand-pink font-semibold underline">wilson@wilvacapital.com</a>.</p>
                        </div>
                    </div>
                </section>

                <!-- 3. POLÍTICA DE PRIVACIDAD -->
                <section id="privacy" class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-sm">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-4 mb-6">
                        <h2 class="text-xl font-black text-slate-950">3. Política de privacidad</h2>
                        <span class="text-[10px] uppercase font-bold tracking-wider px-2 py-1 bg-amber-100 text-amber-800 rounded-md">Borrador para revisión</span>
                    </div>

                    <div class="space-y-5 text-sm text-slate-600 leading-relaxed">
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">1. Quiénes somos</strong>
                            <p>WILVA CAPITAL es el nombre comercial de WILVA CAPITAL DE WILSON CHOQUE URUÑO (empresa unipersonal, Bolivia; en adelante, «WILVA CAPITAL» o «nosotros»). Este aviso describe el tratamiento de información personal relacionada con consultas y servicios de pagos transfronterizos ofrecidos a través de wilvacapital.com.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">2. Información que podemos tratar</strong>
                            <p>Según el servicio solicitado, la información puede incluir nombres, datos de contacto, documentos de identidad, datos de registro y titularidad de empresas, instrucciones de pago, datos bancarios o direcciones de billeteras, información del remitente y del beneficiario, importes y finalidad de las operaciones, documentos sobre el origen de los fondos e información técnica del sitio web.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">3. Finalidad del tratamiento</strong>
                            <p>Podemos utilizar la información pertinente para responder consultas, preparar cotizaciones, evaluar y ejecutar las operaciones solicitadas, verificar identidades, detectar fraudes, atender controversias, mantener registros y cumplir las obligaciones legales aplicables.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">4. Comunicación y tratamiento transfronterizo</strong>
                            <p>Cuando sea necesario y lícito, la información podrá compartirse con bancos que intervengan en la operación, intermediarios de pago, plataformas de activos digitales, proveedores de verificación o servicios tecnológicos, y autoridades competentes. Los pagos internacionales pueden requerir el tratamiento de información fuera de Bolivia.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">5. Seguridad y conservación</strong>
                            <p>Procuramos aplicar medidas de protección adecuadas a la sensibilidad de la información. Ningún método de transmisión es completamente seguro. La información debe conservarse solo durante el tiempo necesario para fines legítimos o para cumplir requisitos legales.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">6. Consultas y solicitudes</strong>
                            <p>Para consultar sobre tu información o solicitar su acceso, rectificación o eliminación cuando corresponda, escribe a <a href="mailto:wilson@wilvacapital.com" class="text-brand-pink font-semibold underline">wilson@wilvacapital.com</a>.</p>
                        </div>
                    </div>
                </section>

                <!-- 4. VERIFICACIÓN DE CLIENTES Y PREVENCIÓN DE DELITOS FINANCIEROS -->
                <section id="aml" class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-sm">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-4 mb-6">
                        <h2 class="text-xl font-black text-slate-950">4. Verificación de clientes y prevención de delitos financieros</h2>
                        <span class="text-[10px] uppercase font-bold tracking-wider px-2 py-1 bg-amber-100 text-amber-800 rounded-md">Borrador para revisión</span>
                    </div>

                    <div class="space-y-5 text-sm text-slate-600 leading-relaxed">
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">1. Finalidad</strong>
                            <p>WILVA CAPITAL reconoce la importancia de prevenir el fraude, el lavado de dinero y el uso indebido de los servicios de pagos transfronterizos. El sitio web hace referencia a verificaciones KYC/KYB (conocimiento del cliente y de la empresa). Este borrador no certifica que ya se haya implementado un control específico.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">2. Información del cliente y de la empresa</strong>
                            <p>Según el servicio y las obligaciones aplicables, se podrá solicitar información sobre identidad, registro de la empresa, titularidad real, beneficiarios y finalidad de la operación.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">3. Revisión de operaciones</strong>
                            <p>Algunas operaciones pueden requerir documentos de respaldo o revisiones adicionales. Las sospechas de actividad ilícita deben tratarse de acuerdo con las obligaciones aplicables.</p>
                        </div>
                        <div>
                            <strong class="text-slate-900 block font-bold mb-1">4. Privacidad y contacto</strong>
                            <p>La información personal obtenida para fines de verificación debe tratarse de acuerdo con la Política de privacidad aprobada y la normativa aplicable. Contacto: <a href="mailto:wilson@wilvacapital.com" class="text-brand-pink font-semibold underline">wilson@wilvacapital.com</a>.</p>
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