<?php

/* layout/header.html */
class __TwigTemplate_3b782f169882053eb9c8fb26f8af3952 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/html\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1\">
    <meta name=\"description\" content=\"ta\">
    <meta name=\"author\" content=\"billyct\">
    <meta name=\"keywords\" content=\"ta\">

    <link href=\"";
        // line 10
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "/css/main.css\" rel=\"stylesheet\">

    <title>ta</title>
</head>
<body class=\"metrouicss\">

";
        // line 16
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "layout/navigation.html", array(), true, false, true), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 16,  30 => 10,  19 => 1,);
    }
}
