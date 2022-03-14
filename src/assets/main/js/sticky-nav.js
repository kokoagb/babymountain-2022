const stickyObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      entry.target.classList.toggle('is-sticky', entry.isIntersecting);
    });
  },
  {
    rootMargin: '0px 0px -100% 0px',
    threshold: 0,
  }
);

window.addEventListener('DOMContentLoaded', () => {
  const nav = document.querySelector('#bm-main-nav');
  if (nav) {
    stickyObserver.observe(nav);
  }
});
