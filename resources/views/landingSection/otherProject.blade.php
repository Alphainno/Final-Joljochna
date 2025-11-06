 <section id="other-projects" class="other-projects">
        <h2 class="section-title" id="otherProjectsTitle">অন্যান্য প্রকল্প</h2>
        <p class="section-subtitle" id="otherProjectsSubtitle">NEX Real Estate-এর সফল প্রকল্পগুলো দেখুন</p>

        <div class="carousel-wrapper">
            <button id="prevBtn" class="carousel-btn prev-btn">❮</button>
            <div class="carousel-container">
                <div id="projectTrack" class="carousel-track">

                    <div class="project-card" id="otherProjCard1">
                        <div class="project-image">🏙️</div>
                        <div class="project-content">
                            <h3>শান্তি নিবাস</h3>
                            <p>শহরের ঠিক মাঝে আপনার শান্তির ঠিকানা। সব আধুনিক সুবিধা নিয়ে, ঢাকায় এক নতুন, বিলাসবহুল
                                জীবন শুরু করুন।</p>
                            <a href="#contact" class="btn btn-primary"
                                style="padding: 0.8rem 2rem; font-size: 1rem;">বিস্তারিত জানুন</a>
                        </div>
                    </div>

                    <div class="project-card" id="otherProjCard2">
                        <div class="project-image">🏡</div>
                        <div class="project-content">
                            <h3>সবুজ ভিটা</h3>
                            <p>নদীর একদম পাশে, যেখানে আপনি পাবেন নির্মল শান্তি। প্রকৃতির কাছাকাছি একটি নির্ভেজাল ও
                                সুন্দর জীবন।</p>
                            <a href="#contact" class="btn btn-primary"
                                style="padding: 0.8rem 2rem; font-size: 1rem;">বিস্তারিত জানুন</a>
                        </div>
                    </div>

                    <div class="project-card" id="otherProjCard3">
                        <div class="project-image">🏢</div>
                        <div class="project-content">
                            <h3>প্রত্যাশা টাওয়ার</h3>
                            <p>খুলনার সেরা লোকেশনে আপনার ব্যবসার জন্য সেরা অফিস স্পেস। এখানে বিনিয়োগ মানেই উজ্জ্বল
                                ভবিষ্যৎ!</p>
                            <a href="#contact" class="btn btn-primary"
                                style="padding: 0.8rem 2rem; font-size: 1rem;">বিস্তারিত জানুন</a>
                        </div>
                    </div>

                    <div class="project-card" id="otherProjCard4">
                        <div class="project-image">🏗️</div>
                        <div class="project-content">
                            <h3>নির্মাণ প্লাজা</h3>
                            <p>ব্যস্ত শহরের কেন্দ্রে আধুনিক এবং পরিবেশ-বান্ধব বাণিজ্যিক স্থান। ব্যবসা বাড়ানোর জন্য
                                আদর্শ বিনিয়োগ।</p>
                            <a href="#contact" class="btn btn-primary"
                                style="padding: 0.8rem 2rem; font-size: 1rem;">বিস্তারিত জানুন</a>
                        </div>
                    </div>

                </div>
            </div>
            <button id="nextBtn" class="carousel-btn next-btn">❯</button>
        </div>

        <!-- See More Button Kept -->
        <div style="text-align: center; margin-top: 3rem;">
            <a href="/projects" class="btn btn-primary">আরও দেখুন</a>
        </div>
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
