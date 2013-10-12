<?php

/* home.html */
class __TwigTemplate_2b0ec76e17e99ccb850838bd71cfcc3f extends Twig_Template
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
                    <div class=\"span7\">
                        <ul id=\"timeline-list\" class=\"timeline-list unstyled\">
                            ";
        // line 16
        if (isset($context["timelines"])) { $_timelines_ = $context["timelines"]; } else { $_timelines_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_timelines_);
        foreach ($context['_seq'] as $context["_key"] => $context["timeline"]) {
            // line 17
            echo "                                <li class=\"timeline\">
                                    <div class=\"avatar\">
                                        <img src=\"http://tp3.sinaimg.cn/1842509582/180/40010343779/1\" />
                                    </div>
                                    <div class=\"detail\">
                                        <p>
                                            <span class=\"username\">";
            // line 23
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_timeline_, "user"), "username"), "html", null, true);
            echo ":</span>
                                        </p>

                                        <p class=\"content\">
                                            <a href=\"";
            // line 27
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/timeline/";
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "id"), "html", null, true);
            echo "\" target=\"_blank\">
                                                <i class=\"icon-left-quote\"></i>
                                                ";
            // line 29
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "content"), "html", null, true);
            echo "
                                                <i class=\"icon-right-quote\"></i>
                                            </a>                                    
                                        </p>
                                        ";
            // line 33
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_timeline_, "images"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 34
                echo "                                        <div class=\"tile image\">
                                            <div class=\"tile-content\">
                                                <img src=\"";
                // line 36
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
            // line 40
            echo "                                        <div class=\"clearfix\"></div>
                                        
                                        <p class=\"create_at\" time=\"";
            // line 42
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "create_at"), "html", null, true);
            echo "\">";
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "create_at_nice"), "html", null, true);
            echo "</p>
                                        <p class=\"deadline\" time=\"";
            // line 43
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "deadline"), "html", null, true);
            echo "\"><i class=\"icon-clock\" title=\"截止日期\"></i>";
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "deadline_nice"), "html", null, true);
            echo "</p>
                                        <p class=\"toolbar\">
                                            <a id=\"favorite\" data=\"";
            // line 45
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo (($this->getAttribute($_timeline_, "favorited")) ? ("undo") : ("do"));
            echo "\" timeline-id=\"";
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "id"), "html", null, true);
            echo "\" class=\"bg-color-blueLight\">
                                                <i id=\"icon-i\" class=\"";
            // line 46
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo (($this->getAttribute($_timeline_, "favorited")) ? ("icon-heart") : ("icon-heart-2"));
            echo "\" title=\"收藏\"></i>
                                                <i id=\"word-i\" style=\"display:none;\">收藏</i>
                                                ";
            // line 48
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            if (($this->getAttribute($_timeline_, "favorited_count") > 0)) {
                // line 49
                echo "                                                <span class=\"badge\">";
                if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "favorited_count"), "html", null, true);
                echo "</span>
                                                ";
            }
            // line 51
            echo "                                            </a>
                                            
                                            <a id=\"comments\" timeline-id=\"";
            // line 53
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "id"), "html", null, true);
            echo "\" href=\"";
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/timeline/";
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "id"), "html", null, true);
            echo "\" target=\"_blank\" class=\"bg-color-blueLight\">
                                                <i id=\"icon-i\" class=\"icon-comments-5\" title=\"评论\"></i>
                                                <i id=\"word-i\" style=\"display:none;\">评论</i>
                                                ";
            // line 56
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            if (($this->getAttribute($_timeline_, "comments_count") > 0)) {
                // line 57
                echo "                                                <span class=\"badge\">";
                if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "comments_count"), "html", null, true);
                echo "</span>
                                                ";
            }
            // line 59
            echo "                                            </a>
                                            <a id=\"join\" data=\"";
            // line 60
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo (($this->getAttribute($_timeline_, "joined")) ? ("undo") : ("do"));
            echo "\" timeline-id=\"";
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "id"), "html", null, true);
            echo "\" class=\"bg-color-blueLight\">
                                                <i id=\"icon-i\" class=\"";
            // line 61
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo (($this->getAttribute($_timeline_, "joined")) ? ("icon-bookmark") : ("icon-bookmark-2"));
            echo "\" ></i>
                                                <i id=\"word-i\" style=\"display:none;\">参加</i>
                                                ";
            // line 63
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            if (($this->getAttribute($_timeline_, "joined_count") > 0)) {
                // line 64
                echo "                                                <span class=\"badge\">";
                if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "joined_count"), "html", null, true);
                echo "</span>
                                                ";
            }
            // line 66
            echo "                                            </a>
                                            
                                        </p>
                                        <hr />
                                    </div>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timeline'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 73
        echo "                            
                        </ul>
                        <div class=\"clearfix\"></div>
                        <div class=\"bg-color-blueLight load-more\">
                            <center><a href=\"javascript:void(0);\">加载更多</a></center>
                        </div>
                    </div>

                    <div class=\"span3\">
                        <div class=\"notify\">
                            
                            <h4>发现更多有趣的内容:</h4>
                            <a href=\"/app/\">移动应用</a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 95
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "layout/footer.html", array(), true, false, true), "html", null, true);
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 95,  206 => 73,  194 => 66,  187 => 64,  184 => 63,  178 => 61,  170 => 60,  167 => 59,  160 => 57,  157 => 56,  144 => 53,  140 => 51,  133 => 49,  130 => 48,  124 => 46,  116 => 45,  107 => 43,  99 => 42,  95 => 40,  84 => 36,  80 => 34,  75 => 33,  67 => 29,  58 => 27,  50 => 23,  42 => 17,  37 => 16,  19 => 1,);
    }
}
