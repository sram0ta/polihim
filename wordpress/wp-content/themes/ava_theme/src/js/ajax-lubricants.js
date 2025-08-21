document.addEventListener("DOMContentLoaded", () => {
    const clearButton   = document.querySelector(".products-filter__clear");
    const container     = document.querySelector(".lubricants__content");
    const titleButtons  = document.querySelectorAll(".products-filter__title-button");
    const filterItems   = document.querySelectorAll(".products-filter__item");
    const industryBlock = document.querySelector('.products-filter__item[data-block="industry"]');
    const industryInner = industryBlock?.querySelector('.products-filter__inner');

    const selected = {
        compound: [],
        purpose : [],
        industry: []
    };

    const uniq = (arr) => Array.from(new Set(arr));
    const removeFrom = (arr, val) => arr.filter(v => v !== val);

    const getParamsFromURL = () => {
        const params = new URLSearchParams(window.location.search);
        for (const key of ['compound', 'purpose', 'industry']) {
            const values = params.getAll(key);
            if (values.length > 0) selected[key] = uniq(values);
        }
    };

    const updateButtonStates = () => {
        document.querySelectorAll(".products-filter__button").forEach(button => {
            const type     = button.dataset.type;
            const parent   = button.closest(".products-filter__item");
            const taxonomy = parent?.dataset.block;
            if (!taxonomy) return;

            if (selected[taxonomy]?.includes(type)) {
                button.classList.add("active");
            } else {
                button.classList.remove("active");
            }
        });
    };

    const toggleClearButton = () => {
        const isEmpty = Object.values(selected).every(arr => arr.length === 0);
        if (clearButton) clearButton.style.display = isEmpty ? "none" : "inline-block";
    };

    const fetchFilteredPosts = () => {
        if (!container) return;
        const formData = new FormData();
        formData.append("action", "filter_lubricants");

        for (const [key, values] of Object.entries(selected)) {
            values.forEach(val => formData.append(`${key}[]`, val));
        }
        if (typeof ajax_object?.lang !== "undefined") {
            formData.append("lang", ajax_object.lang);
        }

        fetch(ajax_object.ajax_url, { method: "POST", body: formData })
            .then(res => res.text())
            .then(html => {
                container.innerHTML = html;
                toggleClearButton();
            })
            .catch(() => {
            });
    };

    const refreshIndustryUI = () => {
        return new Promise((resolve) => {
            if (!industryBlock) {
                resolve();
                return;
            }

            if (selected.purpose.length === 0) {
                industryBlock.classList.add('is-hidden');
                selected.industry = [];
                if (industryInner) industryInner.innerHTML = '';
                updateButtonStates();
                toggleClearButton();
                resolve();
                return;
            }

            const fd = new FormData();
            fd.append('action', 'get_purpose_children');
            selected.purpose.forEach(slug => fd.append('parents[]', slug));

            fetch(ajax_object.ajax_url, { method: 'POST', body: fd })
                .then(r => r.text())
                .then(html => {
                    const tmp = document.createElement('div');
                    tmp.innerHTML = html.trim();
                    const childButtons = tmp.querySelectorAll('.products-filter__button');

                    if (childButtons.length === 0) {
                        industryBlock.classList.add('is-hidden');
                        selected.industry = [];
                        if (industryInner) industryInner.innerHTML = '';
                        updateButtonStates();
                        toggleClearButton();
                        resolve();
                        return;
                    }

                    industryBlock.classList.remove('is-hidden');

                    const availableSlugs = Array.from(childButtons).map(btn => btn.dataset.type);
                    selected.industry = selected.industry.filter(slug => availableSlugs.includes(slug));

                    if (industryInner) {
                        industryInner.innerHTML = tmp.innerHTML;
                    }

                    updateButtonStates();
                    toggleClearButton();
                    resolve();
                })
                .catch(() => {
                    industryBlock.classList.add('is-hidden');
                    selected.industry = [];
                    if (industryInner) industryInner.innerHTML = '';
                    updateButtonStates();
                    toggleClearButton();
                    resolve();
                });
        });
    };

    document.addEventListener('click', async (e) => {
        const button = e.target.closest('.products-filter__button');
        if (!button) return;

        const parent   = button.closest(".products-filter__item");
        const taxonomy = parent?.dataset.block;
        if (!taxonomy) return;

        const type = button.dataset.type;
        const isActive = button.classList.contains("active");

        if (isActive) {
            selected[taxonomy] = removeFrom(selected[taxonomy], type);
        } else {
            selected[taxonomy] = uniq([...selected[taxonomy], type]);
        }

        if (taxonomy === 'purpose') {
            await refreshIndustryUI();
            updateButtonStates();
            fetchFilteredPosts();
            return;
        }

        updateButtonStates();
        fetchFilteredPosts();
    });

    if (clearButton) {
        clearButton.addEventListener("click", () => {
            for (const key in selected) selected[key] = [];
            document.querySelectorAll(".products-filter__button").forEach(btn => btn.classList.remove("active"));
            refreshIndustryUI().then(() => {
                fetchFilteredPosts();
            });
        });
    }

    const initTitleButtonListeners = () => {
        if (!titleButtons.length) return;

        titleButtons.forEach(button => {
            const clone = button.cloneNode(true);
            button.replaceWith(clone);
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
    refreshIndustryUI().then(() => {
        fetchFilteredPosts();
    });
    initTitleButtonListeners();
});
