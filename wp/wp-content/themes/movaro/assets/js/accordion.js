document.addEventListener("DOMContentLoaded", () => {
    const accordionButtons = document.querySelectorAll(".b-faq__accordion-item-button");

    accordionButtons.forEach((button) => {
        button.addEventListener("click", (e) => {
            const btn = e.currentTarget; 
            const id = btn.getAttribute("data-accordion-id");

            const accordionItem = document.querySelector(`.b-faq__accordion-item[data-accordion-id="${id}"]`);
            if (!accordionItem) return;

            const isToggled = accordionItem.getAttribute("data-toggled") === "true";

            document.querySelectorAll(".b-faq__accordion-item").forEach((item) => {
                item.setAttribute("data-toggled", "false");
                const body = item.querySelector(".b-faq__accordion-item-body");
                if (body) {
                    body.classList.remove("b-faq__accordion-item-body-open");
                }
            });

            if (!isToggled) {
                const accordionItemBody = accordionItem.querySelector(".b-faq__accordion-item-body");
                if (accordionItemBody) {
                    accordionItemBody.classList.add("b-faq__accordion-item-body-open");
                }
                accordionItem.setAttribute("data-toggled", "true");
            }
        });
    });
});