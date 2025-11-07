<header class="header">
    <div class="header-left">
        <h2 id="pageTitle">ড্যাশবোর্ড ওভারভিউ</h2>
        <p id="currentDate"></p>
    </div>
    <div class="header-right">
        <div class="search-box">
            <svg class="search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.35-4.35"></path>
            </svg>
            <input type="text" placeholder="খুঁজুন..." id="globalSearch">
        </div>
        <span class="user-name" aria-hidden="true">অ্যাডমিন</span>
        <div class="user-menu">
            <button class="user-avatar" id="userMenuBtn" aria-haspopup="true" aria-expanded="false">
                <img src="/images/Joljochna.png" alt="User profile">
            </button>
            <div class="user-dropdown" id="userDropdown" role="menu">
                <a href="#" role="menuitem" onclick="openProfileLogoEditor(); return false;">প্রোফাইল পরিবর্তন</a>
                <a href="#" role="menuitem" onclick="logoutNow(); return false;">লগআউট</a>
            </div>
        </div>
    </div>
</header>