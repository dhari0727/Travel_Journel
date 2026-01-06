// Travel Journal UI Enhancements
// - Page fade-in
// - Scroll-triggered reveal animations

(function () {
  // Mark page as ready for CSS fade-in
  document.addEventListener("DOMContentLoaded", function () {
    document.body.classList.add("tj-page-ready");

    var animated = document.querySelectorAll("[data-animate]");
    if (!("IntersectionObserver" in window) || !animated.length) {
      // Fallback: show all immediately
      animated.forEach(function (el) {
        el.classList.add("is-visible");
      });
      return;
    }

    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            observer.unobserve(entry.target);
          }
        });
      },
      {
        root: null,
        threshold: 0.15,
      }
    );

    animated.forEach(function (el) {
      observer.observe(el);
    });
  });
})();

