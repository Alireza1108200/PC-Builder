<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>تماس با ما | PC Builder</title>
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body class="light">

  <!-- Header Component -->
  <?php include 'includes/header.php'; ?>
  <!-- Main Content Wrapper -->
  <main class="main-wrapper">
    <section class="card-container" aria-labelledby="contact-heading">
      <header class="card-header">
        <h1 id="contact-heading" class="card-title">تماس با پشتیبانی</h1>
        <p class="card-subtitle">سؤال، پیشنهاد یا نیاز به راهنمایی در انتخاب قطعات دارید؟ پیام خود را برای ما ارسال کنید.</p>
      </header>

      <form action="#" method="post" class="form-grid form-grid-two-columns" novalidate="false">
        <!-- Full Name -->
        <div class="form-group form-group-full">
          <label for="full-name" class="form-label">
            <span>نام و نام خانوادگی</span>
            <span class="required-badge" aria-hidden="true">*</span>
          </label>
          <input
            type="text"
            id="full-name"
            name="full-name"
            class="form-input"
            required
            minlength="3"
            placeholder="مثال: علی رضایی"
            autocomplete="name"
          >
          <span class="form-hint">حداقل ۳ حرف وارد کنید.</span>
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
          <span class="form-hint">فرمت معتبر: ۱۱ رقم با شروع 09</span>
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
          <span class="form-hint">ایمیل معتبر وارد کنید.</span>
        </div>

        <!-- Subject Select -->
        <div class="form-group form-group-full">
          <label for="subject" class="form-label">
            <span>موضوع پیام</span>
            <span class="required-badge" aria-hidden="true">*</span>
          </label>
          <select id="subject" name="subject" class="form-select" required>
            <option value="" disabled selected>لطفاً یک موضوع انتخاب کنید</option>
            <option value="compatibility">مشاوره سازگاری قطعات (Compatibility)</option>
            <option value="technical">پشتیبانی فنی و اسمبل سیستم</option>
            <option value="order">پیگیری سفارش و تحویل</option>
            <option value="warranty">گارانتی و خدمات پس از فروش</option>
            <option value="other">سایر موارد و پیشنهادات</option>
          </select>
        </div>

        <!-- Message -->
        <div class="form-group form-group-full">
          <label for="message" class="form-label">
            <span>متن پیام</span>
            <span class="required-badge" aria-hidden="true">*</span>
          </label>
          <textarea
            id="message"
            name="message"
            class="form-textarea"
            required
            minlength="20"
            rows="5"
            placeholder="توضیحات کامل پیام یا پرسش خود را اینجا بنویسید (حداقل ۲۰ کاراکتر)..."
          ></textarea>
          <span class="form-hint">حداقل ۲۰ کاراکتر وارد کنید.</span>
        </div>

        <!-- Form Actions -->
        <div class="form-group form-group-full form-actions">
          <button type="submit" class="btn btn-primary">ارسال پیام</button>
        </div>
      </form>
    </section>
  </main>

  <!-- Footer Component -->
  <?php include 'includes/footer.php'; ?>

</body>
</html>
