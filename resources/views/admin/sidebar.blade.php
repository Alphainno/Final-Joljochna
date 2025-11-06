 <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <h1>জলজোছনা</h1>
                <button class="toggle-btn" onclick="toggleSidebar()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
            </div>

            <nav class="nav-menu">
                <div class="nav-item active" data-tab="overview" onclick="showTab('overview')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    </svg>
                    <span>ওভারভিউ</span>
                </div>
                <div class="nav-item" data-tab="home" onclick="toggleHomeMenu()">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    </svg>
                    <span>হোম</span>
                </div>
                
                <div class="nav-submenu" id="homeSubmenu">
                    <div class="nav-subitem" onclick="navigateTo('home','home-hero')">হির সেকশন</div>
                    <div class="nav-subitem" onclick="navigateTo('home','home-features')">আমাদের সুবিধা সমূহ</div>
                    <div class="nav-subitem" onclick="navigateTo('home','home-pricing')">মূল্য তালিকা</div>
                    <div class="nav-subitem" onclick="navigateTo('home','home-testimonials')">বিনিয়োগকারী মন্তব্য</div>
                    <div class="nav-subitem" onclick="navigateTo('home','home-projects')">প্রকল্প</div>
                    <div class="nav-subitem" onclick="navigateTo('home','home-contact')">যোগাযোগ করুন</div>
                </div>

                <div class="nav-item" data-tab="about" onclick="toggleAboutMenu()">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    </svg>
                    <span>আমাদের সম্পর্কে</span>
                </div>
                <div class="nav-submenu" id="aboutSubmenu">
                    <div class="nav-subitem" onclick="navigateTo('about','about-hero')">হিরো সেকশন</div>
                    <div class="nav-subitem" onclick="navigateTo('about','about-history')">আমাদের ইতিহাস</div>
                    <div class="nav-subitem" onclick="navigateTo('about','about-founder')">আমাদের প্রতিষ্ঠাতা</div>
                    <div class="nav-subitem" onclick="navigateTo('about','about-chairman')">আমাদের চেয়ারম্যান</div>
                </div>

                <div class="nav-item" data-tab="projects" onclick="toggleProjectsMenu()">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 3h18v6H3zM3 15h18v6H3z"></path>
                    </svg>
                    <span>প্রকল্প</span>
                </div>
                <div class="nav-submenu" id="projectsSubmenu">
                    <div class="nav-subitem" onclick="navigateTo('projects','projects-hero')">হিরো সেকশন</div>
                    <div class="nav-subitem" onclick="navigateTo('projects','projects-slogan')">স্লোগান</div>
                    <div class="nav-subitem" onclick="navigateTo('projects','projects-our')">আমাদের প্রজেক্টসমূহ</div>
                    <div class="nav-subitem" onclick="navigateTo('projects','projects-other')">অন্যান্য প্রজেক্টসমূহ</div>
                </div>

                <div class="nav-item" data-tab="bookings" onclick="toggleBookingsMenu()">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                    </svg>
                    <span>বুকিং</span>
                </div>
                <div class="nav-item" data-tab="header" onclick="showTab('header')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16v4H4zM4 10h16v10H4z"></path>
                    </svg>
                    <span>হেডার</span>
                </div>
                <div class="nav-item" data-tab="footer" onclick="showTab('footer')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 20h16v-4H4zM4 4h16v10H4z"></path>
                    </svg>
                    <span>ফুটার</span>
                </div>

                <div class="nav-item" data-tab="reports" onclick="showTab('reports')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                        <polyline points="17 6 23 6 23 12"></polyline>
                    </svg>
                    <span>রিপোর্ট</span>
                </div>

                <div class="nav-item" data-tab="settings" onclick="showTab('settings')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path d="M12 1v6m0 6v6m0-6h6m-6 0H6m3.2-3.2l4.2 4.2m-4.2 0l4.2-4.2M18.8 14.8l-4.2-4.2m4.2 0l-4.2 4.2"></path>
                    </svg>
                    <span>সেটিংস</span>
                </div>
            </nav>

            <div class="logout-section">
                <button class="logout-btn" onclick="logout()">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg>
                    <span>লগআউট</span>
                </button>
            </div>
        </aside> 