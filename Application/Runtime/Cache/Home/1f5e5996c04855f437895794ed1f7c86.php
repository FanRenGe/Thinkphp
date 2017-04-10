<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>
            添加
        </title>
    </head>
    <body>
        <form action="/thinkphp_3.2.3_full/index.php/Home/Form/insert" method="post">
            <label for="title">
                标题：
            </label>
            <input name="title" type="text"/>
            <br/>
            <label for="content">
                内容：
            </label>
            <textarea cols="45" name="content" rows="5">
            </textarea>
            <br/>
            <input name="submit" type="submit" value="提交"/>
        </form>
    </body>
</html>