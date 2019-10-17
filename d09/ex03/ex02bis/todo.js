var cookies = CookiesToJSON();
var maxTaskID = maxTask();

function maxTask() {
    var max = 0;
    var cookie_array = Object.keys(cookies);
    for (var i = 0; i < cookie_array.length; i++) {
        if (parseInt(cookie_array[i].replace("task", "")) > max)
            max = parseInt(cookie_array[i].replace("task", ""));
    }
    return (max);
}
function addToList() {
    var task = prompt("Input your task");
    if (task !== '') {
        var newTask = "<div onclick=delItem(this)" + " id=task" + (maxTaskID + 1) + ">" + task + "</div>";
        addCookie(task, maxTaskID + 1);
        $( "#ft_list" ).prepend( newTask );
        maxTaskID += 1;
    } else {
        alert("Please input a task");
    }
}
function delItem(item) {
    var expiration = "; expires = Thu, 01 Jan 1970 00:00:00 GMT";
    if (confirm("Are you sure you want to delete the selected item?"))
        item.remove();
    document.cookie = $(item).attr('id') + "=" + " " + expiration;
}
function CookiesToJSON() {
    var JSON_Cookies = new Object();
    var cookie_array = document.cookie.split(";");
    for (var i = 0; i < cookie_array.length; i++) {
        var cookie = cookie_array[i].trim().split("=");
        JSON_Cookies[cookie[0]] = cookie[1];
    }
    return (JSON_Cookies);
}
function loadCookie() {
    for (cookie in cookies) {
        if (cookies.hasOwnProperty(cookie) && typeof cookies[cookie] !== 'undefined') {
            var newTask = "<div onclick=delItem(this)" + " id=" + cookie +">" + cookies[cookie] + "</div>";
            $( "#ft_list" ).prepend( newTask );
        }
    }
}
function addCookie(task, maxTaskID) {
    document.cookie = "task" + maxTaskID + "=" + task;
}
$("button").click(addToList);
$(document).ready(loadCookie);