function processWords(container) {
    container.innerHTML = container.textContent.replace(/(\S+)/g, '<span>$1</span>');
    return container.querySelectorAll('span');
}

document.addEventListener("DOMContentLoaded", () => {

    const wrapper = document.querySelector(".b-story__wrapper");
    const header = document.querySelector(".b-story__header");

    if (!wrapper || !header) return;
    const words = processWords(header);
    wrapper.style.height = `calc(100vh + 4000px)`;

    let isTicking = false;

    function updateWordColors() {
        const wrapperRect = wrapper.getBoundingClientRect();
        const totalScrollDistance = wrapper.offsetHeight - window.innerHeight;
        if (totalScrollDistance <= 0) {
            isTicking = false;
            return;
        }

        const scrolled = Math.max(0, Math.min(totalScrollDistance, -wrapperRect.top));
        const progress = scrolled / totalScrollDistance;

        const activeIndex = Math.min(
            words.length,
            Math.floor(words.length * progress),
        );
        words.forEach((word, index) => {
            word.style.color = index < activeIndex
                ? 'var(--color-fg)'
                : 'var(--color-secondary-accent)'
        });

        isTicking = false;
    }

    function onScroll() {
        if (!isTicking) {
            requestAnimationFrame(updateWordColors);
            isTicking = true;
        }
    }

    updateWordColors();

    window.addEventListener('scroll', onScroll, { passive: true });

});