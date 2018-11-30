class Filters {
  constructor() {
    // filter product pages
    this.query = window.location.search;
    if (this.query != '') {
      if (!document.querySelector('.is-search')) {
        this.filter();
      } else {
        this.showTitle();
      }
    }
  }

  filter() {
    const filter = this.query.split('=')[1];
    const classFilter = 'filter-' + filter;

    // get subnav/ title
    var title = '';
    const subnav = document.querySelector('.sub-nav');
    if (subnav) {
      const items = subnav.querySelectorAll('.item');
      for (var i=0; i<items.length; i++) {
        if (items[i].firstChild && items[i].firstChild.href && items[i].firstChild.href.indexOf(filter) != -1) {
          title = items[i].firstChild.innerHTML;
          break;
        }
      }
    }

    // set title
    const titleEl = document.querySelector('.page-title .aside');
    if (titleEl && title) {
      titleEl.innerHTML = ' - ' + title;
      this.showTitle();
    }

    // filter product items
    var found = false;
    document.querySelectorAll('.product-item').forEach(e => {
      if (!e.classList.contains(classFilter)) {
        e.classList.add('filtered');
      } else {
        found = true;
      }
    });
    if (!found) {
      document.querySelector('.no-product-found').classList.add('active');
    }
  }

  showTitle() {
    const e = document.querySelector('.page-title .aside');
    if (e) {
      e.classList.add('active');
    }
  }
}

export { Filters };
