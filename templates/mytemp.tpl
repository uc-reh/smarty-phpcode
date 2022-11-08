<html>
<head>
<title>Info</title>
<style>
    ul li{
        list-style: none;
    }
</style>

</head>
<body>

<pre>
User Information:

Name: {$name}
College: {$College}
Date: {$smarty.now|date_format:"%b %e, %Y"}
<!-- Time : {$currenttime} --> 
{strip}

{foreach $lists as $list}
<ul>
<li>List : {$list}</li>
</ul>
{/foreach}
{/strip}

<p>Third Element of an Array is : {$lists[3]}</p>
<p>This is a message {counter}</p>
<p>This is another message {counter}</p>
<p>"{counter}+9"</p>

<!-- <p>Server info is : {$samrty.server.SERVER_NAME}</p> -->

<p>{assign var=foo value=[16,26,36]}</p>
{foreach $foo as $i}
<p>The value of Foo is : {$i}</p>
{/foreach}

<p>{assign var=foo1 value=substr($bar,1,8)}</p>
<p>{$foo1}</p>


{assign var=newvar value=$newvar1|strlen}

<p>This is the lenght of the string : {$newvar}</p>

<p>This is the date selector :</p>
{html_select_date display_days=true}



<!-- <p>{$smarty.config}</p> -->


</pre>
{*Im a comment*}
</body>
</html>