<nav class="w-full bg-white/95 backdrop-blur-md sticky top-0 z-50 border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
        <!-- Logo -->
        <a href="#" class="flex items-center gap-3">
            <div class="w-11 h-11 rounded-xl bg-slate-950 flex items-center justify-center overflow-hidden shadow-sm border border-brand-pink/40">
                <img src="assets/images/logo.jpg" alt="WILVA CAPITAL" class="w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                <span style="display:none;" class="text-white font-black text-lg">W</span>
            </div>
            <div>
                <span class="text-xl font-black tracking-wider text-slate-950 block leading-none">
                    WILVA <span class="text-brand-pink">CAPITAL</span>
                </span>
                <span class="text-[9px] tracking-[0.2em] text-brand-textMuted font-bold uppercase mt-1 block">
                    <?= e($config['brand']['sub']) ?>
                </span>
            </div>
        </a>

        <!-- Navegación -->
        <div class="hidden lg:flex items-center gap-8 text-sm font-semibold text-slate-600">
            <a href="#inicio" class="text-slate-950 border-b-2 border-brand-pink pb-1">Inicio</a>
            <a href="#como-funciona" class="hover:text-brand-pink transition">¿Cómo funciona?</a>
            <a href="<?= $waQuoteUrl ?>" target="_blank" class="hover:text-brand-pink transition">Cotizador</a>
            <a href="#ventajas" class="hover:text-brand-pink transition">Ventajas</a>
            <a href="#oficinas" class="hover:text-brand-pink transition">Oficinas</a>
            <a href="#faq" class="hover:text-brand-pink transition">FAQ</a>
        </div>

        <!-- Botón Enviar Dinero -->
        <a href="<?= $waSendUrl ?>" target="_blank" class="flex items-center gap-2 px-5 py-2.5 rounded-full bg-brand-pink hover:bg-brand-roseDark transition text-white text-xs font-bold tracking-wide shadow-md shadow-pink-500/20">
            <i data-lucide="send" class="w-3.5 h-3.5"></i>
            <span>Enviar dinero</span>
        </a>
    </div>
</nav>