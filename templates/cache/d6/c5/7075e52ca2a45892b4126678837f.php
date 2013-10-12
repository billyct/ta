<?php

/* message/message.html */
class __TwigTemplate_d6c57075e52ca2a45892b4126678837f extends Twig_Template
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
            <h1>私信<small>与";
        // line 6
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "username"), "html", null, true);
        echo "的对话</small></h1>
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
                    <div id=\"messages-single\" class=\"messages-single span8\">
                        <div class=\"message-box span8\">
                            <div id=\"message-input-area\">
                                <div id=\"textbox\" contenteditable=\"true\"></div>
                                <div id=\"close\"></div>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div id=\"message-text-area\" style=\"color:#999\">发私信</div>
                        </div>
                        <div class=\"clearfix\"></div>
                        <div style=\"display:none\" to-user=\"";
        // line 27
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id"), "html", null, true);
        echo "\" id=\"btn-send-message\" class=\"btn-send\" >发送</div>

                        <hr />
                        <div class=\"message-list span8\">
                            <ul id=\"message-list\" class=\"replies span8\">
                                ";
        // line 32
        if (isset($context["messages"])) { $_messages_ = $context["messages"]; } else { $_messages_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_messages_);
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            echo "                                ";
            if (isset($context["current_user"])) { $_current_user_ = $context["current_user"]; } else { $_current_user_ = null; }
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            if (($this->getAttribute($_current_user_, "id") == $this->getAttribute($this->getAttribute($_message_, "user"), "id"))) {
                // line 34
                echo "
                                <li class=\"bg-color-orange place-right span4\">
                                    <b class=\"sticker sticker-right sticker-color-orange\"></b>
                                    <div class=\"avatar\"><img src=\"http://tp3.sinaimg.cn/1842509582/180/40010343779/1\"/></div>
                                    <div class=\"reply\">
                                        <div class=\"date\" style=\"font-size:12px;\">";
                // line 39
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_message_, "create_at_nice"), "html", null, true);
                echo "</div>
                                        <div class=\"author\">我</div>
                                        ";
                // line 42
                echo "                                        <div class=\"text\">";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo $this->getAttribute($_message_, "msg");
                echo "</div>
                                        ";
                // line 44
                echo "                                    </div>

                                </li>

                                ";
            } else {
                // line 49
                echo "                                <li class=\"bg-color-greenLight place-left span4\">
                                    <b class=\"sticker sticker-left sticker-color-greenLight\"></b>
                                    <div class=\"avatar\"><img src=\"http://tp3.sinaimg.cn/1842509582/180/40010343779/1\"/></div>
                                    <div class=\"reply\">
                                        <div class=\"date\" style=\"font-size:12px;\">";
                // line 53
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_message_, "create_at_nice"), "html", null, true);
                echo "</div>
                                        <div class=\"author\">";
                // line 54
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_message_, "user"), "username"), "html", null, true);
                echo "</div>
                                        ";
                // line 56
                echo "                                        <div class=\"text\">";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo $this->getAttribute($_message_, "msg");
                echo "</div>
                                        ";
                // line 58
                echo "                                    </div>
                                </li>
                                ";
            }
            // line 61
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 62
        echo "                            </ul>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>


    

</div>

<script id=\"msg-left-template\" type=\"text/template\">
<li class=\"bg-color-greenLight span4\">
    <b class=\"sticker sticker-left sticker-color-greenLight\"></b>
    <div class=\"avatar\"><img src=\"http://tp3.sinaimg.cn/1842509582/180/40010343779/1\"/></div>
    <div class=\"reply\">
        <div class=\"date\"><%= create_at %></div>
        <div class=\"author\"><%= user.username %></div>
        <div class=\"text\"><%= msg %></div>
    </div>
</li>
</script>

<script id=\"msg-right-template\" type=\"text/template\">
<li class=\"bg-color-orange place-right span4\">
    <b class=\"sticker sticker-right sticker-color-orange\"></b>
    <div class=\"avatar\"><img src=\"http://tp3.sinaimg.cn/1842509582/180/40010343779/1\"/></div>
    <div class=\"reply\">
        <div class=\"date\"><%= create_at %></div>
        <div class=\"author\">我</div>
        <div class=\"text\"><%= msg %></div>
    </div>

</li>
</script>


";
        // line 103
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "layout/footer.html", array(), true, false, true), "html", null, true);
    }

    public function getTemplateName()
    {
        return "message/message.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 103,  133 => 62,  127 => 61,  122 => 58,  116 => 56,  111 => 54,  106 => 53,  100 => 49,  93 => 44,  87 => 42,  81 => 39,  74 => 34,  69 => 33,  64 => 32,  55 => 27,  36 => 11,  27 => 6,  19 => 1,);
    }
}
