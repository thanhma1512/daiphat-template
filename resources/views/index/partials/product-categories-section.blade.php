<div class="product-container-outer">
    <section class="product-tabs-section">
        <div class="product-tabs-header">
            <div class="product-tabs-nav">
                <button class="tab-button active" data-tab="newProductsTab">SẢN PHẨM MỚI</button>
                <button class="tab-button" data-tab="promoProductsTab">SẢN PHẨM KHUYẾN MÃI</button>
                <button class="tab-button" data-tab="bestSellingProductsTab">SẢN PHẨM BÁN CHẠY</button>
            </div>
            <div class="product-tabs-arrows">
                <button class="tab-arrow-btn tab-arrow-left">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button class="tab-arrow-btn tab-arrow-right">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <div class="product-tabs-content">
            <div class="tab-pane active" id="newProductsTab">
                @include('index.partials.product_carousel')
            </div>

            <div class="tab-pane" id="promoProductsTab">
               @include('index.partials.product_carousel')
            </div>

            <div class="tab-pane" id="bestSellingProductsTab">
                @include('index.partials.product_carousel')
            </div>
        </div>
    </section>
</div>