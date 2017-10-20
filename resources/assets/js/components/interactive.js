let heightContainerHistory = document.getElementsByClassName('container-history')[0].clientHeight;
let heightDescHistory = document.getElementsByClassName('desc-history')[0].clientHeight;
let diff = heightContainerHistory - heightDescHistory;
let positionCircle = Math.round(0.2 * diff);
$('.section3 .interactive .circle').css('bottom', positionCircle);