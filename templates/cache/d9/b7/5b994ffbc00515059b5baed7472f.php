<?php

/* cny15-sidebar.html */
class __TwigTemplate_d9b75b994ffbc00515059b5baed7472f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " <div class=\"page-sidebar\">
    <ul>
    \t<li><a href=\"\"><i class=\"icon-home\"></i>首页</a></li>

        <li class=\"sticker sticker-color-blue dropdown active\" data-role=\"dropdown\">
        \t<a href=\"javascript:void(0);\"><i class=\"icon-reddit\"></i>我的</a>
        \t<ul class=\"sub-menu sidebar-dropdown-menu light open\">
        \t\t<li><a href=\"#\">消息</a></li>
        \t\t<li><a href=\"\">主页</a></li>
        \t\t<li><a href=\"\">收藏</a></li>
        \t</ul>
        </li>
        
        <li class=\"sticker sticker-color-green dropdown\" data-role=\"dropdown\">
        \t<a href=\"javascript:void(0);\"><i class=\"icon-user-3\"></i>户主</a>
        \t<ul class=\"sub-menu sidebar-dropdown-menu light\">
        \t\t<li><a href=\"\">我的￥15</a></li>
        \t\t<li><a href=\"\">销售</a></li>
        \t\t<li><a href=\"\">收入</a></li>
        \t</ul>
        </li>
        <li class=\"sticker sticker-color-yellow\">
        \t<a href=\"\"><i class=\"icon-cart\"></i>我的购买清单</a>
        </li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "cny15-sidebar.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
