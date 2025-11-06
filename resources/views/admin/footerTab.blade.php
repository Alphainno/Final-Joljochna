<div id="footer" class="tab-content">
    <div class="table-card">
 
    <h2>ফুটার</h2>
        <p style="color:#6b7280; margin-bottom:1rem;">এখানে ফুটারের কনটেন্ট পরিবর্তন করুন। Save করলে ব্রাউজারে সংরক্ষিত থাকবে এবং সাইটের ফুটারে প্রয়োগ হবে।</p>
        <form id="footerSettingsForm" onsubmit="return false;">
            <div class="form-grid">
                <div class="form-group">
                    <label class="subtitle" for="footerTitle">শিরোনাম</label>
                    <input id="footerTitle" type="text" class="search-input" placeholder="জলজোছনা">
                </div>
                <div class="form-group" style="grid-column: 1 / -1;">
                    <label class="subtitle" for="footerDescription">বিবরণ</label>
                    <textarea id="footerDescription" class="search-input" rows="3" placeholder="প্রকল্পের বিবরণ"></textarea>
                </div>

                <div class="form-group">
                    <label class="subtitle" for="phone1">ফোন ১</label>
                    <input id="phone1" type="text" class="search-input" placeholder="+880 1991 995 995">
                </div>
                <div class="form-group">
                    <label class="subtitle" for="phone2">ফোন ২</label>
                    <input id="phone2" type="text" class="search-input" placeholder="+880 1991 994 994">
                </div>
                <div class="form-group">
                    <label class="subtitle" for="email">ইমেইল</label>
                    <input id="email" type="email" class="search-input" placeholder="hello@example.com">
                </div>

                <div class="form-group" style="grid-column: 1 / -1;">
                    <label class="subtitle" for="projectAddress">প্রকল্পের ঠিকানা</label>
                    <textarea id="projectAddress" class="search-input" rows="2" placeholder="প্রকল্পের ঠিকানা"></textarea>
                </div>
                <div class="form-group" style="grid-column: 1 / -1;">
                    <label class="subtitle" for="contactAddress">যোগাযোগের ঠিকানা</label>
                    <textarea id="contactAddress" class="search-input" rows="2" placeholder="যোগাযোগের ঠিকানা"></textarea>
                </div>

                <div style="grid-column: 1 / -1; margin-top:0.5rem;" class="subtitle">দ্রুত লিংক</div>
                <div class="form-group">
                    <input id="qlHomeLabel" type="text" class="search-input" placeholder="হোম">
                    <input id="qlHomeHref" type="text" class="search-input" placeholder="#home" style="margin-top:0.25rem;">
                </div>
                <div class="form-group">
                    <input id="qlFeaturesLabel" type="text" class="search-input" placeholder="সুবিধাসমূহ">
                    <input id="qlFeaturesHref" type="text" class="search-input" placeholder="#features" style="margin-top:0.25rem;">
                </div>
                <div class="form-group">
                    <input id="qlPricingLabel" type="text" class="search-input" placeholder="মূল্য তালিকা">
                    <input id="qlPricingHref" type="text" class="search-input" placeholder="#pricing" style="margin-top:0.25rem;">
                </div>
                <div class="form-group">
                    <input id="qlContactLabel" type="text" class="search-input" placeholder="যোগাযোগ">
                    <input id="qlContactHref" type="text" class="search-input" placeholder="#contact" style="margin-top:0.25rem;">
                </div>
                <div class="form-group">
                    <input id="qlGalleryLabel" type="text" class="search-input" placeholder="গ্যালারি">
                    <input id="qlGalleryHref" type="text" class="search-input" placeholder="#gallery" style="margin-top:0.25rem;">
                </div>

                <div style="grid-column: 1 / -1; margin-top:0.5rem;" class="subtitle">আইনি তথ্য</div>
                <div class="form-group">
                    <input id="legalPrivacyLabel" type="text" class="search-input" placeholder="গোপনীয়তা নীতি">
                    <input id="legalPrivacyHref" type="text" class="search-input" placeholder="#privacy" style="margin-top:0.25rem;">
                </div>
                <div class="form-group">
                    <input id="legalTermsLabel" type="text" class="search-input" placeholder="সেবার শর্তাবলী">
                    <input id="legalTermsHref" type="text" class="search-input" placeholder="#terms" style="margin-top:0.25rem;">
                </div>

                <div style="grid-column: 1 / -1; margin-top:0.5rem;" class="subtitle">সোশ্যাল লিংক</div>
                <div class="form-group"><input id="socialFacebook" type="text" class="search-input" placeholder="Facebook URL"></div>
                <div class="form-group"><input id="socialInstagram" type="text" class="search-input" placeholder="Instagram URL"></div>
                <div class="form-group"><input id="socialTwitter" type="text" class="search-input" placeholder="Twitter URL"></div>
                <div class="form-group"><input id="socialLinkedin" type="text" class="search-input" placeholder="LinkedIn URL"></div>
                <div class="form-group"><input id="socialYouTube" type="text" class="search-input" placeholder="YouTube URL"></div>

                <div class="form-group" style="grid-column: 1 / -1;">
                    <label class="subtitle" for="mapUrl">ম্যাপ লিংক</label>
                    <input id="mapUrl" type="text" class="search-input" placeholder="https://maps.google.com/?q=...">
                </div>

                <div class="form-group" style="grid-column: 1 / -1;">
                    <label class="subtitle" for="bottomText">ফুটারের নিচের লেখা</label>
                    <input id="bottomText" type="text" class="search-input" placeholder="© ২০২৫ জলজোছনা...">
                </div>
                <div style="grid-column: 1 / -1; margin-top:0.5rem;" class="subtitle">QR কোড</div>
                <div class="form-group">
                    <label class="subtitle" for="footerQrFile">QR কোড আপলোড</label>
                    <input id="footerQrFile" type="file" accept="image/*" class="search-input">
                    <small style="color:#6b7280; display:block; margin-top:0.25rem;">PNG/SVG/JPG সমর্থিত। আপলোড করলে সাইটের ফুটারে প্রদর্শিত হবে।</small>
                </div>
                <div class="form-group">
                    <label class="subtitle" for="qrSectionTitle">সেকশন শিরোনাম</label>
                    <input id="qrSectionTitle" type="text" class="search-input" placeholder="অবস্থান দেখুন">
                </div>
                <div class="form-group">
                    <label class="subtitle" for="mapButtonText">ম্যাপ বাটন টেক্সট</label>
                    <input id="mapButtonText" type="text" class="search-input" placeholder="গুগল ম্যাপে দেখুন">
                </div>
            </div>

            <div class="form-actions">
                <button class="btn btn-primary" onclick="saveFooterSettings()">Save</button>
                <button class="btn" style="background:#6b7280; color:#fff;" onclick="resetFooterSettings()">Reset to Default</button>
            </div>
        </form>
    </div>

    <div class="table-card" style="margin-top:1rem;">
        <h3 style="margin:0 0 0.5rem 0;">লাইভ প্রিভিউ</h3>
        <div style="border:1px solid #e5e7eb; border-radius:0.75rem; overflow:hidden; background:#0b1727; color:#cbd5e1;">
            <div style="display:flex; gap:32px; padding:16px;">
                <div style="flex:1; min-width:220px;">
                    <div style="display:flex; align-items:center; gap:8px; color:#fbbf24;">
                        <span>🏠</span>
                        <h3 id="pvTitle" style="margin:0; color:#e5e7eb;">জলজোছনা</h3>
                    </div>
                    <p id="pvDesc" style="margin:8px 0 12px 0; color:#cbd5e1;">প্রকল্পের বিবরণ এখানে</p>
                    <div style="display:flex; flex-direction:column; gap:8px;">
                        <div><strong>📞</strong> <span id="pvPhone1">+880 1991 995 995</span>, <span id="pvPhone2">+880 1991 994 994</span></div>
                        <div><strong>✉️</strong> <span id="pvEmail">hello@example.com</span></div>
                    </div>
                    <div style="display:flex; gap:8px; margin-top:8px;">
                        <a id="pvFb" href="#" style="color:#cbd5e1;">Facebook</a>
                        <a id="pvIg" href="#" style="color:#cbd5e1;">Instagram</a>
                        <a id="pvTw" href="#" style="color:#cbd5e1;">Twitter</a>
                        <a id="pvLn" href="#" style="color:#cbd5e1;">LinkedIn</a>
                        <a id="pvYt" href="#" style="color:#cbd5e1;">YouTube</a>
                    </div>
                </div>
                <div style="flex:1; min-width:220px;">
                    <h4 style="margin:0 0 8px 0; color:#e5e7eb;">ঠিকানা</h4>
                    <div id="pvProjectAddr" style="margin-bottom:8px;">প্রকল্পের ঠিকানা</div>
                    <div id="pvContactAddr">যোগাযোগের ঠিকানা</div>
                </div>
                <div style="flex:1; min-width:220px;">
                    <h4 style="margin:0 0 8px 0; color:#e5e7eb;">দ্রুত লিংক</h4>
                    <div style="display:flex; flex-direction:column; gap:6px;">
                        <a id="pvQlHome" href="#home" style="color:#cbd5e1;">হোম</a>
                        <a id="pvQlFeatures" href="#features" style="color:#cbd5e1;">সুবিধাসমূহ</a>
                        <a id="pvQlPricing" href="#pricing" style="color:#cbd5e1;">মূল্য তালিকা</a>
                        <a id="pvQlContact" href="#contact" style="color:#cbd5e1;">যোগাযোগ</a>
                        <a id="pvQlGallery" href="#gallery" style="color:#cbd5e1;">গ্যালারি</a>
                    </div>
                </div>
                <div style="flex:1; min-width:220px;">
                    <h4 id="pvQrTitle" style="margin:0 0 8px 0; color:#e5e7eb;">অবস্থান দেখুন</h4>
                    <a id="pvMap" href="#" target="_blank" style="display:inline-block; background:#f59e0b; color:#111827; padding:8px 12px; border-radius:8px; text-decoration:none; font-weight:600;"><span id="pvMapText">গুগল ম্যাপে দেখুন</span></a>
                    <div style="margin-top:10px;">
                        <div style="width:160px; height:160px; border:2px dashed #334155; border-radius:10px; display:flex; align-items:center; justify-content:center; background:#0f172a; position:relative;">
                            <img id="pvQrImg" alt="QR Preview" style="max-width:148px; max-height:148px; display:none; background:#fff; padding:6px; border-radius:8px;" />
                            <span id="pvQrPlaceholder" style="color:#64748b; font-size:12px; text-align:center; padding:0 8px;">QR আপলোড করলে এখানে প্রিভিউ দেখাবে</span>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background:#0a1220; padding:10px 16px; color:#94a3b8; text-align:center;" id="pvBottom">© ২০২৫ জলজোছনা। সর্বস্বত্ব সংরক্ষিত।</div>
        </div>
    </div>
    </div>

    
</div>
