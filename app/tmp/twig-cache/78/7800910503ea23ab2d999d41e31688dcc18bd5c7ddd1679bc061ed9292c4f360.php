<?php

/* Login/login.twig */
class __TwigTemplate_96c701c784ef28e5b92fd5e75b46c87b6687baacd9f1fe728e5d4de3f9c95d01 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Layout/layout.twig", "Login/login.twig", 1);
        $this->blocks = array(
            'assets' => array($this, 'block_assets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_assets($context, array $blocks = array())
    {
        // line 4
        echo "     ";
        echo $this->extensions['Odan\Twig\TwigAssetsExtension']->assets(array("files" => array(0 => "Login/login.css")));
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    
        <div class=\"container\">
        <div class=\"card card-container\">
            <img id=\"profile-img\" class=\"profile-img-card\" src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" />
            <p id=\"profile-name\" class=\"profile-name-card\"> </p>
            <form class=\"form-signin\" method=\"POST\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("loginSubmit"), "html", null, true);
        echo "\">
                <span id=\"reauth-email\" class=\"reauth-email\"></span>
                <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
                <div id=\"remember\" class=\"checkbox\">
                    <label>
                        <input type=\"checkbox\" value=\"remember-me\"> Remember me
                    </label>
                </div>
                <button class=\"btn btn-lg btn-primary btn-block btn-signin\" type=\"submit\">Sign in</button>
            </form><!-- /form -->
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("resetPassword"), "html", null, true);
        echo "\" class=\"forgot-password\">
                Reset Password
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
";
    }

    public function getTemplateName()
    {
        return "Login/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 24,  53 => 13,  46 => 8,  43 => 7,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Layout/layout.twig\" %}

{% block assets %}
     {{ assets({files: ['Login/login.css']}) }}
{% endblock %}

{% block content %}
    
        <div class=\"container\">
        <div class=\"card card-container\">
            <img id=\"profile-img\" class=\"profile-img-card\" src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" />
            <p id=\"profile-name\" class=\"profile-name-card\"> </p>
            <form class=\"form-signin\" method=\"POST\" action=\"{{ path_for(\"loginSubmit\") }}\">
                <span id=\"reauth-email\" class=\"reauth-email\"></span>
                <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
                <div id=\"remember\" class=\"checkbox\">
                    <label>
                        <input type=\"checkbox\" value=\"remember-me\"> Remember me
                    </label>
                </div>
                <button class=\"btn btn-lg btn-primary btn-block btn-signin\" type=\"submit\">Sign in</button>
            </form><!-- /form -->
            <a href=\"{{path_for('resetPassword')}}\" class=\"forgot-password\">
                Reset Password
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
{% endblock %}

", "Login/login.twig", "C:\\xampp\\htdocs\\projects\\rioseo-assessment\\app\\templates\\Login\\login.twig");
    }
}
