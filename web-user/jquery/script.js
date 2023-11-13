        var content1 = document.getelementById("content1");
        var content2 = document.getelementById("content2");
        var btn1 = document.getElementById("btn1");
        var btn2 = document.getElementById("btn2");

        function openDDK(){
            content1.style.tranform = "translateX(0)";
            content2.style.tranform = "translateX(100%)";
        }
        function openCDK(){
            content1.style.tranform = "translateX(100%)";
            content2.style.tranform = "translateX(0)";
        }