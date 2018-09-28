<?php

/* Admin/login.twig */
class __TwigTemplate_03e2be1cc8961195c22f165cbc08488fd94d24deaf89de6f6c90838bc5b0649d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title> Login</title>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/css/admin/bootstrap.min.css\" media=\"all\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/css/admin/all.min.css\" media=\"all\"/>

    <!-- Custom styles for this template-->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/css/admin/sb-admin.css\" rel=\"stylesheet\">

  </head>

  <body class=\"bg-dark\">

    <div class=\"container\">
      <div class=\"card card-login mx-auto mt-5\">
          <div class=\"card-header\"> Login </div>
        <div class=\"card-body\">
           <form class=\"form-signin\" method=\"POST\" action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("adminLoginSubmit"), "html", null, true);
        echo "\">
            <div class=\"form-group\">
              <div class=\"form-label-group\">
                <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required=\"required\" autofocus=\"autofocus\">
                <label for=\"inputEmail\">Email address</label>
              </div>
            </div>
            <div class=\"form-group\">
              <div class=\"form-label-group\">
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required=\"required\">
                <label for=\"inputPassword\">Password</label>
              </div>
            </div>
            <div class=\"form-group\">
              <div class=\"checkbox\">
                <label>
                  <input type=\"checkbox\" value=\"remember-me\">
                  Remember Password
                </label>
              </div>
            </div>
            <button class=\"btn btn-lg btn-primary btn-block btn-signin\" type=\"submit\">Login</button>
          </form>
          <div class=\"text-center\">
            <a class=\"d-block small\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("adminResetPassword"), "html", null, true);
        echo "\">Reset Password?</a>
          </div>
        </div>
      </div>
    </div>
    
     <!-- Bootstrap core JavaScript-->
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/js/admin/jquery.min.js\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/js/admin/bootstrap.bundle.min.js\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/js/admin/jquery.easing.min.js\"></script>

  </body>

</html>
";
    }

    public function getTemplateName()
    {
        return "Admin/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 63,  102 => 60,  98 => 59,  88 => 52,  61 => 28,  48 => 18,  42 => 15,  38 => 14,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title> Login</title>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ baseRootUrl }}/public/css/admin/bootstrap.min.css\" media=\"all\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ baseRootUrl }}/public/css/admin/all.min.css\" media=\"all\"/>

    <!-- Custom styles for this template-->
    <link href=\"{{ baseRootUrl }}/public/css/admin/sb-admin.css\" rel=\"stylesheet\">

  </head>

  <body class=\"bg-dark\">

    <div class=\"container\">
      <div class=\"card card-login mx-auto mt-5\">
          <div class=\"card-header\"> Login </div>
        <div class=\"card-body\">
           <form class=\"form-signin\" method=\"POST\" action=\"{{ path_for(\"adminLoginSubmit\") }}\">
            <div class=\"form-group\">
              <div class=\"form-label-group\">
                <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required=\"required\" autofocus=\"autofocus\">
                <label for=\"inputEmail\">Email address</label>
              </div>
            </div>
            <div class=\"form-group\">
              <div class=\"form-label-group\">
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required=\"required\">
                <label for=\"inputPassword\">Password</label>
              </div>
            </div>
            <div class=\"form-group\">
              <div class=\"checkbox\">
                <label>
                  <input type=\"checkbox\" value=\"remember-me\">
                  Remember Password
                </label>
              </div>
            </div>
            <button class=\"btn btn-lg btn-primary btn-block btn-signin\" type=\"submit\">Login</button>
          </form>
          <div class=\"text-center\">
            <a class=\"d-block small\" href=\"{{path_for('adminResetPassword')}}\">Reset Password?</a>
          </div>
        </div>
      </div>
    </div>
    
     <!-- Bootstrap core JavaScript-->
    <script src=\"{{ baseRootUrl }}/public/js/admin/jquery.min.js\"></script>
    <script src=\"{{ baseRootUrl }}/public/js/admin/bootstrap.bundle.min.js\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"{{ baseRootUrl }}/public/js/admin/jquery.easing.min.js\"></script>

  </body>

</html>
", "Admin/login.twig", "C:\\xampp\\htdocs\\projects\\rioseo-assessment\\app\\templates\\Admin\\login.twig");
    }
}
