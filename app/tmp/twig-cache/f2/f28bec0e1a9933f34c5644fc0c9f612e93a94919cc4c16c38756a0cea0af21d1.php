<?php

/* Admin/index.twig */
class __TwigTemplate_868bb7f66f413d134de2ee297c4dbc240c93ce04baeee6620b2e6574f1b84c22 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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

    <title>Admin - Dashboard</title>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/css/admin/bootstrap.min.css\" media=\"all\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/css/admin/all.min.css\" media=\"all\"/>

    <!-- Page level plugin CSS-->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/css/admin/dataTables.bootstrap4.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/css/admin/sb-admin.css\" rel=\"stylesheet\">
      <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/css/admin/bootstrap-multiselect.css\" type=\"text/css\">

  </head>

  <body id=\"page-top\">

    <nav class=\"navbar navbar-expand navbar-dark bg-dark static-top\">

      <a class=\"navbar-brand mr-1\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin"), "html", null, true);
        echo "\">HR-Employee Portal</a>

      <button class=\"btn btn-link btn-sm text-white order-1 order-sm-0\" id=\"sidebarToggle\" href=\"#\">
        <i class=\"fas fa-bars\"></i>
      </button>

      <!-- Navbar Search -->
      <form class=\"d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0\">
        <div class=\"input-group\">
        </div>
      </form>

      <!-- Navbar -->
      <ul class=\"navbar-nav ml-auto ml-md-0\">
        ";
        // line 44
        if ( !twig_test_empty((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["loggedInUser"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["id"] ?? null) : null))) {
            // line 45
            echo "             <li class=\"nav-item dropdown no-arrow\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              <i class=\"fas fa-user-circle fa-fw\"></i>
              ";
            // line 48
            echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["loggedInUser"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["firstName"] ?? null) : null), "html", null, true);
            echo "
            </a>
            </li>
         ";
        }
        // line 52
        echo "         
        <div class=\"dropdown-divider\"></div>
        <li class=\"nav-item dropdown no-arrow\">
        <a class=\"nav-link dropdown-toggle\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("home"), "html", null, true);
        echo "\"><i
               class=\"fas fa-home\"></i> ";
        // line 56
        echo "Home";
        echo "</a>
        </li>
        
        <div class=\"dropdown-divider\"></div>
        <li class=\"nav-item dropdown no-arrow\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                 <i class=\"fas fa-sign-out-alt\"></i>
           </a>
        </li>
      </ul>

    </nav>

    <div id=\"wrapper\">

      <!-- Sidebar -->
      <ul class=\"sidebar navbar-nav\">

        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("employeeList"), "html", null, true);
        echo "\">
            <i class=\"fas fa-fw fa-user-cog\"></i>
            <span>Employees</span></a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("locationList"), "html", null, true);
        echo "\">
            <i class=\"fas fa-fw fa-map-marker\"></i>
            <span>Locations</span></a>
        </li>
         <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("rolesList"), "html", null, true);
        echo "\">
            <i class=\"fas fa-fw fa-users\"></i>
            <span>Roles</span></a>
        </li>
      </ul>

      <div id=\"content-wrapper\">

        <div class=\"container-fluid\">
";
        // line 94
        $this->displayBlock('content', $context, $blocks);
        // line 95
        echo "        <!-- Sticky Footer -->
        <footer class=\"sticky-footer\">
          <div class=\"container my-auto\">
            <div class=\"copyright text-center my-auto\">
              <span>Copyright © 2018 - 2019</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
      <i class=\"fas fa-angle-up\"></i>
    </a>

    <!-- Logout Modal-->
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
              <span aria-hidden=\"true\">×</span>
            </button>
          </div>
          <div class=\"modal-body\">This action will end your current session.
          Please click Confirm to continue or
          Cancel to stay logged in. 
          </div>
          <div class=\"modal-footer\">
            <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
            <a class=\"btn btn-primary\" href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("adminLogout"), "html", null, true);
        echo "\">Confirm</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/js/admin/jquery.min.js\"></script>

    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/js/admin/bootstrap.bundle.min.js\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/js/admin/jquery.easing.min.js\"></script>

    <!-- Page level plugin JavaScript-->
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/js/admin/jquery.dataTables.min.js\"></script>
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/js/admin/dataTables.bootstrap4.min.js\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/js/admin/sb-admin.js\"></script>
         <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/js/admin/jquery.slim.min.js\"></script>
     <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/js/admin/popper.min.js\"></script>
     <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/js/admin/bootstrap.min.js\"></script>
          <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/js/admin/fuse.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, ($context["baseRootUrl"] ?? null), "html", null, true);
        echo "/public/js/admin/bootstrap-select-dropdown.js\"></script>

    <script type=\"text/javascript\">
  \$(document).ready(function(){
    \$('#location_id').selectDropdown();
  });
    </script>
  </body>

</html>
";
    }

    // line 94
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "Admin/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 94,  257 => 155,  253 => 154,  249 => 153,  245 => 152,  241 => 151,  237 => 150,  231 => 147,  227 => 146,  221 => 143,  215 => 140,  210 => 138,  200 => 131,  162 => 95,  160 => 94,  148 => 85,  140 => 80,  132 => 75,  110 => 56,  106 => 55,  101 => 52,  94 => 48,  89 => 45,  87 => 44,  70 => 30,  59 => 22,  55 => 21,  49 => 18,  43 => 15,  39 => 14,  24 => 1,);
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

    <title>Admin - Dashboard</title>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ baseRootUrl }}/public/css/admin/bootstrap.min.css\" media=\"all\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ baseRootUrl }}/public/css/admin/all.min.css\" media=\"all\"/>

    <!-- Page level plugin CSS-->
    <link href=\"{{ baseRootUrl }}/public/css/admin/dataTables.bootstrap4.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"{{ baseRootUrl }}/public/css/admin/sb-admin.css\" rel=\"stylesheet\">
      <link rel=\"stylesheet\" href=\"{{ baseRootUrl }}/public/css/admin/bootstrap-multiselect.css\" type=\"text/css\">

  </head>

  <body id=\"page-top\">

    <nav class=\"navbar navbar-expand navbar-dark bg-dark static-top\">

      <a class=\"navbar-brand mr-1\" href=\"{{path_for('admin')}}\">HR-Employee Portal</a>

      <button class=\"btn btn-link btn-sm text-white order-1 order-sm-0\" id=\"sidebarToggle\" href=\"#\">
        <i class=\"fas fa-bars\"></i>
      </button>

      <!-- Navbar Search -->
      <form class=\"d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0\">
        <div class=\"input-group\">
        </div>
      </form>

      <!-- Navbar -->
      <ul class=\"navbar-nav ml-auto ml-md-0\">
        {% if loggedInUser['id'] is not empty %}
             <li class=\"nav-item dropdown no-arrow\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              <i class=\"fas fa-user-circle fa-fw\"></i>
              {{ loggedInUser['firstName'] }}
            </a>
            </li>
         {% endif %}
         
        <div class=\"dropdown-divider\"></div>
        <li class=\"nav-item dropdown no-arrow\">
        <a class=\"nav-link dropdown-toggle\" href=\"{{ path_for(\"home\") }}\"><i
               class=\"fas fa-home\"></i> {{ \"Home\" }}</a>
        </li>
        
        <div class=\"dropdown-divider\"></div>
        <li class=\"nav-item dropdown no-arrow\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                 <i class=\"fas fa-sign-out-alt\"></i>
           </a>
        </li>
      </ul>

    </nav>

    <div id=\"wrapper\">

      <!-- Sidebar -->
      <ul class=\"sidebar navbar-nav\">

        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"{{path_for('employeeList')}}\">
            <i class=\"fas fa-fw fa-user-cog\"></i>
            <span>Employees</span></a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{path_for('locationList')}}\">
            <i class=\"fas fa-fw fa-map-marker\"></i>
            <span>Locations</span></a>
        </li>
         <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{path_for('rolesList')}}\">
            <i class=\"fas fa-fw fa-users\"></i>
            <span>Roles</span></a>
        </li>
      </ul>

      <div id=\"content-wrapper\">

        <div class=\"container-fluid\">
{% block content %}{% endblock %}
        <!-- Sticky Footer -->
        <footer class=\"sticky-footer\">
          <div class=\"container my-auto\">
            <div class=\"copyright text-center my-auto\">
              <span>Copyright © 2018 - 2019</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
      <i class=\"fas fa-angle-up\"></i>
    </a>

    <!-- Logout Modal-->
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
              <span aria-hidden=\"true\">×</span>
            </button>
          </div>
          <div class=\"modal-body\">This action will end your current session.
          Please click Confirm to continue or
          Cancel to stay logged in. 
          </div>
          <div class=\"modal-footer\">
            <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
            <a class=\"btn btn-primary\" href=\"{{ path_for('adminLogout') }}\">Confirm</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src=\"{{ baseRootUrl }}/public/js/admin/jquery.min.js\"></script>

    <script src=\"{{ baseRootUrl }}/public/js/admin/bootstrap.bundle.min.js\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"{{ baseRootUrl }}/public/js/admin/jquery.easing.min.js\"></script>

    <!-- Page level plugin JavaScript-->
    <script src=\"{{ baseRootUrl }}/public/js/admin/jquery.dataTables.min.js\"></script>
    <script src=\"{{ baseRootUrl }}/public/js/admin/dataTables.bootstrap4.min.js\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"{{ baseRootUrl }}/public/js/admin/sb-admin.js\"></script>
         <script src=\"{{ baseRootUrl }}/public/js/admin/jquery.slim.min.js\"></script>
     <script src=\"{{ baseRootUrl }}/public/js/admin/popper.min.js\"></script>
     <script src=\"{{ baseRootUrl }}/public/js/admin/bootstrap.min.js\"></script>
          <script src=\"{{ baseRootUrl }}/public/js/admin/fuse.js\"></script>
<script type=\"text/javascript\" src=\"{{ baseRootUrl }}/public/js/admin/bootstrap-select-dropdown.js\"></script>

    <script type=\"text/javascript\">
  \$(document).ready(function(){
    \$('#location_id').selectDropdown();
  });
    </script>
  </body>

</html>
", "Admin/index.twig", "C:\\xampp\\htdocs\\projects\\rioseo-assessment\\app\\templates\\Admin\\index.twig");
    }
}
