   <section id="testimonials" class="testimonials bg-red-500">
        <h2 class="section-title" style="color: #1a7a4a;">বিনিয়োগকারী মন্তব্য</h2>
        <p class="section-subtitle">আমাদের গ্রাহকরা আমাদের প্রকল্প সম্পর্কে কী বলেন</p>

        <div class="carousel-wrapper">
            <button id="prevTestimonialBtn" class="carousel-btn prev-btn">❮</button>
            <div class="carousel-container">
                <div id="testimonialTrack" class="carousel-track">
                    <!-- Testimonials will be loaded dynamically from database -->
                </div>
            </div>
            <button id="nextTestimonialBtn" class="carousel-btn next-btn">❯</button>
        </div>

        <script>
            (function(){
                const track = document.getElementById('testimonialTrack');
                const prevBtn = document.getElementById('prevTestimonialBtn');
                const nextBtn = document.getElementById('nextTestimonialBtn');
                let currentIndex = 0;
                let testimonials = [];

                async function loadTestimonials() {
                    try {
                        const response = await fetch('/api/testimonials');
                        testimonials = await response.json();
                        renderTestimonials();
                        initCarousel();
                    } catch (error) {
                        console.error('Error loading testimonials:', error);
                    }
                }

                function renderTestimonials() {
                    if (!track) return;
                    
                    track.innerHTML = '';
                    
                    if (testimonials.length === 0) {
                        track.innerHTML = '<div class="testimonial-card"><p style="text-align:center; padding:2rem;">কোন মন্তব্য পাওয়া যায়নি</p></div>';
                        return;
                    }

                    testimonials.forEach((testimonial, index) => {
                        const card = document.createElement('div');
                        card.className = 'testimonial-card';
                        card.dataset.testimonialIndex = index;
                        
                        // Use image if available, otherwise use avatar text
                        let avatarHtml = '';
                        if (testimonial.image_url) {
                            avatarHtml = `<img src="${testimonial.image_url}" alt="${testimonial.name || ''}" class="investor-avatar-image" style="width:100px; height:100px; border-radius:50%; object-fit:cover; border:3px solid #0a4d2e; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);" />`;
                        } else {
                            avatarHtml = `<div class="investor-avatar test-avatar">${testimonial.avatar || ''}</div>`;
                        }
                        
                        card.innerHTML = `
                            <div class="investor-meta">
                                ${avatarHtml}
                                <div>
                                    <div class="investor-name test-name">${testimonial.name || ''}</div>
                                    <div class="investor-title test-title">${testimonial.title || ''}</div>
                                </div>
                            </div>
                            <div class="quote-content-wrapper">
                                <span class="quote-icon">❝</span>
                                <p class="quote-text test-quote">${testimonial.quote || ''}</p>
                            </div>
                        `;
                        track.appendChild(card);
                    });
                }

                function initCarousel() {
                    if (testimonials.length <= 1) {
                        if (prevBtn) prevBtn.style.display = 'none';
                        if (nextBtn) nextBtn.style.display = 'none';
                        return;
                    }

                    if (prevBtn) prevBtn.style.display = 'block';
                    if (nextBtn) nextBtn.style.display = 'block';

                    function updateCarousel() {
                        if (!track) return;
                        const cardWidth = track.querySelector('.testimonial-card')?.offsetWidth || 0;
                        const offset = -currentIndex * cardWidth;
                        track.style.transform = `translateX(${offset}px)`;
                    }

                    if (prevBtn) {
                        prevBtn.onclick = () => {
                            currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
                            updateCarousel();
                        };
                    }

                    if (nextBtn) {
                        nextBtn.onclick = () => {
                            currentIndex = (currentIndex + 1) % testimonials.length;
                            updateCarousel();
                        };
                    }

                    updateCarousel();
                }

                loadTestimonials();
                
                // Reload testimonials every 3 seconds to get updates
                setInterval(loadTestimonials, 3000);
                
                // Also reload when page becomes visible (user switches tabs back)
                document.addEventListener('visibilitychange', function() {
                    if (!document.hidden) {
                        loadTestimonials();
                    }
                });
                
                // Reload on focus (user clicks back to the page)
                window.addEventListener('focus', loadTestimonials);

                // Reload when admin dashboard broadcasts a refresh via localStorage
                window.addEventListener('storage', function(e){
                    try{
                        if (e && e.key === 'refreshTestimonials') {
                            loadTestimonials();
                        }
                    }catch(err){ /* ignore */ }
                });
            })();
        </script>

    </section>