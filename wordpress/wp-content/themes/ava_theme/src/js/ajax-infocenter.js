document.addEventListener('DOMContentLoaded', () => {
    const postList = document.querySelector('.info-center__list');
    const buttons = document.querySelectorAll('.date-filter__button');
    const loadMoreBtn = document.querySelector('.info-center__button button');

    if (!postList || !buttons.length || !loadMoreBtn) return;

    let activeButton = document.querySelector('.date-filter__button.active');
    let currentYear = activeButton ? activeButton.dataset.year : 'current';
    let currentPage = 1;
    let maxPages = 1;

    const fetchPosts = (year = 'current', page = 1, append = false) => {
        const formData = new FormData();
        formData.append('action', 'filter_by_year');
        formData.append('year', year);
        formData.append('paged', page);

        fetch('/wp-admin/admin-ajax.php', {
            method: 'POST',
            body: formData,
            cache: 'no-store',
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    if (append) {
                        postList.insertAdjacentHTML('beforeend', data.data.html);
                    } else {
                        postList.innerHTML = data.data.html;
                    }

                    maxPages = data.data.max_pages;
                    currentPage = data.data.current_page;

                    loadMoreBtn.style.display = currentPage < maxPages ? 'flex' : 'none';
                } else {
                    postList.innerHTML = '<p>Ошибка загрузки данных.</p>';
                    loadMoreBtn.style.display = 'none';
                }
            })
            .catch(() => {
                postList.innerHTML = '<p>Ошибка загрузки данных.</p>';
                loadMoreBtn.style.display = 'none';
            });
    };

    const handleClick = (e) => {
        const button = e.currentTarget;
        if (button === activeButton) return;

        if (activeButton) activeButton.classList.remove('active');
        button.classList.add('active');
        activeButton = button;

        currentYear = button.dataset.year;
        currentPage = 1;
        fetchPosts(currentYear, currentPage, false);
    };

    buttons.forEach(btn => btn.addEventListener('click', handleClick));

    loadMoreBtn.addEventListener('click', () => {
        if (currentPage < maxPages) {
            fetchPosts(currentYear, currentPage + 1, true);
            currentPage++;
        }
    });

    // Начальная загрузка
    fetchPosts(currentYear, currentPage, false);
});
