<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <form method="post" action="/thinkphp_3.2.3_full/index.php/Home/Form/update">
        <label for="title">标题：</label>
        <input name="title" type="text" value="<?php echo ($vo["title"]); ?>" />
        <br/>
        <label for="content">内容：</label>
        <textarea cols="45" name="content" rows="5"><?php echo ($vo["content"]); ?></textarea>
        <br/>
        <input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
        <input name="submit" type="submit" value="提交" />
    </form>
</body>

</html>