<h2>안녕 나는 박현준</h2>
<input type=text>
<input type=button value=확인>

<input type=text>
<input type=button value=button1 onClick=clickBtn1()>
<input type=button value=button2 onClick=clickBtn2()>
<input id=result>


<script>
    function clickBtn1() {
        document.getElementById('result').value = "Click Button 1";
    }

    function clickBtn2() {
        document.getElementById('result').value = "Click Button 2";
    }
</script>