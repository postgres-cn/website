<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
<rss version="2.0"
    xmlns:dc="http://purl.org/dc/elements/1.1/"
    xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
    xmlns:admin="http://webns.net/mvcb/"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:content="http://purl.org/rss/1.0/modules/content/">

    <channel>
        <title>PostgreSQL中文社区</title>
        <link>http://postgres.cn/v2/feed</link>
        <description>PostgreSQL中文社区新闻</description>
        <dc:language>zh-cn</dc:language>
        <dc:creator>postgres.cn</dc:creator>
        <dc:rights>Copyright <?php echo date('Y'); ?></dc:rights>
<?php foreach ($news as $new) { ?>
        <item>
            <title><![CDATA[<?php echo $new['thetitle']; ?>]]></title>
            <link><![CDATA[http://postgres.cn/v2/news/viewone/1/<?php echo $new['sysid']; ?>]]></link>
            <guid><![CDATA[http://postgres.cn/v2/news/viewone/1/<?php echo $new['sysid']; ?>]]></guid>
            <description><![CDATA[<?php echo $new['thecontent']; ?>]]></description>
            <pubDate><?php echo $new['pubtime']; ?></pubDate>
        </item>
<?php } ?>
    </channel>
</rss>
