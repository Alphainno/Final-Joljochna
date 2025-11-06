# Local Storage Implementation Documentation

## Overview
This application uses browser **localStorage** to cache all backend data on the frontend. This ensures that content, logos, images, and other data persist in the browser even when the backend changes, until you manually update them from the admin panel.

## How It Works

### Architecture
1. **Admin Panel**: When you save settings from the admin panel, data is stored in localStorage
2. **Frontend**: Each section reads from localStorage on page load and updates dynamically
3. **Live Updates**: Changes are reflected immediately across all open tabs using storage events
4. **Fallback Polling**: A 1-second interval checks for changes in case storage events don't fire

### Storage Keys
Each section uses a unique localStorage key:

| Section | localStorage Key | Description |
|---------|-----------------|-------------|
| Header | `headerSettings` | Navigation logo, menu labels, CTA button |
| Footer | `footerSettings` | Contact info, social links, QR code, legal links |
| Hero | `heroSettings` | Main banner title, subtitle, buttons, slider images |
| Features | `featuresSettings` | Feature cards with icons, titles, descriptions |
| Pricing | `pricingSettings` | Pricing plans with amounts and installments |
| Testimonials | `testimonialsSettings` | Customer testimonials with names and quotes |
| Contact | `contactSettings` | Contact information and form title |
| Our Projects | `ourProjectsSettings` | Project details, plots, amenities, map |
| Other Projects | `otherProjectsSettings` | Carousel projects with images, titles, descriptions |
| Slogan | `sloganSettings` | Simple slogan text |
| Projects Hero | `projectsHeroSettings` | Hero section for projects page with title, subtitle, description, buttons, slides |

## Data Structure

### 1. Header Settings (`headerSettings`)
```json
{
  "logoUrl": "https://example.com/logo.png",
  "logoDataUrl": "data:image/png;base64,...",
  "brandText": "জলজোছনা",
  "homeLabel": "হোম",
  "aboutLabel": "আমাদের সম্পর্কে",
  "featuresLabel": "সুবিধা",
  "pricingLabel": "মূল্য তালিকা",
  "testimonialsLabel": "মন্তব্য",
  "otherProjectsLabel": "অন্যান্য প্রকল্প",
  "contactLabel": "যোগাযোগ",
  "ctaText": "এখনই বুক করুন",
  "ctaHref": "#contact"
}
```

### 2. Footer Settings (`footerSettings`)
```json
{
  "footerTitle": "জলজোছনা",
  "footerDescription": "NEX Real Estate এর একটি প্রকল্প...",
  "phone1": "+880 1991 995 995",
  "phone2": "+880 1991 994 994",
  "email": "hello.nexup@gmail.com",
  "projectAddress": "শুভনূর ৩৮৮ বাড়ি...",
  "contactAddress": "NEX Real Estate, Century Trade Center...",
  "qlHomeLabel": "হোম",
  "qlHomeHref": "#home",
  "qlFeaturesLabel": "সুবিধাসমূহ",
  "qlFeaturesHref": "#features",
  "qlPricingLabel": "মূল্য তালিকা",
  "qlPricingHref": "#pricing",
  "qlContactLabel": "যোগাযোগ",
  "qlContactHref": "#contact",
  "qlGalleryLabel": "গ্যালারি",
  "qlGalleryHref": "#gallery",
  "legalPrivacyLabel": "গোপনীয়তা নীতি",
  "legalPrivacyHref": "#privacy",
  "legalTermsLabel": "সেবার শর্তাবলী",
  "legalTermsHref": "#terms",
  "socialFacebook": "https://facebook.com/...",
  "socialInstagram": "https://instagram.com/...",
  "socialTwitter": "https://twitter.com/...",
  "socialLinkedin": "https://linkedin.com/...",
  "socialYouTube": "https://youtube.com/...",
  "mapUrl": "https://maps.google.com/?q=...",
  "bottomText": "© ২০২৫ জলজোছনা। সর্বস্বত্ব সংরক্ষিত।",
  "qrDataUrl": "data:image/png;base64,...",
  "qrSectionTitle": "অবস্থান দেখুন",
  "mapButtonText": "গুগল ম্যাপে দেখুন"
}
```

### 3. Hero Settings (`heroSettings`)
```json
{
  "title": "মুল্য বুদ্ধির আগে",
  "subtitle": "বাড়ি বুকিং করুন",
  "description": "প্রকল্পের মূল্য তালিকা - বুকিং পরিমাণ: ১০,০০০ টাকা",
  "primaryText": "মূল্য দেখুন",
  "primaryLink": "#pricing",
  "secondaryText": "যোগাযোগ করুন",
  "secondaryLink": "#contact",
  "slides": [
    "/images/slider/slide-1.jpg",
    "/images/slider/slide-2.jpg",
    "/images/slider/slide-3.jpg"
  ]
}
```

### 4. Features Settings (`featuresSettings`)
```json
{
  "items": [
    {
      "icon": "🏘️",
      "title": "প্রিমিয়াম লোকেশন",
      "desc": "প্রকল্পের ঠিকানা: শুভনূর ৩৮৮ বাড়ি..."
    },
    {
      "icon": "📋",
      "title": "সহজ কিস্তি সুবিধা",
      "desc": "০৩, ০৫, ১০, ও ২০ কিস্তির সুবিধা..."
    }
    // ... up to 8 items
  ]
}
```

### 5. Pricing Settings (`pricingSettings`)
```json
{
  "items": [
    {
      "title": "২০ কুড়া মালা (২.৫ কাঠা)",
      "amount": "৮০,০০,০০০ টাকা",
      "downPayment": "০৩% ডাউন পেমেন্ট: ৩৫,০০০০০ টাকা",
      "installment1": "০৩ কিস্তি: ৪০,০০০০০ টাকা",
      "installment2": "০৫ কিস্তি: ৯,৪০,০০০০০ টাকা",
      "installment3": "১০ কিস্তি: ৯,৯৬,০০০০০ টাকা",
      "installment4": "২০ কিস্তি: ১,৩৮,০০০০০ টাকা",
      "buttonText": "বুকিং করুন",
      "buttonLink": "#contact"
    }
    // ... up to 5 pricing plans
  ]
}
```

### 6. Testimonials Settings (`testimonialsSettings`)
```json
{
  "items": [
    {
      "avatar": "FA",
      "name": "জনাব. ফারহান আহমেদ",
      "title": "ব্যবসায়ী, ঢাকা",
      "quote": "জলজোছনা প্রকল্প দেখে আমি সত্যিই মুগ্ধ!..."
    }
    // ... up to 4 testimonials
  ]
}
```

### 7. Contact Settings (`contactSettings`)
```json
{
  "title": "যোগাযোগ করুন",
  "subtitle": "আমরা আপনার সেবায় প্রস্তুত",
  "phoneIcon": "📞",
  "phoneLabel": "ফোন",
  "phoneNumbers": "+880 1991 995 995<br>+880 1991 994 994...",
  "emailIcon": "📧",
  "emailLabel": "ইমেইল",
  "emailAddress": "hello.nexgroup@gmail.com",
  "webIcon": "🌐",
  "webLabel": "ওয়েবসাইট",
  "webAddress": "www.joljochna.com",
  "addressIcon": "📍",
  "addressLabel": "ঠিকানা",
  "addressText": "শুভনূর ৩৮৮ বাড়ি...<br>খুলনা, বাংলাদেশ",
  "formTitle": "বুকিং তথ্য পাঠান"
}
```

### 8. Our Projects Settings (`ourProjectsSettings`)
```json
{
  "offerTitle": "বেছে নিন আপনার পছন্দের প্লট",
  "plots": [
    {
      "size": "৮ কাঠা",
      "cat": "প্রিমিয়াম প্লট"
    }
  ],
  "amenities": ["ক্লাব হাউজ", "জিম", "মসজিদ", "শপিং এরিয়া"],
  "footerNote": "<p>সবুজ প্রকৃতি...</p>",
  "ctaBar": "📞 এখনই যোগাযোগ করুন",
  "mapImage": "data:image/png;base64,... or URL"
}
```

### 9. Other Projects Settings (`otherProjectsSettings`)
```json
{
  "sectionTitle": "অন্যান্য প্রকল্প",
  "sectionSubtitle": "NEX Real Estate-এর সফল প্রকল্পগুলো দেখুন",
  "projects": [
    {
      "image": "🏙️",
      "title": "শান্তি নিবাস",
      "desc": "শহরের ঠিক মাঝে...",
      "btnText": "বিস্তারিত জানুন",
      "btnLink": "#contact"
    }
  ]
}
```

### 10. Slogan Settings (`sloganSettings`)
```json
{
  "text": "আপনার স্বপ্নের বাড়ি"
}
```

### 11. Projects Hero Settings (`projectsHeroSettings`)
```json
{
  "title": "মুল্য বুদ্ধির আগে",
  "subtitle": "বাড়ি বুকিং করুন",
  "description": "প্রকল্পের মূল্য তালিকা - বুকিং পরিমাণ: ১০,০০০ টাকা",
  "primaryText": "মূল্য দেখুন",
  "primaryLink": "#pricing",
  "secondaryText": "যোগাযোগ করুন",
  "secondaryLink": "#contact",
  "slides": [
    "/images/slider/slide-1.jpg",
    "/images/slider/slide-2.jpg",
    "/images/slider/slide-3.jpg"
  ]
}
```

## Admin Panel Integration

### Saving Data
The admin panel (`/public/assets/admin/program.js`) contains functions to save data:

- `saveHeaderSettings()` - Saves header data to localStorage
- `saveFooterSettings()` - Saves footer data to localStorage
- Similar functions exist for other sections

### Loading Data
On page load, the admin panel loads existing data from localStorage:

- `loadHeaderSettings()` - Loads header data from localStorage
- `loadFooterSettings()` - Loads footer data from localStorage

### Image Handling
Images (logos, QR codes, slider images) are converted to **base64 data URLs** and stored in localStorage:

```javascript
const reader = new FileReader();
reader.onload = () => {
  const dataUrl = reader.result; // base64 data URL
  localStorage.setItem('headerSettings', JSON.stringify({
    ...otherData,
    logoDataUrl: dataUrl
  }));
};
reader.readAsDataURL(file);
```

## Frontend Implementation

### Pattern Used
Each section follows this pattern:

```javascript
(function(){
  // 1. Read from localStorage
  function readSettings(){ 
    try{ 
      return JSON.parse(localStorage.getItem('sectionSettings')||'{}'); 
    } catch(e){ 
      return {}; 
    } 
  }
  
  // 2. Apply settings to DOM
  function applySettings(){
    const s = readSettings();
    // Update DOM elements with stored values
    if (element && s.property) element.textContent = s.property;
  }
  
  // 3. Initial apply
  applySettings();
  
  // 4. Listen for storage events (cross-tab updates)
  window.addEventListener('storage', (e)=>{ 
    if(e.key==='sectionSettings') applySettings(); 
  });
  
  // 5. Fallback polling (1 second interval)
  let last = localStorage.getItem('sectionSettings');
  setInterval(()=>{ 
    const cur = localStorage.getItem('sectionSettings'); 
    if(cur!==last){ 
      last=cur; 
      applySettings(); 
    } 
  }, 1000);
})();
```

## Benefits

1. **Persistence**: Data remains cached even after page refresh
2. **Performance**: No need to fetch from backend on every page load
3. **Offline Capability**: Content displays even without backend connection
4. **Instant Updates**: Changes reflect immediately across all tabs
5. **User Control**: Users can clear cache by clearing browser data

## Clearing Cache

### From Browser
Users can clear localStorage by:
1. Opening browser DevTools (F12)
2. Going to Application/Storage tab
3. Selecting Local Storage
4. Deleting specific keys or clearing all

### From Admin Panel
The admin panel provides "Reset to Default" buttons that clear specific localStorage keys:

```javascript
function resetHeaderSettings() {
  localStorage.removeItem('headerSettings');
  loadHeaderSettings(); // Reload defaults
}
```

## Browser Compatibility

localStorage is supported in all modern browsers:
- Chrome 4+
- Firefox 3.5+
- Safari 4+
- IE 8+
- Edge (all versions)

## Storage Limits

- **Maximum size**: ~5-10MB per domain (varies by browser)
- **Images**: Base64 encoding increases size by ~33%
- **Recommendation**: Keep images optimized and under 500KB each

## Troubleshooting

### Data Not Updating
1. Check browser console for errors
2. Verify localStorage is enabled in browser settings
3. Check if storage quota is exceeded
4. Try clearing localStorage and re-saving

### Images Not Displaying
1. Verify image was properly converted to base64
2. Check if base64 string is complete (not truncated)
3. Ensure image size is within localStorage limits

### Cross-Tab Updates Not Working
1. Storage events don't fire in the same tab that made the change
2. Fallback polling (1s interval) handles same-tab updates
3. Check if multiple tabs are open for testing

## Security Considerations

1. **No Sensitive Data**: Don't store passwords or sensitive information
2. **XSS Protection**: localStorage is vulnerable to XSS attacks
3. **Client-Side Only**: Data is stored on client, not synced to server
4. **User Access**: Users can view/modify localStorage data via DevTools

## Future Enhancements

Potential improvements:
1. Add versioning to detect schema changes
2. Implement data migration for updates
3. Add compression for large data
4. Sync with backend periodically
5. Add export/import functionality
6. Implement data validation

## Files Modified

### Frontend Views
- `/resources/views/landingSection/header.blade.php` ✅ (Already had localStorage)
- `/resources/views/landingSection/footer.blade.php` ✅ (Already had localStorage)
- `/resources/views/landingSection/hero.blade.php` ✅ (Already had localStorage)
- `/resources/views/landingSection/features.blade.php` ✅ (Already had localStorage)
- `/resources/views/landingSection/priceList.blade.php` ✅ (Added localStorage)
- `/resources/views/landingSection/testimonial.blade.php` ✅ (Added localStorage)
- `/resources/views/landingSection/contact.blade.php` ✅ (Added localStorage)

### Admin Panel
- `/public/assets/admin/program.js` ✅ (Contains save/load functions)
- `/resources/views/admin/headerTab.blade.php` ✅ (Header settings form)
- `/resources/views/admin/footerTab.blade.php` ✅ (Footer settings form)

## Summary

Your application now has **complete localStorage caching** for all frontend sections. Content, logos, images, and all other data will persist in the browser until you manually update them from the admin panel. This provides:

- ✅ **Offline capability**
- ✅ **Fast page loads**
- ✅ **Data persistence**
- ✅ **Cross-tab synchronization**
- ✅ **User control over cache**

All sections are now fully integrated with localStorage and will maintain their content even when the backend changes.
