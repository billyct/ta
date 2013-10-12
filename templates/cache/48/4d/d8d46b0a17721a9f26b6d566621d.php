<?php

/* cny15/manage.html */
class __TwigTemplate_484dd8d46b0a17721a9f26b6d566621d extends Twig_Template
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
            <h1>我的￥ 15<small></small></h1>
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
                    <a href=\"";
        // line 18
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "/cny15/manage/new\" class=\"button\">创建新的￥15</a>
                    <div class=\"cny15s span8\">
                        ";
        // line 20
        if (isset($context["gigs"])) { $_gigs_ = $context["gigs"]; } else { $_gigs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_gigs_);
        foreach ($context['_seq'] as $context["_key"] => $context["gig"]) {
            // line 21
            echo "                        <div id=\"cny15-manage\" class=\"cny15-manage span8\">
                            <div class=\"cny15-image span2\">
                                <div class=\"tile image\">
                                    <div class=\"tile-content\">
                                    ";
            // line 25
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            if ($this->getAttribute($_gig_, "images")) {
                // line 26
                echo "                                        <img src=\"";
                if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($_gig_, "images")), "path_thumb"), "html", null, true);
                echo "\" />
                                    ";
            }
            // line 28
            echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"cny15-detail span6\">
                                <p>
                                    ";
            // line 33
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            if (($this->getAttribute($_gig_, "status") == 0)) {
                // line 34
                echo "                                    <span id=\"activate-status\" class=\"label\">已下架</span>
                                    ";
            } elseif (($this->getAttribute($_gig_, "status") == 1)) {
                // line 36
                echo "                                    <span id=\"activate-status\" class=\"label success\">在售中</span>
                                    ";
            }
            // line 38
            echo "                                </p>
                                <p><h3>";
            // line 39
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "title"), "html", null, true);
            echo "</h3></p>
                                <div class=\"span8\">
                                    <p class=\"toolbar span2\">
                                        <a href=\"";
            // line 42
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "/cny15/manage/edit/";
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "id"), "html", null, true);
            echo "\" class=\"bg-color-blueLight\">修改</a>
                                        
                                        ";
            // line 44
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            if (($this->getAttribute($_gig_, "status") == 0)) {
                // line 45
                echo "                                        <a id=\"activate\" data=\"do\" gig-id=\"";
                if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "id"), "html", null, true);
                echo "\" href=\"javascript:void(0);\" class=\"bg-color-blueLight\">上架</a>
                                        ";
            } elseif (($this->getAttribute($_gig_, "status") == 1)) {
                // line 47
                echo "                                        <a id=\"activate\" data=\"undo\" gig-id=\"";
                if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "id"), "html", null, true);
                echo "\" href=\"javascript:void(0);\" class=\"bg-color-blueLight\">下架</a>
                                        ";
            }
            // line 48
            echo " 

                                        <a id=\"link-gig-delete\" href=\"javascript:void(0);\" gig-id=\"";
            // line 50
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "id"), "html", null, true);
            echo "\" class=\"bg-color-blueLight\">删除</a>
                                    </p>
                                    <p class=\"span4 padding5\">
                                        <a id=\"add-extra\" gig-id=\"";
            // line 53
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "id"), "html", null, true);
            echo "\" href=\"javascript:void(0);\">添加额外服务</a>
                                    </p>
                                </div>

                                <div class=\"span6 bg-color-blueLight\">
                                    <div class=\"span6\">
                                        <p class=\"span3 cny15-status\">发布日期:";
            // line 59
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "create_at_nice"), "html", null, true);
            echo "</p>
                                        <p class=\"span3\">
                                            <span class=\"label\">被";
            // line 61
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "favorited_count"), "html", null, true);
            echo "人收藏</span><br />
                                            <span class=\"label inverse\">被";
            // line 62
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "order_count"), "html", null, true);
            echo "人下订单</span>
                                        </p>
                                    </div>

                                    ";
            // line 66
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            if ($this->getAttribute($_gig_, "extras")) {
                // line 67
                echo "                                    <div class=\"span6 padding10\">
                                        <p class=\"span1\">
                                            <span class=\"label info\">附加服务:</span>
                                        </p>
                                        <ul id=\"extra-list\" class=\"span4 listview extras\">
                                            ";
                // line 72
                if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_gig_, "extras"));
                foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                    // line 73
                    echo "                                            <li>
                                                <div class=\"badge\">
                                                    ￥";
                    // line 75
                    if (isset($context["extra"])) { $_extra_ = $context["extra"]; } else { $_extra_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_extra_, "price"), "html", null, true);
                    echo "
                                                </div>
                                                <div class=\"data\">
                                                    <h4>";
                    // line 78
                    if (isset($context["extra"])) { $_extra_ = $context["extra"]; } else { $_extra_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_extra_, "title"), "html", null, true);
                    echo "</h4>
                                                    <p>
                                                        <span class=\"label\">
                                                            ";
                    // line 81
                    if (isset($context["extra"])) { $_extra_ = $context["extra"]; } else { $_extra_ = null; }
                    if ($this->getAttribute($_extra_, "extra_time")) {
                        // line 82
                        echo "                                                            额外时间:";
                        if (isset($context["extra"])) { $_extra_ = $context["extra"]; } else { $_extra_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_extra_, "extra_time"), "html", null, true);
                        echo "天
                                                            ";
                    } else {
                        // line 84
                        echo "                                                            不需要增加额外的时间
                                                            ";
                    }
                    // line 86
                    echo "                                                        </span>
                                                    </p>
                                                </div>
                                            </li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 91
                echo "                                        </ul>
                                    </div>
                                    ";
            }
            // line 94
            echo "                                    
                                </div>
                            </div>

                        </div>
                        
                        <hr />
                        
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gig'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 103
        echo "
                    </div>

                    
                </div>
            </div>
        </div>
    </div>

</div>

<script id=\"extra-form-template\" type=\"text/template\">

<form>
    <div class=\"input-control\">
        <textarea id=\"extra-title\" placeholder=\"具体内容\"></textarea>
    </div>

    <div class=\"input-control\">
        <input id=\"extra-price\" type=\"text\" placeholder=\"价格\"/>
    </div>

    <div class=\"input-control\">
        <input id=\"extra-time\" type=\"text\" placeholder=\"额外时间\" />
    </div>
</form>

</script>

<script id=\"extra-template\" type=\"text/template\">
<li>
    <div class=\"badge\">
        ￥<%= price %>
    </div>
    <div class=\"data\">
        <h4><%= title %></h4>
        <p>
            <span class=\"label\">
            <% if(extra_time) { %>
            额外时间:<%= extra_time %>天
            <% } else { %>
            不需要增加额外的时间
            <% } %>
            </span>
        </p>
    </div>
</li>
</script>


";
        // line 153
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "layout/footer.html", array(), true, false, true), "html", null, true);
    }

    public function getTemplateName()
    {
        return "cny15/manage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 153,  239 => 103,  225 => 94,  220 => 91,  210 => 86,  206 => 84,  199 => 82,  196 => 81,  189 => 78,  182 => 75,  178 => 73,  173 => 72,  166 => 67,  163 => 66,  155 => 62,  150 => 61,  144 => 59,  134 => 53,  127 => 50,  123 => 48,  116 => 47,  109 => 45,  106 => 44,  97 => 42,  90 => 39,  87 => 38,  83 => 36,  79 => 34,  76 => 33,  69 => 28,  62 => 26,  59 => 25,  53 => 21,  48 => 20,  42 => 18,  32 => 11,  19 => 1,);
    }
}
