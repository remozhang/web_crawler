<?php

use VDB\Spider\Discoverer\XPathExpressionDiscoverer;
use VDB\Spider\Spider;
use VDB\Spider\StatsHandler;

require_once 'vendor/autoload.php';

$spider = new Spider('https://secure.php.net/manual/en/pdo.prepare.php');

$spider->getDiscovererSet()->set(new XPathExpressionDiscoverer("//div[@id='pdo.prepare']//div[@class='refsect1']"));

//$statsHandler = new StatsHandler();
//$spider->getQueueManager()->getDispatcher()->addSubscriber($statsHandler);
//$spider->getDispatcher()->addSubscriber($statsHandler);

$spider->crawl();

//var_dump($spider->getDownloader()->getPersistenceHandler());

foreach ($spider->getDownloader()->getPersistenceHandler() as $resource) {
     echo ($resource->getCrawler()->text());
}