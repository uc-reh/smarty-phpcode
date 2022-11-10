{config_load file='myconfig.conf'}
<html>

<head>
    <title>{#title#}</title>

    <style>
        ul li {
            list-style: none;
        }
    </style>
</head>

<body>

    <pre>
    {*Basic Syntax*}
    {*Im a comment*}

    {$smarty.config.info}

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

{*Embedding Vars in Double QUotes*}


{*Defining Functions*}

{function name=myfunc}
                        <ul>
                            <li class="items1">FUnciton Called</li>
                            <li class="items2">FUnciton Called</li>
                            <li class="items3">FUnciton Called</li>
                            <li class="items4">FUnciton Called</li>
                            <li class="items5">FUnciton Called</li>
                        </ul>
{/function}

{myfunc}


{*Math Examples*}
<p>This is the Math example : </p>
<p>{$newmath+7}</p>


{*variabeles, and arrays*}
<p >Phone Number : {$contact}</p>


<p>Using array variabeles : </p>
<p>Below are my complete details : </p>
{$details.name}
{$details.mobile}
{$details.company}
{$details.college}
<p>Home:</p>{$details.address.Home}
<p>Office:</p>{$details.address.office}

<button onclick="newalert()">Clicke me</button>
{*Smarty Reserved Variables*}
<p>reserved variable</p>

{$smarty.now|date_format:'%Y-%m-%d %H:%M:%S'}

{*Variable Modifiers*}
<p>Orignal Srting : {$article}</p>

<p>Use of Cat is </p>
{$article|cat:' yesterday.'}
<p>The character count is :</p>
{$article|count_characters}
<p>The character count with sapces is :</p>
{$article|count_characters:true}

{*Escapes*}
<p>Escapes : </p>
<p>Orginal string : </p>
{$weescape}

<p>Using escape html : </p>
{$weescape|escape:'htmlall'}

{*Use of indent*}
<p>Use of indent : </p>
<p>Simple:</p>
{$useindent}
<p>using indent:</p>
{$useindent|indent}
<p>using indent :10 =></p>
{$useindent|indent:30}

{*Chapter 6. Combining Modifiers*}
<p>This is just fr combining upper and replace tag : </p>

{$multiplefunc|upper|replace:'X':'n'}

{*Chapter 7 : built in functions *}

<p>Assigning a variable in tpl and calling it here : </p>
{$myName='Abdul Rehman'}
<p>This is my Name : </p>
{$myName}

{*Use of append fucntion*}

{append var='myName1' value='Abdul' index='first'}
{*Below is the another way to do it*}
{append 'myName1' 'Rehman' index='last'}

<p>Printing my first and last name using append</p>

<p>My name is {$myName1.first}  {$myName1.last} </p>


{*use of assign*}

{assign var='newVar' value='This is the value of new variable'}
{assign 'newVar1' 'Another way to assign a new variable'}

<p>Printing variables made using assign function</p>
{$newVar}  <br>  {$newVar1}

{*Use of capture function*}

<p>This is the use of capture : </p>
{capture append='cap1'}Hello{/capture}
{capture append='cap1'}World{/capture}

{foreach $cap1 as $text}
                        <p>This is printed using capture : {$text}</p>
{/foreach}


{*use of loops*}

<p>We are printing the list using loops</p>
{for $liItem=$start to $end}
                        <li>List Item : {$liItem}</li>
                        {forelse}
                        No iteration
{/for}

{*uses of conditions*}

{if $conditions%2==0}
                        <p>The Number {$conditions} is even</p>
{else}
                        <p>The Number is oddd</p>
{/if}


{*use of no cache*}
<p>Today's date is : </p>
{nocache}
{$smarty.now|date_format}
{/nocache}

{*use of PHP tag*}
{php}
echo "Hello PHP<br>";
echo "The above and this is writeen using echo in php";
{/php}

{*Use of Section Loops*}

{section name='customer' loop='$cid'}

    <li>id : {$cid[customer]}</li>

{/section}

{*Chapter 8. Custom Functions*}

<p>This is the use of fetch : </p>
{fetch file='https://google.com'}

<p>This is the use of HTML checkboxes function :   </p>

{html_checkboxes name='emid' options=$epids selected=$epids1 speretaor='<br/>'}

<p> use of html image function : </p>

{html_image file='https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Elon_Musk_Royal_Society_%28crop2%29.jpg/330px-Elon_Musk_Royal_Society_%28crop2%29.jpg'}


<p> Use of html_select function : </p>

{html_options name='myselect' options=$epids slected=$epids1}

<p> use of html select date function : </p>

{html_select_date}


<p> use of math equation functin : </p>

{math equation = "x*y" x=55 y=2}


{*Chapter 14 : Classes*}
<p> using class assignbyref : </p>
{$refasn}
        </pre>

    </body>
    <script>
        function newalert() {
            alert("Hello");
        }
    </script>

    </html>