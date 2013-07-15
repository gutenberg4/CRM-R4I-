<?php

define("DEFAULT_LIMIT", 7);

function array_get($array, $key, $default=null) {
    if (isset($array[$key])) {
        return $array[$key];
    } else {
        return $default;
    }
}

function get_entries_count($table) {
    $query = "SELECT count(*) FROM $table";
    if ($_SESSION['rol'] == 'user') {
        $query .= " WHERE proprietar = $_SESSION[id_user]";
    }
    $result = mysql_query($query);
    return mysql_result($result, 0);
	
	
}function get_all_clienti() {
    $query = "SELECT  DISTINCT id_client FROM clienti";
    
    $result = mysql_query($query);
	$result = count($result);
    return $result;
}

function get_current_page_number($table, $default_limit=DEFAULT_LIMIT) {
    $offset = array_get($_GET, 'offset', 0);
    $limit = array_get($_GET, 'limit', $default_limit);

    $page = $offset / $limit + 1;
    return $page;
}

function get_pages_count($table, $default_limit=DEFAULT_LIMIT) {
    $limit = array_get($_GET, 'limit', $default_limit);
    $entries_count = get_entries_count($table);
    $pages = (intval($entries_count / $limit)) + 1 - ($entries_count % $limit === 0 ? 1 : 0);
    return $pages;
}

function get_entries_for_current_page($table, $default_limit=DEFAULT_LIMIT) {
    $offset = array_get($_GET, 'offset', 0);
    $limit = array_get($_GET, 'limit', $default_limit);
    $sort = array_get($_GET, 'sort', '');
    $query = "SELECT * FROM $table";
    if ($_SESSION['rol'] == 'user') {
        $query .=  " WHERE proprietar = $_SESSION[id_user]";
    }
    if ($sort != '') {
        $query .= " ORDER BY $sort ASC";
    }
    $query .= " LIMIT $offset, $limit";
    $result = mysql_query($query);

    return $result;
}

function get_pagination($table) {
    $current_page = get_current_page_number($table);
    $offset = array_get($_GET, 'offset', 0);
    $limit = array_get($_GET, 'limit', DEFAULT_LIMIT);
    $sort = array_get($_GET, 'sort', '');
    $s = "";
    if ($current_page > 1) {
        $s .= '<a href="?offset=0&limit='. $limit .'&sort='. $sort .'" class="page-far-left"></a>';
        $s .= '<a href="?offset='. (string)($offset - $limit). '&limit='. $limit .'&sort='. $sort .'" class="page-left"></a>';
    }
    $s .= '<div id="page-info">Page <strong>' . $current_page .'</strong> /'. get_pages_count($table).'</div>';
    if ($current_page < get_pages_count($table)) {
        $s .= '<a href="?offset='. (string)($offset + $limit) .'&limit='. $limit .'&sort='. $sort .'" class="page-right"></a>';
        $s .= '<a href="?offset='. (string)(get_entries_count($table) - $limit). '&limit='. $limit .'&sort='. $sort .'" class="page-far-right"></a>';
    }
    return $s;
}
?>
