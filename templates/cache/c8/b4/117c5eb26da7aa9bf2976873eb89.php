<?php

/* layout/navigation.html */
class __TwigTemplate_c8b4117c5eb26da7aa9bf2976873eb89 extends Twig_Template
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
        echo "<div class=\"page\">
<div class=\"nav-bar\">
    <div class=\"nav-bar-inner padding10\">
        <span class=\"pull-menu\"></span>

        <a href=\"/\"><span class=\"element brand\">
            <img class=\"place-left\" src=\"";
        // line 7
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "/images/logo32.png\" style=\"height: 20px\"/>
            ta <small>测试0.1</small>
        </span></a>

        <div class=\"divider\"></div>

        <ul class=\"menu\">
            <li><a href=\"/\">首页</a></li>
            <li>
                <a href=\"";
        // line 16
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "/timeline\">游吟</a>
            </li>
            <li><a href=\"";
        // line 18
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "/cny15\">￥15</a></li>
            ";
        // line 19
        if (isset($context["current_user"])) { $_current_user_ = $context["current_user"]; } else { $_current_user_ = null; }
        if ($_current_user_) {
            // line 20
            echo "
            <li class=\"place-right\" data-role=\"dropdown\">
                <a href=\"javascript:void(0);\" title=\"设置\"><i class=\"icon-cog\"></i></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
            // line 24
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/accounts\" target=\"_blank\">我的账号</a></li>
                    <li><a id=\"end-auth\" href=\"";
            // line 25
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/signout\">退出</a></li>
                </ul>
            </li>
            <li class=\"place-right\"><a href=\"";
            // line 28
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/message\" title=\"私信\">私信</a></li>
            <li class=\"place-right\"><a href=\"javascript:void(0);\" id=\"link-quick-publish\" title=\"快速发布\"><i class=\"icon-comments\"></i></a></li>
            <li class=\"place-right\" data-role=\"dropdown\">
                <a href=\"javascript:void(0);\" title=\"";
            // line 31
            if (isset($context["current_user"])) { $_current_user_ = $context["current_user"]; } else { $_current_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_current_user_, "username"), "html", null, true);
            echo "\"><i class=\"icon-reddit\"></i></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
            // line 33
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/profile\">主页</a></li>
                    <li><a href=\"";
            // line 34
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/collection\">收藏</a></li>
                </ul>
            </li>
            ";
        } else {
            // line 38
            echo "            <li class=\"place-right\"><a href=\"";
            if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
            echo twig_escape_filter($this->env, $_url_, "html", null, true);
            echo "\" id=\"auth\" >注册</a></li>
            <li class=\"place-right\"><a href=\"";
            // line 39
            if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
            echo twig_escape_filter($this->env, $_url_, "html", null, true);
            echo "\" id=\"auth\" >登录</a></li>

            ";
        }
        // line 42
        echo "        </ul>

    </div>
</div>
</div>

<div class=\"quick-form\" id=\"quick-form\" style=\"display:none\">
    <form id=\"form-quick\" action=\"\" method=\"post\">
        <div class=\"input-control textarea\">
            <textarea id=\"textarea-content\" class=\"textarea-quick\" placeholder=\"时间，地点，人物，事情\" title=\"内容\"></textarea>
        </div>
        <div class=\"input-control text datepicker\" data-role=\"datepicker\">
            <input type=\"text\" id=\"input-deadline\" placeholder=\"截止日期\" title=\"截止日期\"/>
            <button id=\"btn-date\" class=\"btn-date\"></button>
        </div>
        <div class=\"input-control\">
            <div class=\"toolbar\">
                <button id=\"btn-timeline-picture\" class=\"bg-color-green\" title=\"图片\"> <i class=\"icon-pictures\"></i></button>
                <input name=\"publish\" class=\"place-right bg-color-greenDark\" id=\"btn-publish\" type=\"submit\" value=\"游吟\" disabled=\"disabled\"/>
            </div>
            
        </div>

    </form>

    <div id=\"image-timeline-uploader\" style=\"display:none\">
        <div id=\"image-timeline-fineuploader\"></div>
        <div id=\"image-timeline-uploaded-thumbs\">
            <div class=\"grid\">
                <div class=\"row\">
                </div>
            </div>

        </div>
    </div>
    
</div>
<input type=\"hidden\" id=\"access_token\" value=\"";
        // line 79
        if (isset($context["access_token"])) { $_access_token_ = $context["access_token"]; } else { $_access_token_ = null; }
        echo twig_escape_filter($this->env, $_access_token_, "html", null, true);
        echo "\" />


<script id=\"image-uploader-template\" type=\"text/template\">

<div class=\"span1\">
    <img class=\"image-uploaded-thumb\" image-id=\"<%= image.id %>\" src=\"<%= image.path %>\" alt=\"name\"/>
    <div class=\"toolbar\">
        <button id=\"btn-image-delete\" image-id=\"<%= image.id %>\">
            <i class=\"icon-cancel-2\"></i>
        </button>
    </div>
</div>

</script>";
    }

    public function getTemplateName()
    {
        return "layout/navigation.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 79,  111 => 42,  104 => 39,  98 => 38,  90 => 34,  85 => 33,  79 => 31,  72 => 28,  65 => 25,  60 => 24,  54 => 20,  51 => 19,  46 => 18,  40 => 16,  27 => 7,  19 => 1,);
    }
}
