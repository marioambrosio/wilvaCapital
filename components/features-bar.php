<section class="border-t border-b border-slate-200 bg-white py-6">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 items-center">
        
        <div class="flex items-center gap-3.5">
            <div class="w-10 h-10 rounded-full bg-pink-50 text-brand-pink flex items-center justify-center shrink-0">
                <i data-lucide="zap" class="w-5 h-5 fill-current"></i>
            </div>
            <div>
                <h4 class="text-xs font-extrabold text-slate-900">Seguimos KYC y KYB</h4>
                <p class="text-[11px] text-slate-500">Cumplimiento y verificación</p>
            </div>
        </div>

        <div class="flex items-center gap-3.5">
            <div class="w-10 h-10 rounded-full bg-pink-50 text-brand-pink flex items-center justify-center shrink-0">
                <i data-lucide="shield-check" class="w-5 h-5"></i>
            </div>
            <div>
                <h4 class="text-xs font-extrabold text-slate-900">100% seguro</h4>
                <p class="text-[11px] text-slate-500">Tus fondos protegidos</p>
            </div>
        </div>

        <div class="flex items-center gap-3.5">
            <div class="w-10 h-10 rounded-full bg-pink-50 text-brand-pink flex items-center justify-center shrink-0">
                <i data-lucide="headphones" class="w-5 h-5"></i>
            </div>
            <div>
                <h4 class="text-xs font-extrabold text-slate-900">Soporte real</h4>
                <p class="text-[11px] text-slate-500">Te acompañamos</p>
            </div>
        </div>

        <div class="flex items-center gap-3.5">
            <div class="w-10 h-10 rounded-full bg-pink-50 text-brand-pink flex items-center justify-center shrink-0">
                <i data-lucide="globe" class="w-5 h-5"></i>
            </div>
            <div>
                <h4 class="text-xs font-extrabold text-slate-900">+ 100</h4>
                <p class="text-[11px] text-slate-500">países disponibles</p>
            </div>
        </div>

        <div class="flex items-center gap-3.5 lg:border-l lg:pl-6 border-slate-200">
            <div class="w-10 h-10 rounded-full bg-pink-50 text-brand-pink flex items-center justify-center shrink-0">
                <i data-lucide="map-pin" class="w-5 h-5"></i>
            </div>
            <div>
                <span class="text-[10px] text-slate-400 block">Contamos con oficinas físicas en Bolivia</span>
                <h4 class="text-xs font-extrabold text-slate-900"><?= e($config['office']['city']) ?></h4>
                <p class="text-[11px] text-slate-500"><?= e($config['office']['address']) ?></p>
            </div>
        </div>

    </div>
</section>