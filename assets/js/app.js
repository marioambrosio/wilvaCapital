document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            e.preventDefault();
            targetElement.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

const footerTermsButton = document.getElementById('acceptFooterTerms');
const footerTermsStatus = document.getElementById('footerTermsStatus');
const footerTermsAcceptedKey = 'wilva_footer_terms_accepted';

function showFooterTermsAccepted() {
    if (!footerTermsButton || !footerTermsStatus) return;

    footerTermsButton.textContent = 'Términos aceptados';
    footerTermsButton.disabled = true;
    footerTermsButton.setAttribute('aria-pressed', 'true');
    footerTermsButton.classList.remove('hover:bg-brand-roseDark');
    footerTermsStatus.textContent = 'Has aceptado estos términos. El documento permanece disponible en esta página.';
}

if (footerTermsButton && footerTermsStatus) {
    if (localStorage.getItem(footerTermsAcceptedKey) === 'true') {
        showFooterTermsAccepted();
    }

    footerTermsButton.addEventListener('click', () => {
        localStorage.setItem(footerTermsAcceptedKey, 'true');
        showFooterTermsAccepted();
    });
}