<?php
include 'runners/DB_Functions.php';
$db = new DB_Functions();

if (isset($_POST['opinion_features_category']) && isset($_POST['offset']) && isset($_POST['limit'])) {
    $response = array('error' => FALSE);
    $offset = strip_tags(htmlentities($_POST['offset']));
    $limit = strip_tags(htmlentities($_POST['limit']));
    $category = strip_tags(htmlentities($_POST['opinion_features_category']));

    $result = $db->getOpinionsFeaturesCategory($category,$limit,$offset);
    if ($result) {
        $response['error'] = FALSE;
        $response['msg'] = 'success';
        $response['result'] = $result;
    } else {
        $response['error'] = TRUE;
        $response['msg'] = "Unnknown Error!";
    }
    echo json_encode($response);
}


if (isset($_POST['opinion_features_mot_popular']) && isset($_POST['offset']) && isset($_POST['limit'])) {
    $response = array('error' => FALSE);
    $offset = strip_tags(htmlentities($_POST['offset']));
    $limit = strip_tags(htmlentities($_POST['limit']));


    $result = $db->getMostPopularOpinionFeatures($offset, $limit);
    if ($result) {
        $response['error'] = FALSE;
        $response['msg'] = 'success';
        $response['result'] = $result;
    } else {
        $response['error'] = TRUE;
        $response['msg'] = "Unnknown Error!";
    }
    echo json_encode($response);
}
