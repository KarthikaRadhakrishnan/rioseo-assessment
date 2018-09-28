<?php

/* Home/home-index.twig */
class __TwigTemplate_b5f8d7a7f2d48018d4428117215292280c42226023513a92fdd47ecca056d277 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Layout/layout.twig", "Home/home-index.twig", 1);
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
        echo "   
    <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCHZDrG_LmAMid5UO4TZHd7QnNtIE2R54s&callback=initMap\"></script>

    ";
        // line 7
        echo $this->extensions['Odan\Twig\TwigAssetsExtension']->assets(array("files" => array(0 => "Home/home-index.js"), "name" => "home-index.js"));
        echo "
    ";
        // line 8
        echo $this->extensions['Odan\Twig\TwigAssetsExtension']->assets(array("files" => array(0 => "Home/home-index.css"), "name" => "home-index.css"));
        echo "
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
    <div id=\"content\" class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 banner-text\">
                <h1>";
        // line 16
        echo "Welcome to our employee collaboration portal";
        echo "</h1>
                <div>
                    ";
        // line 18
        echo "We work together. HR-Employee portal enables an employee-organisation relationship and empowers employee growth and success. ";
        echo "
                  </div>
                  <div>
                      <span id=\"view-map\"> ";
        // line 21
        echo "See all our employee global locations";
        echo " <i
                                    class=\"fas fa-arrow-right\"></i></span>
                  </div>
            </div>
            <div class =\"col-md-6\">

  <div id=\"map\" style=\"height: 400px; width: 500px;\">
</div>
            </div> 
        </div>
    </div>

    <template id=\"user-template\">
        <!-- The source function returns the content of a template without rendering it -->
        ";
        // line 35
        echo twig_source($this->env, "Home/home-index.mustache");
        echo "
    </template>

";
    }

    public function getTemplateName()
    {
        return "Home/home-index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 35,  71 => 21,  65 => 18,  60 => 16,  54 => 12,  51 => 11,  45 => 8,  41 => 7,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Layout/layout.twig\" %}
  
{% block assets %}
   
    <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCHZDrG_LmAMid5UO4TZHd7QnNtIE2R54s&callback=initMap\"></script>

    {{ assets({files: ['Home/home-index.js'], name: 'home-index.js'}) }}
    {{ assets({files: ['Home/home-index.css'], name: 'home-index.css'}) }}
{% endblock %}

{% block content %}

    <div id=\"content\" class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 banner-text\">
                <h1>{{ 'Welcome to our employee collaboration portal' }}</h1>
                <div>
                    {{ 'We work together. HR-Employee portal enables an employee-organisation relationship and empowers employee growth and success. '  }}
                  </div>
                  <div>
                      <span id=\"view-map\"> {{ 'See all our employee global locations'}} <i
                                    class=\"fas fa-arrow-right\"></i></span>
                  </div>
            </div>
            <div class =\"col-md-6\">

  <div id=\"map\" style=\"height: 400px; width: 500px;\">
</div>
            </div> 
        </div>
    </div>

    <template id=\"user-template\">
        <!-- The source function returns the content of a template without rendering it -->
        {{ source('Home/home-index.mustache') }}
    </template>

{% endblock %}", "Home/home-index.twig", "C:\\xampp\\htdocs\\projects\\rioseo-assessment\\app\\templates\\Home\\home-index.twig");
    }
}
