 const bookingsData = [
            { id: 1, name: 'রহিম আহমেদ', phone: '01711111111', email: 'rahim@example.com', plotSize: '২.৫ কাঠা', plotNumber: 'A-101', amount: 8000000, paid: 3500000, status: 'active', date: '2025-01-15' },
            { id: 2, name: 'করিম হোসেন', phone: '01722222222', email: 'karim@example.com', plotSize: '৫ কাঠা', plotNumber: 'B-205', amount: 15000000, paid: 15000000, status: 'completed', date: '2024-11-20' },
            { id: 3, name: 'সাফিয়া বেগম', phone: '01833333333', email: 'safia@example.com', plotSize: '৩.৭৫ কাঠা', plotNumber: 'C-310', amount: 12500000, paid: 500000, status: 'pending', date: '2025-03-01' },
            { id: 4, name: 'জসিম উদ্দিন', phone: '01944444444', email: 'jasim@example.com', plotSize: '২.৫ কাঠা', plotNumber: 'A-102', amount: 8000000, paid: 8000000, status: 'completed', date: '2024-12-10' },
            { id: 5, name: 'ফরিদা আক্তার', phone: '01655555555', email: 'farida@example.com', plotSize: '৫ কাঠা', plotNumber: 'B-206', amount: 16000000, paid: 6000000, status: 'active', date: '2025-02-28' },
        ];

        const plotData = [
            { id: 'A-101', size: '২.৫ কাঠা', price: 8000000, block: 'A', status: 'sold' },
            { id: 'A-102', size: '২.৫ কাঠা', price: 8000000, block: 'A', status: 'sold' },
            { id: 'A-103', size: '২.৫ কাঠা', price: 8200000, block: 'A', status: 'available' },
            { id: 'B-205', size: '৫ কাঠা', price: 15000000, block: 'B', status: 'sold' },
            { id: 'B-206', size: '৫ কাঠা', price: 16000000, block: 'B', status: 'sold' },
            { id: 'B-207', size: '৫ কাঠা', price: 15500000, block: 'B', status: 'available' },
            { id: 'C-310', size: '৩.৭৫ কাঠা', price: 12500000, block: 'C', status: 'reserved' },
            { id: 'C-311', size: '৩.৭৫ কাঠা', price: 12800000, block: 'C', status: 'available' },
        ];

        // Utility Functions
        const formatCurrency = (amount) => {
            return `৳${(amount / 100000).toFixed(2).replace(/\B(?=(\d{2})+(?!\d))/g, ',')}L`;
        }

        const formatFullCurrency = (amount) => {
            return `৳${amount.toLocaleString('en-IN')}`;
        }

        const getStatusBadge = (status) => {
            let className = '';
            let text = '';
            switch (status) {
                case 'active':
                    className = 'status-active';
                    text = 'সক্রিয়';
                    break;
                case 'pending':
                    className = 'status-pending';
                    text = 'বিচারাধীন';
                    break;
                case 'completed':
                    className = 'status-completed';
                    text = 'সম্পন্ন';
                    break;
                case 'available':
                    className = 'plot-status available';
                    text = 'উপলব্ধ';
                    break;
                case 'reserved':
                    className = 'plot-status reserved';
                    text = 'সংরক্ষিত';
                    break;
                case 'sold':
                    className = 'plot-status sold';
                    text = 'বিক্রিত';
                    break;
                default:
                    className = '';
                    text = status;
            }
            return `<span class="status-badge ${className}">${text}</span>`;
        }

        // Global Variables for Charts
        let salesChartInstance, revenueChartInstance, plotChartInstance;


        // 1. Sidebar and Tab Management
        const pageTitles = {
            'overview': 'ড্যাশবোর্ড ওভারভিউ',
            'home': 'হোম',
            'about': 'আমাদের সম্পর্কে',
            'projects': 'প্রকল্প',
            'header': 'হেডার',
            'footer': 'ফুটার',
            'bookings': 'বুকিং ব্যবস্থাপনা',
            'plots': 'প্লট তালিকা',
            'customers': 'গ্রাহক তালিকা',
            'reports': 'রিপোর্ট ও বিশ্লেষণ',
            'settings': 'সেটিংস'
        };

        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('collapsed');
        }

        // Toggle Home submenu with fade/expand only (do not switch tab)
        function toggleHomeMenu() {
            const submenu = document.getElementById('homeSubmenu');
            if (submenu) {
                submenu.classList.toggle('open');
            }
        }

        // Toggle About submenu with fade/expand and ensure About tab shows
        function toggleAboutMenu() {
            const submenu = document.getElementById('aboutSubmenu');
            showTab('about');
            if (submenu) {
                submenu.classList.toggle('open');
            }
        }

        // Toggle Projects submenu and show Projects tab
        function toggleProjectsMenu() {
            const submenu = document.getElementById('projectsSubmenu');
            showTab('projects');
            if (submenu) {
                submenu.classList.toggle('open');
            }
        }

        // Toggle Bookings submenu and show Bookings tab
        function toggleBookingsMenu() {
            const submenu = document.getElementById('bookingsSubmenu');
            showTab('bookings');
            if (submenu) {
                submenu.classList.toggle('open');
            }
        }

        // Navigate to a tab and scroll to a section smoothly
        function navigateTo(tabId, sectionId) {
            showTab(tabId);
            // Special-case page title for specific sections
            if (tabId === 'bookings') {
                if (sectionId === 'booking-header') {
                    document.getElementById('pageTitle').textContent = 'হেডার';
                } else if (sectionId === 'booking-footer') {
                    document.getElementById('pageTitle').textContent = 'ফুটার';
                }
            }
            // Small delay to allow DOM to update visibility
            setTimeout(() => {
                // Within the tab, show only the requested section block (hide others)
                if (sectionId) {
                    const tabEl = document.getElementById(tabId);
                    if (tabEl) {
                        const blocks = tabEl.querySelectorAll('[id^="'+tabId+'-"]');
                        blocks.forEach(sec => {
                            sec.style.display = (sec.id === sectionId) ? 'block' : 'none';
                        });
                    }
                }
                // Special case: for Home > Hero, scroll to top of Home tab
                const target = (tabId === 'home' && sectionId === 'home-hero')
                    ? document.getElementById('home')
                    : document.getElementById(sectionId);
                if (!target) return;
                // Prefer scrolling within content area if present
                const container = document.querySelector('.content-area');
                if (container && container.contains(target)) {
                    // Compute offsetTop relative to container to align exactly at top
                    let top = 0; let node = target;
                    while (node && node !== container) { top += node.offsetTop; node = node.offsetParent; }
                    container.scrollTo({ top, behavior: 'smooth' });
                } else {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }, 50);
        }

        function showTab(tabId) {
            // Update active sidebar item
            document.querySelectorAll('.nav-item').forEach(item => {
                item.classList.remove('active');
            });
            document.querySelector(`.nav-item[data-tab="${tabId}"]`).classList.add('active');

            // Hide all tab content
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
            });

            // Show current tab content
            document.getElementById(tabId).classList.add('active');

            // Update header title
            document.getElementById('pageTitle').textContent = pageTitles[tabId] || 'ড্যাশবোর্ড';

            // Auto-collapse submenus when switching to other tabs
            const homeSub = document.getElementById('homeSubmenu');
            const aboutSub = document.getElementById('aboutSubmenu');
            const projectsSub = document.getElementById('projectsSubmenu');
            const bookingsSub = document.getElementById('bookingsSubmenu');
            if (homeSub && tabId !== 'home') homeSub.classList.remove('open');
            if (aboutSub && tabId !== 'about') aboutSub.classList.remove('open');
            if (projectsSub && tabId !== 'projects') projectsSub.classList.remove('open');
            if (bookingsSub && tabId !== 'bookings') bookingsSub.classList.remove('open');

            // Re-render charts/data for the visible tab
            if (tabId === 'overview') {
                renderOverview();
            } else if (tabId === 'bookings') {
                renderBookingsTable(bookingsData);
            } else if (tabId === 'plots') {
                renderPlotsGrid();
            }
        }


        // 2. Overview Tab Logic
        function updateStats() {
            document.getElementById('statTotalBookings').textContent = bookingsData.length;

            const activeBookings = bookingsData.filter(b => b.status === 'active' || b.status === 'pending');
            document.getElementById('statActiveBookings').textContent = activeBookings.length;

            const totalRevenue = bookingsData.reduce((sum, b) => sum + b.paid, 0);
            document.getElementById('statTotalRevenue').textContent = formatCurrency(totalRevenue);

            const availablePlots = plotData.filter(p => p.status === 'available');
            document.getElementById('statAvailablePlots').textContent = availablePlots.length;
        }

        function renderRecentBookings() {
            const container = document.getElementById('recentBookings');
            container.innerHTML = '';

            // Sort by date (most recent first) and take top 5
            const recent = [...bookingsData]
                .sort((a, b) => new Date(b.date) - new Date(a.date))
                .slice(0, 5);

            if (recent.length === 0) {
                container.innerHTML = '<p style="color: #6b7280;">কোনো সাম্প্রতিক বুকিং নেই।</p>';
                return;
            }

            recent.forEach(booking => {
                const item = document.createElement('div');
                item.className = 'recent-booking-item';
                item.innerHTML = `
                    <div class="recent-booking-info">
                        <span class="name">${booking.name}</span>
                        <span class="plot">${booking.plotNumber} (${booking.plotSize}) - ${getStatusText(booking.status)}</span>
                    </div>
                    <div class="recent-booking-amount">${formatFullCurrency(booking.paid)}</div>
                `;
                container.appendChild(item);
            });
        }

        const getStatusText = (status) => {
            switch (status) {
                case 'active': return 'সক্রিয়';
                case 'pending': return 'বিচারাধীন';
                case 'completed': return 'সম্পন্ন';
                default: return status;
            }
        }

        // Chart Rendering
        function renderSalesChart() {
            const ctx = document.getElementById('salesChart').getContext('2d');

            // Dummy data for monthly sales
            const data = {
                labels: ['জানু', 'ফেব্রু', 'মার্চ', 'এপ্রিল', 'মে', 'জুন'],
                datasets: [{
                    label: 'বিক্রিত প্লট',
                    data: [1, 2, 1, 3, 2, 4],
                    backgroundColor: '#10b981',
                    borderColor: '#059669',
                    borderWidth: 1,
                    borderRadius: 5,
                }]
            };

            if (salesChartInstance) salesChartInstance.destroy();
            salesChartInstance = new Chart(ctx, {
                type: 'bar',
                data: data,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: { beginAtZero: true, ticks: { precision: 0 } }
                    },
                    plugins: { legend: { display: false } }
                }
            });
        }

        function renderRevenueChart() {
            const ctx = document.getElementById('revenueChart').getContext('2d');

            // Dummy data for revenue trend (in Lakhs)
            const data = {
                labels: ['জানু', 'ফেব্রু', 'মার্চ', 'এপ্রিল', 'মে', 'জুন'],
                datasets: [{
                    label: 'মোট আয় (Lakhs)',
                    data: [35, 150, 50, 80, 60, 100],
                    fill: true,
                    backgroundColor: 'rgba(59, 130, 246, 0.2)',
                    borderColor: '#3b82f6',
                    tension: 0.3,
                    pointBackgroundColor: '#3b82f6',
                }]
            };

            if (revenueChartInstance) revenueChartInstance.destroy();
            revenueChartInstance = new Chart(ctx, {
                type: 'line',
                data: data,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: { beginAtZero: true, title: { display: true, text: 'আয় (Lakhs)' } }
                    },
                    plugins: { legend: { display: false } }
                }
            });
        }

        function renderPlotChart() {
            const ctx = document.getElementById('plotChart').getContext('2d');

            // Data for plot distribution by size
            const sizeCounts = plotData.reduce((acc, plot) => {
                acc[plot.size] = (acc[plot.size] || 0) + 1;
                return acc;
            }, {});

            const data = {
                labels: Object.keys(sizeCounts),
                datasets: [{
                    data: Object.values(sizeCounts),
                    backgroundColor: ['#10b981', '#f59e0b', '#3b82f6', '#8b5cf6'],
                    hoverOffset: 4
                }]
            };

            if (plotChartInstance) plotChartInstance.destroy();
            plotChartInstance = new Chart(ctx, {
                type: 'doughnut',
                data: data,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'right' }
                    }
                }
            });
        }

        function renderOverview() {
            updateStats();
            renderSalesChart();
            renderRevenueChart();
            renderPlotChart();
            renderRecentBookings();
        }

        // 3. Bookings Tab Logic
        function renderBookingsTable(data) {
            const tbody = document.getElementById('bookingsTableBody');
            tbody.innerHTML = '';

            if (data.length === 0) {
                tbody.innerHTML = '<tr><td colspan="8" style="text-align: center; color: #6b7280;">কোনো বুকিং পাওয়া যায়নি।</td></tr>';
                return;
            }

            data.forEach(booking => {
                const row = tbody.insertRow();
                row.innerHTML = `
                    <td>${booking.name}</td>
                    <td>${booking.phone}</td>
                    <td>${booking.plotNumber}</td>
                    <td>${booking.plotSize}</td>
                    <td>${formatFullCurrency(booking.amount)}</td>
                    <td>${formatFullCurrency(booking.paid)}</td>
                    <td>${getStatusBadge(booking.status)}</td>
                    <td>
                        <div class="action-buttons">
                            <button class="action-btn view" onclick="showModal('বুকিং দেখুন', 'বুকিং আইডি: ${booking.id}<br>নাম: ${booking.name}<br>প্লট: ${booking.plotNumber} (${booking.plotSize})', [{text: 'বন্ধ', action: closeModal}])">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                            </button>
                            <button class="action-btn edit" onclick="showModal('বুকিং সম্পাদনা', 'বুকিং আইডি: ${booking.id} এর তথ্য সম্পাদনা করুন।', [{text: 'বাতিল', action: closeModal}, {text: 'সংরক্ষণ', action: () => alertUser('সংরক্ষণ সফল', 'বুকিং ${booking.id} আপডেট করা হয়েছে।')}])">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                            </button>
                            <button class="action-btn delete" onclick="showModal('বুকিং মুছুন', 'আপনি কি নিশ্চিত যে আপনি ${booking.name} এর বুকিং মুছতে চান?', [{text: 'বাতিল', action: closeModal}, {text: 'মুছুন', action: () => deleteBooking(${booking.id}), isDanger: true}])">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                            </button>
                        </div>
                    </td>
                `;
            });
        }

        function filterBookings() {
            const search = document.getElementById('bookingSearch').value.toLowerCase();
            const filterSize = document.getElementById('plotFilter').value;

            const filtered = bookingsData.filter(booking => {
                const searchMatch = (
                    booking.name.toLowerCase().includes(search) ||
                    booking.plotNumber.toLowerCase().includes(search) ||
                    booking.phone.includes(search)
                );

                const sizeMatch = (filterSize === 'all' || booking.plotSize === filterSize);

                return searchMatch && sizeMatch;
            });

            renderBookingsTable(filtered);
        }

        function deleteBooking(id) {
            closeModal();
            const index = bookingsData.findIndex(b => b.id === id);
            if (index !== -1) {
                bookingsData.splice(index, 1);
                renderBookingsTable(bookingsData);
                renderOverview();
                alertUser('সফল', 'বুকিং সফলভাবে মুছে ফেলা হয়েছে।');
            } else {
                 alertUser('ত্রুটি', 'বুকিং খুঁজে পাওয়া যায়নি।');
            }
        }

        function exportData() {
            // Simple CSV export function
            const headers = ['ID', 'নাম', 'যোগাযোগ', 'প্লট নং', 'সাইজ', 'মোট মূল্য', 'পরিশোধিত', 'অবস্থা', 'তারিখ'];
            const rows = bookingsData.map(b => [
                b.id, b.name, b.phone, b.plotNumber, b.plotSize, b.amount, b.paid, b.status, b.date
            ]);

            let csvContent = "data:text/csv;charset=utf-8," + headers.join(',') + "\n";
            rows.forEach(row => {
                csvContent += row.join(',') + "\n";
            });

            const encodedUri = encodeURI(csvContent);
            const link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", "joljochna_bookings.csv");
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);

            alertUser('রপ্তানি সফল', 'বুকিং ডেটা CSV হিসাবে ডাউনলোড করা হয়েছে।');
        }


        // Header settings (navbar) form persistence
        const headerDefaults = {
            brandText: 'জলজোছনা',
            homeLabel: 'হোম',
            aboutLabel: 'আমাদের সম্পর্কে',
            featuresLabel: 'সুবিধা',
            pricingLabel: 'মূল্য তালিকা',
            testimonialsLabel: 'মন্তব্য',
            otherProjectsLabel: 'অন্যান্য প্রকল্প',
            contactLabel: 'যোগাযোগ',
            logoUrl: '',
            logoDataUrl: '',
            ctaText: 'এখনই বুক করুন',
            ctaHref: '#contact'
        };

        // Holds current in-memory uploaded logo as data URL
        let headerLogoDataUrl = '';

        function loadHeaderSettings() {
            const form = document.getElementById('headerSettingsForm');
            if (!form) return; // form not on page
            let saved = {};
            try { saved = JSON.parse(localStorage.getItem('headerSettings') || '{}'); } catch (e) { saved = {}; }
            const values = { ...headerDefaults, ...saved };
            const setVal = (id, val) => { const el = document.getElementById(id); if (el) el.value = val; };
            setVal('logoUrl', values.logoUrl);
            headerLogoDataUrl = values.logoDataUrl || '';
            setVal('brandText', values.brandText);
            setVal('homeLabel', values.homeLabel);
            setVal('aboutLabel', values.aboutLabel);
            setVal('featuresLabel', values.featuresLabel);
            setVal('pricingLabel', values.pricingLabel);
            setVal('testimonialsLabel', values.testimonialsLabel);
            setVal('otherProjectsLabel', values.otherProjectsLabel);
            setVal('contactLabel', values.contactLabel);
            setVal('ctaText', values.ctaText);
            setVal('ctaHref', values.ctaHref);

            // Initialize logo preview
            const preview = document.getElementById('headerLogoPreview');
            if (preview) {
                preview.src = headerLogoDataUrl || values.logoUrl || '';
                preview.style.display = (preview.src ? 'block' : 'none');
            }

            // Attach file change handler once
            const fileInput = document.getElementById('headerLogoFile');
            if (fileInput && !fileInput.dataset.bound) {
                fileInput.addEventListener('change', (e) => {
                    const file = e.target.files && e.target.files[0];
                    if (!file) return;
                    const reader = new FileReader();
                    reader.onload = () => {
                        headerLogoDataUrl = reader.result;
                        if (preview) {
                            preview.src = headerLogoDataUrl;
                            preview.style.display = 'block';
                        }
                        updateHeaderPreview();
                    };
                    reader.readAsDataURL(file);
                });
                fileInput.dataset.bound = 'true';
            }

            // Bind input listeners for live preview
            const fields = ['brandText','homeLabel','aboutLabel','featuresLabel','pricingLabel','testimonialsLabel','otherProjectsLabel','contactLabel','ctaText','ctaHref'];
            fields.forEach(id => {
                const el = document.getElementById(id);
                if (el && !el.dataset.bound) {
                    el.addEventListener('input', updateHeaderPreview);
                    el.dataset.bound = 'true';
                }
            });

            // Initialize preview with current values
            updateHeaderPreview();
        }

        function saveHeaderSettings() {
            const form = document.getElementById('headerSettingsForm');
            if (!form) return;
            const getVal = (id) => { const el = document.getElementById(id); return el ? el.value.trim() : ''; };
            const data = {
                logoUrl: getVal('logoUrl') || headerDefaults.logoUrl,
                logoDataUrl: headerLogoDataUrl || headerDefaults.logoDataUrl,
                brandText: getVal('brandText') || headerDefaults.brandText,
                homeLabel: getVal('homeLabel') || headerDefaults.homeLabel,
                aboutLabel: getVal('aboutLabel') || headerDefaults.aboutLabel,
                featuresLabel: getVal('featuresLabel') || headerDefaults.featuresLabel,
                pricingLabel: getVal('pricingLabel') || headerDefaults.pricingLabel,
                testimonialsLabel: getVal('testimonialsLabel') || headerDefaults.testimonialsLabel,
                otherProjectsLabel: getVal('otherProjectsLabel') || headerDefaults.otherProjectsLabel,
                contactLabel: getVal('contactLabel') || headerDefaults.contactLabel,
                ctaText: getVal('ctaText') || headerDefaults.ctaText,
                ctaHref: getVal('ctaHref') || headerDefaults.ctaHref,
            };
            localStorage.setItem('headerSettings', JSON.stringify(data));
            console.log('Header settings saved:', data);
            window.dispatchEvent(new StorageEvent('storage', {key:'headerSettings', newValue: JSON.stringify(data)}));
            alertUser('সফল', 'হেডার সেটিংস সংরক্ষণ করা হয়েছে। ওয়েবসাইট রিফ্রেশ করুন বা নতুন ট্যাবে খুলুন।');
        }

        function resetHeaderSettings() {
            localStorage.removeItem('headerSettings');
            loadHeaderSettings();
            headerLogoDataUrl = '';
            const preview = document.getElementById('headerLogoPreview');
            if (preview) { preview.src = ''; preview.style.display = 'none'; }
            alertUser('রিসেট', 'ডিফল্ট হেডার সেটিংস পুনরুদ্ধার করা হয়েছে।');
        }

        // Live preview for Header tab
        function updateHeaderPreview() {
            const getVal = (id, fallback='') => {
                const el = document.getElementById(id);
                return el ? (el.value || fallback) : fallback;
            };

            const logo = document.getElementById('previewLogo');
            const fallbackIcon = document.getElementById('previewFallbackIcon');
            const logoSrc = headerLogoDataUrl; // uploaded image takes precedence in admin
            if (logo && fallbackIcon) {
                if (logoSrc) {
                    logo.src = logoSrc;
                    logo.style.display = 'inline-block';
                    fallbackIcon.style.display = 'none';
                } else {
                    logo.src = '';
                    logo.style.display = 'none';
                    fallbackIcon.style.display = 'block';
                }
            }

            const map = [
                ['previewHome','homeLabel'],
                ['previewAbout','aboutLabel'],
                ['previewFeatures','featuresLabel'],
                ['previewPricing','pricingLabel'],
                ['previewTestimonials','testimonialsLabel'],
                ['previewOtherProjects','otherProjectsLabel'],
                ['previewContact','contactLabel']
            ];
            map.forEach(([id, src]) => {
                const el = document.getElementById(id);
                if (el) el.textContent = getVal(src, el.textContent);
            });

            const cta = document.getElementById('previewCta');
            const ctaText = document.getElementById('previewCtaText');
            if (cta) cta.setAttribute('href', getVal('ctaHref', '#contact'));
            if (ctaText) ctaText.textContent = getVal('ctaText', ctaText.textContent || '');
        }

        // Footer settings
        const footerDefaults = {
            footerTitle: 'জলজোছনা',
            footerDescription: 'NEX Real Estate এর একটি প্রকল্প। আপনার স্বপ্নের বাড়ি নির্মাণের জন্য প্রিমিয়াম লোকেশনে সবুজ পরিবেশে গড়ে উঠেছে জলজোছনা।',
            phone1: '+880 1991 995 995',
            phone2: '+880 1991 994 994',
            email: 'hello.nexup@gmail.com',
            projectAddress: 'প্রকল্পের ঠিকানা',
            contactAddress: 'যোগাযোগের ঠিকানা',
            qlHomeLabel: 'হোম', qlHomeHref: '#home',
            qlFeaturesLabel: 'সুবিধাসমূহ', qlFeaturesHref: '#features',
            qlPricingLabel: 'মূল্য তালিকা', qlPricingHref: '#pricing',
            qlContactLabel: 'যোগাযোগ', qlContactHref: '#contact',
            qlGalleryLabel: 'গ্যালারি', qlGalleryHref: '#gallery',
            legalPrivacyLabel: 'গোপনীয়তা নীতি', legalPrivacyHref: '#privacy',
            legalTermsLabel: 'সেবার শর্তাবলী', legalTermsHref: '#terms',
            socialFacebook: '#', socialInstagram: '#', socialTwitter: '#', socialLinkedin: '#', socialYouTube: '#',
            mapUrl: '#',
            bottomText: '© ২০২৫ জলজোছনা। সর্বস্বত্ব সংরক্ষিত। | NEX Real Estate এর একটি প্রকল্প',
            qrDataUrl: '',
            qrSectionTitle: 'অবস্থান দেখুন',
            mapButtonText: 'গুগল ম্যাপে দেখুন',
            qrShow: true
        };

        // in-memory QR image data for admin preview
        let footerQrDataUrl = '';

        function loadFooterSettings() {
            const form = document.getElementById('footerSettingsForm');
            if (!form) return;
            let saved = {};
            try { saved = JSON.parse(localStorage.getItem('footerSettings') || '{}'); } catch (e) { saved = {}; }
            const v = { ...footerDefaults, ...saved };
            const setVal = (id, val) => { const el = document.getElementById(id); if (el) el.value = val; };
            Object.keys(footerDefaults).forEach(k => setVal(k, v[k] ?? ''));

            // checkbox
            const qrShow = document.getElementById('qrShow');
            if (qrShow) qrShow.checked = !!v.qrShow;

            footerQrDataUrl = v.qrDataUrl || '';
            const pvQr = document.getElementById('pvQrImg');
            const pvQrPlaceholder = document.getElementById('pvQrPlaceholder');
            if (pvQr) {
                if (footerQrDataUrl) {
                    pvQr.src = footerQrDataUrl;
                    pvQr.style.display = 'inline-block';
                    if (pvQrPlaceholder) pvQrPlaceholder.style.display = 'none';
                } else {
                    pvQr.src = '';
                    pvQr.style.display = 'none';
                    if (pvQrPlaceholder) pvQrPlaceholder.style.display = 'block';
                }
            }

            // bind listeners for live preview
            Array.from(form.querySelectorAll('input, textarea')).forEach(el => {
                if (!el.dataset.bound) {
                    el.addEventListener('input', updateFooterPreview);
                    el.dataset.bound = 'true';
                }
            });

            // checkbox listener
            if (qrShow && !qrShow.dataset.bound) {
                qrShow.addEventListener('change', updateFooterPreview);
                qrShow.dataset.bound = 'true';
            }

            const qrInput = document.getElementById('footerQrFile');
            if (qrInput && !qrInput.dataset.bound) {
                qrInput.addEventListener('change', (e) => {
                    const file = e.target.files && e.target.files[0];
                    if (!file) return;
                    let objectUrl = '';
                    const pvImmediate = document.getElementById('pvQrImg');
                    const placeholderImmediate = document.getElementById('pvQrPlaceholder');
                    try {
                        objectUrl = URL.createObjectURL(file);
                        if (pvImmediate) { pvImmediate.src = objectUrl; pvImmediate.style.display = 'inline-block'; }
                        if (placeholderImmediate) placeholderImmediate.style.display = 'none';
                    } catch (_) {}
                    const reader = new FileReader();
                    reader.onload = () => {
                        footerQrDataUrl = reader.result;
                        const pv = document.getElementById('pvQrImg');
                        if (pv) { pv.src = footerQrDataUrl; pv.style.display = 'inline-block'; }
                        const placeholder = document.getElementById('pvQrPlaceholder');
                        if (placeholder) placeholder.style.display = 'none';
                        if (objectUrl) { try { URL.revokeObjectURL(objectUrl); } catch(_) {}
                        }

                        // Auto-save to localStorage to trigger public footer live update
                        try {
                            let saved = {};
                            try { saved = JSON.parse(localStorage.getItem('footerSettings') || '{}'); } catch (_) { saved = {}; }
                            const data = { ...footerDefaults, ...saved };
                            // capture current form values too
                            Object.keys(footerDefaults).forEach(k => {
                                const el = document.getElementById(k);
                                if (el) data[k] = el.value;
                            });
                            data.qrDataUrl = footerQrDataUrl;
                            localStorage.setItem('footerSettings', JSON.stringify(data));
                        } catch (_) { /* ignore */ }
                    };
                    reader.readAsDataURL(file);
                });
                qrInput.dataset.bound = 'true';
            }

            updateFooterPreview();
        }

        function saveFooterSettings() {
            const form = document.getElementById('footerSettingsForm');
            if (!form) return;
            const data = {};
            Object.keys(footerDefaults).forEach(k => {
                const el = document.getElementById(k);
                data[k] = el ? el.value : footerDefaults[k];
            });
            const qrShowEl = document.getElementById('qrShow');
            data.qrShow = qrShowEl ? !!qrShowEl.checked : footerDefaults.qrShow;
            data.qrDataUrl = footerQrDataUrl || '';
            localStorage.setItem('footerSettings', JSON.stringify(data));
            alertUser('সফল', 'ফুটার সেটিংস সংরক্ষণ করা হয়েছে।');
        }

        function resetFooterSettings() {
            localStorage.removeItem('footerSettings');
            loadFooterSettings();
            alertUser('রিসেট', 'ডিফল্ট ফুটার সেটিংস পুনরুদ্ধার করা হয়েছে।');
        }

        function updateFooterPreview() {
            const getVal = (id, fallback='') => { const el = document.getElementById(id); return el ? (el.value || fallback) : fallback; };
            const setText = (id, val) => { const el = document.getElementById(id); if (el) el.textContent = val; };
            const setHref = (id, val) => { const el = document.getElementById(id); if (el) el.setAttribute('href', val); };

            setText('pvTitle', getVal('footerTitle', ''));
            setText('pvDesc', getVal('footerDescription', ''));
            setText('pvPhone1', getVal('phone1', ''));
            setText('pvPhone2', getVal('phone2', ''));
            setText('pvEmail', getVal('email', ''));
            document.getElementById('pvProjectAddr') && (document.getElementById('pvProjectAddr').textContent = getVal('projectAddress',''));
            document.getElementById('pvContactAddr') && (document.getElementById('pvContactAddr').textContent = getVal('contactAddress',''));

            setText('pvQlHome', getVal('qlHomeLabel','')); setHref('pvQlHome', getVal('qlHomeHref','#'));
            setText('pvQlFeatures', getVal('qlFeaturesLabel','')); setHref('pvQlFeatures', getVal('qlFeaturesHref','#'));
            setText('pvQlPricing', getVal('qlPricingLabel','')); setHref('pvQlPricing', getVal('qlPricingHref','#'));
            setText('pvQlContact', getVal('qlContactLabel','')); setHref('pvQlContact', getVal('qlContactHref','#'));
            setText('pvQlGallery', getVal('qlGalleryLabel','')); setHref('pvQlGallery', getVal('qlGalleryHref','#'));

            setHref('pvFb', getVal('socialFacebook','#'));
            setHref('pvIg', getVal('socialInstagram','#'));
            setHref('pvTw', getVal('socialTwitter','#'));
            setHref('pvLn', getVal('socialLinkedin','#'));
            setHref('pvYt', getVal('socialYouTube','#'));

            setHref('pvMap', getVal('mapUrl','#'));
            setText('pvBottom', getVal('bottomText',''));

            // Map/Qr section title and button text
            setText('pvQrTitle', getVal('qrSectionTitle','অবস্থান দেখুন'));
            setText('pvMapText', getVal('mapButtonText','গুগল ম্যাপে দেখুন'));

            const pvQr = document.getElementById('pvQrImg');
            const pvQrPlaceholder = document.getElementById('pvQrPlaceholder');
            const showQr = (function(){ const el = document.getElementById('qrShow'); return el ? !!el.checked : true; })();
            if (pvQr) {
                if (footerQrDataUrl && showQr) { pvQr.src = footerQrDataUrl; pvQr.style.display = 'inline-block'; if (pvQrPlaceholder) pvQrPlaceholder.style.display = 'none'; }
                else { pvQr.src = ''; pvQr.style.display = 'none'; if (pvQrPlaceholder) pvQrPlaceholder.style.display = 'block'; }
            }
        }

        // ensure both header and footer load on page ready
        window.addEventListener('load', () => {
            try { loadHeaderSettings(); } catch (e) {}
            try { loadFooterSettings(); } catch (e) {}
        });


        // 4. Plots Tab Logic
        function renderPlotsGrid() {
            const grid = document.getElementById('plotsGrid');
            grid.innerHTML = '';

            if (plotData.length === 0) {
                grid.innerHTML = '<p style="color: #6b7280; grid-column: 1 / -1; text-align: center;">কোনো প্লট পাওয়া যায়নি।</p>';
                return;
            }

            plotData.forEach(plot => {
                const card = document.createElement('div');
                card.className = `plot-card ${plot.status}`;
                card.innerHTML = `
                    <div class="plot-header">
                        <div>
                            <div class="plot-title">প্লট #${plot.id}</div>
                            <div class="plot-block">ব্লক: ${plot.block}</div>
                        </div>
                        ${getStatusBadge(plot.status)}
                    </div>
                    <div class="plot-size">সাইজ: ${plot.size}</div>
                    <div class="plot-price">${formatFullCurrency(plot.price)}</div>
                    <div class="plot-actions">
                        ${plot.status === 'available' ?
                            `<button class="btn btn-reserve" onclick="showModal('প্লট সংরক্ষিত করুন', 'আপনি কি নিশ্চিত যে আপনি প্লট ${plot.id} সংরক্ষিত করতে চান?', [{text: 'বাতিল', action: closeModal}, {text: 'সংরক্ষণ', action: () => setPlotStatus('${plot.id}', 'reserved')}])">সংরক্ষণ</button>
                             <button class="btn btn-primary" onclick="showModal('প্লট বিক্রি করুন', 'প্লট ${plot.id} বিক্রির জন্য একটি নতুন বুকিং তৈরি করুন।', [{text: 'বন্ধ', action: closeModal}])">বিক্রি</button>`
                            : plot.status === 'reserved' ?
                            `<button class="btn btn-primary" onclick="showModal('বুকিং দেখুন', 'প্লট ${plot.id} সংরক্ষিত রয়েছে। বিস্তারিত দেখতে বুকিং ট্যাবে যান।', [{text: 'বন্ধ', action: closeModal}])">বুকিং দেখুন</button>
                             <button class="action-btn delete" style="flex: unset;" onclick="showModal('সংরক্ষণ বাতিল', 'আপনি কি প্লট ${plot.id} এর সংরক্ষণ বাতিল করতে চান?', [{text: 'না', action: closeModal}, {text: 'হ্যাঁ, বাতিল করুন', action: () => setPlotStatus('${plot.id}', 'available'), isDanger: true}])">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                             </button>`
                            :
                            `<button class="btn btn-success" onclick="showModal('বিক্রিত প্লট', 'প্লট ${plot.id} বিক্রি হয়ে গেছে। বুকিং বিস্তারিত দেখতে বুকিং ট্যাবে যান।', [{text: 'বন্ধ', action: closeModal}])">বিস্তারিত</button>`
                        }
                    </div>
                `;
                grid.appendChild(card);
            });
        }

        function addNewPlot() {
             showModal('নতুন প্লট যোগ করুন', 'একটি নতুন প্লট যোগ করার ফর্ম এখানে থাকবে।', [{text: 'বাতিল', action: closeModal}, {text: 'যোগ করুন', action: () => alertUser('যোগ সফল', 'নতুন প্লট যুক্ত করার প্রক্রিয়া শুরু হয়েছে।')}]);
        }

        function setPlotStatus(id, newStatus) {
            closeModal();
            const plot = plotData.find(p => p.id === id);
            if (plot) {
                plot.status = newStatus;
                renderPlotsGrid();
                renderOverview();
                alertUser('অবস্থা আপডেট', `প্লট ${id} এর অবস্থা ${getStatusText(newStatus)} এ আপডেট করা হয়েছে।`);
            }
        }


        // 5. Utility and Initial Load
        function updateCurrentDate() {
            const dateOptions = { year: 'numeric', month: 'long', day: 'numeric' };
            const today = new Date().toLocaleDateString('bn-BD', dateOptions);
            document.getElementById('currentDate').textContent = today;
        }

        function logout() {
            // In a real application, this would clear session/token and redirect to login
            alertUser('লগআউট', 'আপনি সফলভাবে লগআউট করেছেন।', [{text: 'ঠিক আছে', action: closeModal}]);
        }

        // Custom Modal Implementation (replacing alert/confirm)
        const modal = document.getElementById('customModal');
        const modalTitle = document.getElementById('modalTitle');
        const modalMessage = document.getElementById('modalMessage');
        const modalButtons = document.getElementById('modalButtons');

        /**
         * Shows the custom modal
         * @param {string} title
         * @param {string} message
         * @param {Array<{text: string, action: function, isDanger: boolean}>} buttons
         */
        function showModal(title, message, buttons = []) {
            modalTitle.textContent = title;
            modalMessage.innerHTML = message;
            modalButtons.innerHTML = '';

            buttons.forEach(btn => {
                const buttonElement = document.createElement('button');
                buttonElement.textContent = btn.text;
                buttonElement.className = `btn ${btn.isDanger ? 'btn-danger' : 'btn-primary'}`;
                buttonElement.style.padding = '0.5rem 1rem';
                buttonElement.style.background = btn.isDanger ? '#dc2626' : (btn.text === 'বন্ধ' || btn.text === 'বাতিল' ? '#6b7280' : '#0a4d2e');
                buttonElement.style.color = 'white';
                buttonElement.style.marginLeft = '0.5rem';
                buttonElement.onclick = () => {
                    if (btn.action) btn.action();
                    // Do not close automatically if action is delete/save, let the action handle it (like deleteBooking does)
                    if (btn.text === 'বন্ধ' || btn.text === 'বাতিল' || btn.text === 'ঠিক আছে') {
                        closeModal();
                    }
                };
                modalButtons.appendChild(buttonElement);
            });

            modal.style.display = 'block';
        }

        function closeModal() {
            modal.style.display = 'none';
        }

        function alertUser(title, message) {
            showModal(title, message, [{text: 'ঠিক আছে', action: closeModal}]);
        }


        // Initial setup on window load
        window.onload = function() {
            updateCurrentDate();
            // Start with the 'overview' tab
            showTab('overview');
            // Populate header settings form if present
            loadHeaderSettings();
        };