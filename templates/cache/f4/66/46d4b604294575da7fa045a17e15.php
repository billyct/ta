<?php

/* cny15/my-sell-order.html */
class __TwigTemplate_f46646d4b604294575da7fa045a17e15 extends Twig_Template
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
                    <div class=\"my-order span8\">
                        <div class=\"span8\">
                        \t<table>
                        \t\t<tbody>
                            \t\t<tr>
                                        <th>订单号:</th>
                            \t\t\t<td>";
        // line 23
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_order_, "id"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>服务:</th>
                            \t\t\t<td>
                            \t\t\t\t<h4><span class=\"label\">￥";
        // line 28
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "gig"), "price"), "html", null, true);
        echo "</span>我将";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "gig"), "title"), "html", null, true);
        echo "</h4>
                            \t\t\t
                            \t\t\t</td>
                                    </tr>
                                    ";
        // line 32
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        if ($this->getAttribute($_order_, "extras")) {
            // line 33
            echo "                                    <tr>
                                        <th>额外服务:</th>
                                        <td>
                                            <div class=\"extras\">
                                                ";
            // line 37
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_order_, "extras"));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 38
                echo "                                                <p><span class=\"label\">￥";
                if (isset($context["extra"])) { $_extra_ = $context["extra"]; } else { $_extra_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_extra_, "price"), "html", null, true);
                echo "</span>";
                if (isset($context["extra"])) { $_extra_ = $context["extra"]; } else { $_extra_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_extra_, "title"), "html", null, true);
                echo "</p>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 40
            echo "                                            </div>
                                        </td>
                                    </tr>
                                    ";
        }
        // line 44
        echo "                                    <tr>
                                        <th>数量:</th>
                            \t\t\t<td>";
        // line 46
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_order_, "sum"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>总金额:</th>
                            \t\t\t<td>￥";
        // line 50
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_order_, "total"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>支付状态:</th>
                            \t\t\t<td><a href=\"\">";
        // line 54
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo ((($this->getAttribute($_order_, "status") == 0)) ? ("未支付") : ("已支付"));
        echo "</a></td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td><a href=\"";
        // line 58
        if (isset($context["last_url"])) { $_last_url_ = $context["last_url"]; } else { $_last_url_ = null; }
        echo twig_escape_filter($this->env, $_last_url_, "html", null, true);
        echo "\" class=\"button bg-color-blueDark fg-color-white\">确定返回</a></td>
                                    </tr>

                                </tbody>
                        \t\t
                        \t</table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    

</div>


";
        // line 77
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "layout/footer.html", array(), true, false, true), "html", null, true);
    }

    public function getTemplateName()
    {
        return "cny15/my-sell-order.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 77,  128 => 58,  120 => 54,  112 => 50,  104 => 46,  100 => 44,  94 => 40,  81 => 38,  76 => 37,  70 => 33,  67 => 32,  56 => 28,  47 => 23,  32 => 11,  19 => 1,);
    }
}
