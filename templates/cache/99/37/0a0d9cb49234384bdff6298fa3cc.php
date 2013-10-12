<?php

/* user/profile.html */
class __TwigTemplate_99370a0d9cb49234384bdff6298fa3cc extends Twig_Template
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
            <h1>个人中心<small></small></h1>
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
\t\t\t\t\t\t            <li><a href=\"#page-photos\">相册</a></li>
\t\t\t\t\t\t        </ul>
\t\t\t\t\t\t        <!-- Tabs content -->
\t\t\t\t\t\t        <div class=\"frames\">
\t\t\t\t\t\t            <div class=\"frame active\" id=\"page-timelines\">
\t\t\t\t\t\t            \t<ul id=\"timeline-list\" class=\"timeline-list unstyled\">
\t\t\t\t                            ";
        // line 41
        if (isset($context["timelines"])) { $_timelines_ = $context["timelines"]; } else { $_timelines_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_timelines_);
        foreach ($context['_seq'] as $context["_key"] => $context["timeline"]) {
            // line 42
            echo "\t\t\t\t                                <li class=\"timeline\">
\t\t\t\t                                    <div class=\"detail\">

\t\t\t\t                                        <p class=\"content\">
\t\t\t\t                                            <a href=\"";
            // line 46
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/timeline/";
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "id"), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t\t                                                <i class=\"icon-left-quote\"></i>
\t\t\t\t                                                ";
            // line 48
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "content"), "html", null, true);
            echo "
\t\t\t\t                                                <i class=\"icon-right-quote\"></i>
\t\t\t\t                                            </a>                                    
\t\t\t\t                                        </p>
\t\t\t\t                                        ";
            // line 52
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_timeline_, "images"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 53
                echo "\t\t\t\t                                        <div class=\"tile image\">
\t\t\t\t                                            <div class=\"tile-content\">
\t\t\t\t                                                <img src=\"";
                // line 55
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
            // line 59
            echo "\t\t\t\t                                        <div class=\"clearfix\"></div>
\t\t\t\t                                        
\t\t\t\t                                        <p class=\"create_at\" time=\"";
            // line 61
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "create_at"), "html", null, true);
            echo "\">";
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "create_at_nice"), "html", null, true);
            echo "</p>
\t\t\t\t                                        <p class=\"deadline\" time=\"";
            // line 62
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "deadline"), "html", null, true);
            echo "\"><i class=\"icon-clock\" title=\"截止日期\"></i>";
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "deadline_nice"), "html", null, true);
            echo "</p>
\t\t\t\t                                        <p class=\"toolbar\">
\t\t\t\t                                        \t";
            // line 64
            if (isset($context["current_user"])) { $_current_user_ = $context["current_user"]; } else { $_current_user_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($_current_user_, "username") != $this->getAttribute($_user_, "username"))) {
                // line 65
                echo "\t\t\t\t                                            <a id=\"favorite\" data=\"";
                if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
                echo (($this->getAttribute($_timeline_, "favorited")) ? ("undo") : ("do"));
                echo "\" timeline-id=\"";
                if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "id"), "html", null, true);
                echo "\" class=\"bg-color-blueLight\">
\t\t\t\t                                                <i id=\"icon-i\" class=\"";
                // line 66
                if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
                echo (($this->getAttribute($_timeline_, "favorited")) ? ("icon-heart") : ("icon-heart-2"));
                echo "\" title=\"收藏\"></i>
\t\t\t\t                                                <i id=\"word-i\" style=\"display:none;\">收藏</i>
\t\t\t\t                                                ";
                // line 68
                if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
                if (($this->getAttribute($_timeline_, "favorited_count") > 0)) {
                    // line 69
                    echo "\t\t\t\t                                                <span class=\"badge\">";
                    if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "favorited_count"), "html", null, true);
                    echo "</span>
\t\t\t\t                                                ";
                }
                // line 71
                echo "\t\t\t\t                                            </a>
\t\t\t\t                                            ";
            }
            // line 73
            echo "\t\t\t\t                                            <a id=\"comments\" timeline-id=\"";
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
            // line 76
            if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
            if (($this->getAttribute($_timeline_, "comments_count") > 0)) {
                // line 77
                echo "\t\t\t\t                                                <span class=\"badge\">";
                if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "comments_count"), "html", null, true);
                echo "</span>
\t\t\t\t                                                ";
            }
            // line 79
            echo "\t\t\t\t                                            </a>
\t\t\t\t                                            ";
            // line 80
            if (isset($context["current_user"])) { $_current_user_ = $context["current_user"]; } else { $_current_user_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($_current_user_, "username") != $this->getAttribute($_user_, "username"))) {
                // line 81
                echo "\t\t\t\t                                            <a id=\"join\" data=\"";
                if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
                echo (($this->getAttribute($_timeline_, "joined")) ? ("undo") : ("do"));
                echo "\" timeline-id=\"";
                if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "id"), "html", null, true);
                echo "\" class=\"bg-color-blueLight\">
\t\t\t\t                                                <i id=\"icon-i\" class=\"";
                // line 82
                if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
                echo (($this->getAttribute($_timeline_, "joined")) ? ("icon-bookmark") : ("icon-bookmark-2"));
                echo "\" ></i>
\t\t\t\t                                                <i id=\"word-i\" style=\"display:none;\">参加</i>
\t\t\t\t                                                ";
                // line 84
                if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
                if (($this->getAttribute($_timeline_, "joined_count") > 0)) {
                    // line 85
                    echo "\t\t\t\t                                                <span class=\"badge\">";
                    if (isset($context["timeline"])) { $_timeline_ = $context["timeline"]; } else { $_timeline_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_timeline_, "joined_count"), "html", null, true);
                    echo "</span>
\t\t\t\t                                                ";
                }
                // line 87
                echo "\t\t\t\t                                            </a>
\t\t\t\t                                            ";
            }
            // line 89
            echo "\t\t\t\t                                        </p>
\t\t\t\t                                        <hr />
\t\t\t\t                                    </div>
\t\t\t\t                                </li>
\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timeline'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 94
        echo "\t\t\t\t                            
\t\t\t\t                        </ul>

\t\t\t\t\t\t            </div>
\t\t\t\t\t\t            <div class=\"frame\" id=\"page-cny15s\">
\t\t\t\t\t\t            \t<div class=\"gigs span8\">
\t\t\t\t\t                        ";
        // line 100
        if (isset($context["gigs"])) { $_gigs_ = $context["gigs"]; } else { $_gigs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_gigs_);
        foreach ($context['_seq'] as $context["_key"] => $context["gig"]) {
            // line 101
            echo "\t\t\t\t\t                        <div class=\"gig span8\">
\t\t\t\t\t                            ";
            // line 102
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            if ($this->getAttribute($_gig_, "images")) {
                // line 103
                echo "\t\t\t\t\t                            <div class=\"gig-images span2\">
\t\t\t\t\t                                <div class=\"tile image-slider\" data-role=\"image-slider\">
\t\t\t\t\t                                    ";
                // line 105
                if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_gig_, "images"));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 106
                    echo "\t\t\t\t\t                                    <div class=\"tile-content\">
\t\t\t\t\t                                        <img src=\"";
                    // line 107
                    if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_image_, "path_thumb"), "html", null, true);
                    echo "\"/>
\t\t\t\t\t                                    </div>
\t\t\t\t\t                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 110
                echo "\t\t\t\t\t                                </div>
\t\t\t\t\t                            </div>
\t\t\t\t\t                            ";
            }
            // line 113
            echo "


\t\t\t\t\t                            <div class=\"gig-detail span5\">
\t\t\t\t\t                                <a class=\"title-description\" href=\"";
            // line 117
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/cny15/";
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "id"), "html", null, true);
            echo "\">
\t\t\t\t\t                                    <p>
\t\t\t\t\t                                        <h3>给我￥";
            // line 119
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "price"), "html", null, true);
            echo "，我将";
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "title"), "html", null, true);
            echo "！</h3>
\t\t\t\t\t                                    </p>
\t\t\t\t\t                                </a>
\t\t\t\t\t                                <p class=\"body-secondary-text\">";
            // line 122
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "description"), "html", null, true);
            echo "</p>
\t\t\t\t\t                                <p class=\"toolbar\">
\t\t\t\t\t                                \t";
            // line 124
            if (isset($context["current_user"])) { $_current_user_ = $context["current_user"]; } else { $_current_user_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($_current_user_, "username") != $this->getAttribute($_user_, "username"))) {
                // line 125
                echo "\t\t\t\t\t                                    <a id=\"gig-favorite\" data=\"";
                if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
                echo (($this->getAttribute($_gig_, "favorited")) ? ("undo") : ("do"));
                echo "\" gig-id=\"";
                if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "id"), "html", null, true);
                echo "\" class=\"bg-color-blueLight\">
\t\t\t\t\t                                        <i id=\"icon-i\" class=\"";
                // line 126
                if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
                echo (($this->getAttribute($_gig_, "favorited")) ? ("icon-heart") : ("icon-heart-2"));
                echo "\" title=\"收藏\"></i>
\t\t\t\t\t                                        ";
                // line 127
                if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
                if (($this->getAttribute($_gig_, "favorited_count") > 0)) {
                    // line 128
                    echo "\t\t\t\t\t                                        <span class=\"badge\">";
                    if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "favorited_count"), "html", null, true);
                    echo "</span>
\t\t\t\t\t                                        ";
                }
                // line 130
                echo "\t\t\t\t\t                                    </a>
\t\t\t\t\t                                    ";
            }
            // line 132
            echo "\t\t\t\t\t                                    <a href=\"";
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/cny15/";
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "id"), "html", null, true);
            echo "\" class=\"button bg-color-greenLight fg-color-blueLight\">订购</a>
\t\t\t\t\t                                </p>
\t\t\t\t\t                                <p>
\t\t\t\t\t                                    ";
            // line 135
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_gig_, "tags"));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 136
                echo "\t\t\t\t\t                                        <span class=\"label info\">";
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name"), "html", null, true);
                echo "</span>
\t\t\t\t\t                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 138
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
        // line 146
        echo "\t\t\t\t\t                    </div>
\t\t\t\t\t\t            </div>
\t\t\t\t\t\t            <div class=\"frame\" id=\"page-photos\">
\t\t\t\t\t\t            \t<div class=\"image-collection p4x3\">
\t\t\t\t\t\t            \t\t";
        // line 150
        if (isset($context["images"])) { $_images_ = $context["images"]; } else { $_images_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_images_);
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 151
            echo "\t\t\t\t\t\t\t\t\t        <div><img src=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "path_thumb"), "html", null, true);
            echo "\"/></div>
\t\t\t\t\t\t\t\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 153
        echo "\t\t\t\t\t\t\t\t\t    </div>
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
        // line 164
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "layout/footer.html", array(), true, false, true), "html", null, true);
    }

    public function getTemplateName()
    {
        return "user/profile.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 164,  424 => 153,  414 => 151,  409 => 150,  403 => 146,  390 => 138,  380 => 136,  375 => 135,  364 => 132,  360 => 130,  353 => 128,  350 => 127,  345 => 126,  336 => 125,  332 => 124,  326 => 122,  316 => 119,  307 => 117,  301 => 113,  296 => 110,  286 => 107,  283 => 106,  278 => 105,  274 => 103,  271 => 102,  268 => 101,  263 => 100,  255 => 94,  245 => 89,  241 => 87,  234 => 85,  231 => 84,  225 => 82,  216 => 81,  212 => 80,  209 => 79,  202 => 77,  199 => 76,  185 => 73,  181 => 71,  174 => 69,  171 => 68,  165 => 66,  156 => 65,  152 => 64,  143 => 62,  135 => 61,  131 => 59,  120 => 55,  116 => 53,  111 => 52,  103 => 48,  94 => 46,  88 => 42,  83 => 41,  51 => 22,  46 => 21,  28 => 7,  19 => 1,);
    }
}
