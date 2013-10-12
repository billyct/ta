<?php

/* index.html */
class __TwigTemplate_bdc97d2b8ee63bbd72a3a6991eb09517 extends Twig_Template
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


<div class=\"page\" id=\"page-index\">
    <div class=\"page-region\">
        <div class=\"page-region-content\">
            <div class=\"grid\">
                <div class=\"row\">
                    
                    <div class=\"span4\">
                        <div class=\"span4 padding30 place-left bg-color-blueLight\" id=\"sponsorBlock\">
                            <form id=\"form-signin\" method=\"post\" action=\"http://api.localhost/user/signin\">
                                <div class=\"input-control text\">
                                    <input name=\"username\" id=\"input-username\" type=\"text\" placeholder=\"用户名\" />
                                    <button class=\"btn-clear\"></button>
                                </div>

                                <div class=\"input-control password\">
                                    <input name=\"password\" id=\"input-password\" type=\"password\" placeholder=\"密码\"/>
                                    <button class=\"btn-reveal\"></button>
                                </div>
                                <input type=\"hidden\" name=\"url\" value=\"";
        // line 22
        if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
        echo twig_escape_filter($this->env, $_url_, "html", null, true);
        echo "\" />

                                <div class=\"input-control\">
                                    <label class=\"input-control checkbox\" onclick=\"\">
                                        <input type=\"checkbox\" checked value=\"1\"/>
                                        <span class=\"helper\">记住密码</span>
                                    </label>
                                    <input name=\"signin\" id=\"btn-signin\" type=\"submit\" value=\"登录\"/>
                                </div>
                                <p>还没有账号？这里<a href=\"\">注册</a></p>
                                <p>或者</p>
                                <p>
                                    <input type=\"submit\" value=\"新浪登录\"/>
                                </p>
                            </form>
                        </div>
                    </div>


                    <div class=\"span8\">
                        <div class=\"hero-unit\">
                            <div id=\"carousel1\" class=\"carousel\" data-role=\"carousel\" data-param-duration=\"300\">
                                <div class=\"slides\">

                                    <div class=\"slide\" id=\"slide1\">
                                        <h2>Ta</h2>

                                        <p class=\"bg-color-blueDark padding20 fg-color-white\">fuck you fuck you!</p>
                                        <h3>fuck you! <strong>fuck you!</strong> fuck you!</h3>
                                        <p class=\"tertiary-info-text\">
                                            <strong>fuck you!fuck you!</strong> fuck you!
                                        </p>
                                    </div>

                                    <div class=\"slide\" id=\"slide2\">
                                        <h2 class=\"fg-color-darken\">Metro UI CSS</h2>
                                        <p class=\"bg-color-pink padding20 fg-color-white\">
                                            Developed with the advice of Microsoft to build the user interface and <strong>include:</strong>
                                        </p>

                                        <div class=\"span3 place-left\">
                                            <ul class=\"unstyled sprite-details\">
                                                <li><i class=\"icon-checkmark\"></i> General styles</li>
                                                <li><i class=\"icon-checkmark\"></i> Grid with Responsive</li>
                                                <li><i class=\"icon-checkmark\"></i> Layouts</li>
                                            </ul>
                                        </div>
                                        <div class=\"span3 place-left\">
                                            <ul class=\"unstyled sprite-details\">
                                                <li><i class=\"icon-checkmark\"></i> Typography</li>
                                                <li><i class=\"icon-checkmark\"></i> Many components</li>
                                                <li><i class=\"icon-checkmark\"></i> 300+ built in icons</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class=\"slide\" id=\"slide3\">
                                        <h2>Metro UI CSS is a BizSpark Startup</h2>
                                        <p class=\"bg-color-red fg-color-white padding20\">
                                            Microsoft® BizSpark® is a global program that helps software startups succeed by giving them access to software development tools, connecting them with key industry players, and providing marketing visibility.
                                        </p>
                                        <p><a href=\"http://bizspark.com\">Join</a> the BizSpark Program now.</p>
                                    </div>
                                </div>

                                <span class=\"control left\"><i class=\"icon-arrow-left-3\"></i></span>
                                <span class=\"control right\"><i class=\"icon-arrow-right-3\"></i></span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





";
        // line 103
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "layout/footer.html", array(), true, false, true), "html", null, true);
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 103,  43 => 22,  19 => 1,);
    }
}
