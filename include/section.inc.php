<?php
// require_once '../classes/Dbconn.class.php';
// require_once '../classes/section.class.php';
// require_once '../classes/section_db.class.php';
// require_once '../classes/law.class.php';
// require_once '../classes/law_db.class.php';
// require_once '../classes/book.class.php';
// require_once '../classes/book_db.class.php';
// require_once '../classes/title.class.php';
// require_once '../classes/title_db.class.php';
// require_once '../classes/chapter.class.php';
// require_once '../classes/chapter_db.class.php';
// require_once '../classes/division.class.php';
// require_once '../classes/division_db.class.php';
// require_once '../classes/sub_division.class.php';
// require_once '../classes/sub_division_db.class.php';
// require_once '../classes/related.class.php';
// require_once '../classes/related_db.class.php';
// require_once '../classes/source.class.php';
// require_once '../classes/sourcedb.class.php';

function my_autoloader($class) {
    include '../classes/' . $class . '.class.php';
}

spl_autoload_register('my_autoloader');

$section = new SectionDB();
$sec_num = $_POST['secNum'];
$curr_sec = $_POST['currSec'];
$src_url = $_POST['srcUrl'];

$command = $_POST['command'];

var_dump($section);

switch($command)
{
    case "select":
        try
        {
            $this_section = $section->selAllFromSection($sec_num);
            $result = $section->getSectionAll($this_section);

            foreach($result as $r){
            echo"<h1> Section " . $r['sec_num'] . "</h1>".
                "<h5>" . $r['sec_title'] . "</h5>".
                "<p>" . $r['sec_txt'] . "</p>".
                "<p class='enact'>[" . $r['enact_yr'] . ", " . $r['enact_bill'] . ", " . $r['enact_sec'] . "]</p>";
            }
        }catch(Exception $ex){
            echo "<p>Error: Please try again</p>";
        }
    break;
    case "confirm":
        $related = new RelatedDB();
        $add_rel = $related->addRelatedSec($curr_sec, $sec_num);
        echo "Success!!";
    break;
    case "addSource":
        //check valid url Regex from http://regexlib.com/REDetails.aspx?regexp_id=96
        //$pattern = "(http|ftp|https):\/\/[\w\-_]+(\.[\w\-_]+)+([\w\-\.,@?^=%&amp;:/~\+#]*[\w\-\@?^=%&amp;/~\+#])?";

        //if(isset($curr_sec) && isset($src_url) && preg_match($pattern, $src_url));
        //{

        //RAN INTO PROBLEMS WITH MY REGEX AT THE LAST MINUTE AN DIDN"T HAVE TIME TO FIX

            $source = new SourceDB();
            $add_src = $source->addSource($curr_sec, $src_url);
            echo "success!!";
        //}
    break;
}




