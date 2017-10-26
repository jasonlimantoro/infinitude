// custom carousel-profile
window.showProfile = showProfile;
window.plusProfile = plusProfile;

var slideProfile = 1;
var next = true;
showProfile(slideProfile);

function plusProfile(n) {
    if (n == -1) {
        next = false;
    }
    else {
        next = true;
    }
    showProfile(slideProfile += n, next);
}

function currentProfile(n) {
    showProfile(slideProfile = n);
}

function showProfile(n, next=true) {
    // the profile for each person (array)
    let profiles = document.getElementsByClassName('profile');
    
    // To keep sliding
    if (n == profiles.length-1) {slideProfile = 1}
    if (n < 1) {slideProfile = profiles.length}

    for (var i = slideProfile - 1; i <= slideProfile + 1; i++) {
        // Display three profiles at a time
        $(profiles[i]).addClass('show-profile');
    }
    if (next) {
        $(profiles[slideProfile-2]).removeClass('show-profile');
    }
    else {
        $(profiles[slideProfile+1]).removeClass('show-profile');
    }
}