<!DOCTYPE html>
<head>
    <?php include 'include/head.inc.php' ?>
    <title>Project Cumulus Home Page</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <?php include 'include/header.inc.php' ?>
        <!-- <div id="lgn_main">
            <form method="post" name="frm_login">
                <input type="text" name="email">
                <input type="password" name="pass">
                <button id="btn_login">Login</button>
            </form>
        </div> -->
        <div id="content_container">
            <div id="main_logo_title">
                <img src="img/icons/logo.png" alt="Project Cumulus Logo" class="logo_big">
                <h1>Welcome to Project Cumulus</h1>
                <h2>Legal Wiki</h2>
            </div> <!-- /main_logo_title -->
            <div id="search">
                <form id="frm_search" action="search_engine.php" method="POST">
                    <div id="bsc_search">
                        <input type="text" id="txt_search" name="txt_search" placeholder="Search the legal code" />
                        <input type="submit" id="btn_search" name="btn_search" value="Search" />
                        <div id="adv_option">
                            <label for="cbk_adv">Advanced Search</label>
                            <input type="checkbox" id="cbk_adv" name="chk_adv" value="1" />
                        </div> <!-- /adv_option -->
                    </div> <!-- /bsc_search -->
                    <div id="adv_search">
                        <fieldset id="adv_fields">
                            <legend>Advanced Search</legend>
                            <label for="sel_code">Choose a Code:</label>
                            <select id="sel_code" name="sel_code">
                                <optgroup label="Federal"><option value="fcc" id="crim_code"></option></optgroup>
                                <optgroup label="Quebec"><option value="qcc" id="qcc" selected="selected">Quebec Civil Code</option></optgroup>
                                <optgroup label="Ontario"></optgroup>
                            </select>
                            <label for="sel_search">Search in:</label>
                            <input type="radio" name="">

                        </fieldset>
                    </div> <!-- /adv_search -->
                </form>
            </div> <!-- /search -->
            <div id="video">
                <p class="fancy">learn more...</p>
                <img id="img_vid" src="img/youtube.jpg" width="250" height="150">
            </div>
        </div> <!-- /content_container -->

        <?php include 'include/footer.inc.php' ?>
    <?php include 'include/closer.inc.php' ?>
</body>
</html>
