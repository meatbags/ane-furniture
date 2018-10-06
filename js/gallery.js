class Gallery {
  constructor(isMobile) {
    // hook up galleries
    this.gallery = document.querySelector('.product-gallery');
    if (this.gallery) {
      this.init();
    }

    if (!isMobile) {
      this.initVisualiser();
    }
  }

  init() {
    this.images = this.gallery.querySelectorAll('.gallery-images .item');
    this.hovers = this.gallery.querySelectorAll('.gallery-images .item-hover');
    this.thumbs = this.gallery.querySelectorAll('.gallery-nav .item');
    this.thumbs.forEach(item => {
      item.onclick = () => {
        const index = parseInt(item.dataset.index);
        if (this.images.length > index) {
          this.show(index);
        }
      };
    });
  }

  show(index) {
    this.images.forEach(e => { e.classList.remove('active'); });
    this.hovers.forEach(e => { e.classList.remove('active'); });
    this.thumbs.forEach(e => { e.classList.remove('active'); });
    this.images[index].classList.add('active');
    this.hovers[index].classList.add('active');
    this.thumbs[index].classList.add('active');
  }

  initVisualiser() {
    this.target = document.querySelector('.gallery-images');
    if (this.target) {
      this.target.addEventListener('mouseenter', () => {
        this.hoverImage = this.target.querySelector('.item-hover.active');
        if (this.hoverImage) {
          this.hoverImage.classList.add('over');
          this.targetRect = this.target.getBoundingClientRect();
          this.imageRect = this.hoverImage.getBoundingClientRect();
        }
      });
      this.target.addEventListener('mousemove', (e) => {
        if (this.targetRect && this.imageRect) {
          if (this.imageRect.width > this.targetRect.width) {
            const x = (e.clientX - this.targetRect.left) / this.targetRect.width;
            const left = (this.imageRect.width - this.targetRect.width) * x;
            this.hoverImage.style.left = -left + 'px';
          }
          if (this.imageRect.height > this.targetRect.height) {
            const y = (e.clientY - this.targetRect.top) / this.targetRect.height;
            const top = (this.imageRect.height - this.targetRect.height) * y;
            this.hoverImage.style.top = -top + 'px';
          }
        }
      });
      this.target.addEventListener('mouseleave', () => {
        if (this.hoverImage) {
          this.hoverImage.classList.remove('over');
        }
      });
    }
  }
}

export { Gallery };
