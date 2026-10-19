<header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-slate-200/80">
    <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
        
        <!-- Logo -->
        <a href="#inicio" class="flex items-center gap-3 group">
            <img src="assets/images/logo.jpeg" alt="<?= e($config['brand']['name']) ?>" class="w-14 h-10 rounded-xl object-contain">
            <div>
                <span class="block font-black text-slate-900 text-lg leading-tight tracking-tight">
                    <?= e($config['brand']['name']) ?>
                </span>
                <span class="block text-[10px] font-bold text-slate-400 tracking-widest uppercase">
                    <?= e($config['brand']['sub']) ?>
                </span>
            </div>
        </a>

        <!-- Menú de Navegación Principal (Enlaces internos con #) -->
        <nav class="hidden md:flex items-center gap-5 text-xs font-semibold text-slate-600">
            <a href="#inicio" class="hover:text-brand-pink transition">Inicio</a>
            <a href="#como-funciona" class="hover:text-brand-pink transition">¿Cómo funciona?</a>
            <a href="#cotizador" class="hover:text-brand-pink transition">Cotizador</a>
            <a href="#ventajas" class="hover:text-brand-pink transition">Ventajas</a>
            <a href="#oficinas" class="hover:text-brand-pink transition">Oficinas</a>
            <a href="#faq" class="hover:text-brand-pink transition">FAQ</a>
            <a href="#footerTerms" class="hover:text-brand-pink transition whitespace-nowrap">Términos y condiciones</a>
        </nav>

        <!-- Botón de acción principal: Ahora lleva al Cotizador -->
        <div class="hidden sm:flex items-center gap-4">
            <a href="#cotizador" class="px-5 py-2.5 rounded-xl bg-brand-pink hover:bg-brand-roseDark text-white text-xs font-bold tracking-wide shadow-md shadow-pink-500/20 flex items-center gap-2 transition transform hover:-translate-y-0.5">
                <i data-lucide="calculator" class="w-4 h-4"></i>
                <span>Cotizar Ahora</span>
            </a>
        </div>

        <!-- Botón Menú Móvil -->
        <button id="mobileMenuBtn" class="md:hidden p-2 text-slate-700 hover:text-brand-pink transition" aria-label="Abrir Menú">
            <i data-lucide="menu" class="w-6 h-6"></i>
        </button>

    </div>

    <!-- Menú desplegable para móviles -->
    <div id="mobileMenu" class="hidden md:hidden bg-white border-b border-slate-200 px-6 py-5 space-y-4 text-sm font-semibold text-slate-700">
        <a href="#inicio" onclick="closeMobileMenu()" class="block hover:text-brand-pink transition">Inicio</a>
        <a href="#como-funciona" onclick="closeMobileMenu()" class="block hover:text-brand-pink transition">¿Cómo funciona?</a>
        <a href="#cotizador" onclick="closeMobileMenu()" class="block hover:text-brand-pink transition">Cotizador</a>
        <a href="#ventajas" onclick="closeMobileMenu()" class="block hover:text-brand-pink transition">Ventajas</a>
        <a href="#oficinas" onclick="closeMobileMenu()" class="block hover:text-brand-pink transition">Oficinas</a>
        <a href="#faq" onclick="closeMobileMenu()" class="block hover:text-brand-pink transition">FAQ</a>
        <a href="#footerTerms" onclick="closeMobileMenu()" class="block hover:text-brand-pink transition">Términos y condiciones</a>
        
        <div class="pt-2">
            <a href="#cotizador" onclick="closeMobileMenu()" class="w-full py-3 rounded-xl bg-brand-pink text-white text-xs font-bold flex items-center justify-center gap-2 shadow-md">
                <i data-lucide="calculator" class="w-4 h-4"></i>
                <span>Cotizar Ahora</span>
            </a>
        </div>
    </div>
</header>

<script>
const mobileMenuBtn = document.getElementById('mobileMenuBtn');
const mobileMenu = document.getElementById('mobileMenu');

if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
}

function closeMobileMenu() {
    if (mobileMenu) {
        mobileMenu.classList.add('hidden');
    }
}
</script>