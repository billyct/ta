<?php

/* cny15/income.html */
class __TwigTemplate_0cff7a31bd594215af7134a94ef7e849 extends Twig_Template
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
                    <div class=\"my-orders span8\">
                        <div class=\"span8\">
                        \t<table>
                        \t\t<thead>
                        \t\t\t<tr>
                        \t\t\t\t<th>订单号</th>
                        \t\t\t\t<th>商品</th>
                        \t\t\t\t<th>数量</th>
                        \t\t\t\t<th>总金额</th>
                        \t\t\t</tr>
                        \t\t</thead>
                        \t\t<tbody>
\t                        \t\t";
        // line 29
        if (isset($context["orders"])) { $_orders_ = $context["orders"]; } else { $_orders_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_orders_);
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 30
            echo "\t                        \t\t<tr>
\t                        \t\t\t<td>";
            // line 31
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_order_, "id"), "html", null, true);
            echo "</td>
\t                        \t\t\t<td>
\t                        \t\t\t\t<h4><span class=\"label\">￥";
            // line 33
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "gig"), "price"), "html", null, true);
            echo "</span>我将";
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "gig"), "title"), "html", null, true);
            echo "</h4>
\t                        \t\t\t\t<!-- <span class=\"label info\">附加服务:</span>
\t                        \t\t\t\t<div class=\"extras padding10\">
\t\t                        \t\t\t\t";
            // line 36
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_order_, "extras"));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 37
                echo "\t\t                        \t\t\t\t<p><span class=\"label\">￥";
                if (isset($context["extra"])) { $_extra_ = $context["extra"]; } else { $_extra_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_extra_, "price"), "html", null, true);
                echo "</span>";
                if (isset($context["extra"])) { $_extra_ = $context["extra"]; } else { $_extra_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_extra_, "title"), "html", null, true);
                echo "</p>
\t\t                        \t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 39
            echo "\t\t                        \t\t\t</div> -->
\t                        \t\t\t</td>
\t                        \t\t\t<td>";
            // line 41
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_order_, "sum"), "html", null, true);
            echo "</td>
\t                        \t\t\t<td>￥";
            // line 42
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_order_, "total"), "html", null, true);
            echo "</td>
\t                        \t\t</tr>
\t                        \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 45
        echo "                        \t\t</tbody>
                        \t</table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    

</div>


";
        // line 60
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "layout/footer.html", array(), true, false, true), "html", null, true);
    }

    public function getTemplateName()
    {
        return "cny15/income.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 60,  114 => 45,  104 => 42,  99 => 41,  95 => 39,  82 => 37,  77 => 36,  67 => 33,  61 => 31,  58 => 30,  53 => 29,  32 => 11,  19 => 1,);
    }
}
