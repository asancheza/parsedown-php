<?php

include "Parsedown.php";

echo '
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta content="Fast and extensible Markdown parser in PHP. It supports GitHub Flavored Markdown and it adheres to CommonMark." name="description">
        <link href="http://fonts.googleapis.com/css?family=Ubuntu|Roboto+Mono" rel="stylesheet" type="text/css">
        <link href="/reset.css" rel="stylesheet" type="text/css" />
        <link href="/main.css" rel="stylesheet" type="text/css" />
        <script src="/keymaster/keymaster.min.js" type="text/javascript"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.js" type="text/javascript"></script>
        <script src="http://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>
        <title>Better Markdown Parser in PHP - Demo</title>
        <style type="text/css">
<style>
    textarea {
        -moz-box-sizing: border-box;
        -webkit-font-smoothing: subpixel-antialiased;
        -webkit-box-sizing: border-box;
        background: #fff;
        border: none;
        box-sizing: border-box;
        color: #333;
        font-family: "Roboto Mono", monospace;
        font-size: 16px;
        height: 100%;
        line-height: 28px;
        margin: 0;
        padding: 20px;
        resize: none;
        vertical-align: top;
        width: 100%;
    }

    textarea:focus {
        outline: none;
    }

    button {
        background: #fff;
        border: none;
        color: #379;
        cursor: pointer;
        line-height: 24px;
        text-align: left;
        padding: 20px;
        width: 100%;
    }

    div.title {
        background: #222;
        color: #777;
        padding: 20px;
        position: absolute;
    }

    div.title strong {
        color: #fff;
        font-weight: normal;
    }

    div.output {
        background: #222;
        bottom: 289px;
        color: #fff;
        overflow: auto;
        padding: 20px;
        position: absolute;
        top: 128px;
    }

    div.time {
        background: #222;
        bottom: 225px;
        color: #777;
        position: absolute;
        padding: 20px;
    }

    div.time strong {
        color: #fff;
        font-weight: normal;
    }

    div.output-source {
        background: #222;
        bottom: 0;
        height: 185px;
        overflow: auto;
        padding: 20px;
        position: absolute;
    }

</style>';

$Parsedown = new Parsedown();
echo "<body>".$Parsedown->text(file_get_contents('README.md'))."</body>";

?>


