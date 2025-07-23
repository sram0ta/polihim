document.addEventListener('DOMContentLoaded', function () {
    if (document.querySelector('.tara__content')) {
        const buttons = document.querySelectorAll('.products-filter__button');
        const content = document.querySelector('.tara__content');
        const clearButton = document.querySelector('.products-filter__clear');

        const titleButton = document.querySelector('.products-filter__title-button[data-button="tare"]');
        const filterBlock = document.querySelector('.products-filter__item[data-block="tare"]');

        function getSelectedTerms() {
            const activeButtons = document.querySelectorAll('.products-filter__button.active');
            return Array.from(activeButtons).map(btn => btn.dataset.type);
        }

        function fetchProducts(terms = []) {
            const formData = new FormData();
            formData.append('action', 'filter_by_container_type');

            terms.forEach(term => formData.append('terms[]', term));

            fetch('/wp-admin/admin-ajax.php', {
                method: 'POST',
                body: formData
            })
                .then(res => res.text())
                .then(html => {
                    content.innerHTML = html;
                })
                .catch(() => {
                    content.innerHTML = '<p>Произошла ошибка загрузки.</p>';
                });

            clearButton.style.display = terms.length > 0 ? 'block' : 'none';
        }

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                button.classList.toggle('active');
                fetchProducts(getSelectedTerms());
            });
        });

        clearButton.addEventListener('click', () => {
            buttons.forEach(btn => btn.classList.remove('active'));
            fetchProducts([]);
        });

        clearButton.style.display = 'none';

        function handleToggleFilter() {
            if (window.innerWidth > 1024) return;

            if (titleButton && filterBlock) {
                titleButton.addEventListener('click', () => {
                    const isActive = titleButton.classList.contains('active');

                    titleButton.classList.remove('active');
                    filterBlock.classList.remove('active');

                    if (!isActive) {
                        titleButton.classList.add('active');
                        filterBlock.classList.add('active');
                    }
                });
            }
        }

        handleToggleFilter();
    }
});
