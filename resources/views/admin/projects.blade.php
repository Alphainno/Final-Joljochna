<div id="projects" class="tab-content">
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-card-content">
                <div class="stat-info">
                    <h3>প্রকল্প</h3>
                    <div class="subtitle">হিরো সেকশন, স্লোগান, আমাদের প্রজেক্টসমূহ, অন্যান্য প্রজেক্টসমূহ</div>
                </div>
                <div class="stat-icon purple">📁</div>
            </div>
        </div>
    </div>

    <div id="projects-hero" style="margin-top:1rem;">
        <div class="table-card">
            <h2>হিরো সেকশন</h2>
            <p style="color:#6b7280;">প্রকল্প হিরো সেকশনের কন্টেন্ট/ফর্ম।</p>
            <style>
                #projects-hero .table-card input[type="text"],
                #projects-hero .table-card input[type="url"],
                #projects-hero .table-card select {
                    height: 48px;
                    padding: 10px 12px;
                    font-size: 16px;
                    border-radius: 10px;
                }
                #projects-hero .table-card textarea {
                    min-height: 120px;
                    padding: 12px;
                    font-size: 16px;
                    border-radius: 10px;
                }
            </style>
            <div class="form-grid" style="display:grid; grid-template-columns:1fr; gap:16px; align-items:start;">
                <div>
                    <div class="form-group">
                        <label>শিরোনাম</label>
                        <input type="text" id="projectsHeroTitleInput" placeholder="হিরো শিরোনাম">
                    </div>
                    <div class="form-group">
                        <label>সাব-শিরোনাম</label>
                        <input type="text" id="projectsHeroSubtitleInput" placeholder="সাব-শিরোনাম">
                    </div>
                    <div class="form-group">
                        <label>বিবরণ</label>
                        <textarea id="projectsHeroDescInput" placeholder="প্রকল্পের মূল্য তালিকা - বুকিং পরিমাণ: ১০,০০০ টাকা"></textarea>
                    </div>
                    <div class="form-row" style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">
                        <div class="form-group">
                            <label>প্রাইমারি বাটন টেক্সট</label>
                            <input type="text" id="projectsHeroPrimaryTextInput" placeholder="মূল্য দেখুন">
                        </div>
                        <div class="form-group">
                            <label>প্রাইমারি বাটন লিংক</label>
                            <input type="text" id="projectsHeroPrimaryLinkInput" placeholder="#pricing">
                        </div>
                        <div class="form-group">
                            <label>সেকেন্ডারি বাটন টেক্সট</label>
                            <input type="text" id="projectsHeroSecondaryTextInput" placeholder="যোগাযোগ করুন">
                        </div>
                        <div class="form-group">
                            <label>সেকেন্ডারি বাটন লিংক</label>
                            <input type="text" id="projectsHeroSecondaryLinkInput" placeholder="#contact">
                        </div>
                    </div>
                </div>
                <div>
                    <label style="display:block; margin-bottom:6px;">স্লাইড ইমেজ (৩টি)</label>
                    <div class="slides-upload" style="display:grid; grid-template-columns:repeat(3,1fr); gap:12px;">
                        <div>
                            <div style="border:1px dashed #cbd5e1; border-radius:10px; overflow:hidden; aspect-ratio:16/9; background:#f8fafc; display:flex; align-items:center; justify-content:center;">
                                <img id="projectsHeroSlidePrev1" alt="Slide 1" style="max-width:100%; max-height:100%; display:none;" />
                                <span id="projectsHeroSlidePh1" style="color:#94a3b8;">Slide 1</span>
                            </div>
                            <input type="file" id="projectsHeroSlideInput1" accept="image/*" style="margin-top:6px;">
                        </div>
                        <div>
                            <div style="border:1px dashed #cbd5e1; border-radius:10px; overflow:hidden; aspect-ratio:16/9; background:#f8fafc; display:flex; align-items:center; justify-content:center;">
                                <img id="projectsHeroSlidePrev2" alt="Slide 2" style="max-width:100%; max-height:100%; display:none;" />
                                <span id="projectsHeroSlidePh2" style="color:#94a3b8;">Slide 2</span>
                            </div>
                            <input type="file" id="projectsHeroSlideInput2" accept="image/*" style="margin-top:6px;">
                        </div>
                        <div>
                            <div style="border:1px dashed #cbd5e1; border-radius:10px; overflow:hidden; aspect-ratio:16/9; background:#f8fafc; display:flex; align-items:center; justify-content:center;">
                                <img id="projectsHeroSlidePrev3" alt="Slide 3" style="max-width:100%; max-height:100%; display:none;" />
                                <span id="projectsHeroSlidePh3" style="color:#94a3b8;">Slide 3</span>
                            </div>
                            <input type="file" id="projectsHeroSlideInput3" accept="image/*" style="margin-top:6px;">
                        </div>
                    </div>
                </div>
                <div style="margin-top:14px; display:flex; gap:10px;">
                    <button id="saveProjectsHeroBtn" class="btn btn-primary" type="button">সেভ</button>
                    <button id="resetProjectsHeroBtn" class="btn btn-secondary" type="button">রিসেট</button>
                </div>
            </div>
            <script>
                (function(){
                    const qs = id => document.getElementById(id);
                    const inputs = {
                        title: qs('projectsHeroTitleInput'),
                        subtitle: qs('projectsHeroSubtitleInput'),
                        desc: qs('projectsHeroDescInput'),
                        pText: qs('projectsHeroPrimaryTextInput'),
                        pLink: qs('projectsHeroPrimaryLinkInput'),
                        sText: qs('projectsHeroSecondaryTextInput'),
                        sLink: qs('projectsHeroSecondaryLinkInput')
                    };
                    const fileInputs = [qs('projectsHeroSlideInput1'), qs('projectsHeroSlideInput2'), qs('projectsHeroSlideInput3')];
                    const prevImgs = [qs('projectsHeroSlidePrev1'), qs('projectsHeroSlidePrev2'), qs('projectsHeroSlidePrev3')];
                    const phs = [qs('projectsHeroSlidePh1'), qs('projectsHeroSlidePh2'), qs('projectsHeroSlidePh3')];

                    function load(){
                        try{
                            const saved = JSON.parse(localStorage.getItem('projectsHeroSettings')||'{}');
                            if(saved.title) inputs.title.value = saved.title; else inputs.title.value='মুল্য বুদ্ধির আগে';
                            if(saved.subtitle) inputs.subtitle.value = saved.subtitle; else inputs.subtitle.value='বাড়ি বুকিং করুন';
                            if(saved.description) inputs.desc.value = saved.description; else inputs.desc.value='প্রকল্পের মূল্য তালিকা - বুকিং পরিমাণ: ১০,০০০ টাকা';
                            if(saved.primaryText) inputs.pText.value = saved.primaryText; else inputs.pText.value='মূল্য দেখুন';
                            if(saved.primaryLink) inputs.pLink.value = saved.primaryLink; else inputs.pLink.value='#pricing';
                            if(saved.secondaryText) inputs.sText.value = saved.secondaryText; else inputs.sText.value='যোগাযোগ করুন';
                            if(saved.secondaryLink) inputs.sLink.value = saved.secondaryLink; else inputs.sLink.value='#contact';
                            const slides = Array.isArray(saved.slides)? saved.slides: ['/images/slider/slide-1.jpg', '/images/slider/slide-2.jpg', '/images/slider/slide-3.jpg'];
                            slides.forEach((src, i)=>{
                                if(src){ prevImgs[i].src = src; prevImgs[i].style.display='block'; phs[i].style.display='none'; }
                            });
                        }catch(e){ /* ignore */ }
                    }

                    function save(partial){
                        const saved = JSON.parse(localStorage.getItem('projectsHeroSettings')||'{}');
                        const next = Object.assign({}, saved, partial||{}, {
                            title: inputs.title.value,
                            subtitle: inputs.subtitle.value,
                            description: inputs.desc.value,
                            primaryText: inputs.pText.value,
                            primaryLink: inputs.pLink.value,
                            secondaryText: inputs.sText.value,
                            secondaryLink: inputs.sLink.value
                        });
                        localStorage.setItem('projectsHeroSettings', JSON.stringify(next));
                        window.dispatchEvent(new StorageEvent('storage', {key:'projectsHeroSettings', newValue: JSON.stringify(next)}));
                    }

                    function wireFile(i){
                        const input = fileInputs[i];
                        input?.addEventListener('change', (e)=>{
                            const f = e.target.files && e.target.files[0];
                            if(!f) return;
                            const url = URL.createObjectURL(f);
                            prevImgs[i].src = url; prevImgs[i].style.display='block'; phs[i].style.display='none';
                            const reader = new FileReader();
                            reader.onload = ()=>{
                                const saved = JSON.parse(localStorage.getItem('projectsHeroSettings')||'{}');
                                const slides = Array.isArray(saved.slides)? saved.slides: [];
                                slides[i] = reader.result;
                                save({slides});
                                URL.revokeObjectURL(url);
                            };
                            reader.readAsDataURL(f);
                        });
                    }

                    document.getElementById('saveProjectsHeroBtn').addEventListener('click', ()=> save());
                    document.getElementById('resetProjectsHeroBtn').addEventListener('click', ()=>{
                        localStorage.removeItem('projectsHeroSettings');
                        [inputs.title, inputs.subtitle, inputs.desc, inputs.pText, inputs.pLink, inputs.sText, inputs.sLink].forEach(i=> i.value='');
                        prevImgs.forEach((img, i)=>{ img.src=''; img.style.display='none'; phs[i].style.display='block'; });
                        window.dispatchEvent(new StorageEvent('storage', {key:'projectsHeroSettings', newValue: null}));
                    });

                    [inputs.title, inputs.subtitle, inputs.desc, inputs.pText, inputs.pLink, inputs.sText, inputs.sLink].forEach(inp=>{
                        inp.addEventListener('input', ()=> save());
                    });
                    for(let i=0;i<3;i++) wireFile(i);
                    load();
                })();
            </script>
        </div>
    </div>
    <div id="projects-slogan" style="margin-top:1rem;">
        <div class="table-card">
            <h2>স্লোগান</h2>
            <p style="color:#6b7280;">প্রকল্প স্লোগান কনফিগারেশন।</p>
            <div class="form-group" style="margin-bottom:16px;">
                <label style="display:block; margin-bottom:4px; font-weight:500;">স্লোগান টেক্সট</label>
                <input type="text" id="sloganText" placeholder="আপনার স্বপ্নের বাড়ি" style="width:100%; padding:8px 12px; border:1px solid #d1d5db; border-radius:6px;">
            </div>
            <div style="display:flex; gap:10px;">
                <button id="saveSloganBtn" class="btn btn-primary">সেভ</button>
                <button id="resetSloganBtn" class="btn btn-secondary">রিসেট</button>
            </div>
            <script>
                (function(){
                    const input = document.getElementById('sloganText');
                    function load(){
                        try{
                            const saved = JSON.parse(localStorage.getItem('sloganSettings') || '{}');
                            input.value = saved.text || '';
                        } catch(e) {}
                    }
                    function save(){
                        const payload = { text: input.value };
                        localStorage.setItem('sloganSettings', JSON.stringify(payload));
                        window.dispatchEvent(new StorageEvent('storage', {key:'sloganSettings', newValue: JSON.stringify(payload)}));
                    }
                    document.getElementById('saveSloganBtn').addEventListener('click', save);
                    document.getElementById('resetSloganBtn').addEventListener('click', () => {
                        localStorage.removeItem('sloganSettings');
                        input.value = '';
                        window.dispatchEvent(new StorageEvent('storage', {key:'sloganSettings', newValue: null}));
                    });
                    input.addEventListener('input', save);
                    load();
                })();
            </script>
        </div>
    </div>
    <div id="projects-our" style="margin-top:1rem;">
        <div class="table-card">
            <h2>আমাদের প্রজেক্টসমূহ</h2>
            <p style="color:#6b7280;">আমাদের প্রজেক্টসমূহের তালিকা/ম্যানেজমেন্ট।</p>
            <style>
                #projects-our .form-group { margin-bottom: 16px; }
                #projects-our .form-group label { display: block; margin-bottom: 4px; font-weight: 500; }
                #projects-our .form-group input,
                #projects-our .form-group textarea { width: 100%; padding: 8px 12px; border: 1px solid #d1d5db; border-radius: 6px; }
                #projects-our .plots-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; }
                #projects-our .plot-item { border: 1px solid #e5e7eb; padding: 12px; border-radius: 8px; }
                #projects-our .amenities-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 8px; }
                #projects-our .amenity-item { display: flex; align-items: center; gap: 8px; }
            </style>
            <div>
                <div class="form-group">
                    <label>অফার শিরোনাম</label>
                    <input type="text" id="ourOfferTitle" placeholder="বেছে নিন আপনার পছন্দের প্লট">
                </div>
                <div class="form-group">
                    <label>প্লট সমূহ</label>
                    <div class="plots-grid">
                        <div class="plot-item">
                            <input type="text" id="plotSize1" placeholder="৮ কাঠা">
                            <input type="text" id="plotCat1" placeholder="প্রিমিয়াম প্লট" style="margin-top:8px;">
                        </div>
                        <div class="plot-item">
                            <input type="text" id="plotSize2" placeholder="১০ কাঠা">
                            <input type="text" id="plotCat2" placeholder="ডিলাক্স প্লট" style="margin-top:8px;">
                        </div>
                        <div class="plot-item">
                            <input type="text" id="plotSize3" placeholder="৩০ কাঠা">
                            <input type="text" id="plotCat3" placeholder="এক্সিকিউটিভ প্লট" style="margin-top:8px;">
                        </div>
                        <div class="plot-item">
                            <input type="text" id="plotSize4" placeholder="২০ কাঠা">
                            <input type="text" id="plotCat4" placeholder="কর্পোরেট প্লট" style="margin-top:8px;">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>সুবিধা সমূহ</label>
                    <div class="amenities-grid">
                        <div class="amenity-item">
                            <input type="text" id="amenity1" placeholder="ক্লাব হাউজ">
                        </div>
                        <div class="amenity-item">
                            <input type="text" id="amenity2" placeholder="জিম">
                        </div>
                        <div class="amenity-item">
                            <input type="text" id="amenity3" placeholder="মসজিদ">
                        </div>
                        <div class="amenity-item">
                            <input type="text" id="amenity4" placeholder="শপিং এরিয়া">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>ফুটার নোট</label>
                    <textarea id="ourFooterNote" rows="3" placeholder="সবুজ প্রকৃতি..."></textarea>
                </div>
                <div class="form-group">
                    <label>CTA বার</label>
                    <input type="text" id="ourCtaBar" placeholder="📞 এখনই যোগাযোগ করুন — সীমিত সময়ের অফার">
                </div>
                <div class="form-group">
                    <label>ম্যাপ ইমেজ</label>
                    <input type="file" id="ourMapImage" accept="image/*">
                    <div id="ourMapPreview" style="margin-top:8px; max-width:200px;"></div>
                </div>
                <div style="margin-top:16px; display:flex; gap:10px;">
                    <button id="saveOurProjectsBtn" class="btn btn-primary">সেভ</button>
                    <button id="resetOurProjectsBtn" class="btn btn-secondary">রিসেট</button>
                </div>
            </div>
            <script>
                (function(){
                    const inputs = {
                        offerTitle: document.getElementById('ourOfferTitle'),
                        plots: [
                            {size: document.getElementById('plotSize1'), cat: document.getElementById('plotCat1')},
                            {size: document.getElementById('plotSize2'), cat: document.getElementById('plotCat2')},
                            {size: document.getElementById('plotSize3'), cat: document.getElementById('plotCat3')},
                            {size: document.getElementById('plotSize4'), cat: document.getElementById('plotCat4')}
                        ],
                        amenities: [
                            document.getElementById('amenity1'),
                            document.getElementById('amenity2'),
                            document.getElementById('amenity3'),
                            document.getElementById('amenity4')
                        ],
                        footerNote: document.getElementById('ourFooterNote'),
                        ctaBar: document.getElementById('ourCtaBar'),
                        mapImage: document.getElementById('ourMapImage'),
                        mapPreview: document.getElementById('ourMapPreview')
                    };

                    function load(){
                        try{
                            const saved = JSON.parse(localStorage.getItem('ourProjectsSettings') || '{}');
                            inputs.offerTitle.value = saved.offerTitle || '';
                            inputs.plots.forEach((p, i) => {
                                const plot = saved.plots?.[i] || {};
                                p.size.value = plot.size || '';
                                p.cat.value = plot.cat || '';
                            });
                            inputs.amenities.forEach((a, i) => {
                                a.value = saved.amenities?.[i] || '';
                            });
                            inputs.footerNote.value = saved.footerNote || '';
                            inputs.ctaBar.value = saved.ctaBar || '';
                            if (saved.mapImage) {
                                inputs.mapPreview.innerHTML = `<img src="${saved.mapImage}" style="max-width:100%;">`;
                            }
                        } catch(e) {}
                    }

                    function save(){
                        const payload = {
                            offerTitle: inputs.offerTitle.value,
                            plots: inputs.plots.map(p => ({size: p.size.value, cat: p.cat.value})),
                            amenities: inputs.amenities.map(a => a.value),
                            footerNote: inputs.footerNote.value,
                            ctaBar: inputs.ctaBar.value,
                            mapImage: inputs.mapPreview.querySelector('img')?.src || ''
                        };
                        localStorage.setItem('ourProjectsSettings', JSON.stringify(payload));
                        window.dispatchEvent(new StorageEvent('storage', {key:'ourProjectsSettings', newValue: JSON.stringify(payload)}));
                    }

                    inputs.mapImage.addEventListener('change', (e) => {
                        const file = e.target.files[0];
                        if (file) {
                            const reader = new FileReader();
                            reader.onload = () => {
                                inputs.mapPreview.innerHTML = `<img src="${reader.result}" style="max-width:100%;">`;
                                save();
                            };
                            reader.readAsDataURL(file);
                        }
                    });

                    document.getElementById('saveOurProjectsBtn').addEventListener('click', save);
                    document.getElementById('resetOurProjectsBtn').addEventListener('click', () => {
                        localStorage.removeItem('ourProjectsSettings');
                        inputs.offerTitle.value = '';
                        inputs.plots.forEach(p => { p.size.value = ''; p.cat.value = ''; });
                        inputs.amenities.forEach(a => a.value = '');
                        inputs.footerNote.value = '';
                        inputs.ctaBar.value = '';
                        inputs.mapPreview.innerHTML = '';
                        window.dispatchEvent(new StorageEvent('storage', {key:'ourProjectsSettings', newValue: null}));
                    });

                    // Auto save on input
                    [inputs.offerTitle, inputs.footerNote, inputs.ctaBar, ...inputs.plots.flatMap(p => [p.size, p.cat]), ...inputs.amenities].forEach(el => {
                        el.addEventListener('input', save);
                    });

                    load();
                })();
            </script>
        </div>
    </div>
    <div id="projects-other" style="margin-top:1rem;">
        <div class="table-card">
            <h2>অন্যান্য প্রজেক্টসমূহ</h2>
            <p style="color:#6b7280;">অন্যান্য প্রজেক্টসমূহের তালিকা/ম্যানেজমেন্ট।</p>
            <style>
                #projects-other .projects-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; }
                #projects-other .project-card-editor { border: 1px solid #e5e7eb; padding: 12px; border-radius: 8px; }
                #projects-other .project-card-editor h4 { margin: 0 0 8px; }
                #projects-other .form-group { margin-bottom: 8px; }
                #projects-other .form-group label { display: block; margin-bottom: 2px; font-size: 14px; }
                #projects-other .form-group input,
                #projects-other .form-group textarea { width: 100%; padding: 6px 8px; border: 1px solid #d1d5db; border-radius: 4px; }
                #projects-other .form-group textarea { min-height: 60px; }
            </style>
            <div>
                <div class="form-group">
                    <label>সেকশন শিরোনাম</label>
                    <input type="text" id="otherSectionTitle" placeholder="অন্যান্য প্রকল্প">
                </div>
                <div class="form-group">
                    <label>সেকশন সাব-শিরোনাম</label>
                    <input type="text" id="otherSectionSubtitle" placeholder="NEX Real Estate-এর সফল প্রকল্পগুলো দেখুন">
                </div>
                <div class="projects-grid">
                    <div class="project-card-editor">
                        <h4>প্রকল্প ১</h4>
                        <div class="form-group">
                            <label>ইমেজ (ইমোজি বা URL)</label>
                            <input type="text" id="otherProj1Image" placeholder="🏙️">
                        </div>
                        <div class="form-group">
                            <label>শিরোনাম</label>
                            <input type="text" id="otherProj1Title" placeholder="শান্তি নিবাস">
                        </div>
                        <div class="form-group">
                            <label>বিবরণ</label>
                            <textarea id="otherProj1Desc" placeholder="শহরের ঠিক মাঝে..."></textarea>
                        </div>
                        <div class="form-group">
                            <label>বাটন টেক্সট</label>
                            <input type="text" id="otherProj1BtnText" placeholder="বিস্তারিত জানুন">
                        </div>
                        <div class="form-group">
                            <label>বাটন লিংক</label>
                            <input type="text" id="otherProj1BtnLink" placeholder="#contact">
                        </div>
                    </div>
                    <div class="project-card-editor">
                        <h4>প্রকল্প ২</h4>
                        <div class="form-group">
                            <label>ইমেজ (ইমোজি বা URL)</label>
                            <input type="text" id="otherProj2Image" placeholder="🏡">
                        </div>
                        <div class="form-group">
                            <label>শিরোনাম</label>
                            <input type="text" id="otherProj2Title" placeholder="সবুজ ভিটা">
                        </div>
                        <div class="form-group">
                            <label>বিবরণ</label>
                            <textarea id="otherProj2Desc" placeholder="নদীর একদম পাশে..."></textarea>
                        </div>
                        <div class="form-group">
                            <label>বাটন টেক্সট</label>
                            <input type="text" id="otherProj2BtnText" placeholder="বিস্তারিত জানুন">
                        </div>
                        <div class="form-group">
                            <label>বাটন লিংক</label>
                            <input type="text" id="otherProj2BtnLink" placeholder="#contact">
                        </div>
                    </div>
                    <div class="project-card-editor">
                        <h4>প্রকল্প ৩</h4>
                        <div class="form-group">
                            <label>ইমেজ (ইমোজি বা URL)</label>
                            <input type="text" id="otherProj3Image" placeholder="🏢">
                        </div>
                        <div class="form-group">
                            <label>শিরোনাম</label>
                            <input type="text" id="otherProj3Title" placeholder="প্রত্যাশা টাওয়ার">
                        </div>
                        <div class="form-group">
                            <label>বিবরণ</label>
                            <textarea id="otherProj3Desc" placeholder="খুলনার সেরা লোকেশনে..."></textarea>
                        </div>
                        <div class="form-group">
                            <label>বাটন টেক্সট</label>
                            <input type="text" id="otherProj3BtnText" placeholder="বিস্তারিত জানুন">
                        </div>
                        <div class="form-group">
                            <label>বাটন লিংক</label>
                            <input type="text" id="otherProj3BtnLink" placeholder="#contact">
                        </div>
                    </div>
                    <div class="project-card-editor">
                        <h4>প্রকল্প ৪</h4>
                        <div class="form-group">
                            <label>ইমেজ (ইমোজি বা URL)</label>
                            <input type="text" id="otherProj4Image" placeholder="🏗️">
                        </div>
                        <div class="form-group">
                            <label>শিরোনাম</label>
                            <input type="text" id="otherProj4Title" placeholder="নির্মাণ প্লাজা">
                        </div>
                        <div class="form-group">
                            <label>বিবরণ</label>
                            <textarea id="otherProj4Desc" placeholder="ব্যস্ত শহরের কেন্দ্রে..."></textarea>
                        </div>
                        <div class="form-group">
                            <label>বাটন টেক্সট</label>
                            <input type="text" id="otherProj4BtnText" placeholder="বিস্তারিত জানুন">
                        </div>
                        <div class="form-group">
                            <label>বাটন লিংক</label>
                            <input type="text" id="otherProj4BtnLink" placeholder="#contact">
                        </div>
                    </div>
                </div>
                <div style="margin-top:16px; display:flex; gap:10px;">
                    <button id="saveOtherProjectsBtn" class="btn btn-primary">সেভ</button>
                    <button id="resetOtherProjectsBtn" class="btn btn-secondary">রিসেট</button>
                </div>
            </div>
            <script>
                (function(){
                    const inputs = {
                        sectionTitle: document.getElementById('otherSectionTitle'),
                        sectionSubtitle: document.getElementById('otherSectionSubtitle'),
                        projects: [
                            {
                                image: document.getElementById('otherProj1Image'),
                                title: document.getElementById('otherProj1Title'),
                                desc: document.getElementById('otherProj1Desc'),
                                btnText: document.getElementById('otherProj1BtnText'),
                                btnLink: document.getElementById('otherProj1BtnLink')
                            },
                            {
                                image: document.getElementById('otherProj2Image'),
                                title: document.getElementById('otherProj2Title'),
                                desc: document.getElementById('otherProj2Desc'),
                                btnText: document.getElementById('otherProj2BtnText'),
                                btnLink: document.getElementById('otherProj2BtnLink')
                            },
                            {
                                image: document.getElementById('otherProj3Image'),
                                title: document.getElementById('otherProj3Title'),
                                desc: document.getElementById('otherProj3Desc'),
                                btnText: document.getElementById('otherProj3BtnText'),
                                btnLink: document.getElementById('otherProj3BtnLink')
                            },
                            {
                                image: document.getElementById('otherProj4Image'),
                                title: document.getElementById('otherProj4Title'),
                                desc: document.getElementById('otherProj4Desc'),
                                btnText: document.getElementById('otherProj4BtnText'),
                                btnLink: document.getElementById('otherProj4BtnLink')
                            }
                        ]
                    };

                    function load(){
                        try{
                            const saved = JSON.parse(localStorage.getItem('otherProjectsSettings') || '{}');
                            inputs.sectionTitle.value = saved.sectionTitle || '';
                            inputs.sectionSubtitle.value = saved.sectionSubtitle || '';
                            inputs.projects.forEach((p, i) => {
                                const proj = saved.projects?.[i] || {};
                                p.image.value = proj.image || '';
                                p.title.value = proj.title || '';
                                p.desc.value = proj.desc || '';
                                p.btnText.value = proj.btnText || '';
                                p.btnLink.value = proj.btnLink || '';
                            });
                        } catch(e) {}
                    }

                    function save(){
                        const payload = {
                            sectionTitle: inputs.sectionTitle.value,
                            sectionSubtitle: inputs.sectionSubtitle.value,
                            projects: inputs.projects.map(p => ({
                                image: p.image.value,
                                title: p.title.value,
                                desc: p.desc.value,
                                btnText: p.btnText.value,
                                btnLink: p.btnLink.value
                            }))
                        };
                        localStorage.setItem('otherProjectsSettings', JSON.stringify(payload));
                        window.dispatchEvent(new StorageEvent('storage', {key:'otherProjectsSettings', newValue: JSON.stringify(payload)}));
                    }

                    document.getElementById('saveOtherProjectsBtn').addEventListener('click', save);
                    document.getElementById('resetOtherProjectsBtn').addEventListener('click', () => {
                        localStorage.removeItem('otherProjectsSettings');
                        inputs.sectionTitle.value = '';
                        inputs.sectionSubtitle.value = '';
                        inputs.projects.forEach(p => {
                            p.image.value = '';
                            p.title.value = '';
                            p.desc.value = '';
                            p.btnText.value = '';
                            p.btnLink.value = '';
                        });
                        window.dispatchEvent(new StorageEvent('storage', {key:'otherProjectsSettings', newValue: null}));
                    });

                    // Auto save on input
                    [inputs.sectionTitle, inputs.sectionSubtitle, ...inputs.projects.flatMap(p => [p.image, p.title, p.desc, p.btnText, p.btnLink])].forEach(el => {
                        el.addEventListener('input', save);
                    });

                    load();
                })();
            </script>
        </div>
    </div>
</div>
