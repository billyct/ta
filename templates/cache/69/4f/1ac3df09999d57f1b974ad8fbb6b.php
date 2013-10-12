<?php

/* cny15/sidebar.html */
class __TwigTemplate_694f1ac3df09999d57f1b974ad8fbb6b extends Twig_Template
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
        
    \t<li><a href=\"";
        // line 4
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "/cny15\"><i class=\"icon-home\"></i>首页</a></li>
        ";
        // line 5
        if (isset($context["current_user"])) { $_current_user_ = $context["current_user"]; } else { $_current_user_ = null; }
        if ($_current_user_) {
            // line 6
            echo "        <li class=\"sticker sticker-color-green\">
        \t<a href=\"javascript:void(0);\"><i class=\"icon-user-3\"></i>我是卖家</a>
        \t<ul class=\"sub-menu light open\">
                <li><a href=\"";
            // line 9
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/cny15/manage/new\">发布￥15</a></li>
        \t\t<li><a href=\"";
            // line 10
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/cny15/manage\">我的￥15</a></li>
        \t\t<li><a href=\"";
            // line 11
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/cny15/manage/my_sell_order\">订单管理</a></li>
        \t\t<li><a href=\"";
            // line 12
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/cny15/manage/income\">收入管理</a></li>
        \t</ul>
        </li>
        <li class=\"sticker sticker-color-yellow\">
        \t<a href=\"\"><i class=\"icon-cart\"></i>我是买家</a>
            <ul class=\"sub-menu light\">
                <li><a href=\"";
            // line 18
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/cny15/manage/my_buy_order\">我的订单</a></li>
            </ul>
        </li>
        ";
        }
        // line 22
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "cny15/sidebar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 22,  62 => 18,  52 => 12,  47 => 11,  42 => 10,  37 => 9,  32 => 6,  29 => 5,  24 => 4,  19 => 1,);
    }
}
