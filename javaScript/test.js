// alert('jQuery版本：' + $.fn.jquery);//输出jquery的版本
var path = "http://localhost:9097/vipvideo/VideoController/queryNotice.do"
function allowDrop() {
    var param;
    $.post(path,
        {
            param: ""
        },
        function (data, status) {
            $("#test").html(data.msg);
            handlerNotice(data)
            alert("Data: " + data + "\nStatus: " + status);
        });
}

function short() {
    var param = "http://www.ishuhui.com/cartoon/num/2-0-n-652";
    var  urls = "http://vurl.cn/create.php";
    $.post(urls,
        {
            url: param
        },
        function (data, status) {
            $("#test").html(data.msg);
            handlerNotice(data)
            alert("Data: " + data + "\nStatus: " + status);
        });
}

function handlerNotice(data) {
    var list = data.data;
    for (var i = 0; i < list.length; i++) {
        console.info(list[i]);
    }
}

function queryVideoRecommend(param) {
    var path = "http://localhost:9097/vipvideo/VideoController/queryRecommendByType.do"
    $.post(path,
        {
            type: param
        },
        function (data, status) {
            $("#test").html(data.msg);
            handlerRecommend(data)
            console.info(status);
        });
}

function handlerRecommend(data) {
    var list = data.data;
    var test = document.getElementById("test");
    var table = getTable(list);
    test.appendChild(table);
}
function getTable(list) {
    var table = document.createElement("table");
    var tr
    for (var i = 0; i < list.length; i++) {
        if (i % 3 == 0) {
            tr = document.createElement("tr");
        }
        tr.appendChild(getTd(list[i]));
        if (i % 3 == 0) {
            table.appendChild(tr);
        }
    }
    table.setAttribute("class", "recommend");
    return table;
}

function getTd(data) {
    var td = document.createElement("td");
    var img = document.createElement("img");
    img.src = data.vv_pic_url;
    td.appendChild(img);
    return td;

}

function clickVideoForList() {
    var video_id;
    var path_video = "http://localhost:9097/vipvideo/VideoController/s/clickVideoForList.do?=3220";
    $.post(path_video,
        {
            video_id: 3220
        },
        function (data, status) {
            $("#test").html(data.msg);
            handlerVide0(data.data);
            alert("Data: " + data + "\nStatus: " + status);
        });
}

function handlerVide0(data) {
    console.info(data.vv_title);
    $("#test").html(data.vi_content);
    
}