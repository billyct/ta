<?php

/* timeline.html */
class __TwigTemplate_f750ca20e04f4fb775d4b92ca6b5afb7 extends Twig_Template
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
            <h1>游吟<small></small></h1>
            <a href=\"/\" class=\"back-button big page-back\"></a>
        </div>
    </div>
    <div class=\"page-region\">
        <div class=\"page-region-content\">
            <div class=\"grid\">
                <div class=\"row\">

                    <div class=\"span2\">
                        <div class=\"user-intro\">
                            <img class=\"avatar\" src=\"http://tp3.sinaimg.cn/1842509582/180/40010343779/1\" />
                            <h2>";
        // line 18
        if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_timeline_, "user"), "username"), "html", null, true);
        echo "</h2>
                        </div>
                    </div>
                    <div class=\"span8\">
                        <div class=\"timeline-single\">

                            <p class=\"content\"><i class=\"icon-comments-3\"></i>";
        // line 24
        if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "content"), "html", null, true);
        echo "</p>

                            ";
        // line 26
        if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_timeline_, "images"));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 27
            echo "                            <div class=\"tile image\">
                                <div class=\"tile-content\">
                                    <img src=\"";
            // line 29
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "path_thumb"), "html", null, true);
            echo "\" />
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 33
        echo "                            <div class=\"clearfix\"></div>

                            <p class=\"create_at\">发布时间: ";
        // line 35
        if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "create_at_nice"), "html", null, true);
        echo "</p>
                            <p class=\"deadline\"><i class=\"icon-clock\"></i>";
        // line 36
        if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "deadline_nice"), "html", null, true);
        echo "</p>
                        </div>
                        <a id=\"favorite\" data=\"";
        // line 38
        if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
        echo (($this->getAttribute($_timeline_, "favorited")) ? ("undo") : ("do"));
        echo "\" timeline-id=\"";
        if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "id"), "html", null, true);
        echo "\" class=\"bg-color-blueLight button\">
                            收藏
                            <i id=\"icon-i\" class=\"";
        // line 40
        if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
        echo (($this->getAttribute($_timeline_, "favorited")) ? ("icon-heart") : ("icon-heart-2"));
        echo "\" title=\"收藏\"></i>
                            ";
        // line 41
        if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
        if (($this->getAttribute($_timeline_, "favorited_count") > 0)) {
            // line 42
            echo "                            <span class=\"badge\">";
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "favorited_count"), "html", null, true);
            echo "</span>
                            ";
        }
        // line 44
        echo "                        </a>
                        <a id=\"join\" data=\"";
        // line 45
        if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
        echo (($this->getAttribute($_timeline_, "joined")) ? ("undo") : ("do"));
        echo "\" timeline-id=\"";
        if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "id"), "html", null, true);
        echo "\" class=\"bg-color-blueLight button\">
                            报名参加
                            <i id=\"icon-i\" class=\"";
        // line 47
        if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
        echo (($this->getAttribute($_timeline_, "joined")) ? ("icon-bookmark") : ("icon-bookmark-2"));
        echo "\" ></i>
                            ";
        // line 48
        if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
        if (($this->getAttribute($_timeline_, "joined_count") > 0)) {
            // line 49
            echo "                            <span class=\"badge\">";
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "joined_count"), "html", null, true);
            echo "</span>
                            ";
        }
        // line 51
        echo "                        </a>
                        <hr />
                    </div>

                    <div class=\"span8 offset2\">

                        <div class=\"comment-form\">

                            <div class=\"span1\">
                                <img src=\"http://tp3.sinaimg.cn/1842509582/180/40010343779/1\" />
                            </div>
                            <div class=\"span7\">
                                <from id=\"form-comment\" class=\"form-comment\">
                                    <div class=\"input-control textarea\">
                                        <textarea id=\"textarea-content\" class=\"textarea\" placeholder=\"内容\" title=\"内容\"></textarea>
                                    </div>
         
                                    <div class=\"input-control\">
                                        <div class=\"toolbar\">
                                            <input name=\"leavemsg\" timeline-id=\"";
        // line 70
        if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "id"), "html", null, true);
        echo "\" class=\"bg-color-greenDark\" id=\"btn-leavemsg\" type=\"submit\" value=\"留言\"/>
                                            <button id=\"btn-comment-picture\" class=\"bg-color-green\" title=\"图片\">
                                                <i class=\"icon-pictures\"></i>
                                            </button>
                                            
                                        </div>
                                    </div>

                                    <div id=\"image-comment-uploader\" style=\"display:none;\">
                                        <div id=\"image-comment-fineuploader\"></div>
                                        <div id=\"image-comment-uploaded-thumbs\">
                                            <div class=\"grid\">
                                                <div class=\"row\">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </from>
                            </div>
                            
                        </div>

                        <div class=\"clearfix\"></div>
                        <ul id=\"comment-list\" class=\"comment-list unstyled\">
                            ";
        // line 95
        if (isset($context["comments"])) { $_comments_ = $context["comments"]; } else { $_comments_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_comments_);
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 96
            echo "                            <li class=\"comment\">
                                <div class=\"avatar\">
                                    <img src=\"http://tp3.sinaimg.cn/1842509582/180/40010343779/1\" />
                                </div>
                                <div class=\"detail\">
                                    <p>
                                        <span class=\"username\">";
            // line 102
            if (isset($context["comment"])) { $_comment_ = $context["comment"]; } else { $_comment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_comment_, "user"), "username"), "html", null, true);
            echo ":</span>
                                    </p>
                                    <p class=\"content\">
                                        ";
            // line 105
            if (isset($context["comment"])) { $_comment_ = $context["comment"]; } else { $_comment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_comment_, "content"), "html", null, true);
            echo "
                                    </p>
                                    ";
            // line 107
            if (isset($context["comment"])) { $_comment_ = $context["comment"]; } else { $_comment_ = null; }
            if ($this->getAttribute($_comment_, "image")) {
                // line 108
                echo "                                    <div class=\"tile image\">
                                        <div class=\"tile-content\">
                                            <img src=\"";
                // line 110
                if (isset($context["comment"])) { $_comment_ = $context["comment"]; } else { $_comment_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_comment_, "image"), "path_thumb"), "html", null, true);
                echo "\" />
                                        </div>
                                    </div>
                                    ";
            }
            // line 114
            echo "                                    <div class=\"clearfix\"></div>
                                    <p class=\"create_at\">";
            // line 115
            if (isset($context["comment"])) { $_comment_ = $context["comment"]; } else { $_comment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_comment_, "create_at_nice"), "html", null, true);
            echo "</p>
                                    <hr />
                                </div>
                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 120
        echo "                        </ul>
                        

                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
<script id=\"comment-template\" type=\"text/template\">
<li class=\"comment\">
    <div class=\"avatar\">
        <img src=\"http://tp3.sinaimg.cn/1842509582/180/40010343779/1\" />
    </div>
    <div class=\"detail\">
        <p>
            <span class=\"username\"><%= user.username %>:</span>
        </p>
        <p class=\"content\">
            <%= content %>
        </p>
        <% if (image) { %>
        <div class=\"tile image\">
            <div class=\"tile-content\">
                <img src=\"<%= image.path_thumb %>\" />
            </div>
        </div>
        <% } %>
        <div class=\"clearfix\"></div>
        <p class=\"create_at\"><%= create_at %></p>
        <hr />
    </div>
</li>
</script>
";
        // line 156
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "layout/footer.html", array(), true, false, true), "html", null, true);
    }

    public function getTemplateName()
    {
        return "timeline.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 156,  247 => 120,  235 => 115,  232 => 114,  224 => 110,  220 => 108,  217 => 107,  211 => 105,  204 => 102,  196 => 96,  191 => 95,  162 => 70,  141 => 51,  134 => 49,  131 => 48,  126 => 47,  117 => 45,  114 => 44,  107 => 42,  104 => 41,  99 => 40,  90 => 38,  84 => 36,  79 => 35,  75 => 33,  64 => 29,  60 => 27,  55 => 26,  49 => 24,  39 => 18,  19 => 1,);
    }
}
