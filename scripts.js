function trackVisit(productId) {
    // Track the most visited products
    var mostVisited = getCookie("mostVisited") ? JSON.parse(getCookie("mostVisited")) : {};
    mostVisited[productId] = (mostVisited[productId] || 0) + 1;
    setCookie("mostVisited", JSON.stringify(mostVisited), 7);

    // Track the last five visited products
    var lastVisited = getCookie("lastVisited") ? JSON.parse(getCookie("lastVisited")) : [];
    // If already exists in array, remove it
    lastVisited = lastVisited.filter(function(item) {
        return item !== productId;
    });
    // Add to the start of the array
    lastVisited.unshift(productId);
    // Keep only the last five
    lastVisited = lastVisited.slice(0, 5);
    setCookie("lastVisited", JSON.stringify(lastVisited), 7);
}

function setCookie(name, value, days) {
    var expires = "";
    var path = "/";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=" + path;
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

// Call this function on page load for individual product pages
function trackPageVisitOnLoad(productId) {
    trackVisit(productId);
}
