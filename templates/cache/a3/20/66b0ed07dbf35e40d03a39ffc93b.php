<?php

/* cny15/edit.html */
class __TwigTemplate_a32066b0ed07dbf35e40d03a39ffc93b extends Twig_Template
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
            <h1>修改￥ 15<small></small></h1>
            <a href=\"";
        // line 7
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "/cny15/manage\" class=\"back-button big page-back\"></a>
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
                \t<div id=\"cny15-edit\" class=\"cny15-new span8\">

                \t\t<form id=\"form-cny15\" method=\"post\" action=\"\">
\t                \t\t<div class=\"price span8\">
\t                \t\t\t<h2 class=\"span1 fg-color-greenDark\">给我</h2>
\t                \t\t\t<div class=\"input-control text span1\">
\t\t\t\t\t\t\t        <input type=\"text\" id=\"price\" placeholder=\"￥15™\" value=\"";
        // line 23
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "price"), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    <h2 class=\"span1 fg-color-greenDark\">，</h2>
\t\t\t\t\t\t\t    
\t                \t\t</div>
\t                \t\t<div class=\"title span8\">
\t                \t\t\t<h2 class=\"span1 fg-color-greenDark\">我将</h2>
\t\t\t\t\t\t\t    <div class=\"input-control text span4\">
\t\t\t\t\t\t\t        <input type=\"text\" id=\"title\" placeholder=\"我将做什么\" value=\"";
        // line 31
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "title"), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t        <button class=\"btn-clear\"></button>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    <h2 class=\"span1 fg-color-greenDark\">！</h2>
\t                \t\t</div>
\t                \t\t<div class=\"description span8\">
\t                \t\t\t<h3 class=\"span1\">描述</h3>
\t                \t\t\t<div class=\"input-control textarea span5\">
\t\t\t\t\t\t\t        <textarea id=\"description\">";
        // line 39
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "description"), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    <p class=\"span2 place-right\">具体的描述你将做的事情</p>
\t                \t\t</div>

\t                \t\t<div class=\"instructions span8\">
\t                \t\t\t<h3 class=\"span1\">说明</h3>
\t                \t\t\t<div class=\"input-control textarea span5\">
\t\t\t\t\t\t\t        <textarea id=\"instructions\">";
        // line 47
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "instructions"), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t\t    </div>
\t                \t\t\t<p class=\"span2 place-right\">如果你需要从买家那里获取文件或其他材料,请在这里添加,比如:\"请给我您的公司名称\"或\"给我需要我来编辑你的照片\",<span class=\"label\">如果没有请留空</span></p>
\t                \t\t\t
\t                \t\t</div>

\t                \t\t<div class=\"tags span8\">
\t                \t\t\t<h3 class=\"span1\">标签</h3>
\t                \t\t\t<div class=\"input-control textarea span4\">
\t\t\t\t\t\t\t        <input type=\"text\" id=\"tags\" value=\"";
        // line 56
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_gig_, "tags"));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name"), "html", null, true);
            echo ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo "\"/>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    <p class=\"span2 place-right\">关键字,比如\"图片处理,视频教程\"</p>
\t                \t\t</div>

\t                \t\t<div class=\"time_to_complete span8\">
\t                \t\t\t<h3 class=\"span1\">时间</h3>
\t                \t\t\t<div class=\"input-control textarea span2\">
\t\t\t\t\t\t\t        <input type=\"text\" id=\"time_to_complete\"/>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    <p class=\"span2 place-right\">
\t\t\t\t\t\t\t    \t用来完成的时间,请考虑到你的空闲时间和其他事物,
\t\t\t\t\t\t\t    \t如果你没有在这时间里完成，买家可以取消订单
\t\t\t\t\t\t\t    </p>

\t                \t\t</div>



\t                \t\t<div class=\"images span8\">


\t                \t\t\t<h3 class=\"span1\">图片</h3>
\t                \t\t\t
\t                \t\t\t<div id=\"image-cny15-uploader\">
\t\t                \t\t\t<div id=\"image-cny15-fineuploader\" class=\"span4\"></div>
\t\t\t\t\t\t\t\t    <p class=\"span2 place-right\">宽600像素，高370像素，JPEG,PNG格式,最大5MB</p>
\t\t\t\t\t\t\t\t    <div class=\"clearfix\"></div>
\t\t\t\t\t\t\t        <div id=\"image-cny15-uploaded-thumbs\">
\t\t\t\t\t\t\t            <div class=\"grid\">
\t\t\t\t\t\t\t                <div class=\"row\">
\t\t\t\t\t\t\t                \t
\t\t\t\t\t\t\t                </div>
\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t    </div>

\t\t\t\t\t\t\t    <div class=\"images-added span4 offset1\">
\t\t                \t\t\t";
        // line 94
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_gig_, "images"));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 95
            echo "\t\t\t\t                \t<div id=\"image-added\" class=\"span1\">
\t\t\t\t\t\t\t\t\t    <img class=\"image-added-thumb\" image-id=\"";
            // line 96
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id"), "html", null, true);
            echo "\" src=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "path_thumb"), "html", null, true);
            echo "\" alt=\"name\"/>
\t\t\t\t\t\t\t\t\t    <div class=\"toolbar\">
\t\t\t\t\t\t\t\t\t        <button id=\"btn-image-added-delete\" gig-id=\"";
            // line 98
            if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "id"), "html", null, true);
            echo "\" image-id=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t            <i class=\"icon-cancel-2\"></i>
\t\t\t\t\t\t\t\t\t        </button>
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t                \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 104
        echo "\t\t                \t\t</div>

\t                \t\t</div>

\t                \t\t<div class=\"shipping span8 bg-color-blueLight\">
\t                \t\t\t<label class=\"input-control checkbox\">
\t\t\t\t\t\t\t        <input type=\"checkbox\">
\t\t\t\t\t\t\t        <span class=\"helper\">物流</span>
\t\t\t\t\t\t\t    </label>


\t                  \t\t</div>

\t                  \t\t<div class=\"buttons span8\">
\t\t                  \t\t<div class=\"input-control\">
\t\t                  \t\t\t <button id=\"btn-save\" gig-id=\"";
        // line 119
        if (isset($context["gig"])) { $_gig_ = $context["gig"]; } else { $_gig_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gig_, "id"), "html", null, true);
        echo "\" class=\"bg-color-blueDark fg-color-white\">
\t\t\t\t\t\t\t\t        保存
\t\t\t\t\t\t\t\t    </button>
\t\t                  \t\t\t<a href=\"javascript:void(0);\">取消</a>
\t\t                  \t\t</div>
\t\t                  \t</div>

\t                  \t</form>

                \t</div>
                </div>
            </div>
        </div>
    </div>

</div>

";
        // line 136
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "layout/footer.html", array(), true, false, true), "html", null, true);
    }

    public function getTemplateName()
    {
        return "cny15/edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 136,  201 => 119,  184 => 104,  168 => 98,  159 => 96,  156 => 95,  151 => 94,  100 => 56,  87 => 47,  75 => 39,  63 => 31,  51 => 23,  36 => 11,  28 => 7,  19 => 1,);
    }
}
