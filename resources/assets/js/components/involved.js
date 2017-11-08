window.currentInvolved = currentInvolved;

var involvedIndex = 0;
showInvolved(involvedIndex);

function currentInvolved(n) {
    involvedIndex = n;
    showInvolved(n);
}

function showInvolved(n) {
    involveds = document.getElementsByClassName('involved');
    boxes = document.getElementsByClassName('box-content');

    $(involveds[n]).addClass('show-involved');
    $(boxes[n]).addClass('active');

    for (var i = 0; i < involveds.length; i++) {
        if (i != n) {
            $(involveds[i]).removeClass('show-involved');
            $(boxes[i]).removeClass('active');
        }
    }

}