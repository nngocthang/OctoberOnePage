<?php 
class Cms5bdc1684b50a5575337685_d1267e8f8eeb26cefff1e7dae3d4ebd4Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
