# Pricing Editor Guide

## How It Works

The pricing editor uses **browser localStorage** to sync data between the admin dashboard and the landing page.

### Important: How to See Changes

**The pricing section will NOT update in real-time if you only have the dashboard open.**

You need to:

1. **Option 1: Open Both Pages** (Recommended for editing)
   - Open dashboard in one tab: `http://localhost:8003/dashboard`
   - Open landing page in another tab: `http://localhost:8003/`
   - Edit pricing in dashboard
   - Changes appear on landing page within 1 second (automatic polling)

2. **Option 2: Refresh After Saving**
   - Edit pricing in dashboard
   - Click "সেভ" button
   - Go to landing page: `http://localhost:8003/`
   - Refresh the page (F5 or Cmd+R)
   - Changes will appear

### Step-by-Step Usage

1. **Go to Admin Dashboard**
   - Navigate to: `http://localhost:8003/dashboard`
   - Click "হোম" in sidebar
   - Click "মূল্য তালিকা" in submenu

2. **Edit Pricing Plans**
   - You'll see 5 pricing plan editors
   - Each plan has fields for:
     - শিরোনাম (Title) - e.g., "২০ কুড়া মালা"
     - মূল্য (Amount) - e.g., "৮০,০০,০০০ টাকা"
     - ডাউন পেমেন্ট (Down Payment)
     - কিস্তি ১-৪ (Installments 1-4)
     - বাটন টেক্সট (Button Text)
     - বাটন লিংক (Button Link)

3. **Save Changes**
   - Changes auto-save as you type
   - Click "সেভ" button for manual save
   - You'll see a success message: "মূল্য তালিকা সংরক্ষণ করা হয়েছে।"

4. **View Changes on Landing Page**
   - Open `http://localhost:8003/` in a new tab
   - OR refresh if already open
   - Scroll to "মূল্য তালিকা" section
   - Your changes will be visible

### Troubleshooting

#### Changes Not Showing?

**Check 1: Verify Data is Saved**
- Open browser console (F12) on dashboard
- Type: `localStorage.getItem('pricingSettings')`
- You should see your pricing data in JSON format

**Check 2: Verify Data is Loading**
- Open browser console (F12) on landing page
- Look for: `Applying pricing: {items: [...]}`
- Look for: `Pricing items: 5`

**Check 3: Clear Cache**
```javascript
// In browser console, run:
localStorage.removeItem('pricingSettings');
// Then refresh and try again
```

**Check 4: Test with Sample Data**
```javascript
// In browser console on dashboard, run:
localStorage.setItem('pricingSettings', JSON.stringify({
  items: [{
    title: "TEST PLAN",
    amount: "999,999 টাকা",
    downPayment: "Test Down Payment",
    installment1: "Test Installment 1",
    installment2: "Test Installment 2",
    installment3: "Test Installment 3",
    installment4: "Test Installment 4",
    buttonText: "TEST BUTTON",
    buttonLink: "#contact"
  }]
}));
// Then refresh landing page - first card should show "TEST PLAN"
```

### Technical Details

**Storage Key:** `pricingSettings`

**Data Structure:**
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
    // ... 4 more plans
  ]
}
```

**Update Mechanism:**
- Auto-save on input (as you type)
- Manual save button
- Landing page polls localStorage every 1 second
- Changes appear automatically if both pages are open
- Otherwise, requires page refresh

### Files Modified

- `/resources/views/admin/home.blade.php` - Admin editor
- `/resources/views/landingSection/priceList.blade.php` - Frontend display

### Console Logs (for debugging)

**Admin Dashboard:**
- `Pricing saved: {items: [...]}`

**Landing Page:**
- `Applying pricing: {items: [...]}`
- `Pricing items: 5`
- `Pricing changed via polling` (when auto-detected)
