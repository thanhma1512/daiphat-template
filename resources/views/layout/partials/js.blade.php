<script>
    //panner
    document.addEventListener('DOMContentLoaded', function() {
        const sliderWrapper = document.querySelector('.slider-wrapper');
        const sliderItems = document.querySelectorAll('.slider-item');
        const navLeft = document.querySelector('.slider-nav-left');
        const navRight = document.querySelector('.slider-nav-right');
        const sliderDots = document.querySelector('.slider-dots');

        if (sliderWrapper && sliderItems.length > 0 && navLeft && navRight && sliderDots) {
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
        } else {
            console.warn(
                "Panner slider elements not fully initialized or not found. Skipping panner initialization."
                );
        }
    });
    // JavaScript để xử lý phát video và chuyển đổi thumbnail
    document.addEventListener('DOMContentLoaded', () => {
        const mainVideoContainer = document.getElementById('mainVideoContainer');
        const mainVideoPlayer = document.getElementById('mainVideoPlayer');
        const playButton = mainVideoContainer.querySelector('.video-play');
        const subVideoItems = document.querySelectorAll('.sub-video-item'); // Chọn các item bọc thumbnail
        const mainThumbnail = mainVideoContainer.querySelector('.video-thumbnail-main');

        // Hàm để tải và phát video
        function loadAndPlayVideo(videoId) {
            // Sử dụng đường dẫn nhúng YouTube chính thức
            mainVideoPlayer.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&enablejsapi=1`;
            mainVideoContainer.classList.add('playing');
        }

        // Xử lý khi click nút Play trên video chính
        if (playButton) {
            playButton.addEventListener('click', () => {
                // Mặc định phát video đầu tiên hoặc video chính
                // Bạn cần thay thế 'VIDEO_ID_MAC_DINH' bằng ID video YouTube mặc định của bạn
                loadAndPlayVideo(
                'dQw4w9WgXcQ'); // Ví dụ: 'dQw4w9WgXcQ' (Rick Astley - Never Gonna Give You Up)
            });
        }

        // Xử lý khi click vào các thumbnail video phụ (hoặc overlay của chúng)
        subVideoItems.forEach(item => {
            item.addEventListener('click', () => {
                const videoId = item.querySelector('img').dataset.videoId;
                if (videoId) {
                    loadAndPlayVideo(videoId);
                }
            });
        });
    });
    // product-categories-section
    document.addEventListener('DOMContentLoaded', () => {
        // ==================================
        // Logic cho Panner (Slider chính)
        // ==================================
        const sliderWrapper = document.querySelector('.slider-wrapper');
        const sliderItems = document.querySelectorAll('.slider-item');
        const navLeft = document.querySelector('.slider-nav-left');
        const navRight = document.querySelector('.slider-nav-right');
        const sliderDots = document.querySelector('.slider-dots');

        // Kiểm tra xem tất cả các phần tử cần thiết cho panner có tồn tại không
        if (sliderWrapper && sliderItems.length > 0 && navLeft && navRight && sliderDots) {
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
        } else {
            console.warn(
                "Panner slider elements not fully initialized or not found. Skipping panner initialization."
            );
        }

        // ==================================
        // Logic cho Tabs (Sản phẩm)
        // ==================================
        const tabButtons = document.querySelectorAll('.tab-button');
        const tabPanes = document.querySelectorAll('.tab-pane');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Loại bỏ lớp 'active' khỏi tất cả các nút và tab-pane
                tabButtons.forEach(btn => btn.classList.remove('active'));
                tabPanes.forEach(pane => pane.classList.remove('active'));

                // Thêm lớp 'active' vào nút được click
                button.classList.add('active');

                // Hiển thị tab-pane tương ứng
                const targetTabId = button.dataset.tab;
                document.getElementById(targetTabId).classList.add('active');
            });
        });

        // ==================================
        // Logic cho Product Carousel (Slider) - Đã sửa
        // ==================================
        const productTabsSection = document.querySelector('.product-tabs-section');
        const arrowLeftButton = productTabsSection.querySelector('.tab-arrow-left');
        const arrowRightButton = productTabsSection.querySelector('.tab-arrow-right');

        // Hàm để xử lý cuộn carousel
        function scrollProductCarousel(direction) {
            // Lấy tab-pane đang active (đây là điểm mấu chốt)
            const activeTabPane = document.querySelector('.product-tabs-content .tab-pane.active');
            if (!activeTabPane) {
                console.warn("No active product tab pane found.");
                return;
            }

            const carousel = activeTabPane.querySelector('.product-carousel');
            if (!carousel) {
                console.warn("No product carousel found in the active tab pane.");
                return;
            }

            const firstItem = carousel.querySelector('.product-carousel-item');
            if (!firstItem) {
                console.warn("No product carousel items found.");
                return;
            }

            const itemWidth = firstItem.offsetWidth; // Chiều rộng thực của một item
            // Lấy gap từ CSS của carousel, đảm bảo tính toán đúng khoảng cách
            const style = window.getComputedStyle(carousel);
            const gap = parseFloat(style.gap) || 0; // Chuyển đổi gap sang số, mặc định 0 nếu không có

            // Ước tính số lượng item hiển thị trong viewport hiện tại
            const carouselVisibleWidth = carousel.clientWidth;
            let itemsPerView = Math.floor(carouselVisibleWidth / (itemWidth + gap));
            if (itemsPerView === 0) itemsPerView = 1; // Đảm bảo cuộn ít nhất 1 item

            // Tính toán khoảng cách cuộn
            const scrollAmount = (itemWidth + gap) * itemsPerView;

            if (direction === 'right') {
                carousel.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            } else if (direction === 'left') {
                carousel.scrollBy({
                    left: -scrollAmount,
                    behavior: 'smooth'
                });
            }
        }

        if (arrowLeftButton) {
            arrowLeftButton.addEventListener('click', () => scrollProductCarousel('left'));
        }

        if (arrowRightButton) {
            arrowRightButton.addEventListener('click', () => scrollProductCarousel('right'));
        }

        // ==================================
        // JavaScript để xử lý phát video và chuyển đổi thumbnail
        // ==================================
        const mainVideoContainer = document.getElementById('mainVideoContainer');
        const mainVideoPlayer = document.getElementById('mainVideoPlayer');
        const playButton = mainVideoContainer ? mainVideoContainer.querySelector('.video-play') :
        null; // Kiểm tra null trước khi querySelector
        const subVideoItems = document.querySelectorAll('.sub-video-item');
        // mainThumbnail không cần thiết cho logic JS này nếu bạn chỉ muốn ẩn nó khi video phát

        // Hàm để tải và phát video
        function loadAndPlayVideo(videoId) {
            if (mainVideoPlayer && mainVideoContainer) {
                // Sử dụng đường dẫn nhúng YouTube chính thức (đã sửa lỗi typo '1{videoId}' thành '{videoId}')
                mainVideoPlayer.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&enablejsapi=1`;
                mainVideoContainer.classList.add('playing');
            }
        }

        // Xử lý khi click nút Play trên video chính
        if (playButton) {
            playButton.addEventListener('click', () => {
                // Mặc định phát video đầu tiên hoặc video chính
                loadAndPlayVideo(
                'dQw4w9WgXcQ'); // Ví dụ: 'dQw4w9WgXcQ' (Rick Astley - Never Gonna Give You Up)
            });
        }

        // Xử lý khi click vào các thumbnail video phụ (hoặc overlay của chúng)
        subVideoItems.forEach(item => {
            item.addEventListener('click', () => {
                const videoId = item.querySelector('img').dataset.videoId;
                if (videoId) {
                    loadAndPlayVideo(videoId);
                }
            });
        });
    });
</script>
