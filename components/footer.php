<footer class="bg-white py-5 text-xs text-slate-400">
    <div class="max-w-7xl mx-auto px-6 flex flex-col sm:flex-row items-center justify-between gap-4">
        <div class="flex items-center gap-3">
            <span class="font-extrabold text-slate-800 tracking-wider"><?= e($config['brand']['name']) ?></span>
            <span class="text-slate-300">|</span>
            <span class="text-[11px] tracking-widest uppercase"><?= e($config['brand']['sub']) ?></span>
        </div>
        <div class="flex items-center gap-3 text-[10px] tracking-[0.2em] uppercase font-bold text-slate-400">
            <span>SEGURIDAD</span>
            <span>•</span>
            <span>CONFIANZA</span>
            <span>•</span>
            <span>CONEXIÓN GLOBAL</span>
        </div>
    </div>
    <section id="footerTerms" class="scroll-mt-24 max-w-7xl mx-auto px-6 pt-8 mt-8 border-t border-slate-100" aria-labelledby="footerTermsTitle">
        <div class="max-w-3xl mx-auto text-center">
            <h2 id="footerTermsTitle" class="text-sm font-black text-slate-800">Términos y condiciones</h2>
            <p class="mt-2 text-xs leading-relaxed text-slate-500">
                Al aceptar, confirmas que has leído los términos y condiciones aplicables al uso de este sitio y a las solicitudes de los servicios de WILVA CAPITAL.
                <a href="legal.php#terms" class="font-bold text-brand-pink underline underline-offset-2 hover:text-brand-roseDark">Leer el documento completo</a>.
            </p>
            <div class="mt-4 flex flex-col items-center gap-3">
                <p id="footerTermsStatus" class="text-xs text-slate-500" role="status" aria-live="polite">Aún no has aceptado estos términos.</p>
                
            </div>
        </div>
    </section>
</footer>