<?php

return [
    'cms_object' => [
        'invalid_file' => '不合法的文件名: :name. 文件名只能包括字母或数字, _, - 和 .. 一些正确的文件名: page.htm, page, subdirectory/page',
        'invalid_property' => "属性 ':name' 不能设置",
        'file_already_exists' => "文件 ':name' 已经存在.",
        'error_saving' => "保存文件 ':name' 错误. 请检查写权限.",
        'error_creating_directory' => '创建文件夹 :name 错误. 请检查写权限.',
        'invalid_file_extension'=>'不合法的文件扩展: :invalid. 允许的扩展: :allowed.',
        'error_deleting' => "删除模板文件 ':name' 错误. 请检查写权限.",
        'delete_success' => '模板成功删除: :count.',
        'file_name_required' => '需要文件名字段.',
        'safe_mode_enabled' => '安全模式已经启用.',
    ],
    'dashboard' => [
        'active_theme' => [
            'online' => '在线',
            'maintenance' => '维护中',
        ]
    ],
    'theme' => [
        'not_found_name' => "主题 ':name' 没找到.",
        'active' => [
            'not_set' => '活动主题没设置.',
            'not_found' => '活动主题找不到.'
        ],
        'edit' => [
            'not_set' => '编辑主题没设置.',
            'not_found' => '编辑主题没找到.',
            'not_match' => "你尝试访问的对象不属于正在编辑的主题. 请重载页面."
        ],
        'settings_menu' => '前端主题',
        'settings_menu_description' => '预览安装的主题, 选择一个活动主题.',
        'default_tab' => '属性',
        'name_label' => '名称',
        'name_create_placeholder' => '新主题名称',
        'author_label' => '作者',
        'author_placeholder' => '人或公司名',
        'description_label' => '描述',
        'description_placeholder' => '主题描述',
        'homepage_label' => '主页',
        'homepage_placeholder' => '网站地址',
        'code_label' => '代码',
        'code_placeholder' => '发行主题的唯一码',
        'dir_name_label' => '目录名',
        'dir_name_create_label' => '目标主题目录',
        'theme_label' => '主题',
        'theme_title' => '主题',
        'activate_button' => '激活',
        'active_button' => '激活',
        'customize_theme' => '自定义主题',
        'customize_button' => '自定义',
        'duplicate_button' => '复制',
        'duplicate_title' => '复制主题',
        'duplicate_theme_success' => '复制主题成功!',
        'manage_button' => '管理',
        'manage_title' => '管理主题',
        'edit_properties_title' => '主题',
        'edit_properties_button' => '编辑属性',
        'save_properties' => '保存属性',
        'import_button' => '导入',
        'import_title' => '导入主题',
        'import_theme_success' => '成功导入主题!',
        'import_uploaded_file' => '主题存档文件',
        'import_overwrite_label' => '覆盖已经存在的文件',
        'import_overwrite_comment' => '取消勾选, 只导入新文件',
        'import_folders_label' => '文件夹',
        'import_folders_comment' => '请选择你想要导入的主题文件夹',
        'export_button' => '导出',
        'export_title' => '导出主题',
        'export_folders_label' => '文件夹',
        'export_folders_comment' => '请选择你想要导入的主题文件夹',
        'delete_button' => '删除',
        'delete_confirm' => '你确定删除这个主题吗? 这个操作不能撤销!',
        'delete_active_theme_failed' => '不能删除活动主题, 请先尝试另外一个主题.',
        'delete_theme_success' => '删除主题成功!',
        'create_title' => '创建主题',
        'create_button' => '创建',
        'create_new_blank_theme' => '创建新的空白主题',
        'create_theme_success' => '创建主题成功!',
        'create_theme_required_name' => '请指点主题名.',
        'new_directory_name_label' => '主题目录',
        'new_directory_name_comment' => '提供复制主题的新闻目录名.',
        'dir_name_invalid' => '名称只能包含数字, 拉丁字母和以下字符: _-',
        'dir_name_taken' => '主题目录已存在.',
        'find_more_themes' => '在 OctoberCMS 主题商店中查找更多主题',
        'saving' => '保存主题...',
        'return' => '返回主题列表',
    ],
    'maintenance' => [
        'settings_menu' => '维护模式',
        'settings_menu_description' => '配置维护模式页面和开关设置.',
        'is_enabled' => '启用维护模式',
        'is_enabled_comment' => '当启用时, 网站访问者会看到下述页面.',
        'hint' => '维护模式将对未登陆后台的访客展示维护页面.',
    ],
    'page' => [
        'not_found_name' => "页面 ':name' 找不到",
        'not_found' => [
            'label' => '页面找不到',
            'help' => '请求的页面找不到.'
        ],
        'custom_error' => [
            'label' => '页面错误',
            'help' => "很抱歉, 有一些地方发生了错误导致页面不能显示."
        ],
        'menu_label' => '页面',
        'unsaved_label' => '未保存页面',
        'no_list_records' => '找不到页面',
        'new' => '新页面',
        'invalid_url' => '不合法的URL格式. URL可以正斜杠开头, 包含数字, 拉丁字母和下面的字符: ._-[]:?|/+*^$',
        'delete_confirm_multiple' => '真的想要删除选择的页面吗?',
        'delete_confirm_single' => '真的想要删除这个页面吗?',
        'no_layout' => '-- 没有布局 --'
    ],
    'layout' => [
        'not_found_name' => "布局 ':name' 找不到",
        'menu_label' => '布局',
        'unsaved_label' => '未保存布局',
        'no_list_records' => '找不到布局',
        'new' => '新布局',
        'delete_confirm_multiple' => '你真的想要删除选中的布局?',
        'delete_confirm_single' => '你真的想要删除这个布局?'
    ],
    'partial' => [
        'not_found_name' => "部件 ':name' 找不到.",
        'invalid_name' => '不合法的部件名: :name.',
        'menu_label' => '部件',
        'unsaved_label' => '未保存的部件',
        'no_list_records' => '找不到部件',
        'delete_confirm_multiple' => '你真的想要删除选择的部件?',
        'delete_confirm_single' => '你真的想要删除这个部件?',
        'new' => '新部件'
    ],
    'content' => [
        'not_found_name' => "内容文件 ':name' 找不到.",
        'menu_label' => '内容',
        'unsaved_label' => '未保存内容',
        'no_list_records' => '找不到内容文件',
        'delete_confirm_multiple' => '你真的想要删除选中的文件或目录吗?',
        'delete_confirm_single' => '你真的想要删除这个内容文件?',
        'new' => '新内容文件'
    ],
    'ajax_handler' => [
        'invalid_name' => '不合法的 AJAX 处理器: :name.',
        'not_found' => " AJAX 处理器 ':name' 找不到."
    ],
    'cms' => [
        'menu_label' => 'CMS'
    ],
    'sidebar' => [
        'add' => '增加',
        'search' => '搜索...'
    ],
    'editor' => [
        'settings' => '设置',
        'title' => '标题',
        'new_title' => '新文件标题',
        'url' => 'URL',
        'filename' => '文件名',
        'layout' => '布局',
        'description' => '描述',
        'preview' => '预览',
        'meta' => '元素',
        'meta_title' => '元素标题',
        'meta_description' => '元素描述',
        'markup' => '标记',
        'code' => '代码',
        'content' => '内容',
        'hidden' => '隐藏',
        'hidden_comment' => '隐藏页面只能被登录的后台用户访问.',
        'enter_fullscreen' => '进入全屏模式',
        'exit_fullscreen' => '退出全屏模式'
    ],
    'asset' => [
        'menu_label' => '资源',
        'unsaved_label' => '未保存的资源',
        'drop_down_add_title' => '增加...',
        'drop_down_operation_title' => '动作...',
        'upload_files' => '上传文件',
        'create_file' => '新建文件',
        'create_directory' => '新建目录',
        'directory_popup_title' => '新目录',
        'directory_name' => '目录名',
        'rename' => '重命名',
        'delete' => '删除',
        'move' => '移动',
        'select' => '选择',
        'new' => '新文件',
        'rename_popup_title' => '重命名',
        'rename_new_name' => '新名称',
        'invalid_path' => '路径名称只能包含数字, 拉丁字母和以下字符: _-/',
        'error_deleting_file' => '删除文件 :name 错误.',
        'error_deleting_dir_not_empty' => '删除目录 :name 错误. 目录不为空.',
        'error_deleting_dir' => '删除文件 :name 错误.',
        'invalid_name' => '名称只能包含数字, 拉丁字母, 空格和以下字符: _-',
        'original_not_found' => '原始文件或目录找不到',
        'already_exists' => '文件或目录已存在',
        'error_renaming' => '重命名文件或目录错误',
        'name_cant_be_empty' => '名称不能为空',
        'too_large' => '上传的文件太大. 最大文件大小是 :max_size',
        'type_not_allowed' => '只有下面的文件类型是允许的: :allowed_types',
        'file_not_valid' => '文件不合法',
        'error_uploading_file' => "上传文件错误 ':name': :error",
        'move_please_select' => '请选择',
        'move_destination' => '目标目录',
        'move_popup_title' => '移动资源',
        'move_button' => '移动',
        'selected_files_not_found' => '选择的文件找不到',
        'select_destination_dir' => '请选择目标目录',
        'destination_not_found' => '目标目录找不到',
        'error_moving_file' => '移动文件 :file 错误',
        'error_moving_directory' => '移动目录 :dir 错误',
        'error_deleting_directory' => '删除原始目录 :dir 错误',
        'path' => '路径'
    ],
    'component' => [
        'menu_label' => '组件',
        'unnamed' => '未命名的',
        'no_description' => '没有描述',
        'alias' => '别名',
        'alias_description' => '这个组件的唯一名称, 在页面或者布局代码中.',
        'validation_message' => '需要组件别名, 且只能包含拉丁字符, 数字和下划线. 别名必须以拉丁字符开头.',
        'invalid_request' => '模板不能保存, 因为非法组件数据.',
        'no_records' => '找不到组件',
        'not_found' => "组件 ':name' 找不到.",
        'method_not_found' => "组件 ':name' 不包含方法 ':method'."
    ],
    'template' => [
        'invalid_type' => '未知模板类型.',
        'not_found' => '请求模板找不到.',
        'saved'=> '模板保存成功.'
    ],
    'permissions' => [
        'name' => 'CMS',
        'manage_content' => '管理内容',
        'manage_assets' => '管理资源',
        'manage_pages' => '管理页面',
        'manage_layouts' => '管理布局',
        'manage_partials' => '管理部件',
        'manage_themes' => '管理主题',
        'manage_media' => '管理媒体'
    ],
   'media' => [
        'invalid_path' => "不合法的路径: ':path'.",
        'menu_label' => '媒体',
        'upload' => '上传',
        'move' => '移动',
        'delete' => '删除',
        'add_folder' => '增加文件夹',
        'search' => '搜索',
        'display' => '显示',
        'filter_everything' => '所有',
        'filter_images' => '图片',
        'filter_video' => '视频',
        'filter_audio' => '音频',
        'filter_documents' => '文档',
        'library' => '库',
        'folder_size_items' => '个数',
        'size' => '大小',
        'title' => '标题',
        'last_modified' => '最近修改',
        'public_url' => '公开URL',
        'click_here' => '点击这里',
        'thumbnail_error' => '生产缩略图错误.',
        'return_to_parent' => '返回上层文件夹',
        'return_to_parent_label' => '返回 ..',
        'nothing_selected' => '没有选中.',
        'multiple_selected' => '多选.',
        'uploading_file_num' => '上传 :number 文件...',
        'uploading_complete' => '上传完毕',
        'order_by' => '排序',
        'folder' => '文件夹',
        'no_files_found' => '没找到你请求的文件.',
        'delete_empty' => '请选择删除项.',
        'delete_confirm' => '你是否想要删除选中项?',
        'error_renaming_file' => '重命名错误.',
        'new_folder_title' => '新文件',
        'folder_name' => '文件夹名',
        'error_creating_folder' => '新建文件夹错误',
        'folder_or_file_exist' => '文件夹或文件已经存在.',
        'move_empty' => '请选择移动项.',
        'move_popup_title' => '移动文件或文件夹',
        'move_destination' => '目标文件夹',
        'please_select_move_dest' => '请选择目标文件夹.',
        'move_dest_src_match' => '请选择另一个目标文件夹.',
        'empty_library' => '媒体库是空的. 从上传文件或创建文件夹开始.',
        'insert' => '插入',
        'crop_and_insert' => '裁剪并插入',
        'select_single_image' => '请选择一张图片.',
        'selection_not_image' => '选择的不是一张图片.',
        'restore' => '取消所有更改',
        'resize' => '调整大小...',
        'selection_mode_normal' => '正常',
        'selection_mode_fixed_ratio' => '固定比例',
        'selection_mode_fixed_size' => '固定大小',
        'height' => '高度',
        'width' => '宽度',
        'selection_mode' => '选择模式',
        'resize_image' => '调整图片',
        'image_size' => '图片大小:',
        'selected_size' => '选中:'
    ]
];