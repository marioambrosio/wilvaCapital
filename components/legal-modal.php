<!-- Modal / Banner Legal Inicial estilo Cookies/Compliance -->
<div id="legalModalOverlay" class="fixed inset-0 z-50 bg-slate-950/70 backdrop-blur-sm hidden items-center justify-center p-4 sm:p-6 transition-opacity duration-300">
    <div class="bg-white border border-slate-200 rounded-3xl shadow-2xl max-w-2xl w-full flex flex-col max-h-[88vh] overflow-hidden animate-in fade-in zoom-in-95 duration-200">
        
        <!-- Cabecera -->
        <div class="p-6 border-b border-slate-100 flex items-start justify-between bg-slate-50/50">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-pink-50 text-brand-pink flex items-center justify-center font-bold">
                    <i data-lucide="shield-alert" class="w-5 h-5"></i>
                </div>
                <div>
                    <h3 class="text-base font-black text-slate-900 leading-tight">
                        Aviso Legal, Términos y Divulgación de Riesgos
                    </h3>
                    <p class="text-xs text-slate-500 mt-0.5">
                        WILVA CAPITAL DE WILSON CHOQUE URUÑO (Bolivia)
                    </p>
                </div>
            </div>
            <span class="text-[10px] uppercase font-bold tracking-wider px-2 py-1 bg-amber-100 text-amber-800 rounded-md">
                Borrador para revisión
            </span>
        </div>

        <!-- Pestañas de Navegación Rápida -->
        <div class="flex border-b border-slate-200 bg-slate-100/70 px-4 text-xs font-bold text-slate-600 gap-2 overflow-x-auto">
            <button type="button" onclick="switchLegalTab('terms')" id="tab-terms" class="py-2.5 px-3 border-b-2 border-brand-pink text-brand-pink shrink-0 transition">
                Términos
            </button>
            <button type="button" onclick="switchLegalTab('risks')" id="tab-risks" class="py-2.5 px-3 border-b-2 border-transparent hover:text-slate-900 shrink-0 transition">
                Riesgos
            </button>
            <button type="button" onclick="switchLegalTab('privacy')" id="tab-privacy" class="py-2.5 px-3 border-b-2 border-transparent hover:text-slate-900 shrink-0 transition">
                Privacidad
            </button>
            <button type="button" onclick="switchLegalTab('kyc')" id="tab-kyc" class="py-2.5 px-3 border-b-2 border-transparent hover:text-slate-900 shrink-0 transition">
                KYC / KYB
            </button>
        </div>

        <!-- Área de Contenido con Scroll -->
        <div class="p-6 overflow-y-auto space-y-4 text-xs leading-relaxed text-slate-600 flex-1">
            
            <!-- Pestaña 1: Términos -->
            <div id="content-terms" class="space-y-3">
                <p class="font-bold text-slate-900">TÉRMINOS Y CONDICIONES (BORRADOR PARA REVISIÓN)</p>
                <p><strong>1. Alcance:</strong> Estos términos propuestos se refieren al uso del sitio web y a las solicitudes de los servicios anunciados por WILVA CAPITAL, nombre comercial de WILVA CAPITAL DE WILSON CHOQUE URUÑO (empresa unipersonal, Bolivia). Deben revisarse y aprobarse antes de utilizarse como condiciones vinculantes para los clientes.</p>
                <p><strong>2. Servicios:</strong> El sitio web anuncia pagos transfronterizos, transferencias internacionales relacionadas con SWIFT, operaciones relacionadas con USDT y cotizaciones de cambio de moneda. La disponibilidad depende del destino, la elegibilidad de la operación, la participación de terceros y la normativa aplicable.</p>
                <p><strong>3. Información del cliente:</strong> Los clientes deben proporcionar instrucciones completas y exactas, así como información cuyo uso estén autorizados a realizar, incluidos los datos bancarios o de la billetera del destinatario.</p>
                <p><strong>4. Cotizaciones y cargos:</strong> Los tipos de cambio y la disponibilidad pueden variar. Una cotización no constituye una operación completada. El sitio anuncia una comisión de servicio del 2%; antes de proceder, deben informarse y acordarse los demás cargos, el tipo de cambio y el importe que recibirá el destinatario.</p>
                <p><strong>5. Plazos:</strong> Las confirmaciones de USDT podrían tomar minutos después de su aprobación; las transferencias SWIFT suelen demorar entre 24 y 72 horas hábiles. Las revisiones bancarias y las acciones de intermediarios pueden ocasionar demoras.</p>
                <p><strong>6. Ejecución y cancelación:</strong> Las transferencias completadas en blockchain pueden ser irreversibles; la revocación de transferencias bancarias puede depender de terceros.</p>
            </div>

            <!-- Pestaña 2: Riesgos -->
            <div id="content-risks" class="hidden space-y-3">
                <p class="font-bold text-slate-900">DIVULGACIÓN DE RIESGOS (BORRADOR PARA REVISIÓN)</p>
                <p><strong>1. Descripción general:</strong> Los pagos transfronterizos, las operaciones de cambio de divisas y las transferencias de activos digitales conllevan riesgos financieros y operativos.</p>
                <p><strong>2. Tipos de cambio:</strong> Los tipos de cambio pueden variar antes de que se acepte una cotización. Los cargos de intermediarios terceros pueden afectar el importe final recibido.</p>
                <p><strong>3. USDT y blockchain:</strong> La liquidez de mercado y el reembolso de USDT no están garantizados. Las transferencias a direcciones de billetera incorrectas o a redes incompatibles no pueden revertirse.</p>
                <p><strong>4. Bancos:</strong> Las transferencias SWIFT pueden ser objeto de revisiones o retenciones por parte de redes bancarias intermediarias.</p>
            </div>

            <!-- Pestaña 3: Privacidad -->
            <div id="content-privacy" class="hidden space-y-3">
                <p class="font-bold text-slate-900">POLÍTICA DE PRIVACIDAD (BORRADOR PARA REVISIÓN)</p>
                <p><strong>1. Tratamiento:</strong> Recopilamos y tratamos documentos de identidad, datos de contacto, datos de cuentas o billeteras de destino y detalles de las operaciones para fines de cumplimiento, preparación de cotizaciones y ejecución de los servicios solicitados.</p>
                <p><strong>2. Comunicación de datos:</strong> Los datos podrán transmitirse a contrapartes, bancos o plataformas autorizadas únicamente para realizar las operaciones de pago transfronterizo solicitadas.</p>
                <p><strong>3. Contacto:</strong> Para consultas sobre datos personales, escribe a <a href="mailto:wilson@wilvacapital.com" class="text-brand-pink font-semibold underline">wilson@wilvacapital.com</a>.</p>
            </div>

            <!-- Pestaña 4: KYC/KYB -->
            <div id="content-kyc" class="hidden space-y-3">
                <p class="font-bold text-slate-900">VERIFICACIÓN DE CLIENTES Y PREVENCIÓN DE DELITOS FINANCIEROS (BORRADOR PARA REVISIÓN)</p>
                <p><strong>1. Finalidad:</strong> De acuerdo con los estándares de prevención de delitos financieros, antes de procesar operaciones se requieren verificaciones de identidad de clientes (KYC) y verificaciones de empresas (KYB).</p>
                <p><strong>2. Documentación:</strong> Se podrán solicitar documentos de identidad (C.I. o pasaporte), NIT y documentación que respalde el origen de los fondos.</p>
            </div>

        </div>

        <!-- Pie del Modal con Botones -->
        <div class="p-4 sm:p-5 border-t border-slate-100 bg-slate-50 flex flex-col sm:flex-row items-center justify-between gap-3">
            <span class="text-[11px] text-slate-500 text-center sm:text-left">
                Al continuar navegando, reconoces haber leído estos términos de servicio y divulgación de riesgos.
            </span>
            <div class="flex items-center gap-2 w-full sm:w-auto">
                <a href="legal.php" target="_blank" class="px-4 py-2.5 rounded-xl border border-slate-300 bg-white hover:bg-slate-100 text-slate-700 text-xs font-bold text-center w-full sm:w-auto transition">
                    Ver documento completo
                </a>
                <button type="button" onclick="acceptLegalNotice()" class="px-6 py-2.5 rounded-xl bg-brand-pink hover:bg-brand-roseDark text-white text-xs font-black shadow-md shadow-pink-500/25 w-full sm:w-auto transition">
                    Entendido y Aceptar
                </button>
            </div>
        </div>

    </div>
</div>

<script>
function switchLegalTab(tab) {
    const tabs = ['terms', 'risks', 'privacy', 'kyc'];
    tabs.forEach(t => {
        const btn = document.getElementById('tab-' + t);
        const content = document.getElementById('content-' + t);
        if (t === tab) {
            btn.className = 'py-2.5 px-3 border-b-2 border-brand-pink text-brand-pink shrink-0 transition font-bold';
            content.classList.remove('hidden');
        } else {
            btn.className = 'py-2.5 px-3 border-b-2 border-transparent hover:text-slate-900 shrink-0 transition font-semibold';
            content.classList.add('hidden');
        }
    });
}

function acceptLegalNotice() {
    localStorage.setItem('wilva_legal_accepted', 'true');
    const modal = document.getElementById('legalModalOverlay');
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const accepted = localStorage.getItem('wilva_legal_accepted');
    const modal = document.getElementById('legalModalOverlay');
    // Si aún no ha aceptado, se muestra en pantalla
    if (!accepted && modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        if (window.lucide) {
            lucide.createIcons();
        }
    }
});
</script>