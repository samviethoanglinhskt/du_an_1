<?php
// các function của danh mục
include "pdo.php";
function insert_danhmuc($tendanhmuc)
{
    $sql = "INSERT INTO tb_danh_muc(ten_danh_muc) VALUES ('$tendanhmuc')";
    pdo_execute($sql);
}

function loadAll()
{
    $sql = "SELECT * FROM tb_danh_muc ORDER BY 	id_danh_muc DESC";
    $listdm = pdo_query($sql);
    return $listdm;
}

function delete_danhmuc($id_danh_muc)
{
    $sql = "DELETE FROM tb_danh_muc WHERE id_danh_muc = '$id_danh_muc'";
    pdo_query($sql);
}

function loadOne($id_danh_muc)
{
    $sql = "SELECT * FROM tb_danh_muc WHERE id_danh_muc = '$id_danh_muc'";
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($id_danh_muc, $ten_danh_muc)
{
    $sql = "UPDATE tb_danh_muc SET ten_danh_muc='$ten_danh_muc' WHERE id_danh_muc = '$id_danh_muc'";
    pdo_execute($sql);
}
// các function của ca sân

function loadAllCASAN()
{
    $sql = "SELECT * FROM tb_ca_san ORDER BY id_ca DESC";
    $listcasan = pdo_query($sql);
    return $listcasan;
}

function insert_casan($ten_ca, $thoi_gian_bd, $thoi_gian_kt)
{
    $sql = "INSERT INTO tb_ca_san(ten_ca, thoi_gian_bd, thoi_gian_kt) VALUES ('$ten_ca','$thoi_gian_bd','$thoi_gian_kt')";
    pdo_execute($sql);
}

function delete_casan($id_ca)
{
    $sql = "DELETE FROM tb_ca_san WHERE id_ca = '$id_ca'";
    pdo_query($sql);
}

function loadOneCASAN($id_ca)
{
    $sql = "SELECT * FROM tb_ca_san WHERE id_ca = '$id_ca'";
    $cs = pdo_query_one($sql);
    return $cs;
}
function update_casan($id_ca, $ten_ca, $thoi_gian_bd, $thoi_gian_kt)
{
    $sql = "UPDATE tb_ca_san SET ten_ca = '$ten_ca', thoi_gian_bd='$thoi_gian_bd',thoi_gian_kt = '$thoi_gian_kt'  WHERE id_ca = '$id_ca'";
    pdo_execute($sql);
}
?>