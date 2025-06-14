<section class="product-categories-section">
    <div class="category-header">
        <h2>KHÁM PHÁ VỀ ẮC QUY GS</h2>
        <div class="category-nav">
            <button class="category-nav-btn category-nav-left">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="category-nav-btn category-nav-right">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
    </div>
    <div class="categories-container-wrapper"> {{-- Thêm wrapper này để điều khiển overflow --}}
        <div class="categories-container" id="productCategoriesSlider"> {{-- Thêm ID cho JS --}}
            {{-- Item 1: Ắc Quy GS --}}
            <a href="#" class="category-item">
                <div class="category-image">
                    <img src="{{ asset('assets/images/product_categories.jpg') }}" alt="ẮC QUY GS">
                </div>
                <p>ẮC QUY GS</p>
            </a>

            {{-- Item 2: Xe điện --}}
            <a href="#" class="category-item">
                <div class="category-image">
                    <img src="{{ asset('assets/images/product_categories.jpg') }}" alt="XE ĐIỆN">
                </div>
                <p>XE ĐIỆN</p>
            </a>

            {{-- Item 3: Xe hơi khác --}}
            <a href="#" class="category-item">
                <div class="category-image">
                    <img src="{{ asset('assets/images/product_categories.jpg') }}" alt="XE HƠI KHÁC">
                </div>
                <p>XE HƠI KHÁC</p>
            </a>

            {{-- Item 4: Xe tải --}}
            <a href="#" class="category-item">
                <div class="category-image">
                    <img src="{{ asset('assets/images/product_categories.jpg') }}" alt="XE TẢI">
                </div>
                <p>XE TẢI</p>
            </a>

            {{-- Item 5: Xe khách --}}
            <a href="#" class="category-item">
                <div class="category-image">
                    <img src="{{ asset('assets/images/product_categories.jpg') }}" alt="XE KHÁCH">
                </div>
                <p>XE KHÁCH</p>
            </a>

            {{-- Item 6: Ắc quy ô tô - Xe hơi --}}
            <a href="#" class="category-item">
                <div class="category-image">
                    <img src="{{ asset('assets/images/product_categories.jpg') }}" alt="ẮC QUY Ô TÔ - XE HƠI">
                </div>
                <p>ẮC QUY Ô TÔ - XE HƠI</p>
            </a>

            {{-- Thêm nhiều category item khác để thấy hiệu ứng trượt --}}
            <a href="#" class="category-item">
                <div class="category-image">
                    <img src="{{ asset('assets/images/product_categories.jpg') }}" alt="ẮC QUY MỚI 1">
                </div>
                <p>ẮC QUY MỚI 1</p>
            </a>
            <a href="#" class="category-item">
                <div class="category-image">
                    <img src="{{ asset('assets/images/product_categories.jpg') }}" alt="ẮC QUY MỚI 2">
                </div>
                <p>ẮC QUY MỚI 2</p>
            </a>
            <a href="#" class="category-item">
                <div class="category-image">
                    <img src="{{ asset('assets/images/product_categories.jpg') }}" alt="ẮC QUY MỚI 3">
                </div>
                <p>ẮC QUY MỚI 3</p>
            </a>
        </div>
    </div>
</section>