var scene;

jQuery(document).ready(function($){
  var lowRes = false;
  $(window).resize(function(){
    if (window.outerWidth < 1024 && !lowRes){
      window.location.reload();
      lowRes = true;
    } else if (window.outerWidth > 1024 && lowRes) {
      window.location.reload();
      lowRes = false;
    }
  });
});

function generatePoints(goLeft) {
  var minX = 200;
  var minY = 200;
  var maxX = $(document).width() - 300;
  var maxY = $(document).height() - 300;
  var numPoints = 5;
  var i;
  var points = [];
    points.push([-300,maxY/2]);
  for (i=0; i<numPoints; i++) {
    points.push([Math.floor(Math.random()*(maxX-minX))+minX, Math.floor(Math.random()*(maxY-minY))+minY]);
  }
    points.push([maxX + 600, maxY/2]);
  return points;
}