 <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <h1 id="adminSidebarTitle">জলজোছনা</h1>
                <button class="toggle-btn" onclick="toggleSidebar()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
            </div>

            <nav class="nav-menu" role="navigation" aria-label="Admin navigation">
                <div class="nav-item active" data-tab="overview" onclick="showTab('overview')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="7" height="7"></rect>
                        <rect x="14" y="3" width="7" height="7"></rect>
                        <rect x="3" y="14" width="7" height="7"></rect>
                        <rect x="14" y="14" width="7" height="7"></rect>
                    </svg>
                    <span>ওভারভিউ</span>
                </div>
                <div class="nav-item" data-tab="home" onclick="toggleHomeMenu()" role="button" tabindex="0" aria-expanded="false" aria-controls="homeSubmenu">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    </svg>
                    <span>হোম</span>
                </div>
                
                <div class="nav-submenu" id="homeSubmenu" role="group" aria-label="Home submenu">
                    <div class="nav-subitem" onclick="navigateTo('home','home-hero')">হিরো সেকশন</div>
                    <div class="nav-subitem" onclick="navigateTo('home','home-features')">আমাদের সুবিধা সমূহ</div>
                    <div class="nav-subitem" onclick="navigateTo('home','home-pricing')">মূল্য তালিকা</div>
                    <div class="nav-subitem" onclick="navigateTo('home','home-testimonials')">বিনিয়োগকারী মন্তব্য</div>
                    <div class="nav-subitem" onclick="navigateTo('home','home-social')">সোশ্যাল মিডিয়া</div>
                    <div class="nav-subitem" onclick="navigateTo('home','home-roadmap')">প্রকল্প রোডম্যাপ</div>
                    <div class="nav-subitem" onclick="navigateTo('home','home-projects')">অন্যান্য প্রকল্প</div>
                    <div class="nav-subitem" onclick="navigateTo('home','home-contact')">যোগাযোগ করুন</div>
                </div>

                <div class="nav-item" data-tab="about" onclick="toggleAboutMenu()" role="button" tabindex="0" aria-expanded="false" aria-controls="aboutSubmenu">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="7" r="4"></circle>
                        <path d="M4 21c0-4 4-7 8-7s8 3 8 7"></path>
                    </svg>
                    <span>আমাদের সম্পর্কে</span>
                </div>
                <div class="nav-submenu" id="aboutSubmenu" role="group" aria-label="About submenu">
                    <div class="nav-subitem" onclick="navigateTo('about','about-hero')">হিরো সেকশন</div>
                    <div class="nav-subitem" onclick="navigateTo('about','about-history')">আমাদের ইতিহাস</div>
                    <div class="nav-subitem" onclick="navigateTo('about','about-founder')">আমাদের প্রতিষ্ঠাতা</div>
                    <div class="nav-subitem" onclick="navigateTo('about','about-chairman')">আমাদের চেয়ারম্যান</div>
                </div>

                <div class="nav-item" data-tab="projects" onclick="toggleProjectsMenu()" role="button" tabindex="0" aria-expanded="false" aria-controls="projectsSubmenu">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 3h18v6H3zM3 15h18v6H3z"></path>
                    </svg>
                    <span>প্রকল্প</span>
                </div>
                <div class="nav-submenu" id="projectsSubmenu" role="group" aria-label="Projects submenu">
                    <div class="nav-subitem" onclick="navigateTo('projects','projects-hero')">হিরো সেকশন</div>
                    <div class="nav-subitem" onclick="navigateTo('projects','projects-slogan')">স্লোগান</div>
                    <div class="nav-subitem" onclick="navigateTo('projects','projects-our')">আমাদের প্রজেক্টসমূহ</div>
                    <div class="nav-subitem" onclick="navigateTo('projects','projects-other')">অন্যান্য প্রজেক্টসমূহ</div>
                </div>

                <div class="nav-item" data-tab="bookings" onclick="toggleBookingsMenu()" role="button" tabindex="0" aria-expanded="false" aria-controls="bookingsSubmenu">
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
                        <line x1="6" y1="20" x2="6" y2="10"></line>
                        <line x1="12" y1="20" x2="12" y2="6"></line>
                        <line x1="18" y1="20" x2="18" y2="14"></line>
                        <line x1="3" y1="20" x2="21" y2="20"></line>
                    </svg>
                    <span>রিপোর্ট</span>
                </div>

                <div class="nav-item" data-tab="settings" onclick="showTab('settings')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 1l2.2 3.8 4.3.8-3 3 0.7 4.4L12 11.8 7.8 13l0.7-4.4-3-3 4.3-.8L12 1z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
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