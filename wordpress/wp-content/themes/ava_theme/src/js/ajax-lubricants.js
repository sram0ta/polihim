document.addEventListener("DOMContentLoaded", () => {
    const filterButtons = document.querySelectorAll(".products-filter__button");
    const clearButton = document.querySelector(".products-filter__clear");
    const container = document.querySelector(".lubricants__content");
    const titleButtons = document.querySelectorAll(".products-filter__title-button");
    const filterItems = document.querySelectorAll(".products-filter__item");

    let selected = {
        compound: [],
        purpose: [],
        industry: []
    };

    const getParamsFromURL = () => {
        const params = new URLSearchParams(window.location.search);

        for (const key of ['compound', 'purpose', 'industry']) {
            const values = params.getAll(key);
            if (values.length > 0) {
                selected[key] = values;
            }
        }
    };

    const updateButtonStates = () => {
        filterButtons.forEach(button => {
            const type = button.dataset.type;
            const parent = button.closest(".products-filter__item");
            const taxonomy = parent.dataset.block;

            if (selected[taxonomy] && selected[taxonomy].includes(type)) {
                button.classList.add("active");
            } else {
                button.classList.remove("active");
            }
        });
    };

    const toggleClearButton = () => {
        const isEmpty = Object.values(selected).every(arr => arr.length === 0);
        clearButton.style.display = isEmpty ? "none" : "inline-block";
    };

    const fetchFilteredPosts = () => {
        const formData = new FormData();
        formData.append("action", "filter_lubricants");

        for (const [key, values] of Object.entries(selected)) {
            values.forEach(val => formData.append(`${key}[]`, val));
        }

        formData.append("lang", ajax_object.lang);

        fetch(ajax_object.ajax_url, {
            method: "POST",
            body: formData,
        })
            .then(res => res.text())
            .then(data => {
                container.innerHTML = data;
                toggleClearButton();
            });
    };

    filterButtons.forEach(button => {
        button.addEventListener("click", () => {
            const type = button.dataset.type;
            const parent = button.closest(".products-filter__item");
            const taxonomy = parent.dataset.block;

            if (!taxonomy) return;

            const isActive = button.classList.contains("active");
            button.classList.toggle("active");

            if (isActive) {
                selected[taxonomy] = selected[taxonomy].filter(item => item !== type);
            } else {
                selected[taxonomy].push(type);
            }

            fetchFilteredPosts();
        });
    });

    clearButton.addEventListener("click", () => {
        for (const key in selected) {
            selected[key] = [];
        }

        document.querySelectorAll(".products-filter__button").forEach(btn => {
            btn.classList.remove("active");
        });

        fetchFilteredPosts();
    });

    const initTitleButtonListeners = () => {
        titleButtons.forEach(button => {
            const newButton = button.cloneNode(true);
            button.replaceWith(newButton);
        });

        const updatedTitleButtons = document.querySelectorAll(".products-filter__title-button");

        updatedTitleButtons.forEach(button => {
            button.addEventListener("click", () => {
                if (window.innerWidth > 1024) return;

                const target = button.dataset.button;
                const targetBlock = document.querySelector(`.products-filter__item[data-block="${target}"]`);

                const isAlreadyActive = button.classList.contains("active");

                updatedTitleButtons.forEach(btn => btn.classList.remove("active"));
                filterItems.forEach(item => item.classList.remove("active"));

                if (!isAlreadyActive) {
                    button.classList.add("active");
                    if (targetBlock) targetBlock.classList.add("active");
                }
            });
        });
    };

    getParamsFromURL();
    updateButtonStates();
    fetchFilteredPosts();
    initTitleButtonListeners();
});
