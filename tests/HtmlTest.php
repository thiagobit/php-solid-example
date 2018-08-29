<?php

namespace ThiagoBit\Solid;

class HtmlTest extends \PHPUnit\Framework\TestCase
{
    public function testRenderImg()
    {
        $imgSrc = 'images/photo.jpg';

        $html = new Html;

        $img = $html->img($imgSrc);

        $this->assertEquals('<img src="' . $imgSrc . '">', $img);
    }

    public function testCreateLinkWithImgAsAnchor()
    {
        $linkUrl = 'http://mysite.com/profile';
        $imgSrc  = 'images/photo.jpg';

        $html = new Html;

        $img  = $html->img($imgSrc);
        $link = $html->a($linkUrl, $img);

        $this->assertEquals('<a href="' . $linkUrl . '">' . $img . '</a>', $link);
    }

    public function testCreateList()
    {
        $html = new Html;

        $list = $html->ul('<li>Thiago</li>');

        $this->assertEquals('<ul><li>Thiago</li></ul>', $list);
    }
}