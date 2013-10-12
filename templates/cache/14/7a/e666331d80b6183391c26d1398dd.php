<?php

/* cny15/cny15s.html */
class __TwigTemplate_147ae666331d80b6183391c26d1398dd extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "cny15/sidebar.html", array(), true, false, true), "html", null, true);
        echo "

    <div class=\"page-region\">
        <div class=\"page-region-content\">
            <div class=\"grid\">
                <div class=\"row\">
                    <div class=\"gigs span8\">
                        ";
        // line 18
        if (isset($context["gigs"])) { $_gigs_ = $context["gigs"]; } else { $_gigs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_gigs_);
        foreach ($context['_seq'] as $context["_key"] => $context["gig"]) {
            // line 19
            echo "                        <div class=\"gig span8\">
                            ";
            // line 20
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            if ($this->getAttribute($_gig_, "images")) {
                // line 21
                echo "                            <div class=\"gig-images span2\">
                                <div class=\"tile image-slider\" data-role=\"image-slider\">
                                    ";
                // line 23
                if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_gig_, "images"));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 24
                    echo "                                    <div class=\"tile-content\">
                                        <img src=\"";
                    // line 25
                    if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_image_, "path_thumb"), "html", null, true);
                    echo "\"/>
                                    </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 28
                echo "                                </div>
                            </div>
                            ";
            }
            // line 31
            echo "


                            <div class=\"gig-detail span5\">
                                <a class=\"title-description\" href=\"";
            // line 35
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/cny15/";
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "id"), "html", null, true);
            echo "\">
                                    <p>
                                        <h3>给我￥";
            // line 37
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "price"), "html", null, true);
            echo "，我将";
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "title"), "html", null, true);
            echo "！</h3>
                                    </p>
                                </a>
                                <p class=\"body-secondary-text\">";
            // line 40
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "description"), "html", null, true);
            echo "</p>
                                <p class=\"toolbar\">
                                    <a id=\"gig-favorite\" data=\"";
            // line 42
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo (($this->getAttribute($_gig_, "favorited")) ? ("undo") : ("do"));
            echo "\" gig-id=\"";
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "id"), "html", null, true);
            echo "\" class=\"bg-color-blueLight\">
                                        <i id=\"icon-i\" class=\"";
            // line 43
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo (($this->getAttribute($_gig_, "favorited")) ? ("icon-heart") : ("icon-heart-2"));
            echo "\" title=\"收藏\"></i>
                                        ";
            // line 44
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            if (($this->getAttribute($_gig_, "favorited_count") > 0)) {
                // line 45
                echo "                                        <span class=\"badge\">";
                if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "favorited_count"), "html", null, true);
                echo "</span>
                                        ";
            }
            // line 47
            echo "                                    </a>
                                    <a href=\"";
            // line 48
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/cny15/";
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "id"), "html", null, true);
            echo "\" class=\"button bg-color-greenLight fg-color-blueLight\">订购</a>
                                </p>
                                <p>
                                    ";
            // line 51
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_gig_, "tags"));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 52
                echo "                                        <span class=\"label info\">";
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name"), "html", null, true);
                echo "</span>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 54
            echo "
                                </p>

                            </div>
                            
                        </div>
                        <hr />
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gig'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 62
        echo "                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

";
        // line 71
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "layout/footer.html", array(), true, false, true), "html", null, true);
    }

    public function getTemplateName()
    {
        return "cny15/cny15s.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 71,  175 => 62,  162 => 54,  152 => 52,  147 => 51,  137 => 48,  134 => 47,  127 => 45,  124 => 44,  119 => 43,  111 => 42,  105 => 40,  95 => 37,  86 => 35,  80 => 31,  75 => 28,  65 => 25,  62 => 24,  57 => 23,  53 => 21,  50 => 20,  47 => 19,  42 => 18,  32 => 11,  19 => 1,);
    }
}
