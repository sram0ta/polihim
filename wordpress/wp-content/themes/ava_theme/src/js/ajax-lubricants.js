document.addEventListener("DOMContentLoaded", () => {
    const filterButtons = document.querySelectorAll(".products-filter__button");
    const clearButton = document.querySelector(".products-filter__clear");
    const container = document.querySelector(".lubricants__content");
    const titleButtons = document.querySelectorAll(".products-filter__title-button");
    const filterItems = document.querySelectorAll(".products-filter__item");

    let selectedCompound = [];
    let selectedPurpose = [];

    const toggleClearButton = () => {
        if (selectedCompound.length === 0 && selectedPurpose.length === 0) {
            clearButton.style.display = "none";
        } else {
            clearButton.style.display = "inline-block";
        }
    };

    const fetchFilteredPosts = () => {
        const formData = new FormData();
        formData.append("action", "filter_lubricants");

        selectedCompound.forEach(val => formData.append("compound[]", val));
        selectedPurpose.forEach(val => formData.append("purpose[]", val));

        fetch("/wp-admin/admin-ajax.php", {
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
            const isCompoundGroup = parent.querySelector(".products-filter__title").textContent.includes("состав");

            const isActive = button.classList.contains("active");
            button.classList.toggle("active");

            if (isCompoundGroup) {
                if (isActive) {
                    selectedCompound = selectedCompound.filter(item => item !== type);
                } else {
                    selectedCompound.push(type);
                }
            } else {
                if (isActive) {
                    selectedPurpose = selectedPurpose.filter(item => item !== type);
                } else {
                    selectedPurpose.push(type);
                }
            }

            fetchFilteredPosts();
        });
    });

    clearButton.addEventListener("click", () => {
        selectedCompound = [];
        selectedPurpose = [];

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

    initTitleButtonListeners();
});
