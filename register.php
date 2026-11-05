<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ثبت‌نام در حساب کاربری | PC Builder</title>
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body class="light">

  <!-- Header Component -->
  <?php include 'includes/header.php'; ?>

  <!-- Main Content Wrapper -->
  <main class="main-wrapper">
    <section class="card-container" aria-labelledby="register-heading">
      <header class="card-header">
        <h1 id="register-heading" class="card-title">ایجاد حساب کاربری</h1>
        <p class="card-subtitle">به خانواده PC Builder بپیوندید و سیستم گیمینگ یا کاری خود را به صورت هوشمند بسازید.</p>
      </header>

      <form action="#" method="post" class="form-grid form-grid-two-columns" novalidate="false">
        <!-- First Name -->
        <div class="form-group">
          <label for="first-name" class="form-label">
            <span>نام</span>
            <span class="required-badge" aria-hidden="true">*</span>
          </label>
          <input
            type="text"
            id="first-name"
            name="first-name"
            class="form-input"
            required
            minlength="2"
            placeholder="مثال: رضا"
            autocomplete="given-name"
          >
          <span class="form-hint">حداقل ۲ حرف.</span>
        </div>

        <!-- Last Name -->
        <div class="form-group">
          <label for="last-name" class="form-label">
            <span>نام خانوادگی</span>
            <span class="required-badge" aria-hidden="true">*</span>
          </label>
          <input
            type="text"
            id="last-name"
            name="last-name"
            class="form-input"
            required
            minlength="2"
            placeholder="مثال: محمدی"
            autocomplete="family-name"
          >
          <span class="form-hint">حداقل ۲ حرف.</span>
        </div>

        <!-- Email -->
        <div class="form-group">
          <label for="email" class="form-label">
            <span>پست الکترونیک (ایمیل)</span>
            <span class="required-badge" aria-hidden="true">*</span>
          </label>
          <input
            type="email"
            id="email"
            name="email"
            class="form-input"
            required
            placeholder="example@domain.com"
            autocomplete="email"
            dir="ltr"
          >
          <span class="form-hint">ایمیل معتبر برای تأیید حساب.</span>
        </div>

        <!-- Phone Number -->
        <div class="form-group">
          <label for="phone" class="form-label">
            <span>شماره موبایل</span>
            <span class="required-badge" aria-hidden="true">*</span>
          </label>
          <input
            type="tel"
            id="phone"
            name="phone"
            class="form-input"
            required
            pattern="09[0-9]{9}"
            placeholder="09xxxxxxxxx"
            autocomplete="tel"
            inputmode="numeric"
            dir="ltr"
          >
          <span class="form-hint">۱۱ رقم با پیش‌شماره 09</span>
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
            autocomplete="new-password"
            dir="ltr"
          >
          <span class="form-hint">حداقل ۸ کاراکتر وارد کنید.</span>
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
          <label for="confirm-password" class="form-label">
            <span>تکرار رمز عبور</span>
            <span class="required-badge" aria-hidden="true">*</span>
          </label>
          <input
            type="password"
            id="confirm-password"
            name="confirm-password"
            class="form-input"
            required
            minlength="8"
            placeholder="تکرار رمز عبور"
            autocomplete="new-password"
            dir="ltr"
          >
          <span class="form-hint">تکرار دقیق رمز عبور وارد شده.</span>
        </div>

        <!-- Terms and Conditions Checkbox -->
        <div class="form-group form-group-full">
          <div class="checkbox-group">
            <input
              type="checkbox"
              id="terms"
              name="terms"
              class="checkbox-input"
              required
            >
            <label for="terms" class="checkbox-label">
              قوانین و شرایط استفاده از خدمات PC Builder را مطالعه کرده و می‌پذیرم.
            </label>
          </div>
        </div>

        <!-- Submit Button -->
        <div class="form-group form-group-full form-actions">
          <button type="submit" class="btn btn-primary">ثبت‌نام و عضویت</button>
        </div>

        <!-- Switch to Login Link -->
        <div class="form-group form-group-full">
          <p class="auth-switch-text">
            قبلاً ثبت‌نام کرده‌اید؟
            <a href="login.php" class="auth-link">وارد شوید</a>
          </p>
        </div>
      </form>
    </section>
  </main>

  <!-- Footer Component -->
  <?php include 'includes/footer.php'; ?>

</body>
</html>
