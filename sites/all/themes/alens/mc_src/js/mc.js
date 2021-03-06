$(document).ready(function() {
    var myDate = new Date();
    var year = myDate.getFullYear();
    var month = myDate.getMonth();
    var date = myDate.getDate();
    var day = myDate.getDay();
    var hour = myDate.getHours();
    var mins = myDate.getMinutes();
    $("#date").html(year + "年" + month + "月" + date + "日");
    var dayStr = "";
    if (day == 0) {
        dayStr = "日";
    } else if (day == 1) {
        dayStr = "一";
    } else if (day == 2) {
        dayStr = "二";
    } else if (day == 3) {
        dayStr = "三";
    } else if (day == 4) {
        dayStr = "四";
    } else if (day == 5) {
        dayStr = "五";
    } else if (day == 6) {
        dayStr = "六";
    }
    $("#day").html("星期" + dayStr);
    if(hour < 10){
        hour = "0" + hour;
    }
    if(mins < 10){
        mins = "0" + mins;
    }
    $("#time").html(hour+":"+mins);
});

function create_topic() {
    $.ajax({
        type: 'post',
        url: '/alens/mc/generatetopicid',
        success: function(msg) {
            window.location.href = '/alens/mc/topic/upload/' + msg;
        },
        error: function() {
            alert('fail');
        }
    })
}

function create_footprint() {
    $.ajax({
        type: 'post',
        url: '/alens/mc/generatefootprintid',
        success: function(msg) {
            window.location.href = '/alens/mc/footprint/edit/' + msg;
        },
        error: function() {
            alert('fail');
        }
    })
}

function go_to_imagewall() {
    window.location.href = '/alens/mc/imagewall/upload/1000';
}

function go_to_managefootprint() {
    window.location.href = '/alens/mc/all/footprint';
}

function go_to_managetopic() {
    window.location.href = '/alens/mc/all/topic';
}

function go_to_home() {
    window.location.href = '/alens';
}


