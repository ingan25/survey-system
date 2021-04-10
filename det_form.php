<html>
    <meta charset="utf-8">
    <head>
        <style>
            table{ margin-top: 20px;
                   }
            #gd{background-color: #408000;}
            #jj{border-bottom: 2px solid gray;
                border-top: 2px solid #408000;}
            #hh{color:white;
                border-top: 1px solid #408000;}
        </style>
        <title>
        전공 인기쟁이 설문조사 
        </title>
        <script>
        function update(){
            var vote;
            var length = document.detsur_form.choice.length;
            for(var i=0; i<length; i++){
                if( document.detsur_form.choice[i].checked==true){
                    vote = document.detsur_form.choice[i].value;
                    break;
                }
            }
            if(i==length){
                alert("좋아하는 캐릭터를 선택하세요.");
                return;
            }
         window.open("update_db.php?choice="+vote, "Windet", "left=300px, top=200px, width=200px, height=250px, status=no, scrollbar");   
        }
          
        function result(){
            window.open("result.php","ReW","left=300, top=200, width=300, height=380");
        }
        </script>
    </head>
    <body>
        <center>
        <br>
        <font size="4"><b>캐릭터 인기쟁이 설문조사</b></font>
        <hr>        
        
        <table border=0>
            <form name="detsur_form" method="post">
            <tr id="gd" class="omg"> <td id="hh"> ■캐릭터을 선택하세요.. </td> </tr>
            <tr> <td    class="omg"> <input type="radio" name="choice" value="det1">1. 케인 </td> </tr>
            <tr> <td    class="omg"> <input type="radio" name="choice" value="det2">2. 타지리  </td> </tr>
            <tr> <td    class="omg"> <input type="radio" name="choice" value="det3">3. 김성근 </td> </tr>
            <tr> <td    class="omg"> <input type="radio" name="choice" value="det4">4. 바퀴퀴님 </td> </tr>
            <tr> <td    class="omg"> <input type="radio" name="choice" value="det5">5. 노인 </td> </tr>
            <tr> <td id="jj"  class="omg"> <input type="button" name="vote_btn" value="캐릭터 선택"
                                                  onclick="update()">
                
                                     <input type="button" name="res_btn" value="결과보기"
                                                  onclick="result()"> </td></tr>
            </form>
        </table>
    </center>
            </body>
        
</html>