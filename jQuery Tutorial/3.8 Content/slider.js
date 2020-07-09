function Slider(container, nav) {
  this.container = container;
  this.nav = nav.show();

  this.imgs = this.container.find("div.image");
  this.imgWidth = this.imgs.first().outerWidth();
  this.imgsLen = this.imgs.length;

  this.current = 0;
}

Slider.prototype.transition = function (coords) {
  this.container.animate({
    "margin-left": coords
      ? -(coords * this.imgWidth)
      : -(this.current * this.imgWidth),
  });
};

Slider.prototype.setCurrent = function (dir) {
  var pos = this.current;

  pos += ~~(dir === "next") || -1;
  this.current = pos < 0 ? this.imgsLen - 1 : pos % this.imgsLen;

  return pos;
};
