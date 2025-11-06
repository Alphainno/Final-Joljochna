  <footer>
        <div class="footer-container">
            <div class="footer-section">
                <div class="footer-logo">
                    <i class="fas fa-home"></i>
                    <h2 id="ftTitle">জলজোছনা</h2>
                </div>
                <p id="ftDesc">NEX Real Estate এর একটি প্রকল্প। আপনার স্বপ্নের বাড়ি নির্মাণের জন্য প্রিমিয়াম লোকেশনে সবুজ পরিবেশে গড়ে উঠেছে জলজোছনা।</p>

                <div class="contact-info">
                    <div class="contact-item" style="background-color: #ffd700">
                        <i class="fas fa-phone-alt" style="color: #0a4d2e"></i>
                        <div class="phone-no" style="color: #0a4d2e">
                            <strong style="color: #0a4d2e">ফোন নম্বর</strong><br>
                            <span id="ftPhone1">+880 1991 995 995</span><br>
                            <span id="ftPhone2">+880 1991 994 994</span>
                        </div>
                    </div>
                    <div class="contact-item" style="background-color: #ffd700">
                        <i class="fas fa-envelope" style="color: #0a4d2e"></i>
                        <div class="email" style="color: #0a4d2e">
                            <strong style="color: #0a4d2e">ইমেইল</strong><br>
                            <span id="ftEmail">hello.nexup@gmail.com</span>
                        </div>
                    </div>
                </div>

                <div class="social-links">
                    <a id="ftFb" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a id="ftIg" href="#"><i class="fab fa-instagram"></i></a>
                    <a id="ftTw" href="#"><i class="fab fa-twitter"></i></a>
                    <a id="ftLn" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a id="ftYt" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-section" style="margin-left: 110px">
                <h3>প্রকল্পের ঠিকানা</h3>
                <p id="ftProjectAddress">শুভনূর ৩৮৮ বাড়ি সিদ্ধার্থ এস আবাস, খুলনা, বাংলাদেশ</p>

                <h3>যোগাযোগের ঠিকানা</h3>
                <p id="ftContactAddress">NEX Real Estate, Century Trade Center, House-23/C, Road-17, Kamal Ataturk Ave, Banani C/A, Dhaka</p>

                <h3>পেমেন্ট মাধ্যম</h3>
                <div class="payment-methods text-sm" style="width:220px;">
                    <span class="payment-method text-sm">
                        <i class="fas fa-mobile-alt text-sm"></i> বিকাশ
                    </span>
                    <span class="payment-method text-sm">
                        <i class="fas fa-money-bill-wave text-sm"></i> নগদ
                    </span>

                    <div style="width:220px;">
                        <span class="payment-method text-sm">
                            <i class="fas fa-university text-sm"></i> ব্যাংক ট্রান্সফার
                        </span>
                        <span class="payment-method text-sm ms-2">
                            <i class="fas fa-credit-card text-sm"></i> কার্ড
                        </span>
                    </div>

                </div>
            </div>

            <div class="footer-section" style="margin-left:110px">
                <h3>দ্রুত লিংক</h3>
                <ul class="footer-links">
                    <li><a id="ftQlHome" href="#home"><i class="fas fa-chevron-right"></i> <span id="ftQlHomeText">হোম</span></a></li>
                    <li><a id="ftQlFeatures" href="#features"><i class="fas fa-chevron-right"></i> <span id="ftQlFeaturesText">সুবিধাসমূহ</span></a></li>
                    <li><a id="ftQlPricing" href="#pricing"><i class="fas fa-chevron-right"></i> <span id="ftQlPricingText">মূল্য তালিকা</span></a></li>
                    <li><a id="ftQlContact" href="#contact"><i class="fas fa-chevron-right"></i> <span id="ftQlContactText">যোগাযোগ</span></a></li>
                    <li><a id="ftQlGallery" href="#"><i class="fas fa-chevron-right"></i> <span id="ftQlGalleryText">গ্যালারি</span></a></li>
                </ul>

                <h3>আইনি তথ্য</h3>
                <ul class="footer-links">
                    <li><a id="ftPrivacy" href="#"><i class="fas fa-chevron-right"></i> <span id="ftPrivacyText">গোপনীয়তা নীতি</span></a></li>
                    <li><a id="ftTerms" href="#"><i class="fas fa-chevron-right"></i> <span id="ftTermsText">সেবার শর্তাবলী</span></a></li>
                </ul>
            </div>
            <div class="footer-section qr-section">
                <h3 class="text-center" id="ftQrTitle">অবস্থান দেখুন</h3>
                <div class="qr-container">
                    <div>
                        <img id="ftQrImg" alt="QR Code" style="max-width:160px; height:auto; background:#fff; padding:6px; border-radius:8px; display:none;" />
                    </div>

                    <div id="qr-reader-results"></div>
                    <a id="ftMap" href="https://maps.google.com/?q=শুভনূর+৩৮৮+বাড়ি+সিদ্ধার্থ+এস+আবাস,+খুলনা" target="_blank"
                        class="map-btn">
                        <i class="fas fa-map-marker-alt"></i> <span id="ftMapText">গুগল ম্যাপে দেখুন</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p id="ftBottom">২০২৫ জলজোছনা। সর্বস্বত্ব সংরক্ষিত। | NEX Real Estate এর একটি প্রকল্প</p>
        </div>
    </footer>
    <script>
        (function(){
            const setText = (id, val) => { const el = document.getElementById(id); if (el && typeof val === 'string') el.textContent = val; };
            const setHref = (id, val) => { const el = document.getElementById(id); if (el && typeof val === 'string') el.setAttribute('href', val); };

            function applyFooterSettings(saved) {
                if (!saved || typeof saved !== 'object') return;

                setText('ftTitle', saved.title || saved.footerTitle);
                setText('ftDesc', saved.description || saved.footerDescription);
                setText('ftPhone1', saved.phone1);
                setText('ftPhone2', saved.phone2);
                setText('ftEmail', saved.email);
                setText('ftProjectAddress', saved.project_address || saved.projectAddress);
                setText('ftContactAddress', saved.contact_address || saved.contactAddress);

                // quick links
                if (saved.quick_links && Array.isArray(saved.quick_links)) {
                    const ql = saved.quick_links;
                    if (ql[0]) { setText('ftQlHomeText', ql[0].label); setHref('ftQlHome', ql[0].href); }
                    if (ql[1]) { setText('ftQlFeaturesText', ql[1].label); setHref('ftQlFeatures', ql[1].href); }
                    if (ql[2]) { setText('ftQlPricingText', ql[2].label); setHref('ftQlPricing', ql[2].href); }
                    if (ql[3]) { setText('ftQlContactText', ql[3].label); setHref('ftQlContact', ql[3].href); }
                    if (ql[4]) { setText('ftQlGalleryText', ql[4].label); setHref('ftQlGallery', ql[4].href); }
                }

                // legal
                if (saved.legal_links && Array.isArray(saved.legal_links)) {
                    const ll = saved.legal_links;
                    if (ll[0]) { setText('ftPrivacyText', ll[0].label); setHref('ftPrivacy', ll[0].href); }
                    if (ll[1]) { setText('ftTermsText', ll[1].label); setHref('ftTerms', ll[1].href); }
                }

                // social
                if (saved.social_links && typeof saved.social_links === 'object') {
                    setHref('ftFb', saved.social_links.facebook || '#');
                    setHref('ftIg', saved.social_links.instagram || '#');
                    setHref('ftTw', saved.social_links.twitter || '#');
                    setHref('ftLn', saved.social_links.linkedin || '#');
                    setHref('ftYt', saved.social_links.youtube || '#');
                }

                // map and bottom
                setHref('ftMap', saved.map_url || saved.mapUrl);
                setText('ftBottom', saved.bottom_text || saved.bottomText);

                // QR section
                setText('ftQrTitle', saved.qr_section_title || saved.qrSectionTitle || 'অবস্থান দেখুন');
                setText('ftMapText', saved.map_button_text || saved.mapButtonText || 'গুগল ম্যাপে দেখুন');

                // QR image
                const qrImg = document.getElementById('ftQrImg');
                if (qrImg) {
                    if (saved.qr_image_path) {
                        qrImg.src = '/storage/' + saved.qr_image_path;
                        qrImg.style.display = 'inline-block';
                    } else if (saved.qrDataUrl) {
                        qrImg.src = saved.qrDataUrl;
                        qrImg.style.display = 'inline-block';
                    } else {
                        qrImg.src = '';
                        qrImg.style.display = 'none';
                    }
                }
            }

            // Load settings from API
            function loadFooterSettings() {
                fetch('/api/footer-settings')
                    .then(response => response.json())
                    .then(data => {
                        applyFooterSettings(data);
                    })
                    .catch(error => {
                        console.error('Error loading footer settings:', error);
                        // Fallback to localStorage if API fails
                        try {
                            const saved = JSON.parse(localStorage.getItem('footerSettings') || '{}');
                            applyFooterSettings(saved);
                        } catch(e) { /* ignore */ }
                    });
            }

            // Initial load
            loadFooterSettings();

            // Live update when dashboard saves settings
            window.addEventListener('footerSettingsUpdated', () => {
                loadFooterSettings();
            });

            // Fallback: poll every 5s to reload from API
            setInterval(() => {
                loadFooterSettings();
            }, 5000);
        })();
    </script>