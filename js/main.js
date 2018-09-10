import { Carousel } from './carousel';
import { Parallax } from './parallax';
import { Gallery } from './gallery';

class App {
  constructor() {
    this.carousel = new Carousel();
    this.parallax = new Parallax();
    this.gallery = new Gallery();
  }
}

window.onload = () => {
  const app = new App();
};
