   <section id="home" class="hero">
        <style>
            /* Full-bleed hero slider */
            #home{position:relative; padding:0}
            #home .slider-wrap{position:relative; width:100%; height:80vh; min-height:360px; max-height:820px; overflow:hidden}
            #home .slides{position:absolute; inset:0; background:#0b3a28}
            #home .slides img{position:absolute; inset:0; width:100%; height:100%; object-fit:cover; opacity:0; transition:opacity .6s ease}
            #home .slides img.active{opacity:1}
            #home .overlay{position:absolute; inset:0; display:flex; align-items:center; justify-content:center; padding:24px}
            #home .overlay::after{content:""; position:absolute; inset:0; background:linear-gradient(180deg, rgba(0,0,0,.35), rgba(0,0,0,.55));}
            #home .overlay-content{position:relative; z-index:1; text-align:center; color:#fff; max-width:980px; padding:0 12px}
            #home .overlay-content h1{font-size:clamp(28px, 5vw, 56px); line-height:1.1; font-weight:800; margin:0 0 10px}
            #home .overlay-content h2{font-size:clamp(18px, 3.2vw, 32px); line-height:1.25; font-weight:700; margin:0 0 12px}
            #home .overlay-content .hero-subtitle{opacity:.95; margin-bottom:18px; font-size:clamp(14px, 2.4vw, 18px)}
            #home .overlay-content .cta-buttons{display:flex; gap:12px; justify-content:center; flex-wrap:wrap}
            #home .overlay-content .btn{padding:clamp(10px, 1.5vw, 14px) clamp(14px, 2.2vw, 20px); border-radius:12px; font-weight:700; font-size:clamp(14px, 2.4vw, 16px); transition:transform .15s ease, box-shadow .2s ease, background-color .2s ease}
            #home .overlay-content .btn-primary{background:#16a34a; color:#ffffff; border:none; box-shadow:0 6px 14px rgba(22,163,74,.35)}
            #home .overlay-content .btn-primary:hover{transform:translateY(-1px); box-shadow:0 10px 20px rgba(22,163,74,.45); background:#22c55e}
            #home .overlay-content .btn-primary:active{transform:translateY(0); box-shadow:0 4px 10px rgba(22,163,74,.35); background:#15803d}
            #home .overlay-content .btn-primary:focus{outline:2px solid rgba(34,197,94,.85); outline-offset:2px}
            /* Yellow, modern, smooth button for Contact */
            #home .overlay-content .btn-secondary{background:#ffd700; color:#000000; border:none; box-shadow:0 6px 14px rgba(255,215,0,.35)}
            #home .overlay-content .btn-secondary:hover{transform:translateY(-1px); box-shadow:0 10px 20px rgba(255,215,0,.45); background:#ffe057}
            #home .overlay-content .btn-secondary:active{transform:translateY(0); box-shadow:0 4px 10px rgba(255,215,0,.35); background:#f0c800}
            #home .overlay-content .btn-secondary:focus{outline:2px solid rgba(255,215,0,.8); outline-offset:2px}
            #home .slider-controls{position:absolute; inset:0; display:flex; align-items:center; justify-content:space-between; padding:0 8px; pointer-events:none}
            #home .slider-btn{pointer-events:auto; background:rgba(0,0,0,.45); color:#fff; border:none; width:42px; height:42px; border-radius:999px; display:flex; align-items:center; justify-content:center; cursor:pointer}
            #home .slider-dots{position:absolute; bottom:14px; left:0; right:0; display:flex; justify-content:center; gap:8px; z-index:2}
            #home .slider-dot{width:10px; height:10px; border-radius:999px; background:rgba(255,255,255,.5); cursor:pointer}
            #home .slider-dot.active{background:#ffd700}
            #home .scroll-indicator{position:absolute; bottom:8px; left:0; right:0}
            @media (max-width: 768px){
                #home .slider-wrap{height:64vh}
                #home .overlay-content .cta-buttons{gap:10px}
                #home .overlay-content .cta-buttons .btn{width:100%; max-width:420px}
            }
            @media (max-width: 420px){
                #home .overlay{padding:16px}
                #home .overlay-content{padding:0 6px}
            }
        </style>

        <div class="slider-wrap">
            <div class="slides" id="homeSlides">
                <img id="homeSlide1" src="/images/slider/slide-1.jpg" alt="Slide 1" class="active" />
                <img id="homeSlide2" src="/images/slider/slide-2.jpg" alt="Slide 2" />
                <img id="homeSlide3" src="/images/slider/slide-3.jpg" alt="Slide 3" />
            </div>
            <div class="overlay">
                <div class="overlay-content">
                    <h1 id="heroTitle">আপনার স্বপ্নের বাড়ি</h1>
                    <h2 id="heroSubtitle">জলজোছনা প্রজেক্টে</h2>
                    <p id="heroDesc" class="hero-subtitle">প্রকল্পের মূল্য তালিকা - বুকিং পরিমাণ: ১০,০০০ টাকা (কার্য প্রতি)</p>
                    <div class="cta-buttons">
                        <a id="heroBtnPrimary" href="#pricing" class="btn btn-primary">মূল্য দেখুন</a>
                        <a id="heroBtnSecondary" href="#contact" class="btn btn-secondary">যোগাযোগ করুন</a>
                    </div>
                </div>
            </div>
            <div class="slider-controls">
                <button class="slider-btn" id="homePrev" aria-label="Previous">❮</button>
                <button class="slider-btn" id="homeNext" aria-label="Next">❯</button>
            </div>
            <div class="slider-dots" id="homeDots"></div>
        </div>

        <div class="scroll-indicator">
            <span></span>
        </div>
        <script>
            (function(){
                // Slider logic
                const slides = Array.from(document.querySelectorAll('#homeSlides img'));
                const dotsWrap = document.getElementById('homeDots');
                const prev = document.getElementById('homePrev');
                const next = document.getElementById('homeNext');
                if (!slides.length || !dotsWrap || !prev || !next) return;
                let idx = 0, timer;
                function setActive(i){
                    slides.forEach((im, k)=> im.classList.toggle('active', k===i));
                    const dots = Array.from(dotsWrap.children);
                    dots.forEach((d,k)=> d.classList.toggle('active', k===i));
                    idx = i;
                }
                slides.forEach((_, i)=>{
                    const d=document.createElement('div');
                    d.className='slider-dot'+(i===0?' active':'');
                    d.addEventListener('click', ()=>{ setActive(i); restart(); });
                    dotsWrap.appendChild(d);
                });
                function go(n){ setActive((idx + n + slides.length) % slides.length); }
                function restart(){ clearInterval(timer); timer = setInterval(()=> go(1), 4000); }
                prev.addEventListener('click', ()=>{ go(-1); restart(); });
                next.addEventListener('click', ()=>{ go(1); restart(); });
                restart();

                // Dynamic binding from localStorage (heroSettings)
                const defaults = {
                    title: 'আপনার স্বপ্নের বাড়ি',
                    subtitle: 'জলজোছনা প্রজেক্টে',
                    description: 'প্রকল্পের মূল্য তালিকা - বুকিং পরিমাণ: ১০,০০০ টাকা (কার্য প্রতি)',
                    primaryText: 'মূল্য দেখুন',
                    primaryLink: '#pricing',
                    secondaryText: 'যোগাযোগ করুন',
                    secondaryLink: '#contact',
                    slides: []
                };
                
                const el = {
                    title: document.getElementById('heroTitle'),
                    subtitle: document.getElementById('heroSubtitle'),
                    desc: document.getElementById('heroDesc'),
                    pBtn: document.getElementById('heroBtnPrimary'),
                    sBtn: document.getElementById('heroBtnSecondary'),
                    slide1: document.getElementById('homeSlide1'),
                    slide2: document.getElementById('homeSlide2'),
                    slide3: document.getElementById('homeSlide3')
                };
                
                function read(){
                    try{ return JSON.parse(localStorage.getItem('heroSettings')||'{}'); }catch(e){ return {}; }
                }
                
                function apply(){
                    const saved = read();
                    const s = { ...defaults, ...saved };
                    console.log('Applying hero settings:', s);
                    
                    if (el.title) el.title.textContent = s.title;
                    if (el.subtitle) el.subtitle.textContent = s.subtitle;
                    if (s.description && el.desc) el.desc.textContent = s.description;
                    if (el.pBtn) {
                        el.pBtn.textContent = s.primaryText;
                        el.pBtn.href = s.primaryLink;
                    }
                    if (el.sBtn) {
                        el.sBtn.textContent = s.secondaryText;
                        el.sBtn.href = s.secondaryLink;
                    }
                    const slidesArr = Array.isArray(s.slides)? s.slides: [];
                    if (slidesArr[0] && el.slide1) el.slide1.src = slidesArr[0];
                    if (slidesArr[1] && el.slide2) el.slide2.src = slidesArr[1];
                    if (slidesArr[2] && el.slide3) el.slide3.src = slidesArr[2];
                }
                
                apply();
                window.addEventListener('storage', (e)=>{ if(e.key==='heroSettings'){ console.log('Hero storage event'); apply(); } });
                let last = localStorage.getItem('heroSettings');
                setInterval(()=>{ const cur = localStorage.getItem('heroSettings'); if(cur!==last){ console.log('Hero changed via polling'); last=cur; apply(); } }, 1000);
            })();
        </script>
    </section>
