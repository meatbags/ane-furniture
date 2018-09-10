class Gallery {
  constructor() {
    // hook up galleries
    this.gallery = document.querySelector('.product-gallery');
    if (this.gallery) {
      this.init();
    }
  }

  init() {
    this.images = this.gallery.querySelectorAll('.gallery-images .item');
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
    this.thumbs.forEach(e => { e.classList.remove('active'); });
    this.images[index].classList.add('active');
    this.thumbs[index].classList.add('active');
  }
}

export { Gallery };
