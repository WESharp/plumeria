    var xmlHttpRequest = null;
    
    function ajaxRequest()
    {
        if(window.ActiveXObject) // IE�����
        {
            xmlHttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
        }
        else if(window.XMLHttpRequest) // ��IE��������������
        {
            xmlHttpRequest = new XMLHttpRequest();
        }
        if(null != xmlHttpRequest)
        {
           
             /*
              * GET��ʽ�����������һ������
              */
            xmlHttpRequest.open("GET", "controller/demo.php?type=read", true);
             
            // ������״̬�仯ʱ�͵�������ص�����
            xmlHttpRequest.onreadystatechange = ajaxCallBack;
            
            // �����������һ������
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
    