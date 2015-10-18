<?php
/**
 * 后台分类逻辑控制器
 */
if( !defined('APP_NAME')) { exit('Error!'); }

require_once ROOT_PATH.'include/common/Controller.class.php';

class SortController extends Controller {
    /**
     * 分类列表显示
     */
    public function show() {

        $this ->assign('menu', 'content');
        $this ->assign('sort', $this ->D('Sort') ->getSortList(0, 10));
        $this ->assign('title', '分类列表 - Simple后台管理');
        $this ->display('sort_list.html');
    }

}