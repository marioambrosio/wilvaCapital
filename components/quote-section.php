<section id="cotizador" class="py-20 bg-white border-t border-slate-200/80">
    <div class="max-w-4xl mx-auto px-6">
        
        <!-- Cabecera -->
        <div class="text-center max-w-2xl mx-auto mb-12">
            <div class="inline-flex items-center gap-2 px-3 py-1 mb-3 text-xs font-bold tracking-widest uppercase text-brand-pink bg-pink-50 border border-pink-200 rounded-full">
                Conversor en Tiempo Real
            </div>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-950 tracking-tight">
                Calcula tu Transferencia
            </h2>
            <p class="text-slate-600 text-sm sm:text-base mt-2">
                Consulta la tasa exacta en vivo referenciada al mercado Binance P2P Bolivia con nuestra comisión del 2%.
            </p>
        </div>

        <!-- Tarjeta del Cotizador -->
        <div class="bg-slate-50 border border-slate-200 rounded-3xl p-6 sm:p-10 shadow-lg">
            
            <!-- Barra de Estado de la Tasa -->
            <div class="flex flex-wrap items-center justify-between gap-3 bg-white p-3.5 rounded-2xl border border-slate-200 mb-8">
                <div class="flex items-center gap-2.5">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span class="text-xs font-bold text-slate-700">Tasa de Mercado (Binance P2P):</span>
                    <span class="text-sm font-black text-slate-900" id="rateDisplay">1 USDT ≈ ... BOB</span>
                </div>
                <div class="flex items-center gap-2 text-[11px] text-slate-400 font-semibold">
                    <span id="rateTime">Sincronizando...</span>
                    <button onclick="fetchRate()" class="p-1 hover:text-brand-pink transition" title="Actualizar Tasa">
                        <i data-lucide="refresh-cw" class="w-3.5 h-3.5" id="refreshIcon"></i>
                    </button>
                </div>
            </div>

            <!-- Campos de Conversión Bidireccional -->
            <div class="grid md:grid-cols-2 gap-6 relative items-center mb-8">
                
                <!-- Caja USD / USDT -->
                <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm focus-within:border-brand-pink transition">
                    <div class="flex justify-between items-center mb-2">
                        <label class="text-xs font-bold text-slate-500 uppercase tracking-wider" id="labelOrigin">Monto a Enviar</label>
                        <span class="text-xs font-black text-brand-pink bg-pink-50 px-2 py-0.5 rounded-md">Dólares / USDT</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-2xl font-black text-slate-400">$</span>
                        <input type="number" id="inputUsd" value="100" min="1" step="any" class="w-full text-2xl font-black text-slate-900 focus:outline-none bg-transparent" placeholder="0.00">
                    </div>
                    <span class="text-[10px] text-slate-400 mt-2 block">Monto en USDT o Dólares en destino</span>
                </div>

                <!-- Botón de intercambio visual en el centro -->
                <div class="hidden md:flex absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-10 w-10 h-10 rounded-full bg-white border border-slate-200 shadow-md items-center justify-center text-slate-400">
                    <i data-lucide="arrow-left-right" class="w-4 h-4"></i>
                </div>

                <!-- Caja BOB (Bolivianos) -->
                <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm focus-within:border-brand-pink transition">
                    <div class="flex justify-between items-center mb-2">
                        <label class="text-xs font-bold text-slate-500 uppercase tracking-wider" id="labelDest">Equivalente en Efectivo</label>
                        <span class="text-xs font-black text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded-md">Bolivianos</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-2xl font-black text-slate-400">Bs.</span>
                        <input type="number" id="inputBob" min="1" step="any" class="w-full text-2xl font-black text-slate-900 focus:outline-none bg-transparent" placeholder="0.00">
                    </div>
                    <span class="text-[10px] text-slate-400 mt-2 block">Total en Bolivianos a entregar</span>
                </div>

            </div>

            <!-- Desglose de Operación -->
            <div class="bg-white rounded-2xl p-5 border border-slate-200 mb-8 space-y-3">
                <div class="flex justify-between items-center text-sm">
                    <span class="text-slate-600">Subtotal de cambio:</span>
                    <span class="font-bold text-slate-900" id="subtotalDisplay">Bs. 0.00</span>
                </div>
                <div class="flex justify-between items-center text-sm">
                    <span class="text-slate-600">Comisión del servicio WILVA (2%):</span>
                    <span class="font-bold text-brand-pink" id="feeDisplay">Bs. 0.00</span>
                </div>
                <div class="flex justify-between items-center text-base pt-3 border-t border-slate-100">
                    <span class="font-extrabold text-slate-900">Total neto de la operación:</span>
                    <span class="font-black text-xl text-slate-950" id="totalDisplay">Bs. 0.00</span>
                </div>
            </div>

            <!-- Botón WhatsApp de Acción -->
            <button onclick="contactarOperacionWhatsApp()" class="w-full py-4 rounded-xl bg-brand-pink hover:bg-brand-roseDark text-white font-bold text-sm tracking-wide shadow-lg shadow-pink-500/25 flex items-center justify-center gap-2.5 transition transform hover:-translate-y-0.5">
                <i data-lucide="message-circle" class="w-5 h-5"></i>
                <span>Confirmar y transferir este monto por WhatsApp</span>
                <i data-lucide="arrow-right" class="w-4 h-4 ml-1"></i>
            </button>

        </div>

    </div>
</section>

<script>
let currentRate = 12.00;
const COMMISSION_PCT = 0.02; // 2%

async function fetchRate() {
    const refreshIcon = document.getElementById('refreshIcon');
    if (refreshIcon) refreshIcon.classList.add('animate-spin');

    try {
        const res = await fetch('api/get-rate.php');
        const data = await res.json();
        if (data && data.rate) {
            currentRate = parseFloat(data.rate);
            document.getElementById('rateDisplay').innerText = `1 USDT ≈ ${currentRate.toFixed(2)} BOB`;
            document.getElementById('rateTime').innerText = `Act: ${data.updated}`;
        }
    } catch (e) {
        document.getElementById('rateDisplay').innerText = `1 USDT ≈ ${currentRate.toFixed(2)} BOB`;
        document.getElementById('rateTime').innerText = `Modo referencia`;
    } finally {
        if (refreshIcon) refreshIcon.classList.remove('animate-spin');
        calcularDesdeUsd();
    }
}

function calcularDesdeUsd() {
    const usd = parseFloat(document.getElementById('inputUsd').value) || 0;
    const subtotalBob = usd * currentRate;
    const comisionBob = subtotalBob * COMMISSION_PCT;
    const totalBob = subtotalBob + comisionBob;

    document.getElementById('inputBob').value = subtotalBob > 0 ? subtotalBob.toFixed(2) : '';
    document.getElementById('subtotalDisplay').innerText = `Bs. ${subtotalBob.toLocaleString('es-BO', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
    document.getElementById('feeDisplay').innerText = `Bs. ${comisionBob.toLocaleString('es-BO', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
    document.getElementById('totalDisplay').innerText = `Bs. ${totalBob.toLocaleString('es-BO', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
}

function calcularDesdeBob() {
    const bob = parseFloat(document.getElementById('inputBob').value) || 0;
    const usd = bob > 0 ? (bob / currentRate) : 0;
    const comisionBob = bob * COMMISSION_PCT;
    const totalBob = bob + comisionBob;

    document.getElementById('inputUsd').value = usd > 0 ? usd.toFixed(2) : '';
    document.getElementById('subtotalDisplay').innerText = `Bs. ${bob.toLocaleString('es-BO', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
    document.getElementById('feeDisplay').innerText = `Bs. ${comisionBob.toLocaleString('es-BO', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
    document.getElementById('totalDisplay').innerText = `Bs. ${totalBob.toLocaleString('es-BO', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
}

function contactarOperacionWhatsApp() {
    const usd = document.getElementById('inputUsd').value || '0';
    const bob = document.getElementById('inputBob').value || '0';
    const phone = "<?= e($config['whatsapp']['lapaz']) ?>";
    const msg = `Hola WILVA CAPITAL, utilicé su cotizador web:\n• Deseo enviar: ${usd} USD (USDT)\n• En Bolivianos aprox.: ${bob} Bs. (Tasa: ${currentRate.toFixed(2)})\n¿Podemos coordinar la entrega y verificar la cotización final?`;
    window.open(`https://wa.me/${phone}?text=${encodeURIComponent(msg)}`, '_blank');
}

document.getElementById('inputUsd').addEventListener('input', calcularDesdeUsd);
document.getElementById('inputBob').addEventListener('input', calcularDesdeBob);

// Inicializar al cargar
document.addEventListener('DOMContentLoaded', () => {
    fetchRate();
});
</script>