

<form action='insert.php' method='post'>


이름 : <input type="text" name='name'><br/>
나이 :
<select name='age'>
    <?php for($i=1;$i<=100;$i++){?>
    <option value='<?=$i?>'><?=$i?>세</option>
    <?php }?>
    </select><br/>
성별 :
<select name='sex'>
    <option value='1'>남자</option>
    <option value='2'>여자</option>
</select><br/>

<input type='submit' value="등록하기">

</form>


