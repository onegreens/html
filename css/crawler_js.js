window.onload = function () {
    var pathName = document.location.pathname;
    var strs = pathName.split("/");
    var method = strs[strs.length-1];
    var str = method.substring(0,method.length-5);
    alert(str);
    //获取id为##的元素
    var div_view_child = document.getElementById("div_catchByUrl");
    //获取id为##的元素
    var div_view = document.getElementById("view");
    //添加子节点
    div_view.appendChild(div_view_child);
}

function getPath(){
    var str = "D:/mySource/html/html/css/boot1.html";
    var strs = str.split("/");
    var method = strs[strs.size-1];
    var real = method.substring(0,method.length-3);
}

function change(value, str) {
    var li_olds = document.getElementsByClassName("active");
    for (var i = 0; i < li_olds.length; i++) {
        li_olds[i].classList.remove("active");
    }
    var li_parent = value.parentNode;
    li_parent.className = "active";
    var div_view = document.getElementById("view");
    var div_save = document.getElementById("save");
    var childs = div_view.childNodes;
    for (var i = 0; i < childs.length; i++) {
        div_save.appendChild(childs[i]);
    }
    var div_view_child = document.getElementById(str);
    div_view.appendChild(div_view_child);
}


function check(id_value, name_value) {
    var form_cur = document.getElementById(id_value);
    var url = form_cur.querySelector("input[name='" + name_value + "']");
    if (url.value == "") {
        send_msg(form_cur, "地址不能为空")
    } else {
        var password = form_cur.querySelector("input[name='password']");
        if (password.value == "") {
            send_msg(form_cur, "密码不能为空")
        } else {
            var span_text = form_cur.querySelector("span.span_msg");
            if (span_text != null) {
                form_cur.removeChild(span_text);
            }
            form_cur.submit();
        }
    }
}
function reset_msg(id_value) {
    var form_cur = document.getElementById(id_value);
    var span_text = form_cur.querySelector("span.span_msg");
    if (span_text != null) {
        form_cur.removeChild(span_text);
    }
    form_cur.reset();
}

function send_msg(form_cur, msg) {
    var span_text = form_cur.querySelector("span.span_msg");
    if (span_text == null) {
        span_text = document.createElement("span");
        span_text.className = "span_msg";
        span_text.innerHTML = msg;
        form_cur.appendChild(span_text);
    } else {
        span_text.innerHTML = msg;
    }

}

