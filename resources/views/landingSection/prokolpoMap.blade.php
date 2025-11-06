<style>
  body {
    background: linear-gradient(to right, #004d25, #006b33);
    font-family: 'Noto Sans Bengali', sans-serif;
    color: white;
    overflow-x: hidden;
  }

  .main-section {
    padding: 40px 15px;
  }

  /* ---------- CARD (LEFT OFFER) ---------- */
  .offer-card {
    background-color: #004e25;
    border: none;
    border-radius: 15px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    padding: 25px 20px;
    height: 100%;
  }

  .offer-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #ffd700;
    margin-bottom: 20px;
    text-align: center;
  }

  .plot-box {
    background-color: #125c38;
    color: #fff;
    border: 2px solid #f9b233;
    border-radius: 12px;
    padding: 10px;
    transition: transform 0.3s ease;
  }

  .plot-box:hover {
    transform: translateY(-5px);
  }

  .plot-size {
    font-size: 1.2rem;
    font-weight: 700;
    color: #ffcc33;
  }

  .category-label {
    background-color: #f9b233;
    color: #004d25;
    padding: 4px 10px;
    border-radius: 20px;
    font-weight: 700;
    font-size: 0.8rem;
    display: inline-block;
    margin-top: 5px;
  }

  .footer-note {
    margin-top: 20px;
    font-size: 0.9rem;
    line-height: 1.6;
    text-align: center;
  }

  .cta-bar {
    background-color: #ff8800;
    color: white;
    font-weight: 700;
    padding: 10px;
    margin-top: 20px;
    border-radius: 5px;
    font-size: 1rem;
    text-align: center;
  }

  /* ---------- RIGHT (MAP) ---------- */
.map-section {
  text-align: center;
  background: rgba(0, 0, 0, 0.15);
  border-radius: 15px;
  padding: 20px;
  height: 100%;
  overflow: hidden; /* ✅ keeps image inside rounded area */
}

.map-section img {
  width: 100%;
  height: 500px; /* ✅ fixed height */
  object-fit: cover; /* ✅ fills area without stretching */
  border-radius: 10px; /* ✅ rounded corners */
  border: 2px solid #ffc107; /* optional border */
  display: block;
}



  .map-title {
    font-size: 1.3rem;
    font-weight: 700;
    color: #ffd700;
    margin-bottom: 10px;
  }

  /* ---------- RESPONSIVE ---------- */
  @media (max-width: 992px) {
    .map-section {
      margin-top: 25px;
    }
  }
</style>

<div class="container main-section py-4 mb-4">
  <div class="row align-items-stretch">
    <!-- LEFT SIDE - OFFER DETAILS -->
    <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
      <div class="offer-card h-100">
        <h2 class="offer-title" id="prokolpoTitle">বেছে নিন আপনার পছন্দের প্লট</h2>

        <div class="row g-3 justify-content-center" id="prokolpoPlots">
          <div class="col-6">
            <div class="plot-box">
              <div class="plot-size">৮ কাঠা</div>
              <div class="category-label">প্রিমিয়াম প্লট</div>
            </div>
          </div>

          <div class="col-6">
            <div class="plot-box">
              <div class="plot-size">১০ কাঠা</div>
              <div class="category-label">ডিলাক্স প্লট</div>
            </div>
          </div>

          <div class="col-6">
            <div class="plot-box">
              <div class="plot-size">৩০ কাঠা</div>
              <div class="category-label">এক্সিকিউটিভ প্লট</div>
            </div>
          </div>

          <div class="col-6">
            <div class="plot-box">
              <div class="plot-size">২০ কাঠা</div>
              <div class="category-label">কর্পোরেট প্লট</div>
            </div>
          </div>
        </div>

        <div class="mt-3 text-center" id="prokolpoAmenities">
          <span class="category-label bg-success text-white">ক্লাব হাউজ</span>
          <span class="category-label bg-success text-white">জিম</span>
          <span class="category-label bg-success text-white">মসজিদ</span>
          <span class="category-label bg-success text-white">শপিং এরিয়া</span>
        </div>

        <div class="footer-note" id="prokolpoFooterNote">
          <p>
            সবুজ প্রকৃতি, নীরব কলকল ধারা আর নির্মল আবহাওয়া — এই জায়গাটি হতে পারে আপনার স্বপ্নের ঠিকানা!
            এখানে আছে আধুনিক রাস্তাঘাট, বিদ্যুৎ, পানি, গ্যাস, ও নিরাপত্তার নিশ্চয়তা।
          </p>
          <p>মূল্য বৃদ্ধির আগে, আজই বুকিং করুন।</p>
        </div>

        <div class="cta-bar" id="prokolpoCtaBar">
          📞 এখনই যোগাযোগ করুন — সীমিত সময়ের অফার
        </div>
      </div>
    </div>

    <!-- RIGHT SIDE - MAP -->
    <div class="col-lg-6 col-md-12">
      <div class="map-section h-100">
        <h3 class="map-title">প্রকল্পের রোডম্যাপ</h3>
        <img src="assets/images/realstate3.PNG" class="img-fluid object-fit-fill" alt="Project Map" id="prokolpoMapImage">
      </div>
    </div>
  </div>
</div>

<script>
(function(){
    const defaults = {
        offerTitle: 'বেছে নিন আপনার পছন্দের প্লট',
        plots: [
            {size: '৮ কাঠা', cat: 'প্রিমিয়াম প্লট'},
            {size: '১০ কাঠা', cat: 'ডিলাক্স প্লট'},
            {size: '৩০ কাঠা', cat: 'এক্সিকিউটিভ প্লট'},
            {size: '২০ কাঠা', cat: 'কর্পোরেট প্লট'}
        ],
        amenities: ['ক্লাব হাউজ', 'জিম', 'মসজিদ', 'শপিং এরিয়া'],
        footerNote: '<p>সবুজ প্রকৃতি, নীরব কলকল ধারা আর নির্মল আবহাওয়া — এই জায়গাটি হতে পারে আপনার স্বপ্নের ঠিকানা! এখানে আছে আধুনিক রাস্তাঘাট, বিদ্যুৎ, পানি, গ্যাস, ও নিরাপত্তার নিশ্চয়তা।</p><p>মূল্য বৃদ্ধির আগে, আজই বুকিং করুন।</p>',
        ctaBar: '📞 এখনই যোগাযোগ করুন — সীমিত সময়ের অফার',
        mapImage: 'assets/images/realstate3.PNG'
    };

    const el = {
        title: document.getElementById('prokolpoTitle'),
        plots: document.getElementById('prokolpoPlots'),
        amenities: document.getElementById('prokolpoAmenities'),
        footerNote: document.getElementById('prokolpoFooterNote'),
        ctaBar: document.getElementById('prokolpoCtaBar'),
        mapImage: document.getElementById('prokolpoMapImage')
    };

    function read(){
        try{ return JSON.parse(localStorage.getItem('ourProjectsSettings')||'{}'); }catch(e){ return {}; }
    }

    function apply(){
        const saved = read();
        const s = { ...defaults, ...saved };

        if (el.title) el.title.textContent = s.offerTitle;

        if (el.plots) {
            el.plots.innerHTML = s.plots.map(p => `
                <div class="col-6">
                    <div class="plot-box">
                        <div class="plot-size">${p.size}</div>
                        <div class="category-label">${p.cat}</div>
                    </div>
                </div>
            `).join('');
        }

        if (el.amenities) {
            el.amenities.innerHTML = s.amenities.map(a => `<span class="category-label bg-success text-white">${a}</span>`).join('');
        }

        if (el.footerNote) el.footerNote.innerHTML = s.footerNote;
        if (el.ctaBar) el.ctaBar.textContent = s.ctaBar;
        if (el.mapImage && s.mapImage) el.mapImage.src = s.mapImage;
    }

    apply();
    window.addEventListener('storage', (e)=>{ if(e.key==='ourProjectsSettings'){ apply(); } });
    let last = localStorage.getItem('ourProjectsSettings');
    setInterval(()=>{ const cur = localStorage.getItem('ourProjectsSettings'); if(cur!==last){ last=cur; apply(); } }, 1000);
})();
</script>
