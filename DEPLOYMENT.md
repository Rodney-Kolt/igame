# iGame Deployment Guide

## GitHub Repository

Your project is ready for GitHub at: https://github.com/Rodney-Kolt/igame.git

## Vercel Deployment

### Step 1: Push to GitHub
```bash
git init
git add .
git commit -m "Initial commit - iGame CPA platform"
git remote add origin https://github.com/Rodney-Kolt/igame.git
git push -u origin main
```

### Step 2: Deploy to Vercel
1. Go to [vercel.com](https://vercel.com)
2. Click "New Project"
3. Import your GitHub repository: `Rodney-Kolt/igame`
4. Vercel will detect it as a PHP project
5. Configure environment variables:
   - `APP_NAME`: iGame
   - `APP_ENV`: production
   - `APP_DEBUG`: false
   - `APP_URL`: https://igame.vercel.app
   - Database credentials (if using external database)

### Step 3: Add vercel.json (Optional)
Create `vercel.json` in your repo root:
```json
{
  "version": 2,
  "name": "igame",
  "builds": [
    {
      "src": "public/index.php",
      "use": "@vercel/php"
    }
  ],
  "routes": [
    {
      "src": "/(.*)",
      "dest": "/public/index.php"
    }
  ],
  "env": {
    "APP_NAME": "iGame",
    "APP_ENV": "production",
    "APP_DEBUG": "false",
    "APP_URL": "https://igame.vercel.app"
  },
  "functions": {
    "public/index.php": {
      "runtime": "php"
    }
  }
}
```

## Database Options

### Option 1: Vercel Postgres (Recommended)
- Add Vercel Postgres database
- Update connection string in environment variables

### Option 2: External Database
- Use your AeonFree MySQL database
- Configure these environment variables:
  - `DB_HOST`: sql100.iceiy.com
  - `DB_DATABASE`: icei_41242965_loot
  - `DB_USERNAME`: icei_41242965
  - `DB_PASSWORD`: JfB67wkIm1GP)

## After Deployment

1. Run database migrations (if needed)
2. Access your app at: https://igame.vercel.app
3. Set up admin account
4. Add offerwalls from CPA networks

## Notes

- Laravel storage may need Vercel Blob storage for file uploads
- Email functionality requires SMTP configuration
- Cron jobs for scheduled tasks need Vercel Cron Jobs
