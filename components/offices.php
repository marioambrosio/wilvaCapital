<section id="oficinas" class="py-20 bg-white border-t border-slate-200/80">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="inline-block px-3 py-1 bg-pink-50 border border-pink-200 text-brand-pink text-xs font-black uppercase tracking-widest rounded-full mb-3">
                Ubicaciones
            </span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-950 tracking-tight">
                Nuestras Oficinas
            </h2>
            <p class="text-slate-600 text-sm sm:text-base mt-2">
                Visítanos en nuestras sedes para realizar tus operaciones presenciales.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- Sede El Alto -->
            <div class="bg-slate-50 p-8 rounded-3xl border border-slate-200 shadow-sm space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-brand-pink text-white flex items-center justify-center">
                        <i data-lucide="building-2" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-black text-slate-900">Sede El Alto</h3>
                        <p class="text-xs text-slate-500 font-semibold">La Paz, Bolivia</p>
                    </div>
                </div>
                <p class="text-sm text-slate-600 leading-relaxed">
                    <strong>Dirección:</strong> <?= e($config['office']['address'] ?? 'Av. Santiago II, Calle 3') ?>
                </p>
                <div class="pt-2">
                    <a href="https://wa.me/<?= e($config['whatsapp']['lapaz']) ?>" target="_blank" class="inline-flex items-center gap-2 text-xs font-bold text-brand-pink hover:underline">
                        <i data-lucide="message-circle" class="w-4 h-4"></i>
                        <span>Contactar Sede El Alto</span>
                    </a>
                </div>
            </div>

            <!-- Sede Cochabamba -->
            <div class="bg-slate-50 p-8 rounded-3xl border border-slate-200 shadow-sm space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-slate-900 text-white flex items-center justify-center">
                        <i data-lucide="building-2" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-black text-slate-900">Sede Cochabamba</h3>
                        <p class="text-xs text-slate-500 font-semibold">Cochabamba, Bolivia</p>
                    </div>
                </div>
                <p class="text-sm text-slate-600 leading-relaxed">
                    <strong>Dirección:</strong> Atención y coordinación comercial previa vía WhatsApp.
                </p>
                <div class="pt-2">
                    <a href="https://wa.me/<?= e($config['whatsapp']['cochabamba']) ?>" target="_blank" class="inline-flex items-center gap-2 text-xs font-bold text-slate-900 hover:text-brand-pink transition">
                        <i data-lucide="message-circle" class="w-4 h-4"></i>
                        <span>Contactar Sede Cochabamba</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>