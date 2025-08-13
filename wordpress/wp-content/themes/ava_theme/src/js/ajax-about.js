document.addEventListener('DOMContentLoaded', () => {
    const imagesWrapper = document.querySelector('.clients__image__list');
    const itemsWrapper = document.querySelector('.clients__item__list');
    const loadMoreBtn = document.querySelector('.clients__load-more');

    if (!imagesWrapper || !itemsWrapper || !loadMoreBtn) return;

    let currentOffset = 5;
    let isLoading = false;

    const fetchClients = () => {
        if (isLoading) return;
        isLoading = true;

        const formData = new FormData();
        formData.append('action', 'load_more_clients');
        formData.append('offset', currentOffset);

        fetch('/wp-admin/admin-ajax.php', {
            method: 'POST',
            body: formData
        })
            .then(res => res.json())
            .then(data => {
                if (data && data.images && data.items) {
                    imagesWrapper.insertAdjacentHTML('beforeend', data.images);
                    itemsWrapper.insertAdjacentHTML('beforeend', data.items);
                    currentOffset += 5;

                    initHoverSync();
                    highlightFirstClient();

                    if (data.end) {
                        loadMoreBtn.style.display = 'none';
                    }
                } else {
                    loadMoreBtn.style.display = 'none';
                }
            })
            .catch(() => {
                console.error('Ошибка при загрузке клиентов.');
                loadMoreBtn.style.display = 'none';
            })
            .finally(() => {
                isLoading = false;
            });
    };

    loadMoreBtn.addEventListener('click', fetchClients);

    function initHoverSync() {
        const allItems = document.querySelectorAll('.clients__item');
        const allImages = document.querySelectorAll('.clients__image');

        allItems.forEach((item) => {
            item.addEventListener('mouseenter', () => {
                const clientId = item.dataset.client;

                clearHighlights();

                document.querySelectorAll(`[data-client="${clientId}"]`).forEach(el => {
                    el.classList.add('active');
                });

                const currentImage = Array.from(allImages).find(img => img.dataset.client === clientId);
                if (currentImage) {
                    const currentIndex = Array.from(allImages).indexOf(currentImage);
                    allImages.forEach((img, i) => {
                        if (i < currentIndex) {
                            img.classList.add('prev');
                        }
                    });
                }
            });
        });
    }

    function clearHighlights() {
        document.querySelectorAll('.clients__item.active, .clients__image.active, .clients__image.prev').forEach(el => {
            el.classList.remove('active', 'prev');
        });
    }

    function highlightFirstClient() {
        const firstItem = document.querySelector('.clients__item');
        if (!firstItem) return;

        const clientId = firstItem.dataset.client;

        clearHighlights();

        document.querySelectorAll(`[data-client="${clientId}"]`).forEach(el => {
            el.classList.add('active');
        });
    }

    initHoverSync();
    highlightFirstClient();
});
