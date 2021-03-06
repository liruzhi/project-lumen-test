<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8"/>
    <!--    自动刷新-->
<!--    <meta http-equiv="refresh" content="3"/>-->
    <!--
    <meta http-equiv="Refresh" content="3;url=http://www.baidu.com" />
    -->
    <meta name="keywords" content="测试所有代码"/>
    <meta name="descrtions" content="测试代码"/>
    <meta http-equiv="x-ua-compatible" content="ie=IE9"/>
    <title>所有标签代码示例</title>
<!--    <link rel="icon" href="img/favicon.ico">-->
<!--    <link rel="stylesheet" href="css/common.css">-->
</head>
<body>
<div id="top"></div>
<h1>1）各种符号</h1>
空格：&nbsp;
大于号：&gt;
小于号: &lt;
<h1>2）段落换行</h1>
<p>我家中华人民</p>
<h1>3）h标签</h1>
<h1>h1</h1>
<h2>h2</h2>
<h3>h3</h3>
<h4>h4</h4>
<h5>h5</h5>
<h5>h6</h5>
<hr/>
<h1>4) 行内标签span</h1>
<span>1111</span>
<h1>5）a标签</h1>
<a href="http://www.baidu.com" target="_blank">点我跳百度</a>
<a href="#top">页内跳转到顶部：锚使用</a>
<h1>6)form表单</h1>
<form action="baidu.com" method="get" enctype="multipart/form-data">
    <!-- 用于点击用户名，使得关联的标签获取光标-->
    <label for="username">用户名：</label>
    <!-- 普通输入框，name是传输给后台变量名-->
    <input id="username" type="text" name="username" />
    <br/>
    <label for="password">密码：</label>
    <input id="password" type="password" name="password" />
    <br/>
    <input type="button" value="操作键钮">
    <br/>
    <!-- 单先框，name属性(name相同则互斥) value是传递的值-->
    <input type="radio" name="sex" value="0">男</input>
    <input type="radio" name="sex" value="1">女</input>
    <br/>
    <!-- input type="checkbox" 复选框value,name属性（批量获取数据）单先框，复选框设置默认旨-->
    <input type="checkbox" name="check" checked="checked" value="1">足球</input>
    <input type="checkbox" name="check"  value="2">蓝球</input>


    <br/>
    <label for="multi">多行标签：</label>
    <textarea id="multi" name="multi"  ></textarea>
    <br/>
    <label for="select">select：</label>
    <select id="select" name="select" size="2"> <!-- 默认size=1-->
        <option value="1" selected="selected">1</option><!--默认值-->
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <!--分组-->
    <br/>
    <p>分组</p>
    　<select >
        　　              <optgroup label="上海">1</optgroup><!--分组名称-->
        　　              <option value="2">2</option>
        <option value="3">3</option>
        　　          </select>
    <!-- 元素组合表单中的相关数据-->
    　　<fieldset>
        　　　　            <legend>登录</legend>
        　　　　            <label>用户名</label>
        <label>密码</label>
        　　              </fieldset>

    <input type="file" value="上传文件">
    <input type="reset" value="重值">
    <input type="submit" value="提交">
</form>

<h1>7) 表格</h1>
<table border="1">
    <caption>横跨两列的单元格</caption>
    <tr>
        <th>姓名</th>
        <th colspan="2">电话</th>
    </tr>
    <tr>
        <td>111</td>
        <td>222</td>
        <td>3333</td>
    </tr>
    <tr>
        <td rowspan="2">111</td>
        <td>222</td>
        <td>3333</td>
    </tr>
    <tr>
        <td>111</td>
        <td>222</td>

    </tr>
</table>
<br/>
<table border="1">
    <thead>
    <tr>
        <th>Month</th>
        <th>Savings</th>
    </tr>
    </thead>

    <tfoot>
    <tr>
        <td>Sum</td>
        <td>$180</td>
    </tr>
    </tfoot>

    <tbody>
    <tr>
        <td>January</td>
        <td>$100</td>
    </tr>
    <tr>
        <td>February</td>
        <td>$80</td>
    </tr>
    </tbody>
</table>

<h1>列表</h1>
<h2>无序列表</h2>
<ul>
    <li>111</li>
    <li>222</li>
</ul>
<h2>有序列表</h2>
<ol>
    <li>Coffe</li>
    <li>2222</li>
</ol>
<h2>自定义列表</h2>
<dl>
    <dt>11</dt><dd>black</dd>
    <dt>222</dt>
    <dd>white</dd>
</dl>
</body>
</html>