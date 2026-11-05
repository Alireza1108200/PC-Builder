<!-- Global Header Component -->
<header class="site-header">
  <div class="nav-container">
    <!-- Right: Brand Logo & Title -->
    <a href="index.php" class="brand-link" aria-label="PC Builder صفحه اصلی">
      <img src="assets/pic/PC-Builder-Logo.svg" alt="PC Builder Logo" class="brand-logo-img">
      <span>PC Builder</span>
    </a>

    <!-- Center: Main Navigation Menu -->
    <nav class="main-nav" aria-label="منوی اصلی">
      <ul class="nav-list">
        <li><a href="index.php" class="nav-item-link" data-page="home">خانه</a></li>
        <li><a href="shop.php" class="nav-item-link" data-page="products">فروشگاه</a></li>
        <li><a href="builder.php" class="nav-item-link" data-page="builder">اسمبل هوشمند</a></li>
        <li><a href="blog.php" class="nav-item-link" data-page="blog">مقالات</a></li>
        <li><a href="about.php" class="nav-item-link" data-page="about">درباره ما</a></li>
        <li><a href="contact.php" class="nav-item-link" data-page="contact">تماس با ما</a></li>
      </ul>
    </nav>

    <!-- Left: Actions (Login & Theme Switcher) -->
    <div class="nav-actions">
      <a href="login.php" class="btn-header-login">ورود</a>

      <button type="button" id="theme-toggle" class="theme-toggle-btn" aria-label="تغییر به حالت تاریک (Dark Mode)" aria-pressed="false">
        <!-- Sun icon (shown in dark mode) -->
        <svg class="theme-toggle-icon theme-icon-dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
          <path d="M12 3a1 1 0 0 1 1 1v1a1 1 0 1 1-2 0V4a1 1 0 0 1 1-1zm0 15a1 1 0 0 1 1 1v1a1 1 0 1 1-2 0v-1a1 1 0 0 1 1-1zm8-7a1 1 0 0 1 1 1 1 1 0 1 1-2 0 1 1 0 0 1 1-1zM5 12a1 1 0 0 1 1 1 1 1 0 1 1-2 0 1 1 0 0 1 1-1zm12.95-6.95a1 1 0 0 1 1.41 1.41l-.7.71a1 1 0 1 1-1.42-1.42l.71-.7zm-11.31 11.3a1 1 0 0 1 1.41 1.42l-.7.7a1 1 0 1 1-1.42-1.41l.71-.71zm12.02 0a1 1 0 0 1 0 1.42l-.71.7a1 1 0 1 1-1.41-1.41l.7-.71a1 1 0 0 1 1.42 0zM6.64 6.46a1 1 0 0 1 0 1.42l-.71.7a1 1 0 1 1-1.41-1.41l.7-.71a1 1 0 0 1 1.42 0zM12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10z"/>
        </svg>
        <!-- Moon icon (shown in light mode) -->
        <svg class="theme-toggle-icon theme-icon-light" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
          <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
        </svg>
      </button>
    </div>
  </div>
</header>

