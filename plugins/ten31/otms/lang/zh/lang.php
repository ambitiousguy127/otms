<?php return [
  'plugin' => [
      'name' => 'otms',
      'description' => 'oTMS website models',
  ],
  'name' => [
    'apiname' => 'OpenAPI申请表',
    'downloadname' => '下载',
    'casename' => '案例',
    'jobname' => '招聘',
    'newsname' => '新闻',
    'blogname' => '博客',
    'leadname' =>  '预约',
    'rfqname' => 'RFQ页',
  ],
    'messages' => [
        'outdated_browser' => '您的游览器与网站无法兼容。为了更好的用户体验，点击以下<a href="http://browsehappy.com/?locale=zh">链接</a>下载匹配游览器',
        'demo_success' => '您的信息已经提交，我们将尽快与您联络。',
        'register_success' => '您的信息已经提交，我们将尽快与您联络。',
        'download_success' => '您的信息已提交， 感谢关注',
        'xsy_unknown_error' => 'CRM验证问题请联系管理员',
        'xsy_errors' => [
            300004 => '您的邮箱或电话已经注册过，请更换',
            110010 => 'CRM authentication token error. Please contact an administrator.',
        ],
    ],
    'validation' => [
        'name_required' => '姓名为必填项。',
        'company_required' => '公司名称为必填项。',
        'mobile_required' => '手机为必填项。',
        'email_required' => '电子邮箱为必填项。',
        'leadSourceId_required' => '您是如何知道oTMS的？',
        'service_required' => '请选择您所需要的oTMS产品服务。',
    ],
];
