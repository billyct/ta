<?php

/* callback.html */
class __TwigTemplate_57b99241e987498890344b3b6b0e3b1f extends Twig_Template
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


    <title>ta</title>
</head>
<body>
\t<script type=\"text/javascript\">
\twindow.onunload = refreshParent;
    function refreshParent() {
        window.opener.location.reload();
    }
\twindow.close();
\t</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "callback.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
