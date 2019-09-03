<!DOCTYPE html>
<html lang="en">
<style type="text/css">

/* ### Wrapper ###  */
       
  #wrapper {
    width: 100%;
    height: 1024;
    background-color: white;
  }
  #banner {
    width: 100%;
    height: 220px;
    background-color: #ff6633;
    color: black; 
    text-align: center; 
    vertical-align: middle;
    line-height: 220px
  }
  #menuTop {
    width: 100%;
    height: 35px;
    background-color: #336633;
    color: black; 
    text-align: center; 
    vertical-align: middle;
    line-height: 35px
  }


  
/* ##### Left Side Bar ##### */

.leftSideBar {
  width: 13em;
  margin: 2ex 0.75ex 0 0;
  padding: 0;
  float: left;
  clear: left;
  border: 1px solid #CCCCCC;
  background-color: grey; 
  height: 600px;
  border-radius: 25px;
}


.leftSideBar .sideBarTitle {
  color: black;
  background-color: #CCCCCC;
  font-weight: bold;
  margin: 1.25ex 1ex;
  padding: 0.9ex 1ex;
  border-radius: 25px;
}


.leftSideBar ul {
  list-style-type: none;
  list-style-position: outside;
  margin: 0 0 1em 0;
  padding: 0;
  color:black;
  width:12em;
}

.leftSideBar li {
  margin-left: 1.5ex;
  padding-top: 0.1ex;
  padding-right: 0;
  padding-bottom: 0.1ex;
  color:black;
}

.leftSideBar a {
  color: #0099FF;
  background-color: transparent;
  text-decoration: underline;
  font-weight: bold;
  margin-right: 30px;
  color:black;
}


.leftSideBar a:hover {
  color: #FF9933;
  text-decoration: none;
}

.leftSideBar .sideBarText {
  line-height: 1.5em;
  margin: 0;
  padding: 0 2ex 1em 2ex;
  color:black;
}

 .leftSideBar .sideBarText a {
  color:blue;
  margin: 0;
  padding: 0;
  font-style: italic;
}


.leftSideBar .more {
  text-decoration: none;
  text-align: left;
  margin: 0;
  padding: 0 2ex 1em 2ex;
  display: block;
}

.leftSideBar .more:hover {
  text-decoration: underline;
}

  /* ##### Right Side Bar ##### */

.rightSideBar {
  width: 13em;
  margin: 2ex 0.75ex 0 0;
  padding: 0;
  float: right;
  clear: right;
  border: 1px solid #CCCCCC;
  background-color: grey; 
  float: right;
  height: 600px;
  border-radius: 25px;
}


.rightSideBar .sideBarTitle {
  color: black;
  background-color: #CCCCCC;
  font-weight: bold;
  margin: 1.25ex 1ex;
  padding: 0.9ex 1ex;
  border-radius: 25px;
}

.rightSideBar a {
	color: #0099FF;
	background-color: transparent;
	text-decoration: underline;
	font-weight: bold;
	margin-right: 30px;

}

.rightSideBar a:hover {
	color: #FF9933;
	text-decoration: none;
}

.rightSideBar .sideBarText {
  line-height: 1.5em;
  margin: 0;
  padding: 0 2ex 1em 2ex;
  color: black; 
}

.rightSideBar .sideBarText a {
  color:green;
}

.rightSideBar .more {
  text-decoration: none;
  text-align: left;
  margin: 0;
  padding: 0 2ex 1em 2ex;
  display: block;
  font-size: 10pt;
  color: black;
}

.rightSideBar .more:hover {
  text-decoration: underline;
}




/* ### content ###  */

  #content{
    width: 63%;
    height: 538px;
    background-color: #CC66CC;
    margin-left: 235px;
    color: black; 
    text-align: center; 
    vertical-align: middle;
    border-radius: 25px;
    line-height: 438px
  }
  #footer{
    width: 64%;
    height: 75px;
    background-color: #336633;
    color: black; 
    text-align: center; 
    vertical-align: middle;
    border-radius: 25px;
    margin-left: 230px;
    line-height: 75px
  }




</style>
<body> 
  <div id="wrapper"> 
    <div id="banner" >
      banner 1024 * 220   
    </div>
    <div id="menuTop"> 
      menuTop 1024 * 35   
    </div>

    <div class="leftSideBar" style="margin-left: 5px;">
        <p class="sideBarTitle">Students</p>
        <ul>
          <li><a href="#introduction">Introductory</a> </li>
          <li><a href="#comment1" title="Improved cross-browser compatibility">Comment 1</a></li>
          <li><a href="#comment2" title="Modified stylesheets">Comment 2</a></li>
        </ul>

        <p class="sideBarTitle">Other Things</p>
        <ul>
          <li><a href="./index.php">List Students</a></li>
          <li><a href="./index.php">Feedback / Comments</a></li>
        </ul>

        <p class="sideBarTitle">Comments</p>
        <span class="sideBarText">
          Comments and constructive criticisms are welcome
          <a href="./index.php" title="Email form">via feedback form.</a>
        </span>
      </div>

    <div class="rightSideBar">

    	  <p class="sideBarTitle">Blogs</p>

          <div class="sideBarText"><strong>June</strong><br />
            <a href="./show_comments.php?month=1">June Blog</a>&nbsp;&nbsp;</div>
          <div class="sideBarText"><strong>July</strong><br />
            <a href="./show_comments.php?month=2">July Blog</a>&nbsp;&nbsp;</div>
          
          <p class="sideBarTitle">Tienda</p>

                    
          <a href="./tienda/index.php" class="more">Go Buy </a>

          
        </div>

    <div id="content"> 
       content 584 * 438
    </div>
    <div id="footer"> 
       footer 1024 * 75  
    </div>
</div>
</body> 
</html>