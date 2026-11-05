<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ورود به حساب کاربری | PC Builder</title>
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body class="light">

  <!-- Header Component -->
  <?php include 'includes/header.php'; ?>

  <!-- Main Content Wrapper -->
  <main class="main-wrapper">
    <section class="card-container" aria-labelledby="login-heading">
      <header class="card-header">
        <h1 id="login-heading" class="card-title">ورود به حساب</h1>
        <p class="card-subtitle">جهت مشاهده وضعیت سفارش‌ها و سیستم‌های ذخیره‌شده وارد شوید.</p>
      </header>

      <form action="#" method="post" class="form-grid" novalidate="false">
        <!-- Email or Phone Identifier -->
        <div class="form-group">
          <label for="login-identifier" class="form-label">
            <span>شماره موبایل یا ایمیل</span>
            <span class="required-badge" aria-hidden="true">*</span>
          </label>
          <input
            type="text"
            id="login-identifier"
            name="login-identifier"
            class="form-input"
            required
            pattern="(09[0-9]{9})|([a-zA-Z0-9._%+\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,})"
            placeholder="09xxxxxxxxx یا example@domain.com"
            autocomplete="username"
            dir="ltr"
          >
          <span class="form-hint">شماره موبایل معتبر (09xxxxxxxxx) یا آدرس ایمیل وارد کنید.</span>
        </div>

        <!-- Password -->
        <div class="form-group">
          <label for="password" class="form-label">
            <span>رمز عبور</span>
            <span class="required-badge" aria-hidden="true">*</span>
          </label>
          <input
            type="password"
            id="password"
            name="password"
            class="form-input"
            required
            minlength="8"
            placeholder="حداقل ۸ کاراکتر"
            autocomplete="current-password"
            dir="ltr"
          >
          <span class="form-hint">رمز عبور باید حداقل ۸ کاراکتر باشد.</span>
        </div>

        <!-- Remember Me Checkbox -->
        <div class="checkbox-group">
          <input
            type="checkbox"
            id="remember-me"
            name="remember-me"
            class="checkbox-input"
          >
          <label for="remember-me" class="checkbox-label">
            مرا به خاطر بسپار
          </label>
        </div>

        <!-- Submit Button -->
        <div class="form-actions">
          <button type="submit" class="btn btn-primary">ورود به حساب</button>
        </div>

        <!-- Switch to Register Link -->
        <p class="auth-switch-text">
          حساب کاربری ندارید؟
          <a href="register.php" class="auth-link">ثبت‌نام کنید</a>
        </p>
      </form>
    </section>
  </main>

  <!-- Footer Component -->
  <?php include 'includes/footer.php'; ?>

</body>
</html>
