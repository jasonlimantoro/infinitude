function createCircle(bottom, left) {
    // bottom argument is the position of the circle

    // Create DOM element and assign style to it
    let div = document.createElement("div");
    div.className = 'circle';
    div.style.bottom = bottom + 'px';
    div.style.left = left + 'px';
    div.style.display = 'inline-block';
    
    // Append the DOM to the container
    let container = document.querySelector('.section3 .interactive div');
    container.appendChild(div);
}

function calculateBottom(percentage) {
    let heightContainerHistory = document.getElementsByClassName('container-history')[0].clientHeight;
    let heightDescHistory = document.getElementsByClassName('desc-history')[0].clientHeight;
    let diff = heightContainerHistory - heightDescHistory;
    let positionCircleBottom = percentage * diff;
    return positionCircleBottom;

}
function calculateLeft(percentage) {
    let widthContainer = document.querySelector('.interactive').clientWidth;
    let positionCircleLeft = percentage * widthContainer;
    return positionCircleLeft;
}

let percentageBottom = 0.2;
let percentageLeft = 0.14;
let bottom = calculateBottom(percentageBottom);
let left = calculateLeft(percentageLeft);

for (var index = 0; index < 6 ; index++) {
    createCircle(bottom, left);
    percentageBottom += 0.13 + (index * 0.04);
    percentageLeft += 0.08;
    bottom = calculateBottom(percentageBottom);
    left = calculateLeft(percentageLeft);

}
