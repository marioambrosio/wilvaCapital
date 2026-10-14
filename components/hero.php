<section id="inicio" class="relative overflow-hidden pt-12 pb-20 lg:pt-20 lg:pb-28 bg-gradient-to-b from-slate-50 via-white to-white">
    <!-- Luz ambiental sutil de fondo -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[550px] h-[550px] bg-pink-100/40 rounded-full blur-3xl pointer-events-none -z-10"></div>

    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Columna Izquierda: Mensaje y Llamados a la Acción -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                
                <!-- Badge superior -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-pink-50 border border-pink-200/80 text-brand-pink text-xs font-bold tracking-widest uppercase">
                    <span class="w-2 h-2 rounded-full bg-brand-pink animate-pulse"></span>
                    <?= e($config['brand']['badge'] ?? 'TU DINERO, SIN FRONTERAS') ?>
                </div>

                <!-- Titular Principal -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-slate-950 tracking-tight leading-[1.1]">
                    <?= e($config['brand']['headline_part1'] ?? 'Transferencias') ?>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-pink to-brand-roseDark block sm:inline">
                        <?= e($config['brand']['headline_part2'] ?? 'Internacionales') ?>
                    </span>
                </h1>

                <!-- Pilares de Confianza -->
                <p class="text-xs sm:text-sm font-extrabold tracking-[0.2em] text-slate-400 uppercase">
                    <?= e($config['brand']['pillars'] ?? 'RÁPIDAS  |  SEGURAS  |  CONFIABLES') ?>
                </p>

                <!-- Párrafos Descriptivos -->
                <div class="text-slate-600 text-base sm:text-lg leading-relaxed max-w-xl mx-auto lg:mx-0 space-y-2">
                    <p>
                        <?= $config['brand']['desc_p1'] ?? 'Compramos <strong>USDT</strong> al mejor tipo de cambio y realizamos transferencias <strong>SWIFT</strong> a todo el mundo.' ?>
                    </p>
                    <p class="text-sm sm:text-base text-slate-500">
                        <?= $config['brand']['desc_p2'] ?? 'Desde Bolivia hacia cualquier país, con acompañamiento durante todo el proceso.' ?>
                    </p>
                </div>

                <!-- Botones de Acción -->
                <div class="pt-4 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <a href="#cotizador" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-brand-pink hover:bg-brand-roseDark text-white font-extrabold text-sm tracking-wide shadow-xl shadow-pink-500/25 flex items-center justify-center gap-2.5 transition transform hover:-translate-y-0.5">
                        <i data-lucide="calculator" class="w-4 h-4"></i>
                        <span>Cotizar Mi Transferencia</span>
                        <i data-lucide="arrow-down" class="w-4 h-4 ml-1"></i>
                    </a>

                    <a href="<?= e($waSendUrl) ?>" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto px-6 py-4 rounded-xl bg-white hover:bg-slate-50 text-slate-800 border border-slate-200 font-bold text-sm flex items-center justify-center gap-2.5 transition shadow-sm hover:border-slate-300">
                        <i data-lucide="message-circle" class="w-4 h-4 text-emerald-600"></i>
                        <span>Contactar por WhatsApp</span>
                    </a>
                </div>

                <!-- Métricas / Sellos rápidos de respaldo -->
                <div class="pt-8 grid grid-cols-3 gap-4 border-t border-slate-200/80 max-w-lg mx-auto lg:mx-0 text-left">
                    <div>
                        <span class="block text-2xl font-black text-slate-900 tracking-tight">100%</span>
                        <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">Seguro & KYC</span>
                    </div>
                    <div>
                        <span class="block text-2xl font-black text-slate-900 tracking-tight">SWIFT</span>
                        <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">Bancos Globales</span>
                    </div>
                    <div>
                        <span class="block text-2xl font-black text-slate-900 tracking-tight">P2P</span>
                        <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">Tasa en Tiempo Real</span>
                    </div>
                </div>

            </div>

            <!-- Columna Derecha: Ilustración / Imagen de Marca -->
            <div class="lg:col-span-5 relative flex justify-center items-center">
                <div class="relative w-full max-w-md">
                    
                    <!-- Tarjeta flotante superior izquierda -->
                    <div class="absolute -top-4 -left-4 sm:-left-6 z-20 bg-white/90 backdrop-blur-md border border-slate-200 shadow-xl rounded-2xl p-3 sm:p-4 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center">
                            <i data-lucide="shield-check" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <span class="block text-xs font-black text-slate-900">Operación Respaldada</span>
                            <span class="block text-[10px] text-slate-500 font-semibold">Oficinas en Bolivia</span>
                        </div>
                    </div>

                    <!-- Contenedor de la Imagen del Mundo / Gráfica -->
                    <div class="relative z-10 rounded-3xl overflow-hidden bg-gradient-to-tr from-slate-900 via-slate-800 to-slate-900 p-8 shadow-2xl border border-slate-700/40 text-center">
                        <img 
                            src="assets/images/globo-red.png" 
                            alt="Red Global de Transferencias WILVA" 
                            class="w-full h-auto object-contain mx-auto drop-shadow-[0_15px_15px_rgba(0,0,0,0.5)] transform hover:scale-105 transition duration-500"
                            onerror="this.src='https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?auto=format&fit=crop&w=600&q=80'"
                        >
                        <div class="mt-4 pt-4 border-t border-slate-700/60 flex items-center justify-between text-xs text-slate-300 font-semibold">
                            <span class="flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-brand-pink"></span>
                                El Alto & Cochabamba
                            </span>
                            <span class="text-slate-400 font-mono text-[11px]"><?= e($currentDate ?? date('d M Y')) ?></span>
                        </div>
                    </div>

                    <!-- Tarjeta flotante inferior derecha -->
                    <div class="absolute -bottom-5 -right-4 sm:-right-6 z-20 bg-white/95 backdrop-blur-md border border-slate-200 shadow-xl rounded-2xl p-3.5 flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-pink-50 text-brand-pink flex items-center justify-center">
                            <i data-lucide="globe-2" class="w-4 h-4"></i>
                        </div>
                        <div class="text-left">
                            <span class="block text-xs font-black text-slate-900">Transferencias Directas</span>
                            <span class="block text-[10px] text-slate-500 font-semibold">China, USA, Europa y más</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>