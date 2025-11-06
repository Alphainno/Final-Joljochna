   <section id="testimonials" class="testimonials bg-red-500">
        <h2 class="section-title" style="color: #1a7a4a;">বিনিয়োগকারী মন্তব্য</h2>
        <p class="section-subtitle">আমাদের গ্রাহকরা আমাদের প্রকল্প সম্পর্কে কী বলেন</p>

        <div class="carousel-wrapper">
            <button id="prevTestimonialBtn" class="carousel-btn prev-btn">❮</button>
            <div class="carousel-container">
                <div id="testimonialTrack" class="carousel-track">

                    <div class="testimonial-card" data-testimonial-index="0">
                        <!-- Investor Info (LEFT Column) -->
                        <div class="investor-meta">
                            <span class="investor-avatar test-avatar">FA</span>
                            <span class="investor-name test-name">জনাব. ফারহান আহমেদ</span>
                            <span class="investor-title test-title">ব্যবসায়ী, ঢাকা</span>
                        </div>
                        <!-- Quote Content (RIGHT Column) -->
                        <div class="quote-content-wrapper">
                            <span class="quote-icon">❝</span>
                            <p class="quote-text test-quote">জলজোছনা প্রকল্প দেখে আমি সত্যিই মুগ্ধ! দারুণ লোকেশন, আর পেমেন্ট
                                প্ল্যানগুলো খুবই নমনীয়। আমার বিনিয়োগের সেরা সিদ্ধান্ত ছিল।</p>
                        </div>
                    </div>

                    <div class="testimonial-card" data-testimonial-index="1">
                        <div class="investor-meta">
                            <span class="investor-avatar test-avatar">JF</span>
                            <span class="investor-name test-name">মিসেস. জান্নাতুল ফেরদৌস</span>
                            <span class="investor-title test-title">গৃহিণী, খুলনা</span>
                        </div>
                        <div class="quote-content-wrapper">
                            <span class="quote-icon">❝</span>
                            <p class="quote-text test-quote">নেক্স রিয়েল এস্টেট এর সাথে কাজ করা সহজ ছিল। সমস্ত আইনি ডকুমেন্টেশন
                                পরিষ্কার এবং দ্রুত সম্পন্ন হয়েছে। আমি অন্য প্রকল্পে বিনিয়োগের পরিকল্পনা করছি।</p>
                        </div>
                    </div>

                    <div class="testimonial-card" data-testimonial-index="2">
                        <div class="investor-meta">
                            <span class="investor-avatar test-avatar">SR</span>
                            <span class="investor-name test-name">জনাব. শফিকুর রহমান</span>
                            <span class="investor-title test-title">প্রকৌশলী, যুক্তরাজ্য</span>
                        </div>
                        <div class="quote-content-wrapper">
                            <span class="quote-icon">❝</span>
                            <p class="quote-text test-quote">পরিকল্পিত সবুজ পরিবেশ এবং যোগাযোগ ব্যবস্থা খুবই চমৎকার। ভবিষ্যতের
                                জন্য এটি একটি নিরাপদ ও লাভজনক বিনিয়োগ। আমি ১০০% সন্তুষ্ট।</p>
                        </div>
                    </div>

                    <!-- Added one more for effect -->
                    <div class="testimonial-card" data-testimonial-index="3">
                        <div class="investor-meta">
                            <span class="investor-avatar test-avatar">AK</span>
                            <span class="investor-name test-name">মিসেস. আয়েশা খানম</span>
                            <span class="investor-title test-title">শিক্ষিকা, চট্টগ্রাম</span>
                        </div>
                        <div class="quote-content-wrapper">
                            <span class="quote-icon">❝</span>
                            <p class="quote-text test-quote">প্রকল্পের অবস্থান ও উন্নত যোগাযোগ আমাকে আকর্ষণ করেছে। বুকিং
                                প্রক্রিয়া খুবই সহজ ছিল। আমি আমার বন্ধুদেরও এখানে বিনিয়োগ করতে উৎসাহিত করব।</p>
                        </div>
                    </div>

                </div>
            </div>
            <button id="nextTestimonialBtn" class="carousel-btn next-btn">❯</button>
        </div>

        <script>
            (function(){
                const cards = Array.from(document.querySelectorAll('.testimonial-card'));
                function readTestimonials(){ try{ return JSON.parse(localStorage.getItem('testimonialsSettings')||'{}'); }catch(e){ return {}; } }
                function applyTestimonials(){
                    const s = readTestimonials();
                    const items = Array.isArray(s.items) ? s.items : [];
                    cards.forEach((card, idx) => {
                        const item = items[idx];
                        if (!item) return;
                        const avatarEl = card.querySelector('.test-avatar');
                        const nameEl = card.querySelector('.test-name');
                        const titleEl = card.querySelector('.test-title');
                        const quoteEl = card.querySelector('.test-quote');
                        if (avatarEl && item.avatar) avatarEl.textContent = item.avatar;
                        if (nameEl && item.name) nameEl.textContent = item.name;
                        if (titleEl && item.title) titleEl.textContent = item.title;
                        if (quoteEl && item.quote) quoteEl.textContent = item.quote;
                    });
                }
                applyTestimonials();
                window.addEventListener('storage', (e)=>{ if(e.key==='testimonialsSettings') applyTestimonials(); });
                let last = localStorage.getItem('testimonialsSettings');
                setInterval(()=>{ const cur = localStorage.getItem('testimonialsSettings'); if(cur!==last){ last=cur; applyTestimonials(); } }, 1000);
            })();
        </script>

    </section>