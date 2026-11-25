(function () {
  const LANG_KEY = 'aeropulse_lang';
  const defaultLang = 'zh';

  function applyLang(lang) {
    document.documentElement.setAttribute('data-lang', lang);
    document.documentElement.lang = lang === 'zh' ? 'zh-CN' : 'en';
    document.querySelectorAll('[data-zh][data-en]').forEach((el) => {
      const val = lang === 'zh' ? el.getAttribute('data-zh') : el.getAttribute('data-en');
      if (val !== null) {
        if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
          el.placeholder = val;
        } else {
          el.textContent = val;
        }
      }
    });
    const toggleBtn = document.getElementById('ap-lang-toggle');
    if (toggleBtn) {
      toggleBtn.textContent = lang === 'zh' ? '中文 / EN' : 'EN / 中文';
    }
  }

  document.addEventListener('DOMContentLoaded', () => {
    const saved = localStorage.getItem(LANG_KEY) || defaultLang;
    applyLang(saved);

    const toggleBtn = document.getElementById('ap-lang-toggle');
    if (toggleBtn) {
      toggleBtn.addEventListener('click', () => {
        const next = (document.documentElement.getAttribute('data-lang') || 'zh') === 'zh' ? 'en' : 'zh';
        localStorage.setItem(LANG_KEY, next);
        applyLang(next);
      });
    }

    const menuBtn = document.getElementById('ap-mobile-menu');
    const nav = document.getElementById('ap-main-nav');
    if (menuBtn && nav) {
      menuBtn.addEventListener('click', () => nav.classList.toggle('open'));
    }

    // Product catalog filter & search
    const filterPills = document.querySelectorAll('.filter-pill');
    const searchInput = document.getElementById('ap-product-search');
    const cards = document.querySelectorAll('.product-card[data-cat]');

    if (cards.length > 0) {
      let activeCat = new URLSearchParams(window.location.search).get('cat') || 'all';

      function updateCatalog() {
        const q = (searchInput ? searchInput.value : '').trim().toLowerCase();
        cards.forEach((card) => {
          const cat = card.getAttribute('data-cat') || '';
          const text = card.textContent.toLowerCase();
          const matchCat = activeCat === 'all' || cat === activeCat;
          const matchQ = !q || text.includes(q);
          card.style.display = matchCat && matchQ ? '' : 'none';
        });
        filterPills.forEach((pill) => {
          pill.classList.toggle('active', pill.getAttribute('data-filter') === activeCat);
        });
      }

      filterPills.forEach((pill) => {
        pill.addEventListener('click', () => {
          activeCat = pill.getAttribute('data-filter') || 'all';
          updateCatalog();
        });
      });

      if (searchInput) {
        searchInput.addEventListener('input', updateCatalog);
      }
      updateCatalog();
    }

    // Inquiry form demo handler
    const form = document.getElementById('ap-inquiry-form');
    const feedback = document.getElementById('ap-form-feedback');
    if (form && feedback) {
      form.addEventListener('submit', (e) => {
        e.preventDefault();
        const lang = document.documentElement.getAttribute('data-lang') || 'zh';
        feedback.style.display = 'block';
        feedback.textContent =
          lang === 'zh'
            ? '询盘已提交成功！AeroPulse 深圳硬件团队将在 24 小时内通过邮件与您联系（WordPress 表单演示闭环）。'
            : 'Inquiry submitted! Our Shenzhen FPV engineering team will respond within 24 hours.';
        form.reset();
      });
    }
  });
})();
