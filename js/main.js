class App {
  constructor() {
    this.parallax();
  }

  parallax() {
    var count = 0;
    document.querySelectorAll('.parallax-hide').forEach(e => {
      const ms = 50 + 150 * count;
      count += 1;
      setTimeout(() => { e.classList.add('parallax-active'); }, ms);
    })
  }
}

window.onload = () => {
  const app = new App();
};
