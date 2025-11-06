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
            (function(){sty
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

<script>
(function(){
    const defaults = {
        sectionTitle: 'অন্যান্য প্রকল্প',
        sectionSubtitle: 'NEX Real Estate-এর সফল প্রকল্পগুলো দেখুন',
        projects: [
            {
                image: '🏙️',
                title: 'শান্তি নিবাস',
                desc: 'শহরের ঠিক মাঝে আপনার শান্তির ঠিকানা। সব আধুনিক সুবিধা নিয়ে, ঢাকায় এক নতুন, বিলাসবহুল জীবন শুরু করুন।',
                btnText: 'বিস্তারিত জানুন',
                btnLink: '#contact'
            },
            {
                image: '🏡',
                title: 'সবুজ ভিটা',
                desc: 'নদীর একদম পাশে, যেখানে আপনি পাবেন নির্মল শান্তি। প্রকৃতির কাছাকাছি একটি নির্ভেজাল ও সুন্দর জীবন।',
                btnText: 'বিস্তারিত জানুন',
                btnLink: '#contact'
            },
            {
                image: '🏢',
                title: 'প্রত্যাশা টাওয়ার',
                desc: 'খুলনার সেরা লোকেশনে আপনার ব্যবসার জন্য সেরা অফিস স্পেস। এখানে বিনিয়োগ মানেই উজ্জ্বল ভবিষ্যৎ!',
                btnText: 'বিস্তারিত জানুন',
                btnLink: '#contact'
            },
            {
                image: '🏗️',
                title: 'নির্মাণ প্লাজা',
                desc: 'ব্যস্ত শহরের কেন্দ্রে আধুনিক এবং পরিবেশ-বান্ধব বাণিজ্যিক স্থান। ব্যবসা বাড়ানোর জন্য আদর্শ বিনিয়োগ।',
                btnText: 'বিস্তারিত জানুন',
                btnLink: '#contact'
            }
        ]
    };

    const el = {
        title: document.getElementById('otherProjectsTitle'),
        subtitle: document.getElementById('otherProjectsSubtitle'),
        cards: [
            document.getElementById('otherProjCard1'),
            document.getElementById('otherProjCard2'),
            document.getElementById('otherProjCard3'),
            document.getElementById('otherProjCard4')
        ]
    };

    function read(){
        try{ return JSON.parse(localStorage.getItem('otherProjectsSettings')||'{}'); }catch(e){ return {}; }
    }

    function apply(){
        const saved = read();
        const s = { ...defaults, ...saved };

        if (el.title) el.title.textContent = s.sectionTitle;
        if (el.subtitle) el.subtitle.textContent = s.sectionSubtitle;

        s.projects.forEach((p, i) => {
            if (el.cards[i]) {
                el.cards[i].innerHTML = `
                    <div class="project-image">${p.image}</div>
                    <div class="project-content">
                        <h3>${p.title}</h3>
                        <p>${p.desc}</p>
                        <a href="${p.btnLink}" class="btn btn-primary" style="padding: 0.8rem 2rem; font-size: 1rem;">${p.btnText}</a>
                    </div>
                `;
            }
        });
    }

    apply();
    window.addEventListener('storage', (e)=>{ if(e.key==='otherProjectsSettings'){ apply(); } });
    let last = localStorage.getItem('otherProjectsSettings');
    setInterval(()=>{ const cur = localStorage.getItem('otherProjectsSettings'); if(cur!==last){ last=cur; apply(); } }, 1000);
})();
</script>
