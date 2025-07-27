# Project X - File Organization Structure

## Current Organized Structure:

### 📁 **layouts/**
- `main.blade.php` - Main layout template (uses components)
- `app-backup.blade.php` - Backup of old monolithic file

### 📁 **pages/**
- `homepage.blade.php` - Home page content

### 📁 **components/layout/**
- `header.blade.php` - Navigation header with all functionality
- `hero-section.blade.php` - Hero section for homepage
- `styles.blade.php` - All CSS styles organized

### 📁 **Future Structure Ideas:**

#### **Additional Components:**
- `components/layout/footer.blade.php` - Site footer
- `components/layout/sidebar.blade.php` - Sidebar for internal pages
- `components/ui/button.blade.php` - Reusable button component
- `components/ui/card.blade.php` - Reusable card component

#### **Additional Pages:**
- `pages/jobs/index.blade.php` - Jobs listing page
- `pages/jobs/show.blade.php` - Single job view
- `pages/tenders/index.blade.php` - Tenders listing
- `pages/about.blade.php` - About page
- `pages/contact.blade.php` - Contact page

#### **Route Organization:**
```php
// In routes/web.php
Route::get('/', fn() => view('pages.homepage'))->name('home');
Route::get('/jobs', fn() => view('pages.jobs.index'))->name('jobs.index');
Route::get('/tenders', fn() => view('pages.tenders.index'))->name('tenders.index');
Route::get('/about', fn() => view('pages.about'))->name('about');
```

## Benefits of This Structure:
1. **Separation of Concerns** - Each file has a single responsibility
2. **Reusability** - Components can be used across multiple pages
3. **Maintainability** - Easy to find and edit specific parts
4. **Scalability** - Easy to add new pages and components
5. **Team Collaboration** - Multiple developers can work on different components

## How to Use:
- Main layout: `@extends('layouts.main')`
- Include components: `@include('components.layout.header')`
- Page structure: All pages go in `pages/` directory
