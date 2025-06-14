<script>
    // panner
    document.addEventListener('DOMContentLoaded', function() {
        const sliderWrapper = document.querySelector('.slider-wrapper');
        const sliderItems = document.querySelectorAll('.slider-item');
        const navLeft = document.querySelector('.slider-nav-left');
        const navRight = document.querySelector('.slider-nav-right');
        const sliderDots = document.querySelector('.slider-dots');

        const totalSlides = sliderItems.length;
        let currentIndex = 0;
        let autoSlideInterval;

        function createDots() {
            sliderDots.innerHTML = '';
            for (let i = 0; i < totalSlides; i++) {
                const dot = document.createElement('span');
                dot.classList.add('dot');
                if (i === currentIndex) {
                    dot.classList.add('active');
                }
                dot.dataset.index = i;
                dot.addEventListener('click', () => goToSlide(i));
                sliderDots.appendChild(dot);
            }
        }

        function goToSlide(index) {
            if (index < 0) {
                index = totalSlides - 1;
            } else if (index >= totalSlides) {
                index = 0;
            }

            currentIndex = index;
            const offset = -currentIndex * 100;
            sliderWrapper.style.transform = `translateX(${offset}%)`;
            updateDots();
            restartAutoSlide();
        }

        function updateDots() {
            const dots = document.querySelectorAll('.slider-dots .dot');
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }

        navLeft.addEventListener('click', () => goToSlide(currentIndex - 1));
        navRight.addEventListener('click', () => goToSlide(currentIndex + 1));

        function startAutoSlide() {
            autoSlideInterval = setInterval(() => {
                goToSlide(currentIndex + 1);
            }, 5000);
        }

        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }

        function restartAutoSlide() {
            stopAutoSlide();
            startAutoSlide();
        }

        createDots();
        goToSlide(0);
        startAutoSlide();
    });

    document.addEventListener('DOMContentLoaded', function() {
    const sliderWrapper = document.querySelector('.categories-container-wrapper'); // Wrapper mới
    const slider = document.getElementById('productCategoriesSlider');
    const leftArrow = document.querySelector('.category-nav-left');
    const rightArrow = document.querySelector('.category-nav-right');

    if (sliderWrapper && slider && leftArrow && rightArrow) {
        const gap = 20; // Khoảng cách giữa các item (phải khớp với CSS)
        const itemsToShow = 6; // Số lượng item muốn hiển thị cùng lúc
        let itemWidth = 0;

        const calculateItemWidth = () => {
            const containerWidth = sliderWrapper.clientWidth;
            // Lấy 20px là tổng padding horizontal của .categories-container (10px left + 10px right)
            itemWidth = (containerWidth - ((itemsToShow - 1) * gap) - 20) / itemsToShow;

            // Áp dụng chiều rộng cho tất cả các item
            const items = slider.querySelectorAll('.category-item');
            items.forEach(item => {
                item.style.width = `${itemWidth}px`;
            });
        };

        // Chạy hàm tính toán khi tải trang và khi thay đổi kích thước cửa sổ
        calculateItemWidth();
        window.addEventListener('resize', calculateItemWidth);

        // Logic cuộn
        const scrollAmount = itemWidth + gap;

        leftArrow.addEventListener('click', function() {
            sliderWrapper.scrollBy({ // Cuộn wrapper
                left: -scrollAmount,
                behavior: 'smooth'
            });
        });

        rightArrow.addEventListener('click', function() {
                sliderWrapper.scrollBy({ // Cuộn wrapper
                left: scrollAmount,
                behavior: 'smooth'
            });
        });

        // Tùy chọn: Ẩn/hiện mũi tên dựa trên khả năng cuộn
        const checkArrowsVisibility = () => {
            const totalWidthOfItems = slider.scrollWidth;
            const currentScrollLeft = sliderWrapper.scrollLeft;
            const visibleWidth = sliderWrapper.clientWidth;

            leftArrow.style.display = currentScrollLeft <= 1 ? 'none' : 'flex';
            rightArrow.style.display = (currentScrollLeft + visibleWidth + 1) >= totalWidthOfItems ? 'none' : 'flex';
        };

        checkArrowsVisibility();
        sliderWrapper.addEventListener('scroll', checkArrowsVisibility);
        window.addEventListener('resize', checkArrowsVisibility);
    }
});
</script>
