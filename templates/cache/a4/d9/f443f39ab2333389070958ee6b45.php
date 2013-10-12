<?php

/* cny15/new.html */
class __TwigTemplate_a4d9f443f39ab2333389070958ee6b45 extends Twig_Template
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
            <h1>创建￥ 15<small></small></h1>
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
                \t<div class=\"cny15-new span8\">

                \t\t<form id=\"form-cny15\" method=\"post\" action=\"\">
\t                \t\t<div class=\"price span8\">
\t                \t\t\t<h2 class=\"span1 fg-color-greenDark\">给我</h2>
\t                \t\t\t<div class=\"input-control text span1\">
\t\t\t\t\t\t\t        <input type=\"text\" id=\"price\" placeholder=\"￥15™\"/>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    <h2 class=\"span1 fg-color-greenDark\">，</h2>
\t\t\t\t\t\t\t    
\t                \t\t</div>
\t                \t\t<div class=\"title span8\">
\t                \t\t\t<h2 class=\"span1 fg-color-greenDark\">我将</h2>
\t\t\t\t\t\t\t    <div class=\"input-control text span4\">
\t\t\t\t\t\t\t        <input type=\"text\" id=\"title\" placeholder=\"我将做什么\"/>
\t\t\t\t\t\t\t        <button class=\"btn-clear\"></button>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    <h2 class=\"span1 fg-color-greenDark\">！</h2>
\t                \t\t</div>
\t                \t\t<div class=\"description span8\">
\t                \t\t\t<h3 class=\"span1\">描述</h3>
\t                \t\t\t<div class=\"input-control textarea span5\">
\t\t\t\t\t\t\t        <textarea id=\"description\"></textarea>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    <p class=\"span2 place-right\">具体的描述你将做的事情</p>
\t                \t\t</div>

\t                \t\t<div class=\"instructions span8\">
\t                \t\t\t<h3 class=\"span1\">说明</h3>
\t                \t\t\t<div class=\"input-control textarea span5\">
\t\t\t\t\t\t\t        <textarea id=\"instructions\"></textarea>
\t\t\t\t\t\t\t    </div>
\t                \t\t\t<p class=\"span2 place-right\">如果你需要从买家那里获取文件或其他材料,请在这里添加,比如:\"请给我您的公司名称\"或\"给我需要我来编辑你的照片\",<span class=\"label\">如果没有请留空</span></p>
\t                \t\t\t
\t                \t\t</div>

\t                \t\t<div class=\"tags span8\">
\t                \t\t\t<h3 class=\"span1\">标签</h3>
\t                \t\t\t<div class=\"input-control textarea span4\">
\t\t\t\t\t\t\t        <input type=\"text\" id=\"tags\" />
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    <p class=\"span2 place-right\">关键字,比如\"图片处理,视频教程\"</p>
\t                \t\t</div>

\t                \t\t<div class=\"time_to_complete span8\">
\t                \t\t\t<h3 class=\"span1\">时间</h3>
\t                \t\t\t<div class=\"input-control textarea span2\">
\t\t\t\t\t\t\t        <input type=\"text\" id=\"time_to_complete\" placeholder=\"完成时间,单位(天)\"/>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    <p class=\"span2 place-right\">
\t\t\t\t\t\t\t    \t用来完成的时间,单位(天),请考虑到你的空闲时间和其他事物,
\t\t\t\t\t\t\t    \t如果你没有在这时间里完成，买家可以取消订单
\t\t\t\t\t\t\t    </p>

\t                \t\t</div>

\t                \t\t<div class=\"images span8\">
\t                \t\t\t<div id=\"image-cny15-uploader\">
\t\t                \t\t\t<h3 class=\"span1\">图片</h3>
\t\t                \t\t\t<div id=\"image-cny15-fineuploader\" class=\"span4\"></div>
\t\t\t\t\t\t\t\t    <p class=\"span2 place-right\">宽600像素，高370像素，JPEG,PNG格式,最大5MB</p>
\t\t\t\t\t\t\t\t    <div class=\"clearfix\"></div>
\t\t\t\t\t\t\t        <div id=\"image-cny15-uploaded-thumbs\">
\t\t\t\t\t\t\t            <div class=\"grid\">
\t\t\t\t\t\t\t                <div class=\"row\">
\t\t\t\t\t\t\t                </div>
\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t    </div>

\t                \t\t</div>

\t                \t\t<div class=\"shipping span8 bg-color-blueLight\">
\t                \t\t\t<label class=\"input-control checkbox\">
\t\t\t\t\t\t\t        <input type=\"checkbox\">
\t\t\t\t\t\t\t        <span class=\"helper\">物流</span>
\t\t\t\t\t\t\t    </label>


\t                  \t\t</div>

\t                  \t\t<div class=\"buttons span8\">
\t\t                  \t\t<div class=\"input-control\">
\t\t                  \t\t\t <button id=\"btn-save\" class=\"bg-color-blueDark fg-color-white\">
\t\t\t\t\t\t\t\t        保存
\t\t\t\t\t\t\t\t    </button>
\t\t                  \t\t\t<a href=\"\">取消</a>
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
        // line 117
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "layout/footer.html", array(), true, false, true), "html", null, true);
    }

    public function getTemplateName()
    {
        return "cny15/new.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 117,  36 => 11,  28 => 7,  19 => 1,);
    }
}
