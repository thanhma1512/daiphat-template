<header>
    <div class="header">
        <div class="logo-img">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
        </div>

        <div class="search-container">
            <input type="text" class="search-input" placeholder="Nhập từ khóa tìm kiếm...">
            <button type="submit" class="search-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-search">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </button>
        </div>

        <div class="header-action-item hotline-1"><i class="fa-solid fa-phone"></i>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-phone action-icon-with-border">
            </svg>
            <div class="text-content">
                <span class="label">Hotline đặt hàng</span>
                <span class="value">0962 544 227</span>
            </div>
        </div>

        <div class="header-action-item hotline-2"><i class="fa-solid fa-phone"></i>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-phone action-icon-with-border">
            </svg>
            <div class="text-content">
                <span class="label">Hotline đặt hàng</span>
                <span class="value">0962 544 227</span>
            </div>
        </div>

        <div class="header-action-item cart-item"><i class="fa-solid fa-cart-shopping"></i>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-shopping-cart action-icon-with-border">
            </svg>
            <div class="text-content">
                <span class="label">Giỏ hàng của bạn</span>
                <span class="value">0</span>
            </div>
        </div>

        <div class="header-action-item language-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-globe">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="2" y1="12" x2="22" y2="12"></line>
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                </path>
            </svg>
        </div>
    </div>
    @include('layout.partials.menu')
</header>
