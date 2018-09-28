<?php

/* Admin/forgot_password.twig */
class __TwigTemplate_effcb2cbf225b9b3f20e8839ea52a10624d357f4bd41f9d70a759983d2d76175 extends Twig_Template
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
        <div class=\"card-header\">Reset Password</div>
        <div class=\"card-body\">
          <div class=\"text-center mb-4\">
            <h4>Forgot your password?</h4>
            <p class=\"badge badge-success\">";
        // line 30
        echo twig_escape_filter($this->env, ($context["newPassword"] ?? null), "html", null, true);
        echo "</p>
          </div>
          <form class=\"form-signin\" method=\"POST\" action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("adminChangePassword"), "html", null, true);
        echo "\">
            <div class=\"form-group\">
              <div class=\"form-label-group\">
                <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Enter email address\" required=\"required\" autofocus=\"autofocus\">
                <label for=\"inputEmail\">Enter email address</label>
              </div>
            </div>
             <button class=\"btn btn-lg btn-primary btn-block btn-block\" type=\"submit\">Reset Password</button>
          </form>
          <div class=\"text-center\">
            <a class=\"d-block small\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("adminLogin"), "html", null, true);
        echo "\">Click here to Login</a>
          </div>
        </div>
      </div>
      </div>
    
     <!-- Bootstrap core JavaScript-->
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/js/admin/jquery.min.js\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/js/admin/bootstrap.bundle.min.js\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/js/admin/jquery.easing.min.js\"></script>

  </body>

</html>
";
    }

    public function getTemplateName()
    {
        return "Admin/forgot_password.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 53,  95 => 50,  91 => 49,  81 => 42,  68 => 32,  63 => 30,  48 => 18,  42 => 15,  38 => 14,  23 => 1,);
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
        <div class=\"card-header\">Reset Password</div>
        <div class=\"card-body\">
          <div class=\"text-center mb-4\">
            <h4>Forgot your password?</h4>
            <p class=\"badge badge-success\">{{newPassword}}</p>
          </div>
          <form class=\"form-signin\" method=\"POST\" action=\"{{ path_for(\"adminChangePassword\") }}\">
            <div class=\"form-group\">
              <div class=\"form-label-group\">
                <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Enter email address\" required=\"required\" autofocus=\"autofocus\">
                <label for=\"inputEmail\">Enter email address</label>
              </div>
            </div>
             <button class=\"btn btn-lg btn-primary btn-block btn-block\" type=\"submit\">Reset Password</button>
          </form>
          <div class=\"text-center\">
            <a class=\"d-block small\" href=\"{{path_for('adminLogin')}}\">Click here to Login</a>
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
", "Admin/forgot_password.twig", "C:\\xampp\\htdocs\\projects\\rioseo-assessment\\app\\templates\\Admin\\forgot_password.twig");
    }
}
