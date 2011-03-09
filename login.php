<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log In</title>
<style type="text/css"> 
<!-- 
body  {
	background: #666666;
	margin: 0; /* it's good practice to zero the margin and padding of the body element to account for differing browser defaults */
	padding: 0;
	text-align: center; /* this centers the container in IE 5* browsers. The text is then set to the left aligned default in the #container selector */
	color: #000000;
	font-family: "Comic Sans MS", cursive;
	font-size: medium;
	display: inline;
}

/* Tips for Elastic layouts 
1. Since the elastic layouts overall sizing is based on the user's default fonts size, they are more unpredictable. Used correctly, they are also more accessible for those that need larger fonts size since the line length remains proportionate.
2. Sizing of divs in this layout are based on the 100% font size in the body element. If you decrease the text size overall by using a font-size: 80% on the body element or the #container, remember that the entire layout will downsize proportionately. You may want to increase the widths of the various divs to compensate for this.
3. If font sizing is changed in differing amounts on each div instead of on the overall design (ie: #sidebar1 is given a 70% font size and #mainContent is given an 85% font size), this will proportionately change each of the divs overall size. You may want to adjust based on your final font sizing.
*/
.twoColElsLtHdr #container {
	width: 46em;  /* this width will create a container that will fit in an 800px browser window if text is left at browser default font sizes */
	background: #FFFFFF;
	margin: 0 auto; /* the auto margins (in conjunction with a width) center the page */
	border: 0px none #000000;
	text-align: left; /* this overrides the text-align: center on the body element. */
} 
.twoColElsLtHdr #header { 
	background: #DDDDDD; 
	padding: 0 10px;  /* this padding matches the left alignment of the elements in the divs that appear beneath it. If an image is used in the #header instead of text, you may want to remove the padding. */
} 
.twoColElsLtHdr #header h1 {
	margin: 0; /* zeroing the margin of the last element in the #header div will avoid margin collapse - an unexplainable space between divs. If the div has a border around it, this is not necessary as that also avoids the margin collapse */
	padding: 10px 0; /* using padding instead of margin will allow you to keep the element away from the edges of the div */
}

/* Tips for sidebar1:
1. Be aware that if you set a font-size value on this div, the overall width of the div will be adjusted accordingly.
2. Since we are working in ems, it's best not to use padding on the sidebar itself. It will be added to the width for standards compliant browsers creating an unknown actual width. 
3. Space between the side of the div and the elements within it can be created by placing a left and right margin on those elements as seen in the ".twoColElsLtHdr #sidebar1 p" rule.
*/
.twoColElsLtHdr #sidebar1 {
	float: left;
	width: 30em; /* since this element is floated, a width must be given */
	background: #EBEBEB; /* the background color will be displayed for the length of the content in the column, but no further */
	padding: 15px 0; /* top and bottom padding create visual space within this div */
	font-size: 9px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.twoColElsLtHdr #sidebar1 h3, .twoColElsLtHdr #sidebar1 p {
	margin-left: 10px; /* the left and right margin should be given to every element that will be placed in the side columns */
	margin-right: 10px;
}

/* Tips for mainContent:
1. If you give this #mainContent div a font-size value different than the #sidebar1 div, the margins of the #mainContent div will be based on its font-size and the width of the #sidebar1 div will be based on its font-size. You may wish to adjust the values of these divs.
2. The space between the mainContent and sidebar1 is created with the left margin on the mainContent div.  No matter how much content the sidebar1 div contains, the column space will remain. You can remove this left margin if you want the #mainContent div's text to fill the #sidebar1 space when the content in #sidebar1 ends.
3. To avoid float drop, you may need to test to determine the approximate maximum image/element size since this layout is based on the user's font sizing combined with the values you set. However, if the user has their browser font size set lower than normal, less space will be available in the #mainContent div than you may see on testing.
4. In the Internet Explorer Conditional Comment below, the zoom property is used to give the mainContent "hasLayout." This avoids several IE-specific bugs that may occur.
*/
.twoColElsLtHdr #mainContent {
	margin: 0 1.5em 0 13em; /* the right margin can be given in ems or pixels. It creates the space down the right side of the page. */
} 
.twoColElsLtHdr #footer { 
	padding: 0 10px; /* this padding matches the left alignment of the elements in the divs that appear above it. */
	background:#DDDDDD;
} 
.twoColElsLtHdr #footer p {
	margin: 0; /* zeroing the margins of the first element in the footer will avoid the possibility of margin collapse - a space between divs */
	padding: 10px 0; /* padding on this element will create space, just as the the margin would have, without the margin collapse issue */
}

/* Miscellaneous classes for reuse */
.fltrt { /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class should be placed on a div or break element and should be the final element before the close of a container that should fully contain a float */
	clear:both;
    height:0;
    font-size: 1px;
    line-height: 0px;
}
--> 
</style><!--[if IE]>
<style type="text/css"> 
/* place css fixes for all versions of IE in this conditional comment */
.twoColElsLtHdr #sidebar1 { padding-top: 30px; }
.twoColElsLtHdr #mainContent { zoom: 1; padding-top: 15px; }
/* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */
</style>
<![endif]-->
</head>

<body class="twoColElsLtHdr">

<div id="container">
  <div id="header">
    <h1><img src="UTA1.jpg" width="227" height="158" alt="University of Texas at Arlington" /><img src="planetarium_front.jpg" width="320" height="155" /><img src="uta_mavericks_3.jpg" width="167" height="158" /></h1>
  <!-- end #header --></div>
  <div id="sidebar1">
    <h3>About CSE</h3>
    <p> The department is recognized for its teaching and research excellence.   In recent years, it has averaged about $3 million annually in new   research funding.</p>
<p> Our <a href="http://www.cse.uta.edu/about/#" id="FALINK_3_0_2">graduates</a> are providing engineering leadership in America's top   		technology companies and government agencies, and serve as leading   		researchers and educators.</p>
    <p> The department's internationally recognized faculty is engaged in   		breakthrough research across the leading areas of computer science and   		engineering, with research sponsored by government and industry.</p>
    <p> More than 1,200 students - 700 undergraduates and 500 master's and Ph.D.   		students - are enrolled. The department is part of the UTA's College of   		Engineering, the third-largest <a href="http://www.cse.uta.edu/about/#" id="FALINK_1_0_0">engineering college</a> in Texas.</p>
    <p>&nbsp;</p>
  <!-- end #sidebar1 --></div>
  <div id="mainContent"></div>
	<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats -->
  <table width="466" height="405" border="0" align="right" cellpadding="0">
	<tr>
      <td><table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
  <tr>
    <form name="form1" method="post" action="process_login.php">
      <td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
        <tr>
          <td colspan="3"><strong>Enter your Log In Credentials </strong></td>
        </tr>
        <tr>
          <td width="78">Username</td>
          <td width="6">:</td>
          <td width="294"><input name="myusername" type="text" id="myusername" /></td>
        </tr>
        <tr>
          <td>Password</td>
          <td>:</td>
          <td><input name="mypassword" type="password" id="mypassword" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input type="submit" name="Submit" value="Login" /></td>
        </tr>
      </table></td>
    </form>
  </tr>
</table>
        <blockquote>
          <blockquote>
            <blockquote>
              <p>&nbsp;<a href="process_forgot_password.php">Forgot your password?</a></p>
            </blockquote>
          </blockquote>
      </blockquote></td>
	</tr>
  </table>
  <br class="clearfloat" />
   <div id="footer">
    <p>&nbsp;</p>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>