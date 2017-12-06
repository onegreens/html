//异步
function loadXMLDoc(url, cfunc, params) {
    if (window.XMLHttpRequest) {// IE7+, Firefox, Chrome, Opera, Safari 代码
        xmlhttp = new XMLHttpRequest();
    }
    else {// IE6, IE5 代码
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = cfunc;
    xmlhttp.open("POST", url, true);
    xmlhttp.setRequestHeader("Content-type","application/json");  
    xmlhttp.send(params);//格式："fname=Bill&lname=Gates"
}

//search.do返回值
function search_callback(url, params) {
    loadXMLDoc(url, function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            alert(xmlhttp.responseText);
        }
    }, params);
}

function test1(){
    var this_url = "http://localhost:9090/oara/s/OaController" + "/searchOa.do";
    
    var json = {
        search : "张三",
        pageNum : 1,
        type : 1,
        pageSize : 1
    };
    search_callback(this_url,JSON.stringify(json) );
}