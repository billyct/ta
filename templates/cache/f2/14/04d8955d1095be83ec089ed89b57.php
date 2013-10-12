<?php

/* timeline/sidebar.html */
class __TwigTemplate_f21404d8955d1095be83ec089ed89b57 extends Twig_Template
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
        ";
        // line 5
        if (isset($context["current_user"])) { $_current_user_ = $context["current_user"]; } else { $_current_user_ = null; }
        if ($_current_user_) {
            // line 6
            echo "        <li class=\"sticker sticker-color-blue dropdown active\" data-role=\"dropdown\">
        \t<a href=\"javascript:void(0);\"><i class=\"icon-reddit\"></i>个人中心</a>
        \t<ul class=\"sub-menu sidebar-dropdown-menu light open\">
        \t\t<li><a href=\"";
            // line 9
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/profile\">主页</a></li>
        \t\t<li><a href=\"";
            // line 10
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/collection\">收藏</a></li>
        \t</ul>
        </li>
        ";
        }
        // line 14
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "timeline/sidebar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  38 => 10,  33 => 9,  28 => 6,  25 => 5,  19 => 1,);
    }
}
