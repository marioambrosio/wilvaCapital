<section id="oficinas" class="py-20 bg-white border-t border-slate-200/80">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="text-center max-w-2xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3 py-1 mb-3 text-xs font-bold tracking-widest uppercase text-brand-pink bg-pink-50 border border-pink-200 rounded-full">
                Ubicaciones Físicas
            </div>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-950 tracking-tight">
                Nuestras Oficinas en Bolivia
            </h2>
            <p class="text-slate-600 text-sm sm:text-base mt-3">
                Visítanos para coordinar entregas de efectivo, resolver consultas o formalizar transferencias presenciales con total seguridad.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            
            <!-- Sucursal El Alto / La Paz -->
            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-8 relative hover:border-brand-pink/40 transition">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs font-bold tracking-widest uppercase text-brand-pink bg-pink-50 px-2.5 py-1 rounded-md border border-pink-200">
                        Oficina Central
                    </span>
                    <i data-lucide="map-pin" class="w-5 h-5 text-brand-pink"></i>
                </div>
                <h3 class="text-2xl font-black text-slate-950 mb-2">Ciudad de El Alto</h3>
                <p class="text-slate-600 text-sm mb-4">
                    Av. Santiago II, Calle 3 — La Paz, Bolivia
                </p>
                <div class="text-xs text-slate-500 space-y-1 mb-6">
                    <p>• Atención presencial y entrega de efectivo en Bs.</p>
                    <p>• Teléfono / WhatsApp: <strong>+591 <?= e($config['whatsapp']['lapaz']) ?></strong></p>
                </div>
                <a href="https://wa.me/<?= e($config['whatsapp']['lapaz']) ?>?text=<?= urlencode('Hola WILVA CAPITAL, deseo coordinar una visita a su oficina en El Alto.') ?>" target="_blank" class="w-full py-3 rounded-xl bg-slate-900 hover:bg-slate-800 text-white text-xs font-bold flex items-center justify-center gap-2 transition">
                    <i data-lucide="message-circle" class="w-4 h-4 text-emerald-400"></i>
                    <span>Contactar Oficina El Alto</span>
                </a>
            </div>

            <!-- Sucursal Cochabamba -->
            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-8 relative hover:border-brand-pink/40 transition">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs font-bold tracking-widest uppercase text-slate-600 bg-slate-200 px-2.5 py-1 rounded-md">
                        Atención y Coordinación
                    </span>
                    <i data-lucide="map-pin" class="w-5 h-5 text-slate-600"></i>
                </div>
                <h3 class="text-2xl font-black text-slate-950 mb-2">Cochabamba</h3>
                <p class="text-slate-600 text-sm mb-4">
                    Coordinación directa para transferencias y entregas pactadas.
                </p>
                <div class="text-xs text-slate-500 space-y-1 mb-6">
                    <p>• Operaciones comerciales y verificación directa.</p>
                    <p>• Teléfono / WhatsApp: <strong>+591 <?= e($config['whatsapp']['cochabamba']) ?></strong></p>
                </div>
                <a href="https://wa.me/<?= e($config['whatsapp']['cochabamba']) ?>?text=<?= urlencode('Hola WILVA CAPITAL, deseo consultar operaciones en Cochabamba.') ?>" target="_blank" class="w-full py-3 rounded-xl bg-slate-900 hover:bg-slate-800 text-white text-xs font-bold flex items-center justify-center gap-2 transition">
                    <i data-lucide="message-circle" class="w-4 h-4 text-emerald-400"></i>
                    <span>Contactar Asesor Cochabamba</span>
                </a>
            </div>

        </div>

    </div>
</section>