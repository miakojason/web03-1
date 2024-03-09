<h3 class="ct">新增預告片海報</h3>
<form action="./api/add_poster.php" method="post" enctype="multipart/form-data">
    <table class="ts">
        <tr>
            <td>預告片海報</td>
            <td><input type="file" name="poster" id=""></td>
            <td>預報片名</td>
            <td><input type="text" name="name" id=""></td>
        </tr>
    </table>
    <div class="ct">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>