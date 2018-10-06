import { mobileAndTabletcheck } from './mobile_check';
import { Carousel } from './carousel';
import { Filters } from './filters';
import { Parallax } from './parallax';
import { Gallery } from './gallery';
import { Menu } from './menu';

class App {
  constructor() {
    const isMobile = mobileAndTabletcheck();
    this.carousel = new Carousel();
    this.filters = new Filters();
    this.parallax = new Parallax();
    this.gallery = new Gallery(isMobile);
    if (!isMobile) {
      this.menu = new Menu();
    }
  }
}

window.onload = () => {
  const app = new App();
};
