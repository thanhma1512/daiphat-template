<div class="product-section-main-wrapper">
    <div class="section-title-bar">
        <h2 class="section-title">ẮC QUY GS</h2>
        <a href="#" class="view-all-button">Xem tất cả <i class="fa-solid fa-chevron-right"></i></a>
    </div>

    <div class="product-content-area">
        <div class="product-list-tabs-container">
            <div class="product-tabs-content-display">
                <div class="tab-pane active" id="newProductsTab">
                    <div class="product-grid">
                        @for ($i = 0; $i < 8; $i++)
                            @include('index.partials.product_grid_item')
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <div class="promo-sidebar">
            <div class="banner-wrapper">
                <img src="{{ asset('assets/images/panner2.png') }}" alt="Ắc Quy Điện Năng" class="sidebar-main-banner-image">
            </div>
            <div class="small-products-list">
                <div class="small-product-item border-gold">
                    <img src="{{ asset('assets/images/product_carousel.jpg') }}" alt="Product">
                    <div class="small-product-details">
                        <p class="small-product-name">Bình ắc quy GS MF 46B24L</p>
                        <p class="small-product-price">1.300.000₫ <span class="old-price">2.300.000₫</span></p>
                    </div>
                </div>
                <div class="small-product-item border-gold">
                    <img src="{{ asset('assets/images/product_carousel.jpg') }}" alt="Product">
                    <div class="small-product-details">
                        <p class="small-product-name">Bình ắc quy GS MF 46B24L</p>
                        <p class="small-product-price">1.300.000₫ <span class="old-price">2.300.000₫</span></p>
                    </div>
                </div>
                 <div class="small-product-item border-gold">
                    <img src="{{ asset('assets/images/product_carousel.jpg') }}" alt="Product">
                    <div class="small-product-details">
                        <p class="small-product-name">Bình ắc quy GS MF 46B24L</p>
                        <p class="small-product-price">1.300.000₫ <span class="old-price">2.300.000₫</span></p>
                    </div>
                </div>
            </div>
            <a href="#" class="view-all-sidebar-products-button">Xem tất cả sản phẩm</a>
        </div>
    </div>
</div>

