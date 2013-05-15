<?php
    function my_autoloader($class){
        require "classes/". $class . ".class.php";
    }

    spl_autoload_register('my_autoloader');
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <?php include 'include/head.inc.php' ?>
    <script src="ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="css/section-admin.css">
    <script>
    //     window.onload = function() {
    //         CKEDITOR.replace( 'sec_txt' );
    //     };
    </script>
</head>
<body>



<div id="container">

    <?php include 'include/header.inc.php' ?>

    <div id="content_container">

        <div id="add_section">
            <form id="frm_add_section" name="frm_add_sections" method="post">
                <label for="sel_law">Law: </label>
                <select name="sel_law" id="sel_law" data-table="laws">
                    <option selected="selected">-- Choose a Law --</option>
                    <?php
                        $law_class = new LawDB();
                        $arr_laws = $law_class->selLaws();
                        foreach($arr_laws as $l) : ?>
                        <option class="law" value="<?php echo $l->getLaw_id(); ?>"><?php echo $l->getLaw_name(); ?></option>
                    <?php endforeach; ?>
                </select>
                <br />
                <label for="sel_book">Book: </label>
                <select name="sel_book" id="sel_book" data-table="books">
                    <option selected="selected">-- Choose a Law First --</option>
                </select>
                <br />
                <label for="sel_title">Title: </label>
                <select name="sel_title" id="sel_title" data-table="titles">
                    <option selected="selected">-- Choose a Book First --</option>
                </select>
                <input type="button" class="btn_add_meta" id="btn_add_title" value="add">
                <input type="button" class="btn_refresh" value="refresh">
                <br />
                <label for="sel_ch">Chapter: </label>
                <select name="sel_ch" id="sel_ch" data-table="chapters">
                    <option selected="selected">-- Choose a Title First --</option>
                </select>
                <input type="button" class="btn_add_meta" id="btn_add_ch" value="add">
                <input type="button" class="btn_refresh" value="refresh">
                <br />
                <label for="sel_div">Division: </label>
                <select name="sel_div" id="sel_div" data-table="divisions">
                    <option selected="selected">-- Choose a Chapter First --</option>
                </select>
                <input type="button" class="btn_add_meta" id="btn_add_div" value="add">
                <input type="button" class="btn_refresh" value="refresh">
                <br />
                <label for="sel_sub_div">Sub-Division: </label>
                <select name="sel_sub_div" id="sel_sub_div" data-table="subdivisions">
                    <option selected="selected">-- Choose a Division First --</option>
                </select>
                <input type="button" class="btn_add_meta" id="btn_add_sub_div" value="add">
                <input type="button" class="btn_refresh" value="refresh">
                <br />
                <label for="sec_num">Section #: </label>
                <input type="text" id="sec_num" name="sec_num">
                <br/>
                <label for="sec_title">Section Title: </label>
                <input type="text" id="sec_title" name="sec_title">
                <br/>
                <label for="sec_text">Section Text: </label>
                <textarea class="ckeditor" id="sec_text" name="sec_text"></textarea>
                <br/>
                <label for="enact_yr">Year of Enactment: </label>
                <input type="text" id="enact_yr" name="enact_yr">
                <br/>
                <label for="enact_bill">Bill enacted: </label>
                <input type="text" id="enact_bill" name="enact_bill">
                <br>
                <label for="enact_sec">Section Enacted: </label>
                <input type="text" id="enact_sec" name="enact_sec">
                <br>
                <input type="button" id="btn_ins_sec" value="submit">
            </form>
        </div> <!-- /add_section -->
        <p class="test"></p>

        <section>
            <table id="tbl_all_sections">
                <thead>
                    <tr>
                        <th>Sec #</th>
                        <th>Title</th>
                        <th>Section</th>
                        <th>Book</th>
                        <th>Title</th>
                        <th>Chapter</th>
                        <th>Division</th>
                        <th>Sub Division</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sec_class = new SectionDB();
                    $sec_array = $sec_class->selAllFromSections();
                    foreach($sec_array as $s) : ?>
                    <tr>
                        <?php foreach($s as $i){
                            switch($i){
                                case is_a($i, 'section'):
                                    echo "<td>" . $i->getSec_Num() . "</td>";
                                    echo "<td>" . $i->getSec_Title(). "</td>";
                                    echo "<td>" . $i->getSec_Txt() . "</td>";
                                break;
                                case is_a($i, 'book'):
                                    if($i->getBook_Id() > 0){
                                        echo "<td>" . $i->getBook_Num(). ". " . $i->getBook_Title(). "</td>";
                                    }else{
                                        echo "<td></td>";
                                    }
                                break;
                                case is_a($i, 'title'):
                                    if($i->getTitle_Id() > 0){
                                        echo "<td>" . $i->getTitle_Num(). ". " . $i->getTitle_Title(). "</td>";
                                    }else{
                                        echo "<td></td>";
                                    }
                                break;
                                case is_a($i, 'chapter'):
                                    if($i->getCh_Id() > 0){
                                        echo "<td>" . $i->getCh_Num() . ". " . $i->getCh_Title() . "</td>";
                                    }else{
                                        echo "<td></td>";
                                    }
                                break;
                                case is_a($i, 'division'):
                                    if($i->getDiv_Id() > 0){
                                        echo "<td>" . $i->getDiv_Num(). ". " . $i->getDiv_Title(). "</td>";
                                    }else{
                                        echo "<td></td>";
                                    }
                                break;
                                case is_a($i, 'subdivision'):
                                    if($i->getDiv_Id() > 0){
                                        echo "<td>" . $i->getSub_div_num(). ". " . $i->getSub_div_title(). "</td>";
                                    }else{
                                        echo "<td></td>";
                                    }
                                break;
                            }
                        }
                        foreach($s as $i)
                        {
                            if(is_a($i, 'section')){
                                echo "<td><button class='sec_edit' data-value=". $i->getSec_num(). ">Edit</button></td>
                                    <td><button class='sec_del' data-value=". $i->getSec_num() . ">Delete</button></td>";
                            }
                        }

                    ?>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </section>

    </div> <!-- /content_container -->

    <div id="add" style="display:none;">
        <form id="add_meta" method="post" name="add_meta">
            <h3 id="add_meta_head"></h3>
            <h5 id="add_meta_message"></h5>
            <br />
            <input type="hidden" id="meta_id" name="meta_id">
            <input type="hidden" id="meta_table" name="meta_table"
            <label for="title_num">Number: </label>
            <input type="text" id="add_num" name="title_num">
            <br/>
            <label for="title_title">Title: </label>
            <input type="text" id="add_title" name="title_title">
        </form>
    </div> <!-- /add -->

    <div id="update" style="display:none;">
        <form method="post" id="frm_update_sec">

        </form>
    </div>
    <?php require_once 'include/footer.inc.php' ?>
    <?php require_once 'include/closer.inc.php' ?>
    <script type="text/javascript" src="js/vendor/jquery-ui-1.10.1.custom.js"></script>
    <script type="text/javascript" src="js/section-admin.js"></script>

</body>
</html>
