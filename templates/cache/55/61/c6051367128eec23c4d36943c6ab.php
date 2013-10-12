<?php

/* layout/footer.html */
class __TwigTemplate_5561c6051367128eec23c4d36943c6ab extends Twig_Template
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
        echo "\t\t
\t    <div class=\"page\">
\t        <div class=\"nav-bar\">
\t            <div class=\"nav-bar-inner padding10\">
\t                <span class=\"element\">
\t                    @ 2012 ta &copy; by <a class=\"fg-color-white\" href=\"#\">billyct</a>
\t                </span>
\t            </div>
\t        </div>
\t    </div>
\t    <script src=\"http://127.0.0.1:1337/socket.io/socket.io.js\"></script>

    \t<script src=\"";
        // line 13
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "/js/libs/seajs/1.2.1/sea.js\"
    \t\t\tdata-main=\"/js/scripts/init\"></script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "layout/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 13,  19 => 1,);
    }
}
