<?php 
class Cms5bdc18cb26f6b891968391_846ea3a98a3d3b799990d4eb211b08d9Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
