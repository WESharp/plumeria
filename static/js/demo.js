    var xmlHttpRequest = null;
    
    function ajaxRequest()
    {
        if(window.ActiveXObject) // IE浏览器
        {
            xmlHttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
        }
        else if(window.XMLHttpRequest) // 除IE以外的其他浏览器
        {
            xmlHttpRequest = new XMLHttpRequest();
        }
        if(null != xmlHttpRequest)
        {
           
             /*
              * GET方式向服务器发出一个请求
              */
            xmlHttpRequest.open("GET", "controller/demo.php?type=read", true);
             
            // 当发生状态变化时就调用这个回调函数
            xmlHttpRequest.onreadystatechange = ajaxCallBack;
            
            // 向服务器发出一个请求
            xmlHttpRequest.send();    
        }
    }
    
    function ajaxCallBack()
    {
        if(xmlHttpRequest.readyState == 4)
        {
            if(xmlHttpRequest.status == 200)
            {
                var content = xmlHttpRequest.responseText;
                document.getElementById("divResult").innerHTML = content;
            }
        }
    }
    