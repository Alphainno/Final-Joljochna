 <section id="other-projects" class="other-projects">
        <h2 class="section-title" id="opSecTitle">অন্যান্য প্রকল্প</h2>
        <p class="section-subtitle" id="opSecSubtitle">NEX Real Estate-এর সফল প্রকল্পগুলো দেখুন</p>

        <div class="carousel-wrapper">
            <button id="prevBtn" class="carousel-btn prev-btn">❮</button>
            <div class="carousel-container">
                <div id="projectTrack" class="carousel-track"></div>
            </div>
            <button id="nextBtn" class="carousel-btn next-btn">❯</button>
        </div>

        <!-- See More Button Kept -->
        <div style="text-align: center; margin-top: 3rem;">
            <a href="/projects" class="btn btn-primary">আরও দেখুন</a>
        </div>
        <script>
            (function(){
                function get(){ try{ return JSON.parse(localStorage.getItem('otherProjectsSettings')||'{}'); }catch(e){ return {}; } }
                const track = document.getElementById('projectTrack');
                function render(){
                    const v = get();
                    const title = document.getElementById('opSecTitle');
                    const subtitle = document.getElementById('opSecSubtitle');
                    if(title) title.textContent = v.title || 'অন্যান্য প্রকল্প';
                    if(subtitle) subtitle.textContent = v.subtitle || 'NEX Real Estate-এর সফল প্রকল্পগুলো দেখুন';
                    track.innerHTML = '';
                    const items = (v.items && v.items.length) ? v.items : [
                        {icon:'🏙️', name:'শান্তি নিবাস', desc:'শহরের ঠিক মাঝে আপনার শান্তির ঠিকানা। সব আধুনিক সুবিধা নিয়ে, ঢাকায় এক নতুন, বিলাসবহুল জীবন শুরু করুন।', btn:'বিস্তারিত জানুন', href:'#contact'}
                    ];
                    items.forEach(p => {
                        const card = document.createElement('div');
                        card.className = 'project-card';
                        card.innerHTML = `
                            <div class="project-image">${p.icon||''}</div>
                            <div class="project-content">
                                <h3>${p.name||''}</h3>
                                <p>${p.desc||''}</p>
                                <a href="${p.href||'#contact'}" class="btn btn-primary" style="padding: 0.8rem 2rem; font-size: 1rem;">${p.btn||'বিস্তারিত জানুন'}</a>
                            </div>`;
                        track.appendChild(card);
                    });
                }
                window.addEventListener('load', render);
                window.addEventListener('storage', (e)=>{ if(e.key==='otherProjectsSettings') render(); });
            })();
        </script>
    </section>
