<?php
function get_posts($conn) {
    $sql = "SELECT * FROM posts ORDER BY created_at DESC";
    $result = mysqli_query($conn, $sql);
    $posts = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $posts[] = $row;
    }
    return $posts;
}

function get_post($conn, $id) {
    $id = intval($id);
    $sql = "SELECT * FROM posts WHERE id = " . $id;
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}
?>
