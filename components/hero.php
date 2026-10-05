<main class="relative flex-1 bg-gradient-to-br from-slate-50 via-white to-sky-50/40 overflow-hidden" id="inicio">
    
    <!-- Texto esquina superior derecha -->
    <div class="absolute right-8 top-12 hidden xl:block text-[10px] tracking-[0.25em] text-slate-400 uppercase font-semibold leading-relaxed text-right select-none">
        PERSONAS<br>EMPRESAS<br>NUEVOS<br>HORIZONTES
        <div class="w-6 h-[2px] bg-brand-pink ml-auto mt-1"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 pt-10 pb-20 grid lg:grid-cols-12 gap-10 items-center">
        
        <!-- Columna Izquierda -->
        <div class="lg:col-span-6 space-y-6 z-10">
            <div class="flex items-center gap-2">
                <span class="inline-block w-1.5 h-1.5 rounded-full bg-brand-pink"></span>
                <span class="text-xs uppercase font-extrabold tracking-[0.22em] text-slate-800">
                    <?= e($config['brand']['badge']) ?>
                </span>
                <span class="inline-block w-8 h-[1.5px] bg-brand-pink/50"></span>
            </div>

            <h1 class="text-5xl sm:text-6xl lg:text-[4.2rem] font-black tracking-tight leading-[1.03] text-slate-950">
                <?= e($config['brand']['headline_part1']) ?><br>
                <span class="text-brand-pink"><?= e($config['brand']['headline_part2']) ?></span>
            </h1>

            <p class="text-xs sm:text-sm font-bold tracking-[0.28em] text-slate-800 uppercase">
                <?= e($config['brand']['pillars']) ?>
            </p>

            <div class="text-slate-600 text-sm sm:text-base leading-relaxed space-y-2 max-w-xl">
                <p><?= $config['brand']['desc_p1'] ?></p>
                <p class="text-slate-500 text-sm"><?= e($config['brand']['desc_p2']) ?></p>
            </div>

            <!-- Botones -->
            <div class="pt-3 flex flex-wrap gap-4 items-center">
                <a href="<?= $waSendUrl ?>" target="_blank" class="px-7 py-3.5 rounded-xl bg-brand-pink hover:bg-brand-roseDark text-white font-bold text-sm tracking-wide shadow-lg shadow-pink-500/25 flex items-center gap-2.5 transition transform hover:-translate-y-0.5">
                    <i data-lucide="send" class="w-4 h-4"></i>
                    <span>Enviar dinero ahora</span>
                    <i data-lucide="arrow-right" class="w-4 h-4 ml-1"></i>
                </a>

                <a href="<?= $waQuoteUrl ?>" target="_blank" class="px-6 py-3.5 rounded-xl bg-white hover:bg-slate-100 border border-slate-300 text-slate-800 font-bold text-sm tracking-wide shadow-sm flex items-center gap-2.5 transition">
                    <i data-lucide="calculator" class="w-4 h-4 text-slate-700"></i>
                    <span>Cotiza tu transferencia</span>
                </a>
            </div>
        </div>

        <!-- Columna Derecha: Composición Visual (Globo + Celular + Tarjeta USDT) -->
        <div class="lg:col-span-6 relative flex items-center justify-center min-h-[420px]">
            
            <!-- Imagen del Mundo de Fondo -->
            <div class="relative w-full max-w-[460px] aspect-square flex items-center justify-center">
                <img src="assets/images/globo-red.png" alt="Conexión Global" class="w-full h-full object-contain drop-shadow-xl" onerror="this.style.display='none';">

                <!-- Mockup del Celular superpuesto a la izquierda del globo -->
                <div class="relative lg:absolute lg:-left-6 z-20 w-48 sm:w-56 bg-slate-950 rounded-[2.4rem] p-2.5 shadow-2xl border-4 border-slate-800 rotate-[-6deg] hover:rotate-0 transition duration-300">
                    <div class="h-72 sm:h-80 w-full rounded-[1.9rem] bg-gradient-to-b from-slate-900 via-slate-950 to-[#2a0818] border border-slate-800 p-4 flex flex-col justify-between items-center text-center">
                        <div class="w-14 h-3.5 bg-black rounded-full mx-auto"></div>

                        <div class="space-y-2">
                            <div class="w-12 h-12 rounded-2xl bg-slate-900 border border-brand-pink/50 flex items-center justify-center mx-auto overflow-hidden shadow-md">
                                <img src="assets/images/logo.jpg" alt="W" class="w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                                <span style="display:none;" class="text-white font-black">W</span>
                            </div>
                            <span class="text-xs font-black tracking-wider text-white block">
                                WILVA <span class="text-brand-pink">CAPITAL</span>
                            </span>
                            <span class="text-[7px] text-slate-300 uppercase tracking-widest block">FINANZAS SIN FRONTERAS</span>
                        </div>

                        <p class="font-script text-2xl text-white tracking-wide rotate-[-6deg] mb-4">
                            El mundo<br>más cerca de ti
                        </p>
                    </div>
                </div>

                <!-- Texto Caligráfico derecha -->
                <div class="hidden sm:block absolute -right-4 top-20 z-20">
                    <span class="font-script text-3xl font-bold text-slate-800 rotate-[-8deg] block leading-none">
                        Conectamos<br>oportunidades
                    </span>
                </div>
            </div>

            <!-- Tarjeta Flotante USDT (Cotización del día) -->
            <a href="<?= $waQuoteUrl ?>" target="_blank" class="absolute -bottom-4 left-4 sm:left-10 z-30 bg-white/95 backdrop-blur-md border border-slate-200 rounded-2xl p-4 shadow-xl flex items-center gap-4 hover:border-brand-pink transition group">
                <div class="w-12 h-12 rounded-full bg-[#009393] text-white flex items-center justify-center font-bold text-2xl shadow-md shrink-0">
                    ₮
                </div>
                <div class="pr-2 border-r border-slate-200">
                    <span class="text-sm font-black text-slate-900 block">USDT</span>
                    <span class="text-[11px] text-slate-500 block leading-tight">Compramos al mejor<br>tipo de cambio</span>
                </div>
                <div class="pl-1">
                    <span class="text-[10px] text-slate-400 block font-semibold">Tipo de cambio (Bs.)</span>
                    <span class="text-xs font-extrabold text-slate-900 group-hover:text-brand-pink transition flex items-center gap-1.5 mt-0.5">
                        Cotización del día
                        <i data-lucide="bar-chart-2" class="w-4 h-4 text-emerald-500"></i>
                    </span>
                    <span class="text-[9px] text-slate-400 mt-1 block">Consultar en vivo por WhatsApp</span>
                </div>
            </a>

            <!-- Etiqueta El Alto Bolivia -->
            <div class="hidden sm:block absolute -bottom-2 right-2 text-right">
                <span class="text-xs font-black tracking-widest text-slate-800 uppercase block">EL ALTO</span>
                <span class="text-[10px] tracking-wider text-slate-500 uppercase font-bold"><?= e($config['office']['country']) ?></span>
            </div>

        </div>
    </div>
</main>