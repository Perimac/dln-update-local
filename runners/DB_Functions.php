<?php

class DB_Functions
{
    private $conn;

    //Creating constructor
    function __construct()
    {
        require_once 'runners/DB_Connect.php';
        $dbConnect = new DB_Connection();
        $this->conn = $dbConnect->connect();
    }

    //Creating destructor
    function __destruct()
    {
    }

    //Retrieving All News Data Demo Project
    function getTechNews()
    {
        $stmt = $this->conn->query("SELECT * FROM news ORDER BY id DESC ");
        $allnews = array();
        while ($s = $stmt->fetch_assoc()) {
            array_push($allnews, $s);
        }
        return $allnews;
    }

    function getAllGeneralNews($subCategory)
    {
        $stmt_query = "SELECT * FROM news WHERE sub_categories='$subCategory' AND active='yes' ORDER BY id DESC";
        $stmt = $this->conn->query($stmt_query);
        $allGen = array();
        while ($s = $stmt->fetch_assoc()) {
            array_push($allGen, $s);
        }
        return $allGen;
    }

    //Retrieving All General News
    function getLatestNews()
    {
        $stmt_query = "SELECT * FROM news WHERE active='yes' ORDER BY id DESC";
        $stmt = $this->conn->query($stmt_query);
        $allGen = array();
        while ($s = $stmt->fetch_assoc()) {
            array_push($allGen, $s);
        }
        return $allGen;
    }

    function getTrendingNews()
    {
        $stmt_query = "SELECT * FROM news WHERE active='yes' ORDER BY views DESC LIMIT 10";
        $stmt = $this->conn->query($stmt_query);
        $allGen = array();
        while ($s = $stmt->fetch_assoc()) {
            array_push($allGen, $s);
        }
        return $allGen;
    }

    //Retrieving All OPINIONS AND FEATURES 
    function getLatestOpinionsFeatures($topstry1id, $topstry2id)
    {
        $stmt_query = "SELECT * FROM opinions_features WHERE active='yes' AND id != '$topstry1id' AND id != '$topstry2id' ORDER BY id DESC LIMIT 6";
        $stmt = $this->conn->query($stmt_query);
        $allOF = array();
        while ($s = $stmt->fetch_assoc()) {
            array_push($allOF, $s);
        }
        return $allOF;
    }

    function getTopStoryOpinionsFeatures()
    {
        $stmt_query = "SELECT * FROM opinions_features WHERE active='yes' AND isTopStory = true ORDER BY id DESC LIMIT 2";
        $stmt = $this->conn->query($stmt_query);
        $allOF = array();
        while ($s = $stmt->fetch_assoc()) {
            array_push($allOF, $s);
        }
        return $allOF;
    }


    public function getOpinionsFeaturesCategory($category, $limit, $offset)
    {
        $stmt_query = "SELECT * FROM opinions_features WHERE category='$category' AND active='yes' ORDER BY id DESC LIMIT $offset , $limit";
        $stmt = $this->conn->query($stmt_query);
        $ofc = array();
        while ($s = $stmt->fetch_assoc()) array_push($ofc, $s);
        return $ofc;
    }


    function getMostPopularOpinionFeatures($offset, $limit = 1)
    {
        $stmt_query = "SELECT * FROM opinions_features WHERE active='yes' ORDER BY views DESC LIMIT $offset, $limit";
        $stmt = $this->conn->query($stmt_query);
        $allMPOF = array();
        while ($s = $stmt->fetch_assoc()) {
            array_push($allMPOF, $s);
        }
        return $allMPOF;
    }

    function getOpinionsFeaturesAllCategory()
    {
        $stmt_query = "SELECT DISTINCT category FROM opinions_features WHERE active='yes'";
        $stmt = $this->conn->query($stmt_query);
        $allGen = array();
        while ($s = $stmt->fetch_assoc()) {
            array_push($allGen, $s);
        }
        return $allGen;
    }

    function getBusinessNews()
    {
        $stmt_query = "SELECT * FROM news WHERE sub_categories='Business' AND active='yes' ORDER BY id DESC";
        $stmt = $this->conn->query($stmt_query);
        $allGen = array();
        while ($s = $stmt->fetch_assoc()) {
            array_push($allGen, $s);
        }
        return $allGen;
    }



    //Retrieving All International Trending
    function getInternationalTrends()
    {
        $stmt_query = "SELECT * FROM news WHERE categories='International' AND active='yes' ORDER BY id DESC";
        $stmt = $this->conn->query($stmt_query);
        $allIntern = array();
        while ($s = $stmt->fetch_assoc()) {
            array_push($allIntern, $s);
        }
        return $allIntern;
    }

    public function getAllInternationalSub($subCategory)
    {
        $stmt_query = "SELECT * FROM news WHERE sub_categories='$subCategory' AND active='yes' ORDER BY id DESC";
        $stmt = $this->conn->query($stmt_query);
        $interAfricatrends = array();
        while ($s = $stmt->fetch_assoc()) array_push($interAfricatrends, $s);
        return $interAfricatrends;
    }


    public function getSomeHappilex()
    {
        $stmt_query = "SELECT * FROM happilex WHERE active='yes' ORDER BY id DESC LIMIT 15";
        $stmt = $this->conn->query($stmt_query);
        $memes = array();
        while ($m = $stmt->fetch_assoc()) array_push($memes, $m);
        return $memes;
    }


    public function getAllMemes()
    {
        $stmt_query = "SELECT * FROM happilex WHERE category= 'Memes' AND active='yes' ORDER BY id DESC";
        $stmt = $this->conn->query($stmt_query);
        $memes = array();
        while ($m = $stmt->fetch_assoc()) array_push($memes, $m);
        return $memes;
    }

    public function getAllInfographs()
    {
        $stmt_query = "SELECT * FROM happilex WHERE category= 'Infographs' AND active='yes' ORDER BY id DESC";
        $stmt = $this->conn->query($stmt_query);
        $infograph = array();
        while ($i = $stmt->fetch_assoc()) array_push($infograph, $i);
        return $infograph;
    }

    public function getAllArt()
    {
        $stmt_query = "SELECT * FROM happilex WHERE category= 'Art' AND active='yes' ORDER BY id DESC";
        $stmt = $this->conn->query($stmt_query);
        $art = array();
        while ($a = $stmt->fetch_assoc()) array_push($art, $a);
        return $art;
    }

    public function getTableRow($id)
    {
        $stmt_query = $this->conn->prepare("SELECT * FROM news WHERE id = ? AND active='yes'");
        $stmt_query->bind_param("s", $id);
        $stmt_query->execute();
        $result = $stmt_query->get_result()->fetch_assoc();
        $stmt_query->close();
        return $result;
    }


    //ALL POSTS PREVIEWS GOES HERE////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //ALL POSTS PREVIEWS GOES HERE////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //ALL POSTS PREVIEWS GOES HERE////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //ALL POSTS PREVIEWS GOES HERE////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //ALL POSTS PREVIEWS GOES HERE////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //ALL POSTS PREVIEWS GOES HERE////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //ALL POSTS PREVIEWS GOES HERE////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function getPreviewRow()
    {
        $stmt_query = $this->conn->prepare("SELECT * FROM preview WHERE id = '1' AND active='yes'");
        // $stmt_query->bind_param("s",);
        $stmt_query->execute();
        $result = $stmt_query->get_result()->fetch_assoc();
        $stmt_query->close();
        return $result;
    }

    public function getOpinFeatPreviewRow()
    {
        $stmt_query = $this->conn->prepare("SELECT * FROM preview_opinfeat WHERE id = '1' AND prev_active='yes'");
        $stmt_query->execute();
        $result = $stmt_query->get_result()->fetch_assoc();
        $stmt_query->close();
        return $result;
    }


    //ALL POSTS PREVIEWS GOES HERE////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //ALL POSTS PREVIEWS GOES HERE////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //ALL POSTS PREVIEWS GOES HERE////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //ALL POSTS PREVIEWS GOES HERE////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //ALL POSTS PREVIEWS GOES HERE////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //ALL POSTS PREVIEWS GOES HERE////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //ALL POSTS PREVIEWS GOES HERE////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    public function getHappRow($hapid)
    {
        $stmt_query = $this->conn->prepare("SELECT * FROM happilex WHERE id = ? AND active='yes'");
        $stmt_query->bind_param("s", $hapid);
        $stmt_query->execute();
        $result = $stmt_query->get_result()->fetch_assoc();
        $stmt_query->close();
        return $result;
    }




    public function getHistory()
    {
        $stmt_query = $this->conn->prepare("SELECT * FROM history WHERE id = '1' AND active='yes'");
        $stmt_query->execute();
        $result = $stmt_query->get_result()->fetch_assoc();
        $stmt_query->close();
        return $result;
    }



    public function getWebInfo()
    {
        $stmt_query = $this->conn->prepare("SELECT * FROM web_info WHERE id = '1' AND active='yes'");
        $stmt_query->execute();
        $result = $stmt_query->get_result()->fetch_assoc();
        $stmt_query->close();
        return $result;
    }


    // public function getSubCategory($subcat){
    //     $stmt_query = $this->conn->prepare("SELECT * FROM news WHERE sub_categories = ? AND active='yes'");
    //     $stmt_query->bind_param("s",$subcat);
    //     $stmt_query->execute();
    //     $result = $stmt_query->get_result()->fetch_assoc();
    //     $stmt_query->close();
    //     return $result;
    // }




    public function getDateFromString($date)
    {
        $thisyr = date("y");
        $year = date("y", $date);
        if ($thisyr == $year) {
            return  date("d M Y", $date);
        } else {
            return date("d M, Y", $date);
        }
    }

    public function searchResponse($column, $searchValue)
    {
        $stmt_query = "SELECT * FROM news WHERE $column LIKE '%$searchValue%' AND active='yes'";
        $stmt = $this->conn->query($stmt_query);
        $allIntern = array();
        while ($s = $stmt->fetch_assoc()) {
            array_push($allIntern, $s);
        }
        return $allIntern;
    }



    public function geGenRow($table, $column, $value)
    {
        $stmt_query = $this->conn->prepare("SELECT * FROM $table WHERE $column = ? AND active='yes'");
        $stmt_query->bind_param("s", $value);
        $stmt_query->execute();
        $result = $stmt_query->get_result()->fetch_assoc();
        $stmt_query->close();
        return $result;
    }


    public function subScribeNewsLetter($email)
    {
        $stat = $this->conn->prepare("INSERT INTO news_letter(email) VALUES (?)");
        $stat->bind_param("s", $email);
        $result = $stat->execute();
        $stat->close();

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }



    public function getAllSocialMedia()
    {
        $stmt_query = "SELECT * FROM social_media WHERE active = 'yes' ORDER BY plattform ASC";
        $stmt = $this->conn->query($stmt_query);
        $sMedia = array();
        while ($a = $stmt->fetch_assoc())
            array_push($sMedia, $a);
        return $sMedia;
    }



    public function getCourtDairy()
    {
        $stmt_query = "SELECT * FROM court_diary WHERE active = 'yes' ORDER BY diary_date ASC";
        $stmt = $this->conn->query($stmt_query);
        $sMedia = array();
        while ($a = $stmt->fetch_assoc())
            array_push($sMedia, $a);
        return $sMedia;
    }




    public function getAllJustices()
    {
        $stmt_query = "SELECT * FROM justices WHERE active = 'yes' ORDER BY justice_name ASC";
        $stmt = $this->conn->query($stmt_query);
        $justcs = array();
        while ($a = $stmt->fetch_assoc())
            array_push($justcs, $a);
        return $justcs;
    }


    public function getAllLegalWorks()
    {
        $stmt_query = "SELECT * FROM legal_works WHERE active = 'yes' ORDER BY id ASC";
        $stmt = $this->conn->query($stmt_query);
        $justcs = array();
        while ($a = $stmt->fetch_assoc())
            array_push($justcs, $a);
        return $justcs;
    }


    public function lawFirms()
    {
        $stmt_query = "SELECT * FROM law_firms WHERE active = 'yes' ORDER BY law_firm ASC";
        $stmt = $this->conn->query($stmt_query);
        $justcs = array();
        while ($a = $stmt->fetch_assoc())
            array_push($justcs, $a);
        return $justcs;
    }


    public function insetComment($name, $email, $comment, $newsId)
    {
        $stat = $this->conn->prepare("INSERT INTO comments(name,email,comment,news_id) VALUES (?,?,?,?)");
        $stat->bind_param("ssss", $name, $email, $comment, $newsId);
        $result = $stat->execute();
        $stat->close();

        if ($result) {
            $stmt = $this->conn->prepare("SELECT * FROM comments WHERE name=? AND  email=? AND comment = ? AND news_id = ? AND active='yes' ORDER BY id DESC LIMIT 1");
            $stmt->bind_param("ssss", $name, $email, $comment, $newsId);
            $stmt->execute();
            $exe = $stmt->get_result()->fetch_assoc();
            $stmt->close();
            return $exe;
        } else {
            return NULL;
        }
    }



    public function getComments($newsId)
    {
        $stmt_query = "SELECT * FROM comments WHERE news_id='$newsId' AND show_comment='yes' AND active = 'yes' ORDER BY id DESC";
        $stmt = $this->conn->query($stmt_query);
        $result = array();
        while ($s = $stmt->fetch_assoc()) {
            array_push($result, $s);
        }
        return $result;
    }
    

    public function insetHappilexComment($name, $email, $comment, $happilex_id)
    {
        $stat = $this->conn->prepare("INSERT INTO happilex_comments(name,email,comment,happilex_id) VALUES (?,?,?,?)");
        $stat->bind_param("ssss", $name, $email, $comment, $happilex_id);
        $result = $stat->execute();
        $stat->close();

        if ($result) {
            $stmt = $this->conn->prepare("SELECT * FROM happilex_comments WHERE name=? AND  email=? AND comment = ? AND happilex_id = ? AND active='yes' AND show_comment = 'yes' ORDER BY id DESC LIMIT 1");
            $stmt->bind_param("ssss", $name, $email, $comment, $happilex_id);
            $stmt->execute();
            $exe = $stmt->get_result()->fetch_assoc();
            $stmt->close();
            return $exe;
        } else {
            return NULL;
        }
    }

    public function getHappilexComments($hapiId)
    {
        $stmt_query = "SELECT * FROM happilex_comments WHERE happilex_id='$hapiId' AND active = 'yes' AND show_comment = 'yes' ORDER BY id DESC";
        $stmt = $this->conn->query($stmt_query);
        $result = array();
        while ($s = $stmt->fetch_assoc()) {
            array_push($result, $s);
        }
        return $result;
    }


    public function getResourcesCategories()
    {
        $stmt_query = "SELECT DISTINCT  res_category FROM resource WHERE active = 'yes'  ORDER BY res_category ASC";
        $stmt = $this->conn->query($stmt_query);
        $result = array();
        while ($s = $stmt->fetch_assoc()) {
            array_push($result, $s);
        }
        return $result;
    }

    public function getResourcesCategoryList($category)
    {
        $stmt_query = "SELECT * FROM resource WHERE active = 'yes' AND  res_category = '$category'  ORDER BY res_category ASC";
        $stmt = $this->conn->query($stmt_query);
        $result = array();
        while ($s = $stmt->fetch_assoc()) {
            array_push($result, $s);
        }
        return $result;
    }
}
