<section id="cotizador" class="py-20 bg-white border-t border-slate-200/80">
    <div class="max-w-4xl mx-auto px-6">
        
        <div class="text-center max-w-2xl mx-auto mb-12">
            <div class="inline-flex items-center gap-2 px-3 py-1 mb-3 text-xs font-bold tracking-widest uppercase text-brand-pink bg-pink-50 border border-pink-200 rounded-full">
                Conversor en Tiempo Real
            </div>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-950 tracking-tight">
                Calcula tu Transferencia
            </h2>
            <p class="text-slate-600 text-sm sm:text-base mt-2">
                Cotización en vivo con liquidez garantizada y tarifas preferenciales por código.
            </p>
        </div>

        <div class="bg-slate-50 border border-slate-200 rounded-3xl p-6 sm:p-10 shadow-lg">
            
            <!-- Barra de Tasa P2P con Ajuste de Liquidez -->
            <div class="flex flex-wrap items-center justify-between gap-3 bg-white p-3.5 rounded-2xl border border-slate-200 mb-6">
                <div class="flex items-center gap-2.5">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span class="text-xs font-bold text-slate-700">Tipo de cambio aplicado:</span>
                    <span class="text-sm font-black text-slate-900" id="rateDisplay">1 USDT ≈ ... BOB</span>
                </div>
                <div class="flex items-center gap-2 text-[11px] text-slate-400 font-semibold">
                    <span id="rateTime">Sincronizando...</span>
                    <button onclick="fetchRate()" class="p-1 hover:text-brand-pink transition" title="Actualizar Tasa">
                        <i data-lucide="refresh-cw" class="w-3.5 h-3.5" id="refreshIcon"></i>
                    </button>
                </div>
            </div>

            <!-- Campo de Código de Referido / Preferencial -->
            <div class="bg-white p-4 rounded-2xl border border-slate-200 mb-6">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                    <div class="w-full sm:w-1/2">
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1 flex items-center gap-1.5">
                            <i data-lucide="tag" class="w-3.5 h-3.5 text-brand-pink"></i>
                            ¿Tienes un Código de Referido o Cliente?
                        </label>
                        <div class="relative">
                            <input type="text" id="inputCodigo" placeholder="Ej: PROMOCION01, ALIBABA..." class="w-full uppercase tracking-wider font-bold text-slate-800 text-sm bg-slate-50 border border-slate-300 rounded-xl px-3.5 py-2.5 focus:outline-none focus:border-brand-pink transition">
                        </div>
                    </div>
                    <div class="flex-1 sm:text-right" id="badgeContainer">
                        <span id="codigoStatus" class="inline-flex items-center gap-1 text-xs font-bold text-slate-400 bg-slate-100 px-3 py-1.5 rounded-lg border border-slate-200">
                            Tarifa Estándar
                        </span>
                        <p id="codigoDetalle" class="text-[11px] text-slate-500 mt-1">Sin código preferencial aplicado</p>
                    </div>
                </div>
            </div>

            <!-- Selector de Modalidad -->
            <div class="mb-6">
                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Modalidad de Envío</label>
                <select id="selectDestino" onchange="calcularTotales()" class="w-full bg-white border border-slate-300 rounded-xl px-4 py-3 text-slate-900 font-semibold focus:outline-none focus:border-brand-pink transition">
                    <option value="USDT">Transferencia en Cripto / USDT (Sin costo bancario)</option>
                    <option value="SWIFT" selected>Transferencia Bancaria Internacional SWIFT</option>
                </select>
            </div>

            <!-- Cajas de Entrada -->
            <div class="grid md:grid-cols-2 gap-6 relative items-center mb-8">
                
                <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm focus-within:border-brand-pink transition">
                    <div class="flex justify-between items-center mb-2">
                        <label class="text-xs font-bold text-slate-500 uppercase tracking-wider">Monto a Enviar (Destino)</label>
                        <span class="text-xs font-black text-brand-pink bg-pink-50 px-2 py-0.5 rounded-md">USD / USDT</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-2xl font-black text-slate-400">$</span>
                        <input type="number" id="inputUsd" value="100" min="1" step="any" class="w-full text-2xl font-black text-slate-900 focus:outline-none bg-transparent" placeholder="0.00">
                    </div>
                </div>

                <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm focus-within:border-brand-pink transition">
                    <div class="flex justify-between items-center mb-2">
                        <label class="text-xs font-bold text-slate-500 uppercase tracking-wider">Equivalente Bruto</label>
                        <span class="text-xs font-black text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded-md">Bolivianos (Bs.)</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-2xl font-black text-slate-400">Bs.</span>
                        <input type="number" id="inputBob" min="1" step="any" class="w-full text-2xl font-black text-slate-900 focus:outline-none bg-transparent" placeholder="0.00">
                    </div>
                </div>

            </div>

            <!-- Desglose de Gastos -->
            <div class="bg-white rounded-2xl p-5 border border-slate-200 mb-8 space-y-3">
                <div class="flex justify-between items-center text-sm">
                    <span class="text-slate-600">Subtotal de cambio:</span>
                    <span class="font-bold text-slate-900" id="subtotalDisplay">Bs. 0.00</span>
                </div>
                <div class="flex justify-between items-center text-sm">
                    <span class="text-slate-600" id="feeLabel">Comisión del servicio WILVA (2%):</span>
                    <span class="font-semibold text-brand-pink" id="feeDisplay">Bs. 0.00</span>
                </div>
                <div id="swiftRow" class="flex justify-between items-center text-sm text-amber-700 bg-amber-50/60 p-2.5 rounded-lg border border-amber-200">
                    <span class="font-semibold flex items-center gap-1.5" id="swiftLabel">
                        <i data-lucide="file-check" class="w-4 h-4 text-amber-600"></i>
                        Certificado y emisión SWIFT (80 USD):
                    </span>
                    <span class="font-bold" id="swiftDisplay">Bs. 0.00</span>
                </div>
                <div class="flex justify-between items-center text-base pt-3 border-t border-slate-100">
                    <span class="font-extrabold text-slate-900">Total a entregar en oficina:</span>
                    <span class="font-black text-2xl text-slate-950" id="totalDisplay">Bs. 0.00</span>
                </div>
            </div>

            <!-- Botón WhatsApp -->
            <button onclick="contactarOperacionWhatsApp()" class="w-full py-4 rounded-xl bg-brand-pink hover:bg-brand-roseDark text-white font-bold text-sm tracking-wide shadow-lg shadow-pink-500/25 flex items-center justify-center gap-2.5 transition transform hover:-translate-y-0.5">
                <i data-lucide="message-circle" class="w-5 h-5"></i>
                <span>Confirmar y transferir este monto por WhatsApp</span>
                <i data-lucide="arrow-right" class="w-4 h-4 ml-1"></i>
            </button>

        </div>

    </div>
</section>

<script>
let currentEffectiveRate = 12.00;
const BASE_COMMISSION = <?= (float)$config['brand']['comision'] ?>;
const BASE_SWIFT_USD = <?= (float)$config['brand']['swift_fee_usd'] ?>;
const RATE_ADJUSTMENT = <?= (float)$config['brand']['rate_adjustment'] ?>;
const CODIGOS_CONFIG = <?= json_encode($config['preferential_codes'] ?? []) ?>;

// Variables dinámicas activas
let activeCommission = BASE_COMMISSION;
let activeSwiftUsd = BASE_SWIFT_USD;
let appliedCodeKey = null;

async function fetchRate() {
    const refreshIcon = document.getElementById('refreshIcon');
    if (refreshIcon) refreshIcon.classList.add('animate-spin');

    try {
        const res = await fetch('api/get-rate.php');
        const data = await res.json();
        if (data && data.rate) {
            const rawRate = parseFloat(data.rate);
            currentEffectiveRate = parseFloat((rawRate + RATE_ADJUSTMENT).toFixed(2));
            document.getElementById('rateDisplay').innerText = `1 USDT ≈ ${currentEffectiveRate.toFixed(2)} BOB`;
            document.getElementById('rateTime').innerText = `Act: ${data.updated}`;
        }
    } catch (e) {
        document.getElementById('rateDisplay').innerText = `1 USDT ≈ ${currentEffectiveRate.toFixed(2)} BOB`;
        document.getElementById('rateTime').innerText = `Modo referencia`;
    } finally {
        if (refreshIcon) refreshIcon.classList.remove('animate-spin');
        calcularTotales();
    }
}

// Validación y ajuste automático de códigos
function validarCodigo() {
    const rawVal = document.getElementById('inputCodigo').value.trim().toUpperCase();
    const statusEl = document.getElementById('codigoStatus');
    const detalleEl = document.getElementById('codigoDetalle');

    if (!rawVal) {
        activeCommission = BASE_COMMISSION;
        activeSwiftUsd = BASE_SWIFT_USD;
        appliedCodeKey = null;
        statusEl.className = 'inline-flex items-center gap-1 text-xs font-bold text-slate-400 bg-slate-100 px-3 py-1.5 rounded-lg border border-slate-200';
        statusEl.innerHTML = 'Tarifa Estándar';
        detalleEl.innerText = 'Sin código preferencial aplicado';
    } else if (CODIGOS_CONFIG[rawVal]) {
        const conf = CODIGOS_CONFIG[rawVal];
        activeCommission = parseFloat(conf.comision);
        activeSwiftUsd = parseFloat(conf.swift);
        appliedCodeKey = rawVal;

        statusEl.className = 'inline-flex items-center gap-1 text-xs font-bold text-emerald-800 bg-emerald-100 px-3 py-1.5 rounded-lg border border-emerald-300 animate-pulse';
        statusEl.innerHTML = `✓ Código Válido: ${(activeCommission * 100).toFixed(1)}% Com.`;
        detalleEl.innerText = `${conf.label} (SWIFT: ${activeSwiftUsd > 0 ? '$' + activeSwiftUsd : 'GRATIS'})`;
    } else {
        activeCommission = BASE_COMMISSION;
        activeSwiftUsd = BASE_SWIFT_USD;
        appliedCodeKey = null;
        statusEl.className = 'inline-flex items-center gap-1 text-xs font-bold text-rose-700 bg-rose-50 px-3 py-1.5 rounded-lg border border-rose-200';
        statusEl.innerHTML = '✕ Código No Reconocido';
        detalleEl.innerText = 'Aplicando tarifa estándar por defecto';
    }

    calcularTotales();
}

function calcularTotales() {
    const usd = parseFloat(document.getElementById('inputUsd').value) || 0;
    const destino = document.getElementById('selectDestino').value;
    const subtotalBob = usd * currentEffectiveRate;

    // Cálculo con la comisión activa según el código
    const feeBob = subtotalBob * activeCommission;

    // Actualizar etiqueta de comisión
    const pctTxt = (activeCommission * 100).toFixed(1).replace('.0', '');
    document.getElementById('feeLabel').innerText = `Comisión del servicio (${pctTxt}%):`;

    let swiftCostBob = 0;
    const swiftRow = document.getElementById('swiftRow');
    const swiftLabel = document.getElementById('swiftLabel');

    if (destino === 'SWIFT' && usd > 0) {
        swiftCostBob = activeSwiftUsd * currentEffectiveRate;
        swiftRow.classList.remove('hidden');
        if (activeSwiftUsd === 0) {
            swiftLabel.innerHTML = `<i data-lucide="file-check" class="w-4 h-4 text-emerald-600"></i> Certificado SWIFT (Tarifa Especial):`;
            document.getElementById('swiftDisplay').innerHTML = `<span class="text-emerald-700 uppercase font-black">Gratis (0 USD)</span>`;
        } else {
            swiftLabel.innerHTML = `<i data-lucide="file-check" class="w-4 h-4 text-amber-600"></i> Certificado y emisión SWIFT (${activeSwiftUsd} USD):`;
            document.getElementById('swiftDisplay').innerText = `Bs. ${swiftCostBob.toLocaleString('es-BO', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
        }
    } else {
        swiftRow.classList.add('hidden');
    }

    const totalBob = subtotalBob + feeBob + swiftCostBob;

    document.getElementById('inputBob').value = subtotalBob > 0 ? subtotalBob.toFixed(2) : '';
    document.getElementById('subtotalDisplay').innerText = `Bs. ${subtotalBob.toLocaleString('es-BO', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
    document.getElementById('feeDisplay').innerText = `Bs. ${feeBob.toLocaleString('es-BO', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
    document.getElementById('totalDisplay').innerText = `Bs. ${totalBob.toLocaleString('es-BO', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
    
    if (window.lucide) lucide.createIcons();
}

function calcularDesdeBob() {
    const bob = parseFloat(document.getElementById('inputBob').value) || 0;
    const usd = bob > 0 ? (bob / currentEffectiveRate) : 0;
    document.getElementById('inputUsd').value = usd > 0 ? usd.toFixed(2) : '';
    calcularTotales();
}

function contactarOperacionWhatsApp() {
    const usd = document.getElementById('inputUsd').value || '0';
    const totalBob = document.getElementById('totalDisplay').innerText;
    const destino = document.getElementById('selectDestino').value;
    const phone = "<?= e($config['whatsapp']['lapaz']) ?>";
    
    let detalleSwift = '';
    if (destino === 'SWIFT') {
        detalleSwift = activeSwiftUsd === 0 
            ? ' (Certificado SWIFT Bonif./Gratis)' 
            : ` (Incluye certificado SWIFT de ${activeSwiftUsd} USD)`;
    }

    let detalleCodigo = appliedCodeKey ? `\n• Código Aplicado: ${appliedCodeKey} (${(activeCommission * 100).toFixed(1)}% com.)` : '';

    const msg = `Hola WILVA CAPITAL, coticé en su web:\n• Modalidad: ${destino}${detalleSwift}${detalleCodigo}\n• Enviar al exterior: ${usd} USD\n• Total a entregar: ${totalBob}\n• Tasa aplicada: ${currentEffectiveRate.toFixed(2)} Bs.\n¿Podemos coordinar la operación?`;

    window.open(`https://wa.me/${phone}?text=${encodeURIComponent(msg)}`, '_blank');
}

document.getElementById('inputUsd').addEventListener('input', calcularTotales);
document.getElementById('inputBob').addEventListener('input', calcularDesdeBob);
document.getElementById('inputCodigo').addEventListener('input', validarCodigo);

document.addEventListener('DOMContentLoaded', () => {
    fetchRate();
});
</script>