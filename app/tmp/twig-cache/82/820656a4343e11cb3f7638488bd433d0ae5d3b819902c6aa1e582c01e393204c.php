<?php

/* Admin/Role/role-list.twig */
class __TwigTemplate_cc138285f458ff12d278d7e71f77eb7cbee98c90ed5c269493ffc57e795007f4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Admin/index.twig", "Admin/Role/role-list.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin/index.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<!-- DataTables Example -->
          <div class=\"card mb-3\">
            <div class=\"card-header\">
              <i class=\"fas fa-users\"></i>
              All Roles
             <span id=\"flashMsg\" class=\"alert alert-";
        // line 9
        echo twig_escape_filter($this->env, ($context["flashClass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["flash"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[($context["flashClass"] ?? null)] ?? null) : null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null), "html", null, true);
        echo "</span>
            <div style=\"float:right;\">
            <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("createRole"), "html", null, true);
        echo "\" class=\"btn btn-info\">Add New Role</a>
            </div>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                  <thead>
                    <tr>
                       <th>Id</th>
                      <th>Job Title</th>
                      <th data-orderable=\"false\"></th> 
                       <th data-orderable=\"false\"></th> 
                    </tr>
                  </thead>
                  
                   <tbody>
            ";
        // line 27
        if (($context["roles"] ?? null)) {
            // line 28
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 29
                echo "                    <tr>
                        <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "job_title", array()), "html", null, true);
                echo "</td>
                        <td><a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("editRole", array("id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info\">Edit</a></td>
                        <td>
                            <form action=\"?\" method=\"POST\" id=\"deleteRole";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", array()), "html", null, true);
                echo "\"> 
                                <input class=\"btn btn-danger\" type = \"button\" value =\"Delete\" onclick=\"deleteRole(";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", array()), "html", null, true);
                echo ");\">
                                 <input type=\"hidden\" id=\"deletePath_";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", array()), "html", null, true);
                echo "\" name=\"deletePath\" value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("deleteRole", array("id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
                echo "\">
                            </form>
                            
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo " 
                    ";
        } else {
            // line 43
            echo "                        <p>No records found</p>
                ";
        }
        // line 45
        echo "                    </tbody>
                </table>
                </div>
                </div>
                </div>

";
    }

    public function getTemplateName()
    {
        return "Admin/Role/role-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 45,  117 => 43,  113 => 41,  99 => 36,  95 => 35,  91 => 34,  86 => 32,  82 => 31,  78 => 30,  75 => 29,  70 => 28,  68 => 27,  49 => 11,  42 => 9,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Admin/index.twig\" %}

{% block content %}
<!-- DataTables Example -->
          <div class=\"card mb-3\">
            <div class=\"card-header\">
              <i class=\"fas fa-users\"></i>
              All Roles
             <span id=\"flashMsg\" class=\"alert alert-{{flashClass}}\">{{ flash[flashClass][0] }}</span>
            <div style=\"float:right;\">
            <a href=\"{{path_for('createRole')}}\" class=\"btn btn-info\">Add New Role</a>
            </div>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                  <thead>
                    <tr>
                       <th>Id</th>
                      <th>Job Title</th>
                      <th data-orderable=\"false\"></th> 
                       <th data-orderable=\"false\"></th> 
                    </tr>
                  </thead>
                  
                   <tbody>
            {% if roles %}
            {% for row in roles %}
                    <tr>
                        <td>{{ row.id }}</td>
                        <td>{{ row.job_title }}</td>
                        <td><a href=\"{{path_for('editRole', {'id': row.id})}}\" class=\"btn btn-info\">Edit</a></td>
                        <td>
                            <form action=\"?\" method=\"POST\" id=\"deleteRole{{row.id}}\"> 
                                <input class=\"btn btn-danger\" type = \"button\" value =\"Delete\" onclick=\"deleteRole({{row.id}});\">
                                 <input type=\"hidden\" id=\"deletePath_{{row.id}}\" name=\"deletePath\" value=\"{{ path_for('deleteRole', { 'id': row.id })}}\">
                            </form>
                            
                        </td>
                    </tr>
                {% endfor %} 
                    {% else %}
                        <p>No records found</p>
                {% endif %}
                    </tbody>
                </table>
                </div>
                </div>
                </div>

{% endblock content %}", "Admin/Role/role-list.twig", "C:\\xampp\\htdocs\\projects\\rioseo-assessment\\app\\templates\\Admin\\Role\\role-list.twig");
    }
}
