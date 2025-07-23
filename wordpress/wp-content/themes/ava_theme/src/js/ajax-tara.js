document.addEventListener('DOMContentLoaded', function () {
    if (document.querySelector('.tara__content')) {
        const buttons = document.querySelectorAll('.products-filter__button');
        const content = document.querySelector('.tara__content');
        const clearButton = document.querySelector('.products-filter__clear');

        function getSelectedTerms() {
            const activeButtons = document.querySelectorAll('.products-filter__button.active:not([data-type="all"])');
            return Array.from(activeButtons).map(btn => btn.dataset.type);
        }

        function fetchProducts(terms = []) {
            const formData = new FormData();
            formData.append('action', 'filter_by_container_type');

            if (terms.length > 0) {
                terms.forEach(term => formData.append('terms[]', term));
            } else {
                formData.append('terms[]', 'all');
            }

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

            // Показ / скрытие кнопки сброса
            clearButton.style.display = terms.length > 0 ? 'block' : 'none';
        }

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const isAll = button.dataset.type === 'all';

                if (isAll) {
                    buttons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');
                } else {
                    document.querySelector('[data-type="all"]').classList.remove('active');
                    button.classList.toggle('active');

                    const selectedTerms = getSelectedTerms();
                    if (selectedTerms.length === 0) {
                        document.querySelector('[data-type="all"]').classList.add('active');
                    }
                }

                fetchProducts(getSelectedTerms());
            });
        });

        clearButton.addEventListener('click', () => {
            buttons.forEach(btn => btn.classList.remove('active'));
            const allBtn = document.querySelector('[data-type="all"]');
            allBtn.classList.add('active');
            fetchProducts([]);
        });

        clearButton.style.display = 'none';
        fetchProducts([]);
    }
});
