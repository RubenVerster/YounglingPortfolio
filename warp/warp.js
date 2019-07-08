canvas = document.getElementById('warp');
const settings =
  '{"speed":2,"speedAdjFactor":0.5,"density":3,"shape":"circle","warpEffect":true,"warpEffectLength":9,"depthFade":true,"starSize":2,"backgroundColor":"hsl(240,33%,7%)","starColor":"lightblue"}';
new WarpSpeed('warp', settings);
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

window.onresize = function() {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
  new WarpSpeed(canvas, settings);
};