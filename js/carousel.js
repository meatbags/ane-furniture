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
    this.control = {
      left: this.carousel.querySelector('.carousel-left'),
      right: this.carousel.querySelector('.carousel-right')
    };
    this.scrollToActive();

    // events
    this.slides.forEach(slide => {
      slide.addEventListener('mousedown', e => {
        this.scrollTo(e.currentTarget);
      });
    });
    this.control.left.onclick = () => { this.scrollLeft(); };
    this.control.right.onclick = () => { this.scrollRight(); };
    window.addEventListener('resize', () => { this.scrollToActive(); });
  }

  scrollTo(elem) {
    this.clearActive();
    elem.classList.add('active');
    this.scrollToActive();
  }



  scrollLeft() {
    if (this.active) {
      const index = parseInt(this.active.dataset.index) - 1;
      if (index >= 0) {
        this.scrollTo(this.slides[index]);
      }
    }
  }

  scrollRight() {
    if (this.active) {
      const index = parseInt(this.active.dataset.index) + 1;
      if (this.slides.length > index) {
        this.scrollTo(this.slides[index]);
      }
    }
  }

  clearActive() {
    this.carousel.querySelectorAll('.slide.active').forEach(e => { e.classList.remove('active'); });
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

    // post scroll action
    this.afterScroll();
  }

  afterScroll() {
    const index = parseInt(this.active.dataset.index);
    if (index == 0) {
      this.control.left.classList.remove('active');
    } else {
      this.control.left.classList.add('active');
    }
    if (index >= this.slides.length - 1) {
      this.control.right.classList.remove('active');
    } else {
      this.control.right.classList.add('active');
    }
  }
}

export { Carousel };
