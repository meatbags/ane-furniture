class Menu {
  constructor() {
    this.target = document.querySelector('.sub-nav');
    if (this.target) {
      this.items = document.querySelectorAll('.nav .nav__inner .item');
      this.panes = document.querySelectorAll('.sub-nav .sub-nav__inner .pane');
      this.items.forEach(e => {
        e.addEventListener('mouseenter', evt => {
          if (evt.currentTarget.dataset.subnav) {
            const id = evt.currentTarget.dataset.subnav;
            const subnav = document.querySelector(id);
            if (subnav) {
              this.open(subnav);
            } else {
              this.close();
            }
          }
        });
      });
      this.target.addEventListener('mouseleave', () => { this.close(); });
      document.querySelector('.title-bar').addEventListener('mouseenter', () => { this.close(); });
    }
  }

  open(item) {
    if (!item.classList.contains('active')) {
      this.panes.forEach(pane => { pane.classList.remove('active'); });
      item.classList.add('active');
    }
    this.target.classList.add('active');
  }

  close() {
    this.target.classList.remove('active');
  }
}

export { Menu };
