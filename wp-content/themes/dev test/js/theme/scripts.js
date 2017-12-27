/*
generic cookies function, use in scripts.js in child theme:

  -->create cookie on event:
    createCookie('cookieName','cookieValue',integer number of days);
  -->read cookie:
    var hasCookie = readCookie('cookieName');
  -->check for cookie on event:
    if (x) {
      //do something
    }
  
*/
function createCookie(name, value, days) {
  var expires = "",
    date;
  if (days) {
    date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
  var nameEQ = name + "=",
    ca = document.cookie.split(';'),
    i,
    c;
  for (i = 0; i < ca.length; i++) {
    c = ca[i];
    while (c.charAt(0) === ' ') {
      c = c.substring(1, c.length);
    }
    if (c.indexOf(nameEQ) === 0) {
      return c.substring(nameEQ.length, c.length);
    }
  }
  return null;
}

function eraseCookie(name) {
  createCookie(name, "", -1);
}

$(document).ready(function () {
  "use strict";
  
  var thisYear = new Date().getFullYear();

  //output current year into an element with class="year-current"
  $('.year-current').text(thisYear);
  
});
