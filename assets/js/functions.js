function showTab(evt, tab) {
    var i, x, tablinks;
    var x = document.getElementsByClassName("tab");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-white", "");
    }
    document.getElementById(tab).style.display = "block"; 
    evt.currentTarget.className += " w3-white"; 
}
// function openAccordion(id) {
//     var x = document.getElementById(id);
//     if (x.className.indexOf("w3-show") == -1) {
//         x.className += " w3-show";
//     } else { 
//         x.className = x.className.replace(" w3-show", "");
//     }
// }

