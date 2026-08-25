import { scrollToElementWithOffset } from "../../assets/js/utils";

document.addEventListener("DOMContentLoaded", () => {

    const loadMoreButton = document.querySelector(".b-shop__load-more-button");
    const content = document.querySelector(".b-shop__content");

    let isLoading = false;
    let isDataRemaining = true;

    console.table(shop_ajax);

    loadMoreButton.addEventListener('click', (e) => {

        e.preventDefault();

        const page = parseInt(content.getAttribute("data-page"));
        const perPage = parseInt(content.getAttribute("data-per-page"));
        const offset = parseInt(content.getAttribute("data-offset"));

        if (isLoading) return;
        isLoading = true;

        if (!isDataRemaining) {
            console.log('going up');
            scrollToElementWithOffset(".b-shop__header");
            return;
        }

        loadMoreButton.textContent = "Ładowanie...";

        const formData = new URLSearchParams();

        formData.append('action', "load_more_shop");
        formData.append('nonce', shop_ajax.nonce);
        formData.append('offset', offset);
        formData.append('per_page', perPage);

        fetch(shop_ajax.ajax_url, {
            method: "POST",
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: formData.toString(),
        })
            .then((response) => response.json())
            .then((data) => {

                if (data.html) {
                    content.insertAdjacentHTML('beforeend', data.html);
                    content.setAttribute("data-offset", offset + perPage);
                    content.setAttribute("data-page", page + 1);
                    loadMoreButton.textContent = "Zobacz więcej";
                }

                if (!data.remaining) {
                    isDataRemaining = false;
                    loadMoreButton.textContent = "Wróc do góry";
                }

                isLoading = false;
            })
            .catch((error) => {
                console.error(error);
                loadMoreButton.textContent = "Wystąpił błąd";
                isLoading = false;
            });
    });
});