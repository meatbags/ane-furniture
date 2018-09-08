class Carousel {
  constructor() {
    // load carousel
    this.carousel = document.querySelector('.carousel');
    if (this.carousel) {
      this.init();
    }
  }

  init() {
    this.slider = this.carousel.querySelector('.carousel-slider');
    this.slides = this.carousel.querySelectorAll('.slide');
    this.scrollToActive();

    // events
    this.slides.forEach(slide => {
      slide.addEventListener('mousedown', e => {
        this.scrollTo(e.currentTarget);
      });
    });
    window.addEventListener('resize', () => { this.scrollToActive(); });
  }

  scrollToActive() {
    // find active
    this.active = this.carousel.querySelector('.slide.active');
    if (!this.active) {
      this.active = this.carousel.querySelector('.slide');
      this.active.classList.add('active');
    }

    // scroll to
    const rect = this.active.getBoundingClientRect();
    const off = this.slider.getBoundingClientRect().left;
    const dx = (window.innerWidth / 2 - rect.width / 2) - rect.left;
    const res = off + dx;
    this.slider.style.transform = `translateX(${res}px)`;
  }

  scrollTo(elem) {
    this.clearActive();
    elem.classList.add('active');
    this.scrollToActive();
  }

  clearActive() {
    this.carousel.querySelectorAll('.slide.active').forEach(e => { e.classList.remove('active'); });
  }
}

export { Carousel };
