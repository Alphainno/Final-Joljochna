<div id="home" class="tab-content">
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-card-content">
                <div class="stat-info">
                    <h3>হোম</h3>
                    <div class="subtitle">ড্যাশবোর্ডের হোম সেকশন</div>
                </div>
                <div class="stat-icon blue">🏠</div>
            </div>
        </div>
    </div>
    <div id="home-features" style="margin-top:1rem;">
        <div class="table-card">
            <h2>আমাদের সুবিধা সমূহ</h2>
            <style>
                #home-features .features-form input[type="text"],
                #home-features .features-form textarea { height: 46px; padding:10px 12px; font-size:15px; border-radius:10px; }
                #home-features .features-grid-editor { display:grid; grid-template-columns:repeat(3,1fr); gap:12px; }
                #home-features .card-editor { border:1px solid #e5e7eb; border-radius:12px; padding:12px; background:#fafafa }
                #home-features .card-editor h4 { margin:0 0 8px; font-size:14px }
                @media (max-width: 960px){ #home-features .features-grid-editor{ grid-template-columns:1fr } }
            </style>
            <div class="features-form">
                <div class="features-grid-editor">
                    <div class="card-editor">
                        <h4>কার্ড ১</h4>
                        <input type="text" id="featIcon1" placeholder="আইকন (যেমন: 🏘️)" />
                        <input type="text" id="featTitle1" placeholder="শিরোনাম" style="margin-top:8px;" />
                        <input type="text" id="featDesc1" placeholder="বিবরণ" style="margin-top:8px;" />
                    </div>
                    <div class="card-editor">
                        <h4>কার্ড ২</h4>
                        <input type="text" id="featIcon2" placeholder="আইকন (যেমন: 📋)" />
                        <input type="text" id="featTitle2" placeholder="শিরোনাম" style="margin-top:8px;" />
                        <input type="text" id="featDesc2" placeholder="বিবরণ" style="margin-top:8px;" />
                    </div>
                    <div class="card-editor">
                        <h4>কার্ড ৩</h4>
                        <input type="text" id="featIcon3" placeholder="আইকন (যেমন: 🎯)" />
                        <input type="text" id="featTitle3" placeholder="শিরোনাম" style="margin-top:8px;" />
                        <input type="text" id="featDesc3" placeholder="বিবরণ" style="margin-top:8px;" />
                    </div>
                    <div class="card-editor">
                        <h4>কার্ড ৪</h4>
                        <input type="text" id="featIcon4" placeholder="আইকন (যেমন: ✅)" />
                        <input type="text" id="featTitle4" placeholder="শিরোনাম" style="margin-top:8px;" />
                        <input type="text" id="featDesc4" placeholder="বিবরণ" style="margin-top:8px;" />
                    </div>
                    <div class="card-editor">
                        <h4>কার্ড ৫</h4>
                        <input type="text" id="featIcon5" placeholder="আইকন (যেমন: 🚗)" />
                        <input type="text" id="featTitle5" placeholder="শিরোনাম" style="margin-top:8px;" />
                        <input type="text" id="featDesc5" placeholder="বিবরণ" style="margin-top:8px;" />
                    </div>
                    <div class="card-editor">
                        <h4>কার্ড ৬</h4>
                        <input type="text" id="featIcon6" placeholder="আইকন (যেমন: 🌳)" />
                        <input type="text" id="featTitle6" placeholder="শিরোনাম" style="margin-top:8px;" />
                        <input type="text" id="featDesc6" placeholder="বিবরণ" style="margin-top:8px;" />
                    </div>
                </div>
                <div style="margin-top:14px; display:flex; gap:10px;">
                    <button id="saveFeaturesBtn" class="btn btn-primary" type="button">সেভ</button>
                    <button id="resetFeaturesBtn" class="btn btn-secondary" type="button">রিসেট</button>
                </div>
            </div>
            <script>
                (function(){
                    const ids = ['1','2','3','4','5','6'];
                    const getInputs = () => ids.map(i=>({
                        icon: document.getElementById('featIcon'+i),
                        title: document.getElementById('featTitle'+i),
                        desc: document.getElementById('featDesc'+i)
                    }));
                    function load(){
                        try{
                            const saved = JSON.parse(localStorage.getItem('featuresSettings')||'{}');
                            const items = Array.isArray(saved.items)? saved.items: [];
                            const inputs = getInputs();
                            inputs.forEach((g, idx)=>{
                                const it = items[idx] || {};
                                g.icon.value = it.icon || '';
                                g.title.value = it.title || '';
                                g.desc.value  = it.desc  || '';
                            });
                        }catch(e){}
                    }
                    function save(){
                        const inputs = getInputs();
                        const items = inputs.map(g=>({icon:g.icon.value, title:g.title.value, desc:g.desc.value}));
                        const payload = { items };
                        localStorage.setItem('featuresSettings', JSON.stringify(payload));
                        window.dispatchEvent(new StorageEvent('storage', {key:'featuresSettings', newValue: JSON.stringify(payload)}));
                    }
                    document.getElementById('saveFeaturesBtn').addEventListener('click', save);
                    document.getElementById('resetFeaturesBtn').addEventListener('click', ()=>{
                        localStorage.removeItem('featuresSettings');
                        getInputs().forEach(g=>{ g.icon.value=''; g.title.value=''; g.desc.value=''; });
                        window.dispatchEvent(new StorageEvent('storage', {key:'featuresSettings', newValue: null}));
                    });
                    getInputs().forEach(g=>{ ['input','change'].forEach(evt=>{
                        g.icon.addEventListener(evt, save); g.title.addEventListener(evt, save); g.desc.addEventListener(evt, save);
                    }); });
                    load();
                })();
            </script>
        </div>
    </div>

    <div id="home-hero" style="margin-top:1rem;">
        <div class="table-card">
            <h2>হির সেকশন</h2>
            <style>
                #home-hero .table-card input[type="text"],
                #home-hero .table-card input[type="url"],
                #home-hero .table-card select {
                    height: 48px;
                    padding: 10px 12px;
                    font-size: 16px;
                    border-radius: 10px;
                }
                #home-hero .table-card textarea {
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
                        <input type="text" id="heroTitleInput" placeholder="হিরো শিরোনাম">
                    </div>
                    <div class="form-group">
                        <label>সাব-শিরোনাম</label>
                        <input type="text" id="heroSubtitleInput" placeholder="সাব-শিরোনাম">
                    </div>
                    <div class="form-row" style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">
                        <div class="form-group">
                            <label>প্রাইমারি বাটন টেক্সট</label>
                            <input type="text" id="heroPrimaryTextInput" placeholder="মূল্য দেখুন">
                        </div>
                        <div class="form-group">
                            <label>প্রাইমারি বাটন লিংক</label>
                            <input type="text" id="heroPrimaryLinkInput" placeholder="#pricing">
                        </div>
                        <div class="form-group">
                            <label>সেকেন্ডারি বাটন টেক্সট</label>
                            <input type="text" id="heroSecondaryTextInput" placeholder="যোগাযোগ করুন">
                        </div>
                        <div class="form-group">
                            <label>সেকেন্ডারি বাটন লিংক</label>
                            <input type="text" id="heroSecondaryLinkInput" placeholder="#contact">
                        </div>
                    </div>
                </div>
                <div>
                    <label style="display:block; margin-bottom:6px;">স্লাইড ইমেজ (৩টি)</label>
                    <div class="slides-upload" style="display:grid; grid-template-columns:repeat(3,1fr); gap:12px;">
                        <div>
                            <div style="border:1px dashed #cbd5e1; border-radius:10px; overflow:hidden; aspect-ratio:16/9; background:#f8fafc; display:flex; align-items:center; justify-content:center;">
                                <img id="heroSlidePrev1" alt="Slide 1" style="max-width:100%; max-height:100%; display:none;" />
                                <span id="heroSlidePh1" style="color:#94a3b8;">Slide 1</span>
                            </div>
                            <input type="file" id="heroSlideInput1" accept="image/*" style="margin-top:6px;">
                        </div>
                        <div>
                            <div style="border:1px dashed #cbd5e1; border-radius:10px; overflow:hidden; aspect-ratio:16/9; background:#f8fafc; display:flex; align-items:center; justify-content:center;">
                                <img id="heroSlidePrev2" alt="Slide 2" style="max-width:100%; max-height:100%; display:none;" />
                                <span id="heroSlidePh2" style="color:#94a3b8;">Slide 2</span>
                            </div>
                            <input type="file" id="heroSlideInput2" accept="image/*" style="margin-top:6px;">
                        </div>
                        <div>
                            <div style="border:1px dashed #cbd5e1; border-radius:10px; overflow:hidden; aspect-ratio:16/9; background:#f8fafc; display:flex; align-items:center; justify-content:center;">
                                <img id="heroSlidePrev3" alt="Slide 3" style="max-width:100%; max-height:100%; display:none;" />
                                <span id="heroSlidePh3" style="color:#94a3b8;">Slide 3</span>
                            </div>
                            <input type="file" id="heroSlideInput3" accept="image/*" style="margin-top:6px;">
                        </div>
                    </div>
                </div>
                <div style="margin-top:14px; display:flex; gap:10px;">
                    <button id="saveHeroBtn" class="btn btn-primary" type="button">সেভ</button>
                    <button id="resetHeroBtn" class="btn btn-secondary" type="button">রিসেট</button>
                </div>
            </div>
            <script>
                (function(){
                    const qs = id => document.getElementById(id);
                    const inputs = {
                        title: qs('heroTitleInput'),
                        subtitle: qs('heroSubtitleInput'),
                        pText: qs('heroPrimaryTextInput'),
                        pLink: qs('heroPrimaryLinkInput'),
                        sText: qs('heroSecondaryTextInput'),
                        sLink: qs('heroSecondaryLinkInput')
                    };
                    const fileInputs = [qs('heroSlideInput1'), qs('heroSlideInput2'), qs('heroSlideInput3')];
                    const prevImgs = [qs('heroSlidePrev1'), qs('heroSlidePrev2'), qs('heroSlidePrev3')];
                    const phs = [qs('heroSlidePh1'), qs('heroSlidePh2'), qs('heroSlidePh3')];

                    function load(){
                        try{
                            const saved = JSON.parse(localStorage.getItem('heroSettings')||'{}');
                            if(saved.title) inputs.title.value = saved.title; else inputs.title.value='';
                            if(saved.subtitle) inputs.subtitle.value = saved.subtitle; else inputs.subtitle.value='';
                            if(saved.primaryText) inputs.pText.value = saved.primaryText; else inputs.pText.value='';
                            if(saved.primaryLink) inputs.pLink.value = saved.primaryLink; else inputs.pLink.value='';
                            if(saved.secondaryText) inputs.sText.value = saved.secondaryText; else inputs.sText.value='';
                            if(saved.secondaryLink) inputs.sLink.value = saved.secondaryLink; else inputs.sLink.value='';
                            const slides = Array.isArray(saved.slides)? saved.slides: [];
                            slides.forEach((src, i)=>{
                                if(src){ prevImgs[i].src = src; prevImgs[i].style.display='block'; phs[i].style.display='none'; }
                            });
                        }catch(e){ /* ignore */ }
                    }

                    function save(partial){
                        const saved = JSON.parse(localStorage.getItem('heroSettings')||'{}');
                        const next = Object.assign({}, saved, partial||{}, {
                            title: inputs.title.value,
                            subtitle: inputs.subtitle.value,
                            primaryText: inputs.pText.value,
                            primaryLink: inputs.pLink.value,
                            secondaryText: inputs.sText.value,
                            secondaryLink: inputs.sLink.value
                        });
                        localStorage.setItem('heroSettings', JSON.stringify(next));
                        window.dispatchEvent(new StorageEvent('storage', {key:'heroSettings', newValue: JSON.stringify(next)}));
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
                                const saved = JSON.parse(localStorage.getItem('heroSettings')||'{}');
                                const slides = Array.isArray(saved.slides)? saved.slides: [];
                                slides[i] = reader.result;
                                save({slides});
                                URL.revokeObjectURL(url);
                            };
                            reader.readAsDataURL(f);
                        });
                    }

                    document.getElementById('saveHeroBtn').addEventListener('click', ()=> save());
                    document.getElementById('resetHeroBtn').addEventListener('click', ()=>{
                        localStorage.removeItem('heroSettings');
                        [inputs.title, inputs.subtitle, inputs.pText, inputs.pLink, inputs.sText, inputs.sLink].forEach(i=> i.value='');
                        prevImgs.forEach((img, i)=>{ img.src=''; img.style.display='none'; phs[i].style.display='block'; });
                        window.dispatchEvent(new StorageEvent('storage', {key:'heroSettings', newValue: null}));
                    });

                    [inputs.title, inputs.subtitle, inputs.pText, inputs.pLink, inputs.sText, inputs.sLink].forEach(inp=>{
                        inp.addEventListener('input', ()=> save());
                    });
                    for(let i=0;i<3;i++) wireFile(i);
                    load();
                })();
            </script>
        </div>
    </div>

    <div id="home-pricing" style="margin-top:1rem;">
        <div class="table-card">
            <h2>মূল্য তালিকা</h2>
            <style>
                #home-pricing .pricing-form input[type="text"] { height: 46px; padding:10px 12px; font-size:15px; border-radius:10px; }
                #home-pricing .pricing-grid-editor { display:grid; grid-template-columns:repeat(2,1fr); gap:12px; }
                #home-pricing .pricing-card-editor { border:1px solid #e5e7eb; border-radius:12px; padding:12px; background:#fafafa }
                #home-pricing .pricing-card-editor h4 { margin:0 0 8px; font-size:14px; font-weight:600; }
                @media (max-width: 960px){ #home-pricing .pricing-grid-editor{ grid-template-columns:1fr } }
            </style>
            <div class="pricing-form">
                <div class="pricing-grid-editor">
                    <!-- Pricing Plan 1 -->
                    <div class="pricing-card-editor">
                        <h4>প্ল্যান ১</h4>
                        <input type="text" id="priceTitle1" placeholder="শিরোনাম (যেমন: ২০ কুড়া মালা)" />
                        <input type="text" id="priceAmount1" placeholder="মূল্য (যেমন: ৮০,০০,০০০ টাকা)" style="margin-top:8px;" />
                        <input type="text" id="priceDown1" placeholder="ডাউন পেমেন্ট" style="margin-top:8px;" />
                        <input type="text" id="priceInst1_1" placeholder="কিস্তি ১" style="margin-top:8px;" />
                        <input type="text" id="priceInst1_2" placeholder="কিস্তি ২" style="margin-top:8px;" />
                        <input type="text" id="priceInst1_3" placeholder="কিস্তি ৩" style="margin-top:8px;" />
                        <input type="text" id="priceInst1_4" placeholder="কিস্তি ৪" style="margin-top:8px;" />
                        <input type="text" id="priceBtn1" placeholder="বাটন টেক্সট" style="margin-top:8px;" />
                        <input type="text" id="priceLink1" placeholder="বাটন লিংক" style="margin-top:8px;" />
                    </div>
                    <!-- Pricing Plan 2 -->
                    <div class="pricing-card-editor">
                        <h4>প্ল্যান ২</h4>
                        <input type="text" id="priceTitle2" placeholder="শিরোনাম" />
                        <input type="text" id="priceAmount2" placeholder="মূল্য" style="margin-top:8px;" />
                        <input type="text" id="priceDown2" placeholder="ডাউন পেমেন্ট" style="margin-top:8px;" />
                        <input type="text" id="priceInst2_1" placeholder="কিস্তি ১" style="margin-top:8px;" />
                        <input type="text" id="priceInst2_2" placeholder="কিস্তি ২" style="margin-top:8px;" />
                        <input type="text" id="priceInst2_3" placeholder="কিস্তি ৩" style="margin-top:8px;" />
                        <input type="text" id="priceInst2_4" placeholder="কিস্তি ৪" style="margin-top:8px;" />
                        <input type="text" id="priceBtn2" placeholder="বাটন টেক্সট" style="margin-top:8px;" />
                        <input type="text" id="priceLink2" placeholder="বাটন লিংক" style="margin-top:8px;" />
                    </div>
                    <!-- Pricing Plan 3 -->
                    <div class="pricing-card-editor">
                        <h4>প্ল্যান ৩</h4>
                        <input type="text" id="priceTitle3" placeholder="শিরোনাম" />
                        <input type="text" id="priceAmount3" placeholder="মূল্য" style="margin-top:8px;" />
                        <input type="text" id="priceDown3" placeholder="ডাউন পেমেন্ট" style="margin-top:8px;" />
                        <input type="text" id="priceInst3_1" placeholder="কিস্তি ১" style="margin-top:8px;" />
                        <input type="text" id="priceInst3_2" placeholder="কিস্তি ২" style="margin-top:8px;" />
                        <input type="text" id="priceInst3_3" placeholder="কিস্তি ৩" style="margin-top:8px;" />
                        <input type="text" id="priceInst3_4" placeholder="কিস্তি ৪" style="margin-top:8px;" />
                        <input type="text" id="priceBtn3" placeholder="বাটন টেক্সট" style="margin-top:8px;" />
                        <input type="text" id="priceLink3" placeholder="বাটন লিংক" style="margin-top:8px;" />
                    </div>
                    <!-- Pricing Plan 4 -->
                    <div class="pricing-card-editor">
                        <h4>প্ল্যান ৪</h4>
                        <input type="text" id="priceTitle4" placeholder="শিরোনাম" />
                        <input type="text" id="priceAmount4" placeholder="মূল্য" style="margin-top:8px;" />
                        <input type="text" id="priceDown4" placeholder="ডাউন পেমেন্ট" style="margin-top:8px;" />
                        <input type="text" id="priceInst4_1" placeholder="কিস্তি ১" style="margin-top:8px;" />
                        <input type="text" id="priceInst4_2" placeholder="কিস্তি ২" style="margin-top:8px;" />
                        <input type="text" id="priceInst4_3" placeholder="কিস্তি ৩" style="margin-top:8px;" />
                        <input type="text" id="priceInst4_4" placeholder="কিস্তি ৪" style="margin-top:8px;" />
                        <input type="text" id="priceBtn4" placeholder="বাটন টেক্সট" style="margin-top:8px;" />
                        <input type="text" id="priceLink4" placeholder="বাটন লিংক" style="margin-top:8px;" />
                    </div>
                    <!-- Pricing Plan 5 -->
                    <div class="pricing-card-editor">
                        <h4>প্ল্যান ৫</h4>
                        <input type="text" id="priceTitle5" placeholder="শিরোনাম" />
                        <input type="text" id="priceAmount5" placeholder="মূল্য" style="margin-top:8px;" />
                        <input type="text" id="priceDown5" placeholder="ডাউন পেমেন্ট" style="margin-top:8px;" />
                        <input type="text" id="priceInst5_1" placeholder="কিস্তি ১" style="margin-top:8px;" />
                        <input type="text" id="priceInst5_2" placeholder="কিস্তি ২" style="margin-top:8px;" />
                        <input type="text" id="priceInst5_3" placeholder="কিস্তি ৩" style="margin-top:8px;" />
                        <input type="text" id="priceInst5_4" placeholder="কিস্তি ৪" style="margin-top:8px;" />
                        <input type="text" id="priceBtn5" placeholder="বাটন টেক্সট" style="margin-top:8px;" />
                        <input type="text" id="priceLink5" placeholder="বাটন লিংক" style="margin-top:8px;" />
                    </div>
                </div>
                <div style="margin-top:14px; display:flex; gap:10px;">
                    <button id="savePricingBtn" class="btn btn-primary" type="button">সেভ</button>
                    <button id="resetPricingBtn" class="btn btn-secondary" type="button">রিসেট</button>
                </div>
            </div>
            <script>
                (function(){
                    const ids = ['1','2','3','4','5'];
                    const getInputs = () => ids.map(i=>({
                        title: document.getElementById('priceTitle'+i),
                        amount: document.getElementById('priceAmount'+i),
                        downPayment: document.getElementById('priceDown'+i),
                        installment1: document.getElementById('priceInst'+i+'_1'),
                        installment2: document.getElementById('priceInst'+i+'_2'),
                        installment3: document.getElementById('priceInst'+i+'_3'),
                        installment4: document.getElementById('priceInst'+i+'_4'),
                        buttonText: document.getElementById('priceBtn'+i),
                        buttonLink: document.getElementById('priceLink'+i)
                    }));
                    
                    function load(){
                        try{
                            const saved = JSON.parse(localStorage.getItem('pricingSettings')||'{}');
                            const items = Array.isArray(saved.items)? saved.items: [];
                            const inputs = getInputs();
                            inputs.forEach((g, idx)=>{
                                const it = items[idx] || {};
                                g.title.value = it.title || '';
                                g.amount.value = it.amount || '';
                                g.downPayment.value = it.downPayment || '';
                                g.installment1.value = it.installment1 || '';
                                g.installment2.value = it.installment2 || '';
                                g.installment3.value = it.installment3 || '';
                                g.installment4.value = it.installment4 || '';
                                g.buttonText.value = it.buttonText || '';
                                g.buttonLink.value = it.buttonLink || '';
                            });
                        }catch(e){}
                    }
                    
                    function save(){
                        const inputs = getInputs();
                        const items = inputs.map(g=>({
                            title: g.title.value,
                            amount: g.amount.value,
                            downPayment: g.downPayment.value,
                            installment1: g.installment1.value,
                            installment2: g.installment2.value,
                            installment3: g.installment3.value,
                            installment4: g.installment4.value,
                            buttonText: g.buttonText.value,
                            buttonLink: g.buttonLink.value
                        }));
                        const payload = { items };
                        localStorage.setItem('pricingSettings', JSON.stringify(payload));
                        console.log('Pricing saved:', payload);
                        window.dispatchEvent(new StorageEvent('storage', {key:'pricingSettings', newValue: JSON.stringify(payload)}));
                    }
                    
                    document.getElementById('savePricingBtn').addEventListener('click', ()=> {
                        save();
                        // Show success message
                        if(typeof alertUser === 'function') {
                            alertUser('সফল', 'মূল্য তালিকা সংরক্ষণ করা হয়েছে।');
                        } else {
                            alert('মূল্য তালিকা সংরক্ষণ করা হয়েছে।');
                        }
                    });
                    document.getElementById('resetPricingBtn').addEventListener('click', ()=>{
                        localStorage.removeItem('pricingSettings');
                        getInputs().forEach(g=>{ 
                            g.title.value=''; g.amount.value=''; g.downPayment.value='';
                            g.installment1.value=''; g.installment2.value=''; g.installment3.value=''; g.installment4.value='';
                            g.buttonText.value=''; g.buttonLink.value='';
                        });
                        window.dispatchEvent(new StorageEvent('storage', {key:'pricingSettings', newValue: null}));
                        if(typeof alertUser === 'function') {
                            alertUser('সফল', 'মূল্য তালিকা রিসেট করা হয়েছে।');
                        } else {
                            alert('মূল্য তালিকা রিসেট করা হয়েছে।');
                        }
                    });
                    
                    // Auto-save on input
                    getInputs().forEach(g=>{ 
                        ['input','change'].forEach(evt=>{
                            g.title.addEventListener(evt, save);
                            g.amount.addEventListener(evt, save);
                            g.downPayment.addEventListener(evt, save);
                            g.installment1.addEventListener(evt, save);
                            g.installment2.addEventListener(evt, save);
                            g.installment3.addEventListener(evt, save);
                            g.installment4.addEventListener(evt, save);
                            g.buttonText.addEventListener(evt, save);
                            g.buttonLink.addEventListener(evt, save);
                        });
                    });
                    
                    load();
                })();
            </script>
        </div>
    </div>

    <div id="home-testimonials" style="margin-top:1rem;">
        <div class="table-card">
            <h2>বিনিয়োগকারী মন্তব্য</h2>
            <style>
                #home-testimonials .testimonials-form input[type="text"],
                #home-testimonials .testimonials-form textarea { height: 46px; padding:10px 12px; font-size:15px; border-radius:10px; }
                #home-testimonials .testimonials-grid-editor { display:grid; grid-template-columns:repeat(2,1fr); gap:12px; }
                #home-testimonials .card-editor { border:1px solid #e5e7eb; border-radius:12px; padding:12px; background:#fafafa }
                #home-testimonials .card-editor h4 { margin:0 0 8px; font-size:14px }
                @media (max-width: 960px){ #home-testimonials .testimonials-grid-editor{ grid-template-columns:1fr } }
            </style>
            <div class="testimonials-form">
                <div class="testimonials-grid-editor">
                    <div class="card-editor">
                        <h4>মন্তব্য ১</h4>
                        <input type="text" id="testAvatar1" placeholder="অবতার (যেমন: FA)" />
                        <input type="text" id="testName1" placeholder="নাম" style="margin-top:8px;" />
                        <input type="text" id="testTitle1" placeholder="পদবি / অবস্থান" style="margin-top:8px;" />
                        <textarea id="testQuote1" placeholder="উক্তি" style="margin-top:8px;"></textarea>
                    </div>
                    <div class="card-editor">
                        <h4>মন্তব্য ২</h4>
                        <input type="text" id="testAvatar2" placeholder="অবতার (যেমন: JF)" />
                        <input type="text" id="testName2" placeholder="নাম" style="margin-top:8px;" />
                        <input type="text" id="testTitle2" placeholder="পদবি / অবস্থান" style="margin-top:8px;" />
                        <textarea id="testQuote2" placeholder="উক্তি" style="margin-top:8px;"></textarea>
                    </div>
                    <div class="card-editor">
                        <h4>মন্তব্য ৩</h4>
                        <input type="text" id="testAvatar3" placeholder="অবতার (যেমন: SR)" />
                        <input type="text" id="testName3" placeholder="নাম" style="margin-top:8px;" />
                        <input type="text" id="testTitle3" placeholder="পদবি / অবস্থান" style="margin-top:8px;" />
                        <textarea id="testQuote3" placeholder="উক্তি" style="margin-top:8px;"></textarea>
                    </div>
                    <div class="card-editor">
                        <h4>মন্তব্য ৪</h4>
                        <input type="text" id="testAvatar4" placeholder="অবতার (যেমন: AK)" />
                        <input type="text" id="testName4" placeholder="নাম" style="margin-top:8px;" />
                        <input type="text" id="testTitle4" placeholder="পদবি / অবস্থান" style="margin-top:8px;" />
                        <textarea id="testQuote4" placeholder="উক্তি" style="margin-top:8px;"></textarea>
                    </div>
                </div>
                <div style="margin-top:14px; display:flex; gap:10px;">
                    <button id="saveTestimonialsBtn" class="btn btn-primary" type="button">সেভ</button>
                    <button id="resetTestimonialsBtn" class="btn btn-secondary" type="button">রিসেট</button>
                </div>
            </div>
            <script>
                (function(){
                    const ids = ['1','2','3','4'];
                    const getInputs = () => ids.map(i=>({
                        avatar: document.getElementById('testAvatar'+i),
                        name: document.getElementById('testName'+i),
                        title: document.getElementById('testTitle'+i),
                        quote: document.getElementById('testQuote'+i)
                    }));
                    function load(){
                        try{
                            const saved = JSON.parse(localStorage.getItem('testimonialsSettings')||'{}');
                            const items = Array.isArray(saved.items)? saved.items: [];
                            const inputs = getInputs();
                            inputs.forEach((g, idx)=>{
                                const it = items[idx] || {};
                                g.avatar.value = it.avatar || '';
                                g.name.value = it.name || '';
                                g.title.value = it.title || '';
                                g.quote.value = it.quote || '';
                            });
                        }catch(e){}
                    }
                    function save(){
                        const inputs = getInputs();
                        const items = inputs.map(g=>({avatar:g.avatar.value, name:g.name.value, title:g.title.value, quote:g.quote.value}));
                        const payload = { items };
                        localStorage.setItem('testimonialsSettings', JSON.stringify(payload));
                        window.dispatchEvent(new StorageEvent('storage', {key:'testimonialsSettings', newValue: JSON.stringify(payload)}));
                    }
                    const saveBtn = document.getElementById('saveTestimonialsBtn');
                    const resetBtn = document.getElementById('resetTestimonialsBtn');
                    saveBtn && saveBtn.addEventListener('click', ()=>{ save(); if(typeof alertUser==='function'){ alertUser('সফল','মন্তব্যসমূহ সংরক্ষণ করা হয়েছে।'); } });
                    resetBtn && resetBtn.addEventListener('click', ()=>{
                        localStorage.removeItem('testimonialsSettings');
                        getInputs().forEach(g=>{ g.avatar.value=''; g.name.value=''; g.title.value=''; g.quote.value=''; });
                        window.dispatchEvent(new StorageEvent('storage', {key:'testimonialsSettings', newValue: null}));
                        if(typeof alertUser==='function'){ alertUser('সফল','মন্তব্যসমূহ রিসেট করা হয়েছে।'); }
                    });
                    // Auto-save on input
                    getInputs().forEach(g=>{ ['input','change'].forEach(evt=>{
                        g.avatar.addEventListener(evt, save);
                        g.name.addEventListener(evt, save);
                        g.title.addEventListener(evt, save);
                        g.quote.addEventListener(evt, save);
                    }); });
                    load();
                })();
            </script>
        </div>
    </div>

</div>
