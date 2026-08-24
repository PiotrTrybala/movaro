
function processWords(container) {
    const words = container.textContent.split(' ').map((word) => {
        return `<span>${word}</span>`;
    });

    container.innerHTML = words.join(' ');
    return container.querySelectorAll('span');
}

document.addEventListener("DOMContentLoaded", () => {

    const wrapper = document.querySelector(".b-story__wrapper");
    const header = document.querySelector(".b-story__header");

    const words = processWords(header);

    wrapper.style.height = `calc(100vh + 4000px)`;

    const wrapperRect = wrapper.getBoundingClientRect();
    const totalScrollDistance = wrapper.offsetHeight - window.innerHeight;

    const scrolled = Math.max(0, Math.min(totalScrollDistance, -wrapperRect.top));

    const progress = scrolled / totalScrollDistance;

    const index = Math.floor(words.length * progress);

    for (let i = 0; i < index; i++) {
        words[i].style.color = 'var(--color-fg)';
    }

    for (let i = index; i < words.length; i++) {
        words[i].style.color = 'var(--color-secondary-accent)';
    }

    window.addEventListener('scroll', () => {
        const wrapperRect = wrapper.getBoundingClientRect();
        const totalScrollDistance = wrapper.offsetHeight - window.innerHeight;

        const scrolled = Math.max(0, Math.min(totalScrollDistance, -wrapperRect.top));

        const progress = scrolled / totalScrollDistance;

        const index = Math.floor(words.length * progress);

        for (let i = 0; i < index; i++) {
            words[i].style.color = 'var(--color-fg)';
        }

        for (let i = index; i < words.length; i++) {
            words[i].style.color = 'var(--color-secondary-accent)';
        }
    });

});