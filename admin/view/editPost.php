<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/froala_editor.css">
  <link rel="stylesheet" href="css/froala_style.css">
  <link rel="stylesheet" href="css/plugins/code_view.css">
  <link rel="stylesheet" href="css/plugins/colors.css">
  <link rel="stylesheet" href="css/plugins/emoticons.css">
  <link rel="stylesheet" href="css/plugins/image_manager.css">
  <link rel="stylesheet" href="css/plugins/image.css">
  <link rel="stylesheet" href="css/plugins/line_breaker.css">
  <link rel="stylesheet" href="css/plugins/table.css">
  <link rel="stylesheet" href="css/plugins/char_counter.css">
  <link rel="stylesheet" href="css/plugins/video.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

  <style>
      #id
      {
          width:
          margin: auto;
          text-align: left;
          height: 80%;
          background-color: red;
      }
      input[type=text]
      {
        width: 100%;
        margin-bottom: 1%;
      }
  </style>
</head>

<body>
  <center><h3>Welcome, <?=$_SESSION['adminID'];?></h3></center>
  <center><h2>WRITE YOUR ARTICLE HERE</h2></center>
  <form action="index.php" method="post" enctype="multipart/form-data">
    <input type="text" name="articleId"     value="<?=$data['articleId']?>"       readonly/><br>
    <input type="text" name="title"         value="<?=$data['articleTitle']?>"    required/><br>
    <input type="file" name="headerImage"   value="<?=$data['headerimage']?>"     required/><br><br>
    <input type="text" name="writer"        value="<?=$data['articleWriter']?>"   required/><br>
    <input type="text" name="fblink"        value="<?=$data['fblink']?>"          required/><br>
    <input type="text" name="linkedinlink"  value="<?=$data['linkedinlink']?>"    required /><br>
    <input type="text" name="timerequired"  value="<?=$data['timetoread']?>"      required /><br>
    <input type="text" name="summary"       value="<?=$data['summary']?>"         required /><br>
    Catagory: 
    <select name="catagory" value="<?=$data['catagory']?>">
        <option value="1">Resume & CV Writing</option>
        <option value="2">Resume & CV Samples</option>
        <option value="3">Career Development</option>
        <option value="4">Interview Tips</option>
        <option value="5">Miscelleneous</option>
    </select>
    <p>WRITE YOUR ARTICLE BELOW</p>
    <p><i>Use h3 tag for headers and p for paragraphs and a for anchor links</i></p>
    <p><i>Give a horizontal line after header</i></p>
    <textarea name="content" id="content" value="<?=$data['articleBody']?>" required></textarea><br>
    <center>
      <input type="submit" name="editArticle" value="SUBMIT">
      <input type="reset"  name="reset"  value="RESET">
    </center>
  </form>
  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="js/froala_editor.min.js"></script>
  <script type="text/javascript" src="js/plugins/align.min.js"></script>
  <script type="text/javascript" src="js/plugins/colors.min.js"></script>
  <script type="text/javascript" src="js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="js/plugins/emoticons.min.js"></script>
  <script type="text/javascript" src="js/plugins/font_size.min.js"></script>
  <script type="text/javascript" src="js/plugins/font_family.min.js"></script>
  <script type="text/javascript" src="js/plugins/image.min.js"></script>
  <script type="text/javascript" src="js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="js/plugins/line_breaker.min.js"></script>
  <script type="text/javascript" src="js/plugins/link.min.js"></script>
  <script type="text/javascript" src="js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="js/plugins/table.min.js"></script>
  <script type="text/javascript" src="js/plugins/video.min.js"></script>
  <script type="text/javascript" src="js/plugins/url.min.js"></script>
  <script type="text/javascript" src="js/plugins/entities.min.js"></script>
  <script type="text/javascript" src="js/plugins/char_counter.min.js"></script>
  <script type="text/javascript" src="js/plugins/inline_style.min.js"></script>
  <script type="text/javascript" src="js/plugins/save.min.js"></script>

  <script>
    $(function(){
      $('textarea#content').froalaEditor({
        fullPage: true
      })
    });
    $('textarea#content').froalaEditor({
  htmlRemoveTags: ['script', 'style', 'base']
});
  </script>
</body>
</html>