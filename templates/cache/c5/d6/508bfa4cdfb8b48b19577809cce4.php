<?php

/* message/messages.html */
class __TwigTemplate_c5d6508bfa4cdfb8b48b19577809cce4 extends Twig_Template
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
            <h1>私信<small></small></h1>
            <a href=\"/\" class=\"back-button big page-back\"></a>
        </div>
    </div>

    ";
        // line 11
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "cny15/sidebar.html", array(), true, false, true), "html", null, true);
        echo "

    <div class=\"page-region\">
        <div class=\"page-region-content\">
            <div class=\"grid\">
                <div class=\"row\">
                    <div class=\"messages\">
                        <ul id=\"message-list\" class=\"replies span8\">
                            ";
        // line 19
        if (isset($context["messages"])) { $_messages_ = $context["messages"]; } else { $_messages_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_messages_);
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "                            ";
            if (isset($context["current_user"])) { $_current_user_ = $context["current_user"]; } else { $_current_user_ = null; }
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            if (($this->getAttribute($_current_user_, "id") == $this->getAttribute($this->getAttribute($_message_, "user"), "id"))) {
                // line 21
                echo "                            <li class=\"bg-color-orange place-left span8\">
                                <b class=\"sticker sticker-left sticker-color-orange\"></b>
                                <div class=\"avatar\"><img src=\"http://tp3.sinaimg.cn/1842509582/180/40010343779/1\"/></div>
                                <div class=\"reply\">
                                    <div class=\"date\" style=\"font-size:12px;\">";
                // line 25
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_message_, "create_at_nice"), "html", null, true);
                echo "</div>
                                    <div class=\"author\">我  <span class=\"label success\">发给:";
                // line 26
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_message_, "to"), "username"), "html", null, true);
                echo "</span></div>
                                    ";
                // line 28
                echo "                                    <a href=\"";
                if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
                echo $_base_url_;
                echo "/message/";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo $this->getAttribute($this->getAttribute($_message_, "to"), "id");
                echo "\"><div class=\"text\">";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo $this->getAttribute($_message_, "msg");
                echo "</div></a>
                                    ";
                // line 30
                echo "                                </div>
                            </li>

                            ";
            } else {
                // line 34
                echo "                            <li class=\"bg-color-greenLight place-left span8\">
                                <b class=\"sticker sticker-left sticker-color-greenLight\"></b>
                                <div class=\"avatar\"><img src=\"http://tp3.sinaimg.cn/1842509582/180/40010343779/1\"/></div>
                                <div class=\"reply\">
                                    <div class=\"date\" style=\"font-size:12px;\">";
                // line 38
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_message_, "create_at_nice"), "html", null, true);
                echo "</div>
                                    <div class=\"author\">";
                // line 39
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_message_, "user"), "username"), "html", null, true);
                echo "</div>
                                    ";
                // line 41
                echo "                                    <a href=\"";
                if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
                echo $_base_url_;
                echo "/message/";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo $this->getAttribute($this->getAttribute($_message_, "user"), "id");
                echo "\"><div class=\"text\">";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo $this->getAttribute($_message_, "msg");
                echo "</div></a>
                                    ";
                // line 43
                echo "                                </div>
                            </li>
                            ";
            }
            // line 46
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 47
        echo "                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


    

</div>


";
        // line 61
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "layout/footer.html", array(), true, false, true), "html", null, true);
    }

    public function getTemplateName()
    {
        return "message/messages.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 61,  126 => 47,  120 => 46,  115 => 43,  103 => 41,  98 => 39,  93 => 38,  87 => 34,  81 => 30,  69 => 28,  64 => 26,  59 => 25,  53 => 21,  48 => 20,  43 => 19,  32 => 11,  19 => 1,);
    }
}
