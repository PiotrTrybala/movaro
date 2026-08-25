
document.addEventListener("DOMContentLoaded", () => {


    const accordion = document.querySelector(".c-accordion");

    const headers = accordion.querySelectorAll(".c-accordion__item-header");

    headers.forEach((header) => {
        header.addEventListener('click', (e) => {
            const hdr = e.currentTarget;
            const id = hdr.getAttribute("data-accordion-item-id");

            const button = hdr.querySelector(".c-accordion__item-header-button");

            const accordionItem = document.querySelector(`.c-accordion__item[data-accordion-item-id="${id}"]`);
            if (!accordionItem) return;

            const isToggled = accordionItem.getAttribute("data-toggled") === "true";

            document.querySelectorAll('.c-accordion__item').forEach((item) => {
                item.setAttribute('data-toggled', "false");
                const content = item.querySelector('.c-accordion__item-content');
                if (content) {
                    content.classList.remove("open");
                    button.classList.remove('open');
                }
            });

            if (!isToggled) {
                const accordionItemContent = accordionItem.querySelector(".c-accordion__item-content");
                if (accordionItemContent) {
                    accordionItemContent.classList.add('open');
                    button.classList.add('open');
                }
                accordionItem.setAttribute('data-toggled', 'true');
            }


        });
    });
});