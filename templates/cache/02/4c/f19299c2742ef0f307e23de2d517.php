<?php

/* cny15/cny15.html */
class __TwigTemplate_024cf19299c2742ef0f307e23de2d517 extends Twig_Template
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
                    <div class=\"cny15-single span8\">
                        <div class=\"span8\">
                            <div class=\"title span6\">
                                <h2>给我￥";
        // line 20
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "price"), "html", null, true);
        echo "，我将";
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "title"), "html", null, true);
        echo "！</h2>
                            </div>
                            <div class=\"span2\">
                                <button id=\"btn-create-order\" gig-id=\"";
        // line 23
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "id"), "html", null, true);
        echo "\" class=\"button bg-color-greenLight fg-color-white\">立即购买 > </button>
                                <p><a id=\"link-show-sum\" href=\"javascript:void(0);\" style=\"font-size:12px;\">购买更多</a></p>
                                <select id=\"gig-sum\" style=\"display:none;\">
                                    <option value=\"1\" selected>1</option>
                                </select>
                            </div>

                            
                        </div>


                        <div class=\"clearfix\"></div>
                        <div class=\"smallinfos span8\">
                            <p><span class=\"label inverse\">发布时间:";
        // line 36
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "create_at_nice"), "html", null, true);
        echo "</span></p>
                            <div class=\"padding10 contact-seller span8\">
                                <a href=\"";
        // line 38
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "/message/";
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_gig_, "user"), "id"), "html", null, true);
        echo "\">联系卖家</a>
                            </div>
                            <p>
                                <a id=\"gig-favorite\" data=\"";
        // line 41
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        echo (($this->getAttribute($_gig_, "favorited")) ? ("undo") : ("do"));
        echo "\" gig-id=\"";
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "id"), "html", null, true);
        echo "\" class=\"button bg-color-blueLight\">
                                    收藏
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
            echo "                                    <span class=\"badge\">";
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "favorited_count"), "html", null, true);
            echo "</span>
                                    ";
        }
        // line 47
        echo "                                </a>
                            </p>
                            
                        </div>

                        <div class=\"span8 smallinfos2 bg-color-blueLight\">
                            
                            <div class=\"avatar span1\"><img src=\"http://tp3.sinaimg.cn/1842509582/180/40010343779/1\"/></div>
                            <div class=\"user span1\">
                                <p><h4>";
        // line 56
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_gig_, "user"), "username"), "html", null, true);
        echo "</h4></p>
                                
                            </div>
                            <div class=\"span1\">
                                <p>
                                    <h3>100%</h3>信用度
                                </p>
                            </div>
                            <div class=\"order-count span1\">
                                <p><h3>";
        // line 65
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "orders_count"), "html", null, true);
        echo "10人</h3>购买</p>
                            </div>
                            <div class=\"span1\">
                                <p><h3>";
        // line 68
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "day_to_complete"), "html", null, true);
        echo "天</h3>完成</p>
                            </div>
                            <div class=\"span1\">
                                <p>
                                    <h3>100%</h3>
                                    好评率
                                </p>
                            </div>
                            <div class=\"span1\">
                                <p>
                                    <h3>5人</h3>
                                    排队
                                </p>

                            </div>
                        </div>
                        ";
        // line 84
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        if ($this->getAttribute($_gig_, "images")) {
            // line 85
            echo "                        <div class=\"images span8\">
                             <div class=\"carousel span6\" style=\"height: 500px;\" data-role=\"carousel\" >
                                <div class=\"slides\">
                                    ";
            // line 88
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_gig_, "images"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 89
                echo "                                    <div class=\"slide image tile\">

                                        <img src=\"";
                // line 91
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_image_, "path"), "html", null, true);
                echo "\"/>
                                    </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 94
            echo "                                </div>
                         
                                <span class=\"control left\">‹</span>
                                <span class=\"control right\">›</span>
                            </div>

                        </div>
                        ";
        }
        // line 102
        echo "                        <div class=\"description span8 padding10\">
                            <span class=\"label span1\">详细描述:</span>
                            <p class=\"span6\">";
        // line 104
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "description"), "html", null, true);
        echo "</p>
                        </div>

                        <div class=\"instructions span8 padding10\">
                            <span class=\"label span1\">说明:</span>
                            <p class=\"span6\">";
        // line 109
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "instructions"), "html", null, true);
        echo "</p>
                        </div>

                        <p class=\"tags span8 padding10\">
                            ";
        // line 113
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_gig_, "tags"));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 114
            echo "                                <span class=\"label info\">";
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name"), "html", null, true);
            echo "</span>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 116
        echo "                        </p>

                        <div class=\"span8 bg-color-blueLight\">
                            <div class=\"span8 padding10\">
                                <p class=\"span1\">
                                    <span class=\"label info\">附加服务:</span>
                                </p>
                                <ul id=\"extra-list\" class=\"span6 listview extras\">
                                    ";
        // line 124
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_gig_, "extras"));
        foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
            // line 125
            echo "                                    <li class=\"extra span6\">
                                        <div class=\"badge\">
                                            +￥";
            // line 127
            if (isset($context["extra"])) { $_extra_ = $context["extra"]; } else { $_extra_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_extra_, "price"), "html", null, true);
            echo "
                                        </div>
                                        <div class=\"data span4\">
                                            <h4>";
            // line 130
            if (isset($context["extra"])) { $_extra_ = $context["extra"]; } else { $_extra_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_extra_, "title"), "html", null, true);
            echo "</h4>
                                            <p>
                                                <span class=\"label\">
                                                    ";
            // line 133
            if (isset($context["extra"])) { $_extra_ = $context["extra"]; } else { $_extra_ = null; }
            if ($this->getAttribute($_extra_, "extra_time")) {
                // line 134
                echo "                                                    额外时间:";
                if (isset($context["extra"])) { $_extra_ = $context["extra"]; } else { $_extra_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_extra_, "extra_time"), "html", null, true);
                echo "天
                                                    ";
            } else {
                // line 136
                echo "                                                    不需要增加额外的时间
                                                    ";
            }
            // line 138
            echo "                                                </span>
                                            </p>
                                        </div>
                                        <div class=\"span1 place-right\">
                                            <label class=\"input-control checkbox\">
                                                <input price=\"";
            // line 143
            if (isset($context["extra"])) { $_extra_ = $context["extra"]; } else { $_extra_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_extra_, "price"), "html", null, true);
            echo "\" value=\"";
            if (isset($context["extra"])) { $_extra_ = $context["extra"]; } else { $_extra_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_extra_, "id"), "html", null, true);
            echo "\" id=\"select-extra\" type=\"checkbox\">
                                                <span class=\"helper\"></span>
                                            </label>
                                        </div>
                                    </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 149
        echo "                                </ul>
                            </div>
                            <div id=\"extra-button\" gig-price=\"";
        // line 151
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "price"), "html", null, true);
        echo "\" class=\"offset1\" style=\"display:none;\">
                                <button id=\"btn-create-order-all\" gig-id=\"";
        // line 152
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "id"), "html", null, true);
        echo "\" class=\"command-button bg-color-greenLight fg-color-white\">
                                    订购以上服务(<span></span>)
                                    <small>包括: 商品费用";
        // line 154
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "price"), "html", null, true);
        echo "元，附加服务费";
        if (isset($context["extra"])) { $_extra_ = $context["extra"]; } else { $_extra_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_extra_, "price"), "html", null, true);
        echo "元, 数量: 1</small>
                                </button>
                            </div>
                            
                        </div>

                        <div class=\"span8 reviews bg-color-blueLight\">
                            <button class=\"bg-color-orangeDark fg-color-white\">
                                <i class=\"icon-thumbs-up fg-color-white\"></i>好评
                            </button>
                            <button class=\"bg-color-orangeDark fg-color-white\">
                                <i class=\"icon-thumbs-down\"></i>差评
                            </button>
                            
                        </div>

                    </div>


                    <div class=\"cny15-single-comments span8\">
                        <div class=\"span1\">
                            <img src=\"http://tp3.sinaimg.cn/1842509582/180/40010343779/1\" />
                        </div>
                        <form class=\"span7\">
                            <div class=\"input-control\">
                                <textarea></textarea>
                            </div>
                            <div class=\"input-control\">
                                <button class=\"bg-color-greenDark fg-color-white\">留言</button>
                            </div>
                        </form>
                    </div>

                    <div class=\"clearfix\"></div>
                    <ul id=\"comment-list\" class=\"comment-list unstyled\">
                        ";
        // line 189
        if (isset($context["comments"])) { $_comments_ = $context["comments"]; } else { $_comments_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_comments_);
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 190
            echo "                        <li class=\"comment\">
                            <div class=\"avatar\">
                                <img src=\"http://tp3.sinaimg.cn/1842509582/180/40010343779/1\" />
                            </div>
                            <div class=\"detail\">
                                <p>
                                    <span class=\"username\">";
            // line 196
            if (isset($context["comment"])) { $_comment_ = $context["comment"]; } else { $_comment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_comment_, "user"), "username"), "html", null, true);
            echo ":</span>
                                </p>
                                <p class=\"content\">
                                    ";
            // line 199
            if (isset($context["comment"])) { $_comment_ = $context["comment"]; } else { $_comment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_comment_, "content"), "html", null, true);
            echo "
                                </p>
                                <div class=\"clearfix\"></div>
                                <p class=\"create_at\">";
            // line 202
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
        // line 207
        echo "                    </ul>

                </div>
            </div>
        </div>
    </div>

</div>

";
        // line 216
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "layout/footer.html", array(), true, false, true), "html", null, true);
    }

    public function getTemplateName()
    {
        return "cny15/cny15.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 216,  401 => 207,  389 => 202,  382 => 199,  375 => 196,  367 => 190,  362 => 189,  320 => 154,  314 => 152,  309 => 151,  305 => 149,  289 => 143,  282 => 138,  278 => 136,  271 => 134,  268 => 133,  261 => 130,  254 => 127,  250 => 125,  245 => 124,  235 => 116,  225 => 114,  220 => 113,  212 => 109,  203 => 104,  199 => 102,  189 => 94,  179 => 91,  175 => 89,  170 => 88,  165 => 85,  162 => 84,  142 => 68,  135 => 65,  122 => 56,  111 => 47,  104 => 45,  101 => 44,  96 => 43,  87 => 41,  77 => 38,  71 => 36,  54 => 23,  44 => 20,  32 => 11,  19 => 1,);
    }
}
