
window.onload=function() {
  var links = document.links; 
  for (var i=0, n=links.length;i<n;i++) {
    if (links[i].className==="arrow-down") {
      links[i].href="#php";
      break; 
    }
  }
}