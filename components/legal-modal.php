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
            
            <!-- Tab 1: Terms -->
            <div id="content-terms" class="space-y-3">
                <p class="font-bold text-slate-900">TERMS OF SERVICE (DRAFT FOR REVIEW)</p>
                <p><strong>1. Scope:</strong> These proposed terms concern website use and requests for services advertised by WILVA CAPITAL, the trade name of WILVA CAPITAL DE WILSON CHOQUE URUÑO (sole proprietorship, Bolivia). They must be approved before becoming binding customer terms.</p>
                <p><strong>2. Services:</strong> The website advertises cross-border payments, international SWIFT-related transfers, USDT-related transactions and currency conversion quotations. Service availability depends on destination, transaction eligibility, third-party participation and applicable law.</p>
                <p><strong>3. Customer Information:</strong> Customers must provide complete, accurate instructions and information they are authorized to use, including recipient bank or wallet details.</p>
                <p><strong>4. Quotes and Fees:</strong> Exchange rates and availability may change. A quote is not a completed transaction. The website advertises a 2% service commission; other charges, exchange rate and amount to be received must be disclosed and agreed before proceeding.</p>
                <p><strong>5. Timing:</strong> USDT confirmations potentially take minutes following approval; SWIFT transfers generally take 24–72 business hours. Delays can occur due to banking reviews or intermediary actions.</p>
                <p><strong>6. Execution & Cancellation:</strong> Blockchain transfers may be irreversible; bank transfer recalls depend on third parties.</p>
            </div>

            <!-- Tab 2: Risks -->
            <div id="content-risks" class="hidden space-y-3">
                <p class="font-bold text-slate-900">RISK DISCLOSURE STATEMENT (DRAFT FOR REVIEW)</p>
                <p><strong>1. Overview:</strong> Cross-border payments, foreign exchange and digital-asset transfers carry financial and operational risks.</p>
                <p><strong>2. Exchange Rates:</strong> Rates may fluctuate before a quote is accepted. Third-party intermediary fees can affect the final received amount.</p>
                <p><strong>3. USDT and Blockchain:</strong> USDT market liquidity and redemption are not guaranteed. Transfers to incorrect wallet addresses or incompatible networks cannot be reversed.</p>
                <p><strong>4. Banks:</strong> SWIFT transfers may undergo reviews or holds by intermediary banking networks.</p>
            </div>

            <!-- Tab 3: Privacy -->
            <div id="content-privacy" class="hidden space-y-3">
                <p class="font-bold text-slate-900">PRIVACY POLICY (DRAFT FOR REVIEW)</p>
                <p><strong>1. Processing:</strong> We collect and process identification documents, contact details, account/wallet destinations and transaction details solely for compliance, quote processing and service execution.</p>
                <p><strong>2. Sharing:</strong> Data may be transmitted to counterparties, banks or authorized platforms exclusively to fulfill requested cross-border payment operations.</p>
                <p><strong>3. Contact:</strong> For inquiries regarding personal data: <a href="mailto:wilson@wilvacapital.com" class="text-brand-pink font-semibold underline">wilson@wilvacapital.com</a>.</p>
            </div>

            <!-- Tab 4: KYC/KYB -->
            <div id="content-kyc" class="hidden space-y-3">
                <p class="font-bold text-slate-900">CUSTOMER VERIFICATION & AML (DRAFT FOR REVIEW)</p>
                <p><strong>1. Purpose:</strong> In accordance with financial crime prevention standards, customer identity checks (KYC) and corporate verification (KYB) are required prior to processing transactions.</p>
                <p><strong>2. Documentation:</strong> Identification credentials (C.I., Pasaporte, NIT) and source-of-funds validation may be requested.</p>
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