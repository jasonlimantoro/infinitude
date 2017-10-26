// custom carousel-profile
window.showProfile = showProfile;
window.plusProfile = plusProfile;

var next = true;
var profileNumber = 0;
showProfile(profileNumber);

function mmod (n, m) {
    // n mod m
    return ((n % m) + m) % m;
}

function plusProfile(n) {
    if (n == -1) {
        next = false;
    }
    else {
        next = true;
    }
    showProfile(profileNumber += n, next);
}

function currentProfile(n) {
    showProfile(profileNumber = n);
}

function showProfile(n, next=true) {
    // the profile for each person (array)
    let profiles = document.getElementsByClassName('profile');
    let mod = profiles.length;
    
    // To keep sliding
    profileNumber = mmod(n, mod);

    addClassArray = [mmod(profileNumber, mod), mmod((profileNumber+1), mod), mmod((profileNumber+2), mod)];
    for (var i = 0; i < addClassArray.length; i++) {
        // Display three profiles at a time
        $(profiles[addClassArray[i]]).addClass('show-profile');
    }
    if (next) {
        // remove the rightmost profile
        removeprofileIndex = mmod((addClassArray[0] - 1), mod);
    }
    else {
        // remove the leftmost profile
        removeprofileIndex = mmod((addClassArray[addClassArray.length - 1] + 1), mod);
    }
    $(profiles[removeprofileIndex]).removeClass('show-profile');
}
