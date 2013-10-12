<?php

/* user/collection.html */
class __TwigTemplate_b058acce5797d9b19f3c1aed9274ec8c extends Twig_Template
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
            <h1>我的收藏<small></small></h1>
            <a href=\"";
        // line 7
        if (isset($context["last_url"])) { $_last_url_ = $context["last_url"]; } else { $_last_url_ = null; }
        echo twig_escape_filter($this->env, $_last_url_, "html", null, true);
        echo "\" class=\"back-button big page-back\"></a>
        </div>
    </div>
    <div class=\"page-region\">
        <div class=\"page-region-content\">
        \t<div class=\"grid\">
                <div class=\"row\">
\t\t        \t<div class=\"profile span8\">

\t\t        \t\t<div class=\"profile-header\">
\t\t        \t\t\t<div class=\"span2 avatar\">
\t\t        \t\t\t\t<img src=\"http://tp3.sinaimg.cn/1842509582/180/40010343779/1\" />
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"span5 descript\">
\t\t        \t\t\t\t<h2>";
        // line 21
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "username"), "html", null, true);
        echo "</h2>
\t\t        \t\t\t\t<p><a href=\"";
        // line 22
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "/profile/";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id"), "html", null, true);
        echo "\">";
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "/profile/";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id"), "html", null, true);
        echo "</a></p>
\t\t        \t\t\t</div>
\t\t        \t\t</div>

\t\t        \t\t<div class=\"profile-content span10\">
\t\t\t\t        \t<div class=\"page-control\" data-role=\"page-control\">
\t\t\t\t\t\t        <!-- Responsive controls -->
\t\t\t\t\t\t        <span class=\"menu-pull\"></span> 
\t\t\t\t\t\t        <div class=\"menu-pull-bar\"></div>
\t\t\t\t\t\t        <!-- Tabs -->
\t\t\t\t\t\t        <ul>
\t\t\t\t\t\t            <li class=\"active\"><a href=\"#page-timelines\">游吟</a></li>
\t\t\t\t\t\t            <li><a href=\"#page-cny15s\">￥15</a></li>
\t\t\t\t\t\t        </ul>
\t\t\t\t\t\t        <!-- Tabs content -->
\t\t\t\t\t\t        <div class=\"frames\">
\t\t\t\t\t\t            <div class=\"frame active\" id=\"page-timelines\">
\t\t\t\t\t\t            \t<ul id=\"timeline-list\" class=\"timeline-list unstyled\">
\t\t\t\t                            ";
        // line 40
        if (isset($context["timelines"])) { $_timelines_ = $context["timelines"]; } else { $_timelines_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_timelines_);
        foreach ($context['_seq'] as $context["_key"] => $context["timeline"]) {
            // line 41
            echo "\t\t\t\t                                <li class=\"timeline\">
\t\t\t\t                                    <div class=\"detail\">

\t\t\t\t                                        <p class=\"content\">
\t\t\t\t                                            <a href=\"";
            // line 45
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/timeline/";
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "id"), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t\t                                                <i class=\"icon-left-quote\"></i>
\t\t\t\t                                                ";
            // line 47
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "content"), "html", null, true);
            echo "
\t\t\t\t                                                <i class=\"icon-right-quote\"></i>
\t\t\t\t                                            </a>                                    
\t\t\t\t                                        </p>
\t\t\t\t                                        ";
            // line 51
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_timeline_, "images"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 52
                echo "\t\t\t\t                                        <div class=\"tile image\">
\t\t\t\t                                            <div class=\"tile-content\">
\t\t\t\t                                                <img src=\"";
                // line 54
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_image_, "path_thumb"), "html", null, true);
                echo "\" />
\t\t\t\t                                            </div>
\t\t\t\t                                        </div>
\t\t\t\t                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 58
            echo "\t\t\t\t                                        <div class=\"clearfix\"></div>
\t\t\t\t                                        
\t\t\t\t                                        <p class=\"create_at\" time=\"";
            // line 60
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "create_at"), "html", null, true);
            echo "\">";
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "create_at_nice"), "html", null, true);
            echo "</p>
\t\t\t\t                                        <p class=\"deadline\" time=\"";
            // line 61
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "deadline"), "html", null, true);
            echo "\"><i class=\"icon-clock\" title=\"截止日期\"></i>";
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "deadline_nice"), "html", null, true);
            echo "</p>
\t\t\t\t                                        <p class=\"toolbar\">
\t\t\t\t                                            <a id=\"favorite\" data=\"";
            // line 63
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo (($this->getAttribute($_timeline_, "favorited")) ? ("undo") : ("do"));
            echo "\" timeline-id=\"";
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "id"), "html", null, true);
            echo "\" class=\"bg-color-blueLight\">
\t\t\t\t                                                <i id=\"icon-i\" class=\"";
            // line 64
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo (($this->getAttribute($_timeline_, "favorited")) ? ("icon-heart") : ("icon-heart-2"));
            echo "\" title=\"收藏\"></i>
\t\t\t\t                                                <i id=\"word-i\" style=\"display:none;\">收藏</i>
\t\t\t\t                                                ";
            // line 66
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            if (($this->getAttribute($_timeline_, "favorited_count") > 0)) {
                // line 67
                echo "\t\t\t\t                                                <span class=\"badge\">";
                if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "favorited_count"), "html", null, true);
                echo "</span>
\t\t\t\t                                                ";
            }
            // line 69
            echo "\t\t\t\t                                            </a>
\t\t\t\t                                            
\t\t\t\t                                            <a id=\"comments\" timeline-id=\"";
            // line 71
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "id"), "html", null, true);
            echo "\" href=\"";
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/timeline/";
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "id"), "html", null, true);
            echo "\" target=\"_blank\" class=\"bg-color-blueLight\">
\t\t\t\t                                                <i id=\"icon-i\" class=\"icon-comments-5\" title=\"评论\"></i>
\t\t\t\t                                                <i id=\"word-i\" style=\"display:none;\">评论</i>
\t\t\t\t                                                ";
            // line 74
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            if (($this->getAttribute($_timeline_, "comments_count") > 0)) {
                // line 75
                echo "\t\t\t\t                                                <span class=\"badge\">";
                if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "comments_count"), "html", null, true);
                echo "</span>
\t\t\t\t                                                ";
            }
            // line 77
            echo "\t\t\t\t                                            </a>
\t\t\t\t                                            <a id=\"join\" data=\"";
            // line 78
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo (($this->getAttribute($_timeline_, "joined")) ? ("undo") : ("do"));
            echo "\" timeline-id=\"";
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "id"), "html", null, true);
            echo "\" class=\"bg-color-blueLight\">
\t\t\t\t                                                <i id=\"icon-i\" class=\"";
            // line 79
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo (($this->getAttribute($_timeline_, "joined")) ? ("icon-bookmark") : ("icon-bookmark-2"));
            echo "\" ></i>
\t\t\t\t                                                <i id=\"word-i\" style=\"display:none;\">参加</i>
\t\t\t\t                                                ";
            // line 81
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            if (($this->getAttribute($_timeline_, "joined_count") > 0)) {
                // line 82
                echo "\t\t\t\t                                                <span class=\"badge\">";
                if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "joined_count"), "html", null, true);
                echo "</span>
\t\t\t\t                                                ";
            }
            // line 84
            echo "\t\t\t\t                                            </a>
\t\t\t\t                                            
\t\t\t\t                                        </p>
\t\t\t\t                                        <hr />
\t\t\t\t                                    </div>
\t\t\t\t                                </li>
\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timeline'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 91
        echo "\t\t\t\t                            
\t\t\t\t                        </ul>

\t\t\t\t\t\t            </div>
\t\t\t\t\t\t            <div class=\"frame\" id=\"page-cny15s\">
\t\t\t\t\t\t            \t<div class=\"gigs span8\">
\t\t\t\t\t                        ";
        // line 97
        if (isset($context["gigs"])) { $_gigs_ = $context["gigs"]; } else { $_gigs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_gigs_);
        foreach ($context['_seq'] as $context["_key"] => $context["gig"]) {
            // line 98
            echo "\t\t\t\t\t                        <div class=\"gig span8\">
\t\t\t\t\t                            ";
            // line 99
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            if ($this->getAttribute($_gig_, "images")) {
                // line 100
                echo "\t\t\t\t\t                            <div class=\"gig-images span2\">
\t\t\t\t\t                                <div class=\"tile image-slider\" data-role=\"image-slider\">
\t\t\t\t\t                                    ";
                // line 102
                if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_gig_, "images"));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 103
                    echo "\t\t\t\t\t                                    <div class=\"tile-content\">
\t\t\t\t\t                                        <img src=\"";
                    // line 104
                    if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_image_, "path_thumb"), "html", null, true);
                    echo "\"/>
\t\t\t\t\t                                    </div>
\t\t\t\t\t                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 107
                echo "\t\t\t\t\t                                </div>
\t\t\t\t\t                            </div>
\t\t\t\t\t                            ";
            }
            // line 110
            echo "


\t\t\t\t\t                            <div class=\"gig-detail span5\">
\t\t\t\t\t                                <a class=\"title-description\" href=\"";
            // line 114
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/cny15/";
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "id"), "html", null, true);
            echo "\">
\t\t\t\t\t                                    <p>
\t\t\t\t\t                                        <h3>给我￥";
            // line 116
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "price"), "html", null, true);
            echo "，我将";
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "title"), "html", null, true);
            echo "！</h3>
\t\t\t\t\t                                    </p>
\t\t\t\t\t                                </a>
\t\t\t\t\t                                <p class=\"body-secondary-text\">";
            // line 119
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "description"), "html", null, true);
            echo "</p>
\t\t\t\t\t                                <p class=\"toolbar\">
\t\t\t\t\t                                    <a id=\"gig-favorite\" data=\"";
            // line 121
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo (($this->getAttribute($_gig_, "favorited")) ? ("undo") : ("do"));
            echo "\" gig-id=\"";
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "id"), "html", null, true);
            echo "\" class=\"bg-color-blueLight\">
\t\t\t\t\t                                        <i id=\"icon-i\" class=\"";
            // line 122
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo (($this->getAttribute($_gig_, "favorited")) ? ("icon-heart") : ("icon-heart-2"));
            echo "\" title=\"收藏\"></i>
\t\t\t\t\t                                        ";
            // line 123
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            if (($this->getAttribute($_gig_, "favorited_count") > 0)) {
                // line 124
                echo "\t\t\t\t\t                                        <span class=\"badge\">";
                if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "favorited_count"), "html", null, true);
                echo "</span>
\t\t\t\t\t                                        ";
            }
            // line 126
            echo "\t\t\t\t\t                                    </a>
\t\t\t\t\t                                    <a href=\"";
            // line 127
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/cny15/";
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "id"), "html", null, true);
            echo "\" class=\"button bg-color-greenLight fg-color-blueLight\">订购</a>
\t\t\t\t\t                                </p>
\t\t\t\t\t                                <p>
\t\t\t\t\t                                    ";
            // line 130
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_gig_, "tags"));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 131
                echo "\t\t\t\t\t                                        <span class=\"label info\">";
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name"), "html", null, true);
                echo "</span>
\t\t\t\t\t                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 133
            echo "
\t\t\t\t\t                                </p>

\t\t\t\t\t                            </div>
\t\t\t\t\t                            
\t\t\t\t\t                        </div>
\t\t\t\t\t                        <hr />
\t\t\t\t\t                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gig'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 141
        echo "\t\t\t\t\t                    </div>
\t\t\t\t\t\t            </div>
\t\t\t\t\t\t        </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t</div>
        </div>
    </div>
</div>
";
        // line 152
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "layout/footer.html", array(), true, false, true), "html", null, true);
    }

    public function getTemplateName()
    {
        return "user/collection.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 152,  382 => 141,  369 => 133,  359 => 131,  354 => 130,  344 => 127,  341 => 126,  334 => 124,  331 => 123,  326 => 122,  318 => 121,  312 => 119,  302 => 116,  293 => 114,  287 => 110,  282 => 107,  272 => 104,  269 => 103,  264 => 102,  260 => 100,  257 => 99,  254 => 98,  249 => 97,  241 => 91,  229 => 84,  222 => 82,  219 => 81,  213 => 79,  205 => 78,  202 => 77,  195 => 75,  192 => 74,  179 => 71,  175 => 69,  168 => 67,  165 => 66,  159 => 64,  151 => 63,  142 => 61,  134 => 60,  130 => 58,  119 => 54,  115 => 52,  110 => 51,  102 => 47,  93 => 45,  87 => 41,  82 => 40,  51 => 22,  46 => 21,  28 => 7,  19 => 1,);
    }
}
