<!DOCTYPE html>
<html lang="zh-Hang-TW">
<!--上方社群列icon開始-->
<!--上方社群列icon結束-->
<!--上方導覽列開始-->
<!--上方導覽列結束-->
<!--商品分類看板開始-->
<!--商品分類看板結束-->
<!--麵包屑開始-->
<!--麵包屑結束-->
<!--左側下拉選單開始-->
<!--左側下拉選單結束-->
<!--推薦商品開始-->
<!--推薦商品結束-->
<!--服務簡介開始-->
<!--服務簡介結束-->
<!--產品細項區塊開始-->
<!--產品細項區塊結束-->
<!--底部資訊條開始-->
<!--底部資訊條結束-->
<!--floor開始-->
<!--floor結束-->
<?php
include "db.php";

$id = $_GET['id'];
$sql = "SELECT * FROM `html_mod` WHERE `id`=$id ";
$res = mysqli_query($link, $sql);
$arr = mysqli_fetch_array($res);

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@產品頁面細項標題@</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel='stylesheet' href='../../css/style.css'>
    <!-- SmartMenus jQuery Bootstrap 4 Addon CSS -->
    <link href="../../addons/bootstrap-4/jquery.smartmenus.bootstrap-4.css" rel="stylesheet">
</head>



<body>
    <!--上方社群列icon開始-->
    <div class="bg-secondary py-1 text-right">
        <div class="container">
            <a href="#" class="text-white mr-2">
                <i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
            </a>
            <a href="#" class="text-white">
                <i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <!--上方社群列icon結束-->

    <!--上方導覽列開始-->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand mr-4" href="#">
                <img src="https://cdn.ready-market.com/1/48d29a5d//Templates/pic/logo.png?v=1d52dd4f" alt="享曆工業股份有限公司 - 專業生產 | 端子台 | 保險絲座 | 固態繼電器 | 礙子 | 塑膠製品">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  navbar-collapse-hide" id="navbarSupportedContent" style="margin-left: 200px;">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#首頁#">首頁
                            <span class="sr-only"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#公司介紹#">公司介紹</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#產品介紹#">產品介紹</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#端子台#">端子台</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#軌道端子台#">軌道端子台</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#柵欄端子台#">柵欄端子台</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#陶瓷端子台#">陶瓷端子台</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#組合式雙層端子台#">組合式雙層端子台</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#雙排端子台#">雙排端子台</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#印刷電路板端子台#">印刷電路板端子台</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#電源端子台#">電源端子台</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#電源併接端子台#">電源併接端子台</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#柱螺栓端子台#">柱螺栓端子台</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#柱螺栓併接端子台#">柱螺栓併接端子台</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#歐規端子台#">歐規端子台</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#保險絲座&保險絲盒#">保險絲座&保險絲盒</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#保險絲座#">保險絲座</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#保險絲盒#">保險絲盒</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#">保險絲夾</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#FC-5063CSXX系列 保險絲夾#">FC-5063CSXX系列 保險絲夾</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#FC-5063BTXX系列 保險絲夾#">FC-5063BTXX系列 保險絲夾</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#FC-5063BNXX系列 保險絲夾#">FC-5063BNXX系列 保險絲夾</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#FC-4063CSXX系列 保險絲夾#">FC-4063CSXX系列 保險絲夾</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#FC-4063BTXX系列 保險絲夾#">FC-4063BTXX系列 保險絲夾</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#FC-4063XXBN系列 保險絲夾#">FC-4063XXBN系列 保險絲夾</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#保險絲#">保險絲</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#F-0632G-XX系列 250V 6x30 玻璃管保險絲#">F-0632G-XX系列 玻璃管保險絲</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#F-1038C-XX系列 500V 10x38 陶瓷管保險絲#">F-1038C-XX系列 陶瓷管保險絲</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#固態繼電器#">固態繼電器</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#單相固態繼電器#">單相固態繼電器</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#三相固態繼電器#">三相固態繼電器</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#絕緣礙子#">絕緣礙子</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#低壓絕緣礙子#">低壓絕緣礙子</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#高壓絕緣礙子#">高壓絕緣礙子</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#匯流排#">匯流排</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#零件#">零件</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#軌道#">軌道</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#煞車擋片#">煞車擋片</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#保險絲盒斷電指示燈#">保險絲盒斷電指示燈</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#保險絲盒軌道轉接器#">保險絲盒軌道轉接器</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#散熱器#">散熱器</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#風扇#">風扇</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#短路片#">短路片</a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#端子台快插#">端子台快插</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#15A 快插#">15A 快插</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#25A 快插#">25A 快插</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#35A 快插#">35A 快插</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#最新消息#">最新消息</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#消息一#">@消息一@</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#消息二#">@消息二@</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#常見問題#">常見問題</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#常見問題一#">@常見問題一@</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#常見問題二#">@常見問題二@</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#常見問題三#">@常見問題三@</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#常見問題四#">@常見問題四@</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#常見問題五#">@常見問題五@</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#常見問題六#">@常見問題六@</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#聯絡我們#">聯絡我們</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--上方導覽列結束-->


    <!--商品分類看板開始-->
    <section>
        <div class="container">
            <div class="row text-white">
                <div class="jumbotron jumbotron-fluid jumbotron-bg">
                    <div class="container">
                        <div class="bg-lighter p-2">
                            <h1 class="display-4">@看板名稱@</h1>
                            <p class="lead">@享曆工業股份有限公司 享曆工業是超過35年歷史的專業製造廠，主要產品有電機用端子台、接線座、連接器、保險絲座、熔絲盒、固態繼電器等配電器材。@</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--商品分類看板結束-->

    <section>
        <div class="container py-3 text-dark bg-light">
            <!--麵包屑開始-->
            <ol class="breadcrumb breadcrumb-a pt-2 mb-1">
                <li>
                    <a href=" #首頁# "> 首頁 </a>
                </li>
                <li>
                    <a href=" #產品介紹# "> 產品介紹 </a>
                </li>
                <li>
                    <a href=" #產品系列# "> @產品系列@ </a>
                </li>
                <li class="active">
                    <a> @產品頁面細項@ </a>
                </li>
            </ol>
            <!--麵包屑結束-->


            <!--左側下拉選單開始-->

            <div class="row py-2">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="h5">選單</div>
                    <HR class="mt-0">
                    <aside class="sidebar">
                        <div id="leftside-navigation" class="nano">
                            <ul class="nano-content">
                                <li>
                                    <a href="#首頁#">
                                        <i class="fa fa-dashboard"></i>
                                        <span>首頁</span>
                                    </a>
                                </li>
                                <li class="sub-menu">
                                    <a href="#公司介紹#">
                                        <i class="fa fa-building"></i>
                                        <span>公司介紹</span>
                                        <i class="arrow fa fa-angle-right pull-right"></i>
                                    </a>
                                </li>
                                <li class="sub-menu">
                                    <a href="#產品介紹#">
                                        <i class="fa fa-cogs"></i>
                                        <span>產品介紹</span>
                                        <i class="arrow fa fa-angle-right pull-right"></i>
                                    </a>
                                    <ul>
                                        <li class="sub-menu-a">
                                            <a href="#端子台#">
                                                <span>端子台</span>
                                                <i class="arrow fa fa-angle-right pull-right"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a class="dropdown-item" href="#軌道端子台#">軌道端子台</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#柵欄端子台#">柵欄端子台</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#陶瓷端子台#">陶瓷端子台</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#組合式雙層端子台#">組合式雙層端子台</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#雙排端子台#">雙排端子台</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#印刷電路板端子台#">印刷電路板端子台</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#電源端子台#">電源端子台</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#電源併接端子台#">電源併接端子台</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#柱螺栓端子台#">柱螺栓端子台</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#柱螺栓併接端子台#">柱螺栓併接端子台</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#歐規端子台#">歐規端子台</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu-a">
                                            <a href="#保險絲座&保險絲盒#">
                                                <span>保險絲座&保險絲盒</span>
                                                <i class="arrow fa fa-angle-right pull-right"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a class="dropdown-item" href="#保險絲座#">保險絲座</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#保險絲盒#">保險絲盒</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu-a">
                                            <a href="#保險絲夾#">
                                                <span>保險絲夾</span>
                                                <i class="arrow fa fa-angle-right pull-right"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a class="dropdown-item" href="#FC-5063CSXX系列 保險絲夾#">FC-5063CSXX系列 保險絲夾</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#FC-5063BTXX系列 保險絲夾#">FC-5063BTXX系列 保險絲夾</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#FC-5063BNXX系列 保險絲夾#">FC-5063BNXX系列 保險絲夾</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#FC-4063CSXX系列 保險絲夾#">FC-4063CSXX系列 保險絲夾</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#FC-4063BTXX系列 保險絲夾#">FC-4063BTXX系列 保險絲夾</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#FC-4063XXBN系列 保險絲夾#">FC-4063XXBN系列 保險絲夾</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu-a">
                                            <a href="#保險絲#">
                                                <span>保險絲</span>
                                                <i class="arrow fa fa-angle-right pull-right"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a class="dropdown-item" href="#F-0632G-XX系列 250V 6x30 玻璃管保險絲#">F-0632G-XX系列 玻璃管保險絲</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#F-1038C-XX系列 500V 10x38 陶瓷管保險絲#">F-1038C-XX系列 陶瓷管保險絲</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu-a">
                                            <a href="#固態繼電器#">
                                                <span>固態繼電器</span>
                                                <i class="arrow fa fa-angle-right pull-right"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a class="dropdown-item" href="#單相固態繼電器#">單相固態繼電器</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#三相固態繼電器#">三相固態繼電器</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu-a">
                                            <a href="#絕緣礙子#">
                                                <span>絕緣礙子</span>
                                                <i class="arrow fa fa-angle-right pull-right"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a class="dropdown-item" href="#低壓絕緣礙子#">低壓絕緣礙子</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#高壓絕緣礙子#">高壓絕緣礙子</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#匯流排#">匯流排</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu-a">
                                            <a href="#零件#">
                                                <span>零件</span>
                                                <i class="arrow fa fa-angle-right pull-right"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a class="dropdown-item" href="#軌道#">軌道</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#煞車擋片#">煞車擋片</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#保險絲盒斷電指示燈#">保險絲盒斷電指示燈</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#保險絲盒軌道轉接器#">保險絲盒軌道轉接器</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#散熱器#">散熱器</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#風扇#">風扇</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#短路片#">短路片</a>
                                        </li>
                                        <li class="sub-menu-a">
                                            <a href="#端子台快插#">
                                                <span>端子台快插</span>
                                                <i class="arrow fa fa-angle-right pull-right"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a class="dropdown-item" href="#15A 快插#">15A 快插</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#25A 快插#">25A 快插</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#35A 快插#">35A 快插</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-menu">
                                    <a href="#最新消息#">
                                        <i class="fa fa-table"></i>
                                        <span>最新消息</span>
                                        <i class="arrow fa fa-angle-right pull-right"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a class="dropdown-item" href="#消息一#">@消息一@</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#消息二#">@消息二@</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-menu">
                                    <a href="#常見問題#">
                                        <i class="fa fa-question-circle"></i>
                                        <span>常見問題</span>
                                        <i class="arrow fa fa-angle-right pull-right"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a class="dropdown-item" href="#常見問題一#">@常見問題一@</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#常見問題二#">@常見問題二@</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#常見問題三#">@常見問題三@</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#常見問題四#">@常見問題四@</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#常見問題五#">@常見問題五@</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#常見問題六#">@常見問題六@</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-menu">
                                    <a href="#關於我們#">
                                        <i class="fa fa-envelope"></i>
                                        <span>關於我們</span>
                                        <i class="arrow fa fa-angle-right pull-right"></i>
                                    </a>
                                </li>
                            </ul>
                            <!--左側下拉選單結束-->

                            <!--推薦商品開始-->
                            <HR class="mt-4">
                            <h3 class="text-center">推薦商品</h3>
                            <div class="card box-shadow border-0 text-center Recommended-products">
                                <img class="card-img-top img-fluid rounded mx-auto d-block" src="https://cdn.ready-market.com/1/48d29a5d//Templates/pic/m/SHINING-TA-Series-35mm-Din-Rail-Mounted-Termianl-Block-W270H205.jpg?v=3be5b30d"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">@推薦商品標題@</h5>
                                    <p class="card-text">@推薦商品敘述@</p>
                                </div>
                                <div class="card-footer border-top-0 bg-white">
                                    <a href="#" class="btn btn-primary">more</a>
                                </div>
                            </div>
                            <!--推薦商品結束-->

                            <!--服務簡介開始-->
                            <HR class="mt-4">
                            <h4 class="text-center">享曆服務簡介</h4>
                            <p style="font-size:12px">享曆工業股份有限公司是台灣專業配電器材製造業製造商. 享曆自西元1978年起開始提供專業的端子台、電機端子台、端子台連接器、螺絲端子台、端子盤、接線座、配電端子台、保險絲座、保險絲管夾、固態繼電器、SSR、絕緣礙子、支持礙子、獨立端子、匯流排支持座、纜線夾。...等服務.
                                擁有超過35年的專業經驗, 享曆總是可以達成客戶各項品質要求.</p>
                            <!--服務簡介結束-->
                        </div>
                    </aside>
                    <script src='../../js/jquery.min.js'></script>
                    <script src='../../js/jquery-ui.min.js'></script>
                    <script src="../../js/index.js"></script>
                </div>




                <!--產品細項區塊開始-->
                <div class="col-lg-9 col-md-12">
                    <div class="card-body">
                        <?php echo $arr['id'] ?>
                        <?php echo $arr['proudct_name'] ?>
                        <?php echo $arr['proudct_desc'] ?>
                        <?php echo $arr['proudct_table_desc'] ?>
                    </div>
                </div>
                <!--產品細項區塊結束-->
    </section>





    <!--底部資訊條開始-->

    <section class="container py-4 bg-dark text-white ">
        <div class="row">
            <div class="col-md-4  col-sm-6">
                <p class="floor-title">聯絡資訊</p>
                <div class="d-flex">
                    <div>
                        <i class="fa fa-phone-square" aria-hidden="true"></i>
                    </div>
                    <div>
                        <p class="floor-title-connection">+886 2226-9431</p>
                    </div>
                </div>
                <div class="d-flex">
                    <div>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="ml-5;">
                        <p class="floor-title-connection">hsichin2@ms37.hinet.net</p>
                        <p class="floor-title-connection">sales1@shining.com.tw</p>
                    </div>
                </div>
                <div class="d-flex">
                    <div>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div>
                        <p class="floor-title-connection">No. 76, Jian-Liou Road, Chung-Ho District, New Taipei City, 23585 Taiwan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3  col-sm-6">
                <p class="floor-title">資訊</p>
                <div class="d-flex">
                    <div>
                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                    </div>
                    <div>
                        <p class="floor-title-connection">
                            <a href="#公司介紹#">公司介紹</a>
                        </p>
                    </div>
                </div>
                <div class="d-flex">
                    <div>
                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                    </div>
                    <div>
                        <p class="floor-title-connection">
                            <a href="#產品介紹#">產品介紹</a>
                        </p>
                    </div>
                </div>
                <div class="d-flex">
                    <div>
                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                    </div>
                    <div>
                        <p class="floor-title-connection">
                            <a href="#最新消息#">最新消息</a>
                        </p>
                    </div>
                </div>
                <div class="d-flex">
                    <div>
                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                    </div>
                    <div>
                        <p class="floor-title-connection">
                            <a href="#常見問題#">常見問題</a>
                        </p>
                    </div>
                </div>
                <div class="d-flex">
                    <div>
                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                    </div>
                    <div>
                        <p class="floor-title-connection">
                            <a href="#聯絡我們#">聯絡我們</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <p class="floor-title">我們的服務</p>
                <div class="d-flex">
                    <div>
                        <i class="fa fa-map-signs " aria-hidden="true"></i>
                    </div>
                    <div>
                        <p class="h5 floor-title-connection">@公司介紹@</p>
                        <p class="floor-content-connection">@公司介紹敘述@</p>
                        <a href="#公司介紹#">閱讀更多</a>
                    </div>
                </div>
                <div class="d-flex mt-2">
                    <div>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div>
                        <p class="h5 floor-title-connection">@聯絡我們@</p>
                        <p class="floor-content-connection">@聯絡我們敘述@</p>
                        <a href="#聯絡我們#">閱讀更多</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--底部資訊條結束-->

    <!--floor開始-->

    <footer>
        <section class="container py-1 bg-dark text-white">
            <HR class="mt-0" size="auto">
            <div class="container mt-0">
                <div class="row " style="font-size:10px;">
                    <p class="ml-5">Copyright © 2018
                        <a href="#首頁#">享曆工業股份有限公司.</a> All Rights Reserved.</p>
                </div>
            </div>
        </section>
    </footer>
    <!--floor結束-->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>

    <!-- 上方導覽選單插件 jQuery  -->
    <script type="text/javascript" src="js/jquery.smartmenus.js"></script>

    <!-- 上方導覽選單插件 jQuery Bootstrap 4 Addon -->
    <script type="text/javascript" src="addons/bootstrap-4/jquery.smartmenus.bootstrap-4.js"></script>

    <!--左邊導覽選單-->
    <script src='../../js/jquery.min.js'></script>


</body>

</html>