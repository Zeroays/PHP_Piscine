var taskCnt = 0;
var list = document.getElementById("ft_list");
var tasks = document.cookie.split(';');
var len = (tasks == "") ? 0 : tasks.length;
window.onload = getCookie();

function addCookie(value, node) {
    var newIndex = checkCookie();
    node.setAttribute("id", "task" + newIndex);
    document.cookie = "task" + newIndex.toString() + "=" + value;
    len += 1;
}
function checkCookie() {
    var nums = [];
    var update = document.cookie.split(';');
    for (var i = 0; i < len; i++) {
        nums.push(update[i].substring(update[i].indexOf('=') - 1, update[i].indexOf('=')));
        console.log(update[i].trim().substring(4, update[i].indexOf('=') - 1));
    }
    return (nums == "" ? 1 : Math.max(...nums) + 1);
}
function getCookie() {
    for (var i = 0; i < len; i++) {
        var item = newItem(tasks[i].substring(tasks[i].indexOf('=') + 1));
        item.setAttribute("id", tasks[i].substring(0, tasks[i].indexOf('=')).trim());
        list.insertBefore(item, list.firstChild);
    }
}
function delItem(item) {
    if (confirm("Delete selected item?")) {
        var expiration = "; expires = Thu, 01 Jan 1970 00:00:00 GMT"
        item.parentNode.removeChild(item);
        document.cookie = item.getAttribute("id") + "=" + " " + expiration;
        len -= 1;
    }
}
function newItem(value) {
    var div = document.createElement("div");
    var node = document.createTextNode(value);
    div.setAttribute("onclick", "delItem(this)");
    div.appendChild(node);
    return (div);
}
function setItem() {
    var inputValue = prompt("Input your task");
    var taskNode = newItem(inputValue);
    if (inputValue == '') {
        alert("Please input your task...");
    } else {
        (inputValue !== null) ? addCookie(inputValue, taskNode) : inputValue;
        (inputValue !== null) ? list.insertBefore(taskNode, list.firstChild) : inputValue; 
    }
}