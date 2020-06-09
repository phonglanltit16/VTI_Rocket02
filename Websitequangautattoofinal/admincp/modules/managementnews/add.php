<form action="handle.php" method="post" enctype="multipart/form-data">

<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">Add news</div></td>
  </tr>
  <tr>
    <td width="176"><div align="left">Article name</div></td>
    <td width="106"><input type="text" name="articlename"></div></td>
  </tr>
  <tr>
    <td><div align="left">Img</div></td>
    <td><input type="file" name="img"></td>
  </tr>
  <tr>
    <td><div align="left">Summary</div></td>
    <td><textarea name="summary" cols="80" rows="5"></textarea></div></td>
  </tr>
  <tr>
    <td><div align="left">Content</div></td>
    <td><textarea name="content" cols="80" rows="25"></textarea></div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
    	<input type="submit" name="add" id="add" value="Add">
    </div></td>
  </tr>
</table>
</form>