class Parallax {
  constructor() {
    this.cascadeFadeIn();
  }

  cascadeFadeIn() {
    // cascade fade in
    var count = 0;
    const selector = '.parallax-hide:not(.filtered)';
    document.querySelectorAll(selector).forEach(e => {
      const ms = 50 + 150 * count;
      count += 1;
      setTimeout(() => { e.classList.add('parallax-active'); }, ms);
    });

    // init parallax scroll
    this.elements = document.querySelectorAll('.parallax');
    if (this.elements.length) {
      this.onScroll();
      window.addEventListener('scroll', () => { this.onScroll(); });
    }
  }

  onScroll() {
    //const y = document.documentElement.scrollTop + window.innerHeight / 2;
    const y = window.innerHeight * 0.8;

    this.elements.forEach(e => {
      const rect = e.getBoundingClientRect();
      if (rect.top < y) {
        e.classList.add('active');
      } else {
        e.classList.remove('active');
      }
    });
  }
}

export { Parallax };
