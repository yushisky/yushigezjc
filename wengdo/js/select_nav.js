/*下拉框 */
var s = document.getElementById("select");
var select = document.getElementById("select_nav");
s.onmouseover  = function(){
    select.style.display="block";
}
s.onmouseout = function(){
    select.style.display="none";
}
