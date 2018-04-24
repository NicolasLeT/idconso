<html>
    <body>
        <div id="header">HEADER</div>
        <div >

            <ul id="menu">
                <li>
                    <a href="#">Section A</a>
                    <ul>
                        <li><a href="..." title="aller à la page 1">Page 1</a></li>
                        <li><a href="..." title="aller à la page 2">Page 2</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Section B</a>
                    <ul>
                        <li><a href="..." title="aller à la page 3">Page 3</a></li>
                        <li><a href="..." title="aller à la page 4">Page 4</a></li>
                    </ul>
                </li>
            </ul>

        </div>
        <div id="main">
            <div id="sidebar1">Sidebar 1</div>
            <div id="content">CONTENT</div>
            <div id="sidebar2">Sidebar 2</div>
        </div>
        <div id="footer">
            <div id="footer1">Footer 1</div>
            <div id="footer2">Footer 2</div>
            <div id="footer3">Footer 3</div>
        </div>
    </body>
</html>



<style>


    body {
        text-align: center;
    }

    #header {
        min-height:10%;
        background-color: red;
    }

    #menu {

        min-height:5%;
        background-color: yellow;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    #menu a {

        text-decoration: none;
    }

    
    
    
    

    #menu li {
        min-height:15%;
        width: 24%;
        display: inline-block;
    }

    #menu li:hover {
        background-color: #C9F2FF;
        color: #00627F;
        text-decoration: none;
    }


    #menu li:active {
        background-color: red;
    }

   
    #menu li:hover ul {
 max-height: 15em;
 }

 #menu ul {
         max-height: 0;
        overflow: hidden;
 position: absolute;
 top: 25px;
 left: 25px;
 width: 100%;
 }

#menu > li {
 position: relative;
 }
 
 
 
 
    #main {
        min-height:65%;
        display:table;
        width: 100%;
    }
    #sidebar1 {
        background-color: #cc66ff;
        width: 20%;
        display:table-cell;
    }

    #content {
        background-color: #66ccff;
        width: 60%;
        display:table-cell;
    }

    #sidebar2 {
        background-color: #cc66ff;
        width: 20%;
        display:table-cell;
    }


    #footer {
        width: 100%;
        min-height:15%;
        display:table;
    }

    #footer1 {
        background-color: #ff33cc;
        width: 33%;
        display:table-cell;
    }
    #footer2 {
        background-color: coral;
        width: 34%;
        display:table-cell;
    }
    #footer3 {
        background-color: #ff33cc;
        width: 33%;
        display:table-cell;
    }


</style>
