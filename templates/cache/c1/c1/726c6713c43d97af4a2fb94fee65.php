<?php

/* accounts.html */
class __TwigTemplate_c1c1726c6713c43d97af4a2fb94fee65 extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "layout/header.html", array(), true, false, true), "html", null, true);
        echo "
<div class=\"page secondary\">

    <div class=\"page-header\">
        <div class=\"page-header-content\">
            <h1>";
        // line 6
        if (isset($context["current_user"])) { $_current_user_ = $context["current_user"]; } else { $_current_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_current_user_, "username"), "html", null, true);
        echo "的账号<small></small></h1>
            <a href=\"/\" class=\"back-button big page-back\"></a>
        </div>
    </div>
    <div class=\"page-region\">
        <div class=\"page-region-content\">
        \t <div class=\"page-control\" data-role=\"page-control\">
\t\t        <!-- Responsive controls -->
\t\t        <span class=\"menu-pull\"></span> 
\t\t        <div class=\"menu-pull-bar\"></div>
\t\t        <!-- Tabs -->
\t\t        <ul>
\t\t            <li class=\"active\"><a href=\"#base-setting\">基本设置</a></li>
\t\t        </ul>
\t\t        <!-- Tabs content -->
\t\t        <div class=\"frames\">
\t\t            <div class=\"frame active\" id=\"base-setting\">
\t\t            \t<p>
\t\t\t            \t<label for=\"username\">名号:</label>
\t\t\t            \t<input type=\"text\" name=\"username\" id=\"username\" value=\"";
        // line 25
        if (isset($context["current_user"])) { $_current_user_ = $context["current_user"]; } else { $_current_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_current_user_, "username"), "html", null, true);
        echo "\" disabled/>
\t\t            \t</p>

\t\t            \t<p>
\t\t            \t\t<label for=\"avatar\">头像:</label>
\t\t            \t\t<img src=\"http://tp3.sinaimg.cn/1842509582/180/40010343779/1\" />
\t\t            \t</p>

\t\t            \t<p>
\t\t\t            \t<label for=\"email\">登录邮箱:</label>
\t\t\t            \t<span class=\"label\">";
        // line 35
        if (isset($context["current_user"])) { $_current_user_ = $context["current_user"]; } else { $_current_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_current_user_, "email"), "html", null, true);
        echo "</span>
\t\t\t            \t<a href=\"";
        // line 36
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "/account/emailchange\">更改</a>
\t\t\t            </p>

\t\t\t            <p>
\t\t\t            \t<label for=\"password\">密码:</label>
\t\t\t            \t<a href=\"";
        // line 41
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "/account/passwordchange\">更改</a>
\t\t\t            </p>

\t\t            </div>
\t\t        </div>
\t\t    </div>
        </div>
    </div>
</div>
";
        // line 50
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "layout/footer.html", array(), true, false, true), "html", null, true);
    }

    public function getTemplateName()
    {
        return "accounts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 50,  78 => 41,  69 => 36,  64 => 35,  50 => 25,  27 => 6,  19 => 1,);
    }
}
