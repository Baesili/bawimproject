// Create cookie
function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

// Delete cookie
function deleteCookie(cname) {
    const d = new Date();
    d.setTime(d.getTime() + (24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=;" + expires + ";path=/";
}

// Read cookie
function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

// Set cookie consent
function acceptCookieConsent(){
    deleteCookie('user_cookie_consent_noflag');
    setCookie('user_cookie_consent_noflag', 1, 30);
    document.getElementById("cookieNotice").style.display = "none";
    document.getElementById("cookieBG").style.background = "none";
    document.getElementById("cookieBG").style.display = "none";
    let cookie_consent_flag = getCookie("user_cookie_consent_flag");
    if(cookie_consent_flag != ""){
        alert("bawimCTF{c00k1e_w4l1s_4r3_w4ong}");
    }
}

let cookie_consent = getCookie("user_cookie_consent_noflag");
if(cookie_consent != ""){
    document.getElementById("cookieNotice").style.display = "none";
    document.getElementById("cookieBG").style.background = "none";
    document.getElementById("cookieBG").style.display = "none";
}else{
    document.getElementById("cookieNotice").style.display = "block";
    document.getElementById("cookieBG").style.background = "rgba(105,105,105,0.8)";
    document.getElementById("cookieBG").style.display = "block";
}