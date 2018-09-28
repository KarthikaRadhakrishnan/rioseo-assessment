<?php

/* Layout/layout.twig */
class __TwigTemplate_9cc99b28123fc4f547716da0aa9451feb7fdeccb023a7fb9f17155b7d7fa7513 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'assets' => array($this, 'block_assets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo "en";
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <meta name=\"csrf_token\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\">
    <base href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/\"/>
    <link rel=\"shortcut icon\" href=\"icons/favicon.ico\">
    <title>";
        // line 12
        echo "Simple HR-Employee Software";
        echo "</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/css/bootstrap.min.css\" media=\"all\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/css/fontawesome-all.min.css\" media=\"all\"/>
    ";
        // line 15
        echo $this->extensions['Odan\Twig\TwigAssetsExtension']->assets(array("files" => array(0 => "@public/js/jquery.min.js", 1 => "@public/js/tooltip.min.js", 2 => "@public/js/bootstrap.min.js", 3 => "@public/js/mustache.min.js"), "name" => "jquery-bootstrap.js"));
        // line 20
        echo "
    <!-- HTML5 shim and Respond.jss for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    ";
        // line 26
        echo $this->extensions['Odan\Twig\TwigAssetsExtension']->assets(array("files" => array(0 => "@public/css/d.css", 1 => "Layout/layout.css"), "name" => "layout.css"));
        // line 29
        echo "
    ";
        // line 30
        echo $this->extensions['Odan\Twig\TwigAssetsExtension']->assets(array("files" => array(0 => "@public/js/d.js", 1 => "@public/js/ajax.js"), "name" => "layout.js"));
        // line 33
        echo "
    ";
        // line 34
        $this->displayBlock('assets', $context, $blocks);
        // line 35
        echo "    <script>\$d.setText(";
        echo json_encode(($context["text"] ?? null), (twig_constant("JSON_HEX_QUOT") | twig_constant("JSON_HEX_APOS")));
        echo ")</script>
</head>
<body>
<!-- Fixed navbar -->

<nav class=\"navbar navbar-expand-md navbar-light bg-white fixed-top border-bottom \">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("home"), "html", null, true);
        echo "\">";
        echo "HR-Employee Portal";
        echo "</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\"
                aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"";
        // line 44
        echo "Toggle navigation";
        echo "\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
            <ul class=\"navbar-nav mr-auto\">
            </ul>
            <ul class=\"navbar-nav navbar-right\">
                ";
        // line 52
        if ( !twig_test_empty((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["loggedInUser"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["id"] ?? null) : null))) {
            // line 53
            echo "                <li>
                    <a class=\"nav-link\" id='avatar' href=\"javascript:void(0);\" 
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                       <i
               class=\"fas fa-user\"></i> ";
            // line 57
            echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["loggedInUser"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["firstName"] ?? null) : null), "html", null, true);
            echo "</a>
                </li>
                ";
        }
        // line 60
        echo "                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("home"), "html", null, true);
        echo "\"><i
                                class=\"fas fa-home\"></i> ";
        // line 62
        echo "Home";
        echo "</a>
                </li>
                ";
        // line 64
        if (twig_test_empty((($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["loggedInUser"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["id"] ?? null) : null))) {
            // line 65
            echo "                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("login"), "html", null, true);
            echo "\"><i
                                class=\"fas fa-sign-in-alt\"></i> ";
            // line 66
            echo "Login";
            echo " </a></li>
                ";
        }
        // line 68
        echo "                ";
        if ( !twig_test_empty((($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["loggedInUser"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["id"] ?? null) : null))) {
            // line 69
            echo "                    ";
            if (twig_in_filter((($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ($context["loggedInUser"] ?? null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["jobTitleId"] ?? null) : null), ($context["isAuthorizedRole"] ?? null))) {
                // line 70
                echo "                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin"), "html", null, true);
                echo "\"><i
                                class=\"fas fa-cog\"></i> ";
                // line 71
                echo "Manage Employees";
                echo "</a></li>
                    ";
            }
            // line 73
            echo "                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("logout"), "html", null, true);
            echo "\"><i
                                class=\"fas fa-sign-out-alt\"></i> ";
            // line 74
            echo "Logout";
            echo "</a></li>
                ";
        }
        // line 76
        echo "            </ul>
        </div>
    </div>
</nav>

";
        // line 81
        $this->displayBlock('content', $context, $blocks);
        // line 82
        echo "</body>
</html>";
    }

    // line 34
    public function block_assets($context, array $blocks = array())
    {
    }

    // line 81
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "Layout/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 81,  188 => 34,  183 => 82,  181 => 81,  174 => 76,  169 => 74,  164 => 73,  159 => 71,  154 => 70,  151 => 69,  148 => 68,  143 => 66,  138 => 65,  136 => 64,  131 => 62,  127 => 61,  124 => 60,  118 => 57,  112 => 53,  110 => 52,  99 => 44,  92 => 42,  81 => 35,  79 => 34,  76 => 33,  74 => 30,  71 => 29,  69 => 26,  61 => 20,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  42 => 10,  38 => 9,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ \"en\" }}\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <meta name=\"csrf_token\" content=\"{{ csrf_token }}\">
    <base href=\"{{ baseRootUrl }}/\"/>
    <link rel=\"shortcut icon\" href=\"icons/favicon.ico\">
    <title>{{ \"Simple HR-Employee Software\" }}</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ baseRootUrl }}/public/css/bootstrap.min.css\" media=\"all\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ baseRootUrl }}/public/css/fontawesome-all.min.css\" media=\"all\"/>
    {{ assets({files: [
        '@public/js/jquery.min.js',
        '@public/js/tooltip.min.js',
        '@public/js/bootstrap.min.js',
        '@public/js/mustache.min.js'
    ], name: 'jquery-bootstrap.js'}) }}
    <!-- HTML5 shim and Respond.jss for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    {{ assets({files: [
        '@public/css/d.css',
        'Layout/layout.css'
    ], name: 'layout.css'}) }}
    {{ assets({files: [
        '@public/js/d.js',
        '@public/js/ajax.js'
    ], name: 'layout.js'}) }}
    {% block assets %}{% endblock %}
    <script>\$d.setText({{ text|json_encode(constant('JSON_HEX_QUOT') b-or constant('JSON_HEX_APOS'))|raw }})</script>
</head>
<body>
<!-- Fixed navbar -->

<nav class=\"navbar navbar-expand-md navbar-light bg-white fixed-top border-bottom \">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ path_for(\"home\") }}\">{{ \"HR-Employee Portal\" }}</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\"
                aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"{{ \"Toggle navigation\" }}\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
            <ul class=\"navbar-nav mr-auto\">
            </ul>
            <ul class=\"navbar-nav navbar-right\">
                {% if loggedInUser['id'] is not empty %}
                <li>
                    <a class=\"nav-link\" id='avatar' href=\"javascript:void(0);\" 
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                       <i
               class=\"fas fa-user\"></i> {{ loggedInUser['firstName'] }}</a>
                </li>
                {% endif %}
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path_for(\"home\") }}\"><i
                                class=\"fas fa-home\"></i> {{ \"Home\" }}</a>
                </li>
                {% if loggedInUser['id'] is empty %}
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path_for(\"login\") }}\"><i
                                class=\"fas fa-sign-in-alt\"></i> {{ \"Login\" }} </a></li>
                {% endif %}
                {% if loggedInUser['id'] is not empty %}
                    {% if loggedInUser['jobTitleId'] in isAuthorizedRole %}
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path_for(\"admin\") }}\"><i
                                class=\"fas fa-cog\"></i> {{ \"Manage Employees\" }}</a></li>
                    {% endif %}
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path_for(\"logout\") }}\"><i
                                class=\"fas fa-sign-out-alt\"></i> {{ \"Logout\" }}</a></li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>

{% block content %}{% endblock %}
</body>
</html>", "Layout/layout.twig", "C:\\xampp\\htdocs\\projects\\rioseo-assessment\\app\\templates\\Layout\\layout.twig");
    }
}
