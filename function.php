<?php

require_once 'vendor/autoload.php';

use phpspider\core\phpspider;
use phpspider\core\requests;
use phpspider\core\selector;
use phpspider\core\db;

/* Do NOT delete this comment */
/* 不要删除这段注释 */

//$configs = array(
//    'name' => 'php官网爬虫',
//    'domains' => array(
//        'https:secure.php.net'
//    ),
//    'scan_urls' => array(
//        'https://secure.php.net/manual/en/funcref.php'
//    ),
//    'content_url_regexes' => array(
//        "http://www.qiushibaike.com/article/\d+"
//    ),
//    'list_url_regexes' => array(
//        "http://www.qiushibaike.com/8hr/page/\d+\?s=\d+"
//    ),
//    'fields' => array(
//        array(
//            // 抽取内容页的文章内容
//            'name' => "article_content",
//            'selector' => "//*[@id='single-next-link']",
//            'required' => true
//        ),
//        array(
//            // 抽取内容页的文章作者
//            'name' => "article_author",
//            'selector' => "//div[contains(@class,'author')]//h2",
//            'required' => true
//        ),
//    ),
//);
//$spider = new phpspider($configs);
//$spider->start();
//
//$html = request::get('https://secure.php.net/manual/en/function.mysql-connect.php');





try {
    $url = 'https://secure.php.net/manual/en/function.apc-add.php';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

    $output = curl_exec($ch);

    // description
    preg_match_all(
        '/<div class="refsect1 description".*?>.*?(?:<div.*?<\/div>)*.*?<\/div>/s',
        $output,
        $description
    );


    print_r($description[0][0]);


    // parameters
//    preg_match_all(
/*        '/<div class="refsect1 parameters".*?>.*?<\/div>/s',*/
//        $output,
//        $parameters
//    );

    // returnvalues
//    preg_match_all(
/*        '/<div class="refsect1 returnvalues".*?>.*?<\/div>/s',*/
//        $output,
//        $returnvalues
//    );

    // seealso
//    preg_match_all(
/*        '/<div class="refsect1 seealso".*?>.*?<\/div>/s',*/
//        $output,
//        $seealso
//    );

    // changelog
//    preg_match_all(
/*        '/<div class="refsect1 changelog".*?>.*?<\/div>/s',*/
//        $output,
//        $changelog
//    );

    // notes
//    preg_match_all(
/*        '/<div class="refsect1  notes".*?>.*?<\/div>/s',*/
//        $output,
//        $notes
//    );


    exit;
} catch (Exception $e) {
    echo $e->getMessage();
}
