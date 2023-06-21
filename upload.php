<html>
     <head>
     <meta http-equiv='Content-Type' content='text/html; charset=gb2312'>
     <title>文件上传</title>
     <LINK href=editor/css/default.css rel=stylesheet>
     </head>
     <BODY bgColor=menu topmargin=15 leftmargin=15 >
     <CENTER>
     <FIELDSET align=left>
     <LEGEND align=left>文件上传：</LEGEND>
     <form name='form' method='post' action='?' enctype='multipart/form-data' >
     <input type='hidden' name='MAX_FILE_SIZE' value='2040000'><br> 
     文件：<input type='file' name='userfile' size=23><br> 说明：<input type='text' name='note' size=25> <input type='submit' name='submit' value='上传' ><br> 
     宽度：<input type='text' name='width' size=5 value=300> 高度：<input type='text' name='height' size=5 value=300>
     </form>
     </fieldset>
     </body>
     </html>