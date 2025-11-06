# Header Editor Guide

## ✅ Header Fields ARE Connected to Website!

All the header input fields in the dashboard are **already connected** to the website header. When you change them and save, the website header updates automatically.

## How It Works

### Dashboard Fields → Website Header Mapping:

| Dashboard Field | Website Element | What It Controls |
|----------------|-----------------|------------------|
| **লোগো আপলোড** | Logo Image | Company logo in top-left |
| **ব্র্যান্ড টেক্সট** | Brand Text | Text next to logo (if no logo) |
| **হোম লেবেল** | Home Menu | "হোম" navigation link |
| **আমাদের সম্পর্কে লেবেল** | About Menu | "আমাদের সম্পর্কে" navigation link |
| **সুবিধা লেবেল** | Features Menu | "সুবিধা" navigation link |
| **মূল্য তালিকা লেবেল** | Pricing Menu | "মূল্য তালিকা" navigation link |
| **মন্তব্য লেবেল** | Testimonials Menu | "মন্তব্য" navigation link |
| **অন্যান্য প্রকল্প লেবেল** | Other Projects Menu | "অন্যান্য প্রকল্প" navigation link |
| **যোগাযোগ লেবেল** | Contact Menu | "যোগাযোগ" navigation link |
| **CTA বাটন টেক্সট** | Booking Button Text | "এখনই বুক করুন" button text |
| **CTA লিঙ্ক** | Booking Button Link | Where the button goes when clicked |

## Step-by-Step: How to Edit Header

### 1. Open Dashboard
- Go to: `http://localhost:8003/dashboard`
- Click **"হেডার"** in the sidebar

### 2. Edit Fields
You can change any of these:
- **Upload Logo**: Click "লোগো আপলোড" and select an image
- **Menu Labels**: Change text for any menu item
- **Booking Button**: Change button text and link

### 3. See Live Preview
- Scroll down to **"লাইভ প্রিভিউ"** section
- You'll see a mini preview of the header
- Changes appear as you type!

### 4. Save Changes
- Click **"Save"** button
- You'll see: "হেডার সেটিংস সংরক্ষণ করা হয়েছে।"

### 5. View on Website

**Option 1: Open Both Pages** (Recommended)
- Keep dashboard open in one tab
- Open website in another tab: `http://localhost:8003/`
- Changes appear within 1 second automatically!

**Option 2: Refresh After Saving**
- Save changes in dashboard
- Go to website: `http://localhost:8003/`
- Press **F5** or **Cmd+R** to refresh
- Changes will appear!

## Example: Change "হোম" to "Home"

1. Go to Dashboard → হেডার
2. Find field: **"হোম লেবেল"**
3. Change text from "হোম" to "Home"
4. Click **"Save"**
5. Refresh website
6. First menu item now says "Home"!

## Example: Change Booking Button

1. Go to Dashboard → হেডার
2. Find field: **"CTA বাটন টেক্সট"**
3. Change from "এখনই বুক করুন" to "Book Now"
4. Find field: **"CTA লিঙ্ক"**
5. Change from "#contact" to "/booking" (if you have a booking page)
6. Click **"Save"**
7. Refresh website
8. Button now says "Book Now" and links to /booking!

## Example: Upload Logo

1. Go to Dashboard → হেডার
2. Click **"লোগো আপলোড"**
3. Select your logo image (PNG, JPG, or SVG)
4. See preview appear below
5. Click **"Save"**
6. Refresh website
7. Your logo appears in top-left corner!

## Troubleshooting

### Changes Not Showing?

**Step 1: Check if Saved**
- Open browser console (F12) on dashboard
- Type: `localStorage.getItem('headerSettings')`
- You should see your data in JSON format

**Step 2: Check Website Console**
- Open browser console (F12) on website
- Look for: `Applying header settings: {...}`
- This shows the header is loading

**Step 3: Refresh Website**
- Press **F5** or **Cmd+R**
- Changes should appear

**Step 4: Clear and Re-save**
```javascript
// In browser console on dashboard:
localStorage.removeItem('headerSettings');
// Then fill in fields again and click Save
```

### Logo Not Showing?

**Check Image Format:**
- Supported: PNG, JPG, SVG
- File size: Under 2MB recommended

**Check Console:**
- Look for errors in browser console (F12)
- Image should be converted to base64 data URL

### Default Values

If you don't change anything, these defaults appear:
- **হোম লেবেল**: "হোম"
- **আমাদের সম্পর্কে লেবেল**: "আমাদের সম্পর্কে"
- **সুবিধা লেবেল**: "সুবিধা"
- **মূল্য তালিকা লেবেল**: "মূল্য তালিকা"
- **মন্তব্য লেবেল**: "মন্তব্য"
- **অন্যান্য প্রকল্প লেবেল**: "অন্যান্য প্রকল্প"
- **যোগাযোগ লেবেল**: "যোগাযোগ"
- **CTA বাটন টেক্সট**: "এখনই বুক করুন"
- **CTA লিঙ্ক**: "#contact"

## Reset to Defaults

1. Go to Dashboard → হেডার
2. Click **"Reset to Default"** button
3. All fields return to default Bengali text
4. Logo is removed
5. Refresh website to see defaults

## Technical Details

**Storage Method:** Browser localStorage
**Storage Key:** `headerSettings`
**Update Mechanism:** 
- Auto-save on input (live preview)
- Manual save button
- 1-second polling for changes
- Storage event listener

**Data Structure:**
```json
{
  "brandText": "জলজোছনা",
  "homeLabel": "হোম",
  "aboutLabel": "আমাদের সম্পর্কে",
  "featuresLabel": "সুবিধা",
  "pricingLabel": "মূল্য তালিকা",
  "testimonialsLabel": "মন্তব্য",
  "otherProjectsLabel": "অন্যান্য প্রকল্প",
  "contactLabel": "যোগাযোগ",
  "ctaText": "এখনই বুক করুন",
  "ctaHref": "#contact",
  "logoUrl": "",
  "logoDataUrl": "data:image/png;base64,..."
}
```

## Console Logs (for debugging)

**Dashboard:**
- `Header settings saved: {...}` - When you click Save

**Website:**
- `Applying header settings: {...}` - When header loads
- `Header changed via polling` - When auto-detected
- `Header storage event detected` - When storage event fires

## Files Involved

- **Admin Form**: `/resources/views/admin/headerTab.blade.php`
- **Admin Logic**: `/public/assets/admin/program.js`
- **Website Header**: `/resources/views/landingSection/header.blade.php`

---

**Remember**: The fields ARE connected! Just save in dashboard and refresh the website to see changes! 🎉
