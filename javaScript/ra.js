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
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(params);//格式："fname=Bill&lname=Gates"
}

function updateVideoMessage() {
    var this_url = "http://localhost:9090/oara/OARAController" + "/addOara.do";
    var params = "oa_name=微信号名称&oa_wechat_id=26aaa661233&si_name=王五nibushi是号主&oai_fans_num=1558555"
    updateVideoMessage_callback(this_url, params);

}

function updateVideoMessage_callback(url, params) {
    loadXMLDoc(url, function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var this_data = xmlhttp.responseText;
            var dataObj = eval("(" + this_data + ")");
            var re_code = dataObj.code;

            alert(dataObj.msg);

        }
    }, params);
}

function test() {
    var this_url = "http://localhost:9090/oara/OARAController" + "/addOara.do";
    $.post(this_url,
        {
            oa_name: "DonaldDuck"
        },
        function (data, status) {
            alert("Data: " + data + "\nStatus: " + status);
        });
}

function test1() { 
    var search = "张三";
    var pageNum = 1;
    var type = 1;
    var pageSize = 1;
    
    var json = {
        "search" : search,
        "pageNum" : pageNum,
        "type" : type,
        "pageSize" : pageSize
    };
    var this_url = "http://localhost:9090/oara/s/OaController" + "/searchOa.do";

    $.ajax({
        url : this_url,
        type : "POST",
        async : true,
        data : json,
        dataType : 'json',
        success : function(data) {
            alert(data.msg);              
        }
    });
}  