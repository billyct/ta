<?php

/* cny15s.html */
class __TwigTemplate_c76a87310e5b2577110fecf791524ea6 extends Twig_Template
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
<div class=\"page secondary with-sidebar\">

    <div class=\"page-header\">
        <div class=\"page-header-content\">
            <h1>￥ 15<small></small></h1>
            <a href=\"/\" class=\"back-button big page-back\"></a>
        </div>
    </div>

    ";
        // line 11
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "cny15-sidebar.html", array(), true, false, true), "html", null, true);
        echo "

</div>

";
        // line 15
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "layout/footer.html", array(), true, false, true), "html", null, true);
    }

    public function getTemplateName()
    {
        return "cny15s.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  32 => 11,  19 => 1,);
    }
}
