/**
 * PC Builder - Theme Switcher
 * Manages light/dark theme state by toggling 'light' and 'dark' classes on <body>.
 * Persists user preference via localStorage.
 */

(function () {
  'use strict';

  var THEME_KEY = 'pc_builder_theme';
  var DEFAULT_THEME = 'light';

  /**
   * Retrieves the current saved theme or defaults to 'light'.
   * @returns {string} 'light' or 'dark'
   */
  function getPreferredTheme() {
    var storedTheme = localStorage.getItem(THEME_KEY);
    if (storedTheme === 'dark' || storedTheme === 'light') {
      return storedTheme;
    }
    return DEFAULT_THEME;
  }

  /**
   * Applies the theme class to document.body and updates button state.
   * @param {string} theme - 'light' or 'dark'
   */
  function applyTheme(theme) {
    if (!document.body) {
      return;
    }

    document.body.classList.remove('light', 'dark');
    document.body.classList.add(theme);

    var toggleBtn = document.getElementById('theme-toggle');
    if (toggleBtn) {
      var isDark = theme === 'dark';
      toggleBtn.setAttribute('aria-pressed', isDark ? 'true' : 'false');
      toggleBtn.setAttribute(
        'aria-label',
        isDark ? 'تغییر به حالت روشن (Light Mode)' : 'تغییر به حالت تاریک (Dark Mode)'
      );
    }
  }

  /**
   * Toggles the current theme between 'light' and 'dark'.
   */
  function toggleTheme() {
    var currentTheme = document.body.classList.contains('dark') ? 'dark' : 'light';
    var nextTheme = currentTheme === 'dark' ? 'light' : 'dark';

    localStorage.setItem(THEME_KEY, nextTheme);
    applyTheme(nextTheme);
  }

  /**
   * Initializes theme on DOM ready.
   */
  function initTheme() {
    var activeTheme = getPreferredTheme();
    applyTheme(activeTheme);

    var toggleBtn = document.getElementById('theme-toggle');
    if (toggleBtn) {
      toggleBtn.addEventListener('click', toggleTheme);
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initTheme);
  } else {
    initTheme();
  }
})();
